<?php
if(isset($_POST['gcreate']))
{
	require_once('pdfincludes/tcpdf/config/lang/eng.php');
require_once('pdfincludes/tcpdf/tcpdf.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle('PDF Title');
$pdf->SetAuthor('Author');
$pdf->SetKeywords('PDF','tcpdf','html');
//$pdf->setFontSubsetting(true);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'ltr';
$lg['a_meta_language'] = 'en';
$lg['w_page'] = 'page';
//$pdf->addTTFfont(bloginfo('wpurl').'/pdfincludes/Geneva.ttf', '', '', 32);
$pdf->SetFont('freeserif','bold',20);
$pdf->setLanguageArray($lg);
$pdf->AddPage();
$pdf->setJPEGQuality(100);
$pdf->Image("http://www.paycheckstubonline.com/test/pdfincludes/test.jpg", 0, 0, 80, 180);
$pdf->setX(0);
$pdf->setY(66);
$pdf->Cell(0, 0,$_POST['gdate'], 0, 0, 'L');
$pdf->setX(0);
$pdf->setY(40);
$pdf->Cell(0, 0,$_POST['gcity']." ,".$_POST['gstate'], 0, 0, 'L');
$pdf->setXY(52,88,true);
$pdf->Cell(0, 0,$_POST['gquantity']);
$pdf->setXY(36,91);
$pdf->Cell(0, 0,$_POST['gprice'], 0, 0, 'L');
$pdf->setXY(52,101);
$pdf->Cell(0, 0,$_POST['gquantity']*$_POST['gprice'], 0, 0, 'L');
$file_name_path ='test.pdf';
if(file_exists($file_name_path))
{
unlink($file_name_path);
}
$pdf->Output($file_name_path,'D');
}
$css='<style type="text/css">
       #result{
		  width:160px;
		  height:360px;
	   background:url(http://www.paycheckstubonline.com/test/pdfincludes/test.jpg) no-repeat;
	   float:left;
	   }
	   #gform
	   {
		   float:left;
	   }
	   #icity,#istate,#idate,#iprice,#iquantity,#itotal
	   {
		   font-family: Aealarabiya;
		   font-weight:bold;
		   color:#4a4a4a;
		   position: relative;
	   }
	   #icity
	   {
		   top:80px;
		   left:5px;
		   float:left;
	   }
	   #istate
	   {
		   float:left;
		   top:80px;
		   left:2px;
	   }
	   #istate:before
	   {
		   content:",";
	   }
	   #idate
	   {
		   left:5px;
		   top:115px;		   
		   }
		#iquantity
		{
			top:139px;
			right:20px;
			float:right;
		}
		#iprice
		{
			top:145px;
			left:60px;
		}
		#itotal
		{
			top:150px;
			left:110px;
		}
		#itotal:before
		{content:"$";}
       </style>';
	   echo $css;
       ?>
       <div id="gform">
<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>"><label>NAME of GAS STATION</label><input type="text" name="gstation" class="gform"><br /><label>State</label><input type="text" name="gstate" class="gform"><br /><label>City</label><input type="text" name="gcity" class="gform"><br /><label>Date</label><input type="text" name="gdate" id="gdate" class="gform"><br /><label>HOW MANY GALLONS USED</label><input type="text" name="gquantity" class="gform"><br /><label>PRICE PER GALLON</label><input type="text" name="gprice" class="gform"><br /><input type="submit" value="Create PDF" name="gcreate" /></form></div>
<div id="result"></div>