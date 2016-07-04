<?php
try{
	
	//require_once('/home/nginx/domains/paycheckstubonline.com/public/ses/aws/aws-autoloader.php');
	//require_once('AWSSDKforPHP/aws.phar');
    require_once('aws/aws-autoloader.php');
	
} catch (Exception $e) {
     //An error happened and the email did not get sent
     echo($e->getMessage());
} 
use Aws\Ses\SesClient;

/**
 * SESUtils is a tool to make it easier to work with Amazon Simple Email Service
 * Features:
 * A client to prepare emails for use with sending attachments or not
 *
 * There is no warranty - use this code at your own risk.  
 * @author sbossen
 * http://righthandedmonkey.com
 *
 * Update1: Error checking and new params input array provided by Michael Deal
 * Update2: Corrected for allowing to send multiple attachments and plain text/html body
 *   Ref: Http://stackoverflow.com/questions/3902455/smtp-multipart-alternative-vs-multipart-mixed/
 */
class SESUtils {
	/*
$client = SesClient::factory(array(
    'key'    => "AKIAILZDOQPBTGAHHRXQ",
    'secret' => "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",
    'region' => "us-east-1"
));
*/
    const version = "1.0";
    const AWS_KEY = "AKIAILZDOQPBTGAHHRXQ";
    const AWS_SEC = "KKelliaD7x9kE8nmWnn3V6JAt/JY2snEzk92rGBg";
    const AWS_REGION = "us-east-1";
    const MAX_ATTACHMENT_NAME_LEN = 60;

    /**
     * Usage:
        $params = array(
          "to" => "email1@gmail.com",
          "subject" => "Some subject",
          "message" => "<strong>Some email body</strong>",
          "from" => "sender@verifiedbyaws",
          //OPTIONAL
          "replyTo" => "reply_to@gmail.com",
          //OPTIONAL
          "files" => array(
            1 => array(
               "name" => "filename1",
              "filecontent" => "/path/to/file1.txt",
              "mime" => "application/octet-stream"
            ),
            2 => array(
               "name" => "filename2",
              "filecontent" => "/path/to/file2.txt",
              "mime" => "application/octet-stream"
            ),
          )
        );
      
      $res = SESUtils::sendMail($params);
      
     * NOTE: When sending a single file, omit the key (ie. the '1 =>')
     * or use 0 => array(...) - otherwise the file will come out garbled
     * ie. use:
     *    "files" => array(
     *        0 => array( "name" => "filename", "filecontent" => "path/to/file.txt",
     *          "mime" => "application/octet-stream")
     *
     * For the 'to' parameter, you can send multiple recipiants with an array
     *    "to" => array("email1@gmail.com", "other@msn.com")
     * use $res->success to check if it was successful
     * use $res->message_id to check later with Amazon for further processing
     * use $res->result_text to look for error text if the task was not successful
     *
     * @param array $params - array of parameters for the email
     * @return \ResultHelper
     */
    public static function sendMail($params) {

        $to = self::getParam($params, 'to', true);
        $subject = self::getParam($params, 'subject', true);
        $body = self::getParam($params, 'message', true);
        $from = self::getParam($params, 'from', true);
        $replyTo = self::getParam($params, 'replyTo');
        $files = self::getParam($params, 'files');

        $res = new ResultHelper();

        // get the client ready
        $client = SesClient::factory(array(
                    'key' => self::AWS_KEY,
                    'secret' => self::AWS_SEC,
                    'region' => self::AWS_REGION
        ));

        // build the message
        if (is_array($to)) {
            $to_str = rtrim(implode(',', $to), ',');
        } else {
            $to_str = $to;
        }

        $msg = "To: $to_str\n";
        $msg .= "From: $from\n";

        if ($replyTo) {
            $msg .= "Reply-To: $replyTo\n";
        }

        // in case you have funny characters in the subject
        $subject = mb_encode_mimeheader($subject, 'UTF-8');
        $msg .= "Subject: $subject\n";
        $msg .= "MIME-Version: 1.0\n";
        $msg .= "Content-Type: multipart/mixed;\n";
        $boundary = uniqid("_Part_".time(), true); //random unique string
        $boundary2 = uniqid("_Part2_".time(), true); //random unique string
        $msg .= " boundary=\"$boundary\"\n";
        $msg .= "\n";

        // now the actual body
        $msg .= "--$boundary\n";

        //since we are sending text and html emails with multiple attachments
        //we must use a combination of mixed and alternative boundaries
        //hence the use of boundary and boundary2
        $msg .= "Content-Type: multipart/alternative;\n";
        $msg .= " boundary=\"$boundary2\"\n";
        $msg .= "\n";
        $msg .= "--$boundary2\n";

        // first, the plain text
        $msg .= "Content-Type: text/plain; charset=utf-8\n";
        $msg .= "Content-Transfer-Encoding: 7bit\n";
        $msg .= "\n";
        $msg .= strip_tags($body); //remove any HTML tags
        $msg .= "\n";

        // now, the html text
        $msg .= "--$boundary2\n";
        $msg .= "Content-Type: text/html; charset=utf-8\n";
        $msg .= "Content-Transfer-Encoding: 7bit\n";
        $msg .= "\n";
        $msg .= $body;
        $msg .= "\n";
        $msg .= "--$boundary2--\n";

        // add attachments
        if (is_array($files)) {
            $count = count($files);
            foreach ($files as $file) {
                $msg .= "\n";
                $msg .= "--$boundary\n";
                $msg .= "Content-Transfer-Encoding: base64\n";
                $clean_filename = self::clean_filename($file["name"], self::MAX_ATTACHMENT_NAME_LEN);
                $msg .= "Content-Type: {$file['mime']}; name=$clean_filename;\n";
                $msg .= "Content-Disposition: attachment; filename=$clean_filename;\n";
                $msg .= "\n";
                //$msg .= base64_encode(file_get_contents($file['filecontent']));
				$msg .= $file['filecontent'];
                $msg .= "\n--$boundary";
            }
            // close email
            $msg .= "--\n";
        }

        // now send the email out
        try {
            $ses_result = $client->sendRawEmail(
                    array(
                'RawMessage' => array(
                    'Data' => base64_encode($msg)
                )
                    ), array(
                'Source' => $from,
                'Destinations' => $to_str
                    )
            );
            if ($ses_result) {
                $res->message_id = $ses_result->get('MessageId');
            } else {
                $res->success = false;
                $res->result_text = "Amazon SES did not return a MessageId";
            }
        } catch (Exception $e) {
            $res->success = false;
            $res->result_text = $e->getMessage().
                    " - To: $to_str, Sender: $from, Subject: $subject";
        }
        return $res;
    }

