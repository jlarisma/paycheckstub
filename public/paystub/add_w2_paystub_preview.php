<?php

  // calculation engine
include __DIR__ . "/engine-pay.js.php"; 

$content = ob_get_clean();  
$content='
<html>
<body>

<style type="text/css">
body { font-family: monospace; font-size: 12px }

#container{
    height:400px;
    width:400px;
    position:absolute;}
#image{    
    position:relative;
    left:-20;
    top:20;}
#company_name{ position:absolute; left:50; top:150;}
#company_street{ position:absolute; left:50; top:165;}
#company_city{ position:absolute; left:50; top:180;}
#company_state{ position:absolute; left:50; top:195;}
#company_zip{ position:absolute; left:50; top:210;}

#emp_id{ position:absolute; left:50; top:120;}
#emp_f_name{ position:absolute; left:50; top:280;}
#emp_l_name{ position:absolute; left:220; top:280;}
#emp_street{ position:absolute; left:50; top:300;}
#emp_city{ position:absolute; left:50; top:315;}
#emp_state{ position:absolute; left:50; top:330;}
#emp_zip{ position:absolute; left:50; top:345;}
#emp_ssn{ position:absolute; left:200; top:90;}

#fed_gross_ytd{ position:absolute; left:470; top:120;}
#fed_with_held_ytd{ position:absolute; left:630; top:120;}

#fica_medicare_ytd{ position:absolute; left:630; top:156;}
#fica_social_ytd{ position:absolute; left:630; top:181;}

#w2_state_amtincomtax{ position:absolute; left:380; top:420;}

#w2_pdf_state_abb{ position:absolute; left:40; top:420;}




#company_name2{ position:absolute; left:50; top:670;}
#company_street2{ position:absolute; left:50; top:685;}
#company_city2{ position:absolute; left:50; top:700;}
#company_state2{ position:absolute; left:50; top:715;}
#company_zip2{ position:absolute; left:50; top:730;}

#emp_id2{ position:absolute; left:50; top:640;}
#emp_f_name2{ position:absolute; left:50; top:800;}
#emp_l_name2{ position:absolute; left:220; top:800;}
#emp_street2{ position:absolute; left:50; top:820;}
#emp_city2{ position:absolute; left:50; top:835;}
#emp_state2{ position:absolute; left:50; top:850;}
#emp_zip2{ position:absolute; left:50; top:865;}
#emp_ssn2{ position:absolute; left:200; top:610;}

#fed_gross_ytd2{ position:absolute; left:470; top:640;}
#fed_with_held_ytd2{ position:absolute; left:630; top:640;}

#fica_medicare_ytd2{ position:absolute; left:630; top:676;}
#fica_social_ytd2{ position:absolute; left:630; top:701;}

#w2_state_amtincomtax2{ position:absolute; left:380; top:940;}

#w2_pdf_state_abb2{ position:absolute; left:40; top:940;}




</style>	  
	  
	  
<div id="container">
    <img id="image" src="http://www.paycheckstubonline.com/wp-content/uploads/2013/04/w2-2012.gif"/>	
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




<div id="company_name2">'.$empr_add_name.'</div>
<div id="company_street2">'.$empr_add_street.'</div>
<div id="company_city2">'.$empr_add_city.'</div>
<div id="company_state2">'.$empr_add_state.'</div>
<div id="company_zip2">'.$empr_add_zip.'</div>

<div id="emp_id2">'.$emp_id.'</div>
<div id="emp_f_name2">'.$emp_f_name.'</div>
<div id="emp_l_name2">'.$emp_l_name.'</div>
<div id="emp_street2">'.$emp_street.'</div>
<div id="emp_city2">'.$emp_city.'</div>
<div id="emp_state2">'.$emp_state.'</div>
<div id="emp_zip2">'.$emp_zip.'</div>
<div id="emp_ssn2">'.$emp_ssn.'</div>   

<div id="fed_gross_ytd2">'.$gross_ytd.'</div>
<div id="fed_with_held_ytd2">'.$fed_amt_deduct_ytd.'</div>

<div id="fica_medicare_ytd2">'.$medicare_ytd.'</div>
<div id="fica_social_ytd2">'.$fica_social_ytd.'</div>

<div id="w2_state_amtincomtax2">'.$state_amtincometax_ytd.'</div>

<div id="w2_pdf_state_abb2">'.$state_abb.'</div>
</body>
</html>
';

echo $content
?>