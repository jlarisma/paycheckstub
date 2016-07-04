<?php

try{
	
	require_once('/home/nginx/domains/paycheckstubonline.com/public/ses/aws/aws-autoloader.php');
	//require_once('AWSSDKforPHP/aws.phar');
	
} catch (Exception $e) {
     //An error happened and the email did not get sent
     echo($e->getMessage());
} 

use \Aws\Ses\SesClient;
/*
Access Key ID:
AKIAILZDOQPBTGAHHRXQ
Secret Access Key:
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
*/
$client = SesClient::factory(array(
    'key'    => "AKIAILZDOQPBTGAHHRXQ",
    'secret' => "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",
    'region' => "us-east-1"
));

//Now that you have the client ready, you can build the message 
$msg = array();
$msg['Source'] = "info@paycheckstubonline.com";
//ToAddresses must be an array
$msg['Destination']['ToAddresses'][] = "hoanganhhung.vp@gmail.com";

$msg['Message']['Subject']['Data'] = "Text only subject";
$msg['Message']['Subject']['Charset'] = "UTF-8";

$msg['Message']['Body']['Text']['Data'] ="Text data of email";
$msg['Message']['Body']['Text']['Charset'] = "UTF-8";
$msg['Message']['Body']['Html']['Data'] ="HTML Data of email<br />";
$msg['Message']['Body']['Html']['Charset'] = "UTF-8";

try{
     $result = $client->sendEmail($msg);

     //save the MessageId which can be used to track the request
     $msg_id = $result->get('MessageId');
     echo("MessageId: $msg_id");

     //view sample output 
     print_r($result);
	 echo 'done';
} catch (Exception $e) {
     echo "An error happened and the email did not get sent";
     echo($e->getMessage());
} 
//view the original message passed to the SDK 
print_r($msg);

?>