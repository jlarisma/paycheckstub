<?php

  // calculation engine
include __DIR__ . "/engine-pay.js.php"; 
$backgroundImage = $is_customer_paid ? "" : "http://www.paycheckstubonline.com/paystub/assets/mask-prev.gif";
$content = ob_get_clean();  
$content='
<html>
<body>

<style type="text/css">
body { font-family: monospace; font-size: 12px;
 }

#container{
    height:400px;
    width:400px;
    position:absolute;}
#image{    
    position:relative;
    left:-20;
    top:20;}
#company_name{ position:absolute; left:50; top:120;}
#company_street{ position:absolute; left:50; top:135;}
#company_city{ position:absolute; left:50; top:150;}
#company_state{ position:absolute; left:50; top:165;}
#company_zip{ position:absolute; left:50; top:180;}

#emp_id{ position:absolute; left:50; top:430;}
#emp_f_name{ position:absolute; left:50; top:280;}
#emp_l_name{ position:absolute; left:220; top:280;}
#emp_street{ position:absolute; left:50; top:330;}
#emp_city{ position:absolute; left:50; top:370;}
#emp_state{ position:absolute; left:50; top:380;}
#emp_zip{ position:absolute; left:50; top:390;}
#emp_ssn{ position:absolute; left:200; top:240;}

#fed_gross_ytd{ position:absolute; left:380; top:150;}
#fed_with_held_ytd{ position:absolute; right:340; top:180;}

#fica_medicare_ytd{ position:absolute; right:340; top:245;}
#fica_social_ytd{ position:absolute; right:470; top:390;}

#w2_state_amtincomtax{ position:absolute; left:400; top:470;}

#w2_pdf_state_abb{ position:absolute; right:400; top:470;}

</style>	  
	  
	  
<div id="container">
    <img id="image" src="http://www.paycheckstubonline.com/wp-content/uploads/2014/02/1099-2013.jpg"/>	
</div>
<div id="company_name">'.$empr_add_name.'</div>
<div id="company_street">'.$empr_add_street.'</div>
<div id="company_city">'.$empr_add_city.'</div>
<div id="company_state">'.$empr_add_state.'</div>
<div id="company_zip">'.$empr_add_zip.'</div>

<div id="emp_id">'.$emp_id.'</div>
<div id="emp_f_name">'.$emp_f_name.'</div>
<div id="emp_l_name">'.$emp_l_name.'</div>
<div id="emp_street">'.$emp_street.'</div>
<div id="emp_city">'.$emp_city.'</div>
<div id="emp_state">'.$emp_state.'</div>
<div id="emp_zip">'.$emp_zip.'</div>
<div id="emp_ssn">'.$emp_ssn.'</div>   

<div id="fed_gross_ytd">'.$gross_ytd.'</div>
<div id="fed_with_held_ytd">'.$fed_amt_deduct_ytd.'</div>

<div id="fica_medicare_ytd">'.$medicare_ytd.'</div>
<div id="fica_social_ytd">'.$fica_social_ytd.'</div>

<div id="w2_state_amtincomtax">'.$state_amtincometax_ytd.'</div>

<div id="w2_pdf_state_abb">'.$state_abb.'</div>



</body>
</html>
';

echo $content
?>