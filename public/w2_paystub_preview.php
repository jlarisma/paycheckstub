<?php

  // calculation engine
include __DIR__ . "/engine-pay.js.php"; 


$content = ob_get_clean();  
$content='
<html>
<body>

<style>
#container{
    height:400px;
    width:400px;
    position:absolute;}
#image{    
    position:relative;
    left:-20;
    top:30;}
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

</style>	  
	  
	  
<div id="container">
    <img id="image" src="http://www.paycheckstubonline.com/wp-content/uploads/2013/04/w2-2012.gif"/>	
</div>


<div id="company_name">'.$empr_name.'</div>
<div id="company_street">'.$empr_street.'</div>
<div id="company_city">'.$empr_city.'</div>
<div id="company_state">'.$empr_state.'</div>
<div id="company_zip">'.$empr_zip.'</div>

<div id="emp_id">'.$emp_id.'</div>
<div id="emp_f_name">'.$emp_f_name.'</div>
<div id="emp_l_name">'.$emp_l_name.'</div>
<div id="emp_street">'.$emp_street.'</div>
<div id="emp_city">'.$emp_city.'</div>
<div id="emp_state">'.$emp_state.'</div>
<div id="emp_zip">'.$emp_zip.'</div>
<div id="emp_ssn">'.$emp_ssn.'</div>   

<div id="fed_gross_ytd">'.$fed_gross_ytd.'</div>
<div id="fed_with_held_ytd">'.$fedr_with_held_ytd.'</div>

<div id="fica_medicare_ytd">'.$medicare_ytdr.'</div>
<div id="fica_social_ytd">'.$fica_social_ytdr.'</div>

<div id="w2_state_amtincomtax">'.$w2_state_amtincomtax.'</div>

<div id="w2_pdf_state_abb">'.$w2_pdf_state_abb.'</div>
</body>
</html>
';

echo $content
?>