    private static function getParam($params, $param, $required = false) {
        $value = isset($params[$param]) ? $params[$param] : null;
        if ($required && empty($value)) {
            throw new Exception('"'.$param.'" parameter is required.');
        } else {
            return $value;
        }
    }

    /**
    Clean filename function - to get a file friendly
    **/
    public static function clean_filename($str, $limit = 0, $replace=array(), $delimiter='-') {
        if( !empty($replace) ) {
            $str = str_replace((array)$replace, ' ', $str);
        }

        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9\.\/_| -]/", '', $clean);
        $clean = preg_replace("/[\/| -]+/", '-', $clean);
        
        if ($limit > 0) {
            //don't truncate file extension
            $arr = explode(".", $clean);
            $size = count($arr);
            $base = "";
            $ext = "";
            if ($size > 0) {
                for ($i = 0; $i < $size; $i++) {
                    if ($i < $size - 1) { //if it's not the last item, add to $bn
                        $base .= $arr[$i];
                        //if next one isn't last, add a dot
                        if ($i < $size - 2)
                            $base .= ".";
                    } else {
                        if ($i > 0)
                            $ext = ".";
                        $ext .= $arr[$i];
                    }
                }
            }
            $bn_size = mb_strlen($base);
            $ex_size = mb_strlen($ext);
            $bn_new = mb_substr($base, 0, $limit - $ex_size);
            // doing again in case extension is long
            $clean = mb_substr($bn_new.$ext, 0, $limit);
        }
        return $clean;
    }
    
}

class ResultHelper {

    public $success = true;
    public $result_text = "";
    public $message_id = "";

}

?>