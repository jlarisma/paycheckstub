<?php
	require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

	if(isset($_GET['formId']))
	{ 
		//echo "last " . $_GET['formId'] . " month";
		$currentMonth = date('F Y', mktime(0, 0, 0, date('m') - (($_GET['formId']) -1), 10));//date('M Y', strtotime("last " . $_GET['formId'] . " month"));
		$lastMonth = date('F Y', mktime(0, 0, 0, date('m') - (($_GET['formId'] + 1)-1), 10)); //date('M Y', strtotime("last " . ($_GET['formId'] + 1) . " month"));
	} else {
		$currentMonth =  date('M Y');
		$lastMonth = date('M Y', strtotime("last month"));
	}	


	$formId = isset($_GET['formId']) ? $_GET['formId'] : 1;
?>
<div id="bankstatement-period-<?php echo $formId; ?>" class="bankstatement-period" style="margin:10px 0;">
	<h3 id="period-label">Period <?php echo $formId . ' - ' . $lastMonth . ' from ' .$currentMonth?></h3>
	<span>&nbsp;</span>
	<table class="bankstatement-item" width="85%">
		<tbody>
			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					Name
				</td>
				<td>
					Amount
				</td>
				<td>
					code
				</td>
				<td>
					Date
				</td>
			</tr>
			<?php
				global $wpdb;
				$bankstatements = $wpdb->get_results("SELECT name, amount, type FROM ka_bankstatement");
				foreach($bankstatements as $bankstatement) {
				$day = floor(rand(1, 30));
			?>
			<tr>
				<td><a class="cut btn">-- </a></td>
				<td><input name="nameof-<?php echo $formId; ?>[]" type="text" value="<?php echo $bankstatement->name; ?>"></td>
				<td><input name="amount-<?php echo $formId; ?>[]" type="text" value="<?php echo $bankstatement->amount; ?>"></td>
				<td><input name="type-<?php echo $formId; ?>[]" type="text" value="<?php echo $bankstatement->type; ?>"></td>
				<td><input name="date-<?php echo $formId; ?>[]" type="text" value="<?php echo $day; ?>""></td>
			</tr>
			<?php 
				}
			?>
			<tr row="add-new">
				<td><a class="cut btn">-- </a></td>
				<td><select style="" class="quform-tooltip chosen-select" name="nameof-<?php echo $formId; ?>[]" title="Name Select"></select></td>
				<td><input name="amount-<?php echo $formId; ?>[]" type="text" value=""></td>
				<td><input name="type-<?php echo $formId; ?>[]" type="text" value=""></td>
				<td><input name="date-<?php echo $formId; ?>[]" type="text" value=""></td>
			</tr>
		</tbody>
	</table>
	<div style="margin-top:8px;">
		<input type="button" class="add-new" name="addnew" value="Add new item" />
    	<input type="button" class="add-blank" value="Add blank item" />  
    </div>
   <table>
   		<tbody>
   			<tr>
   				<td>
   					 <div class="border-radius" style="float:none; clear:both; margin-top:9px; margin-left:9px;">
				        <strong>NETPAY PER PERIOD</strong>
				        <input autocomplete="off" name="netpayadd-<?php echo $formId; ?>" id="netpayadd"  type="text" placeholder="NETPAY" data-items="8" />
				    </div>
   				</td>
   				<td>
   					 <div class="border-radius" style="float:none; clear:both; margin-top:9px; margin-left:9px;">
					    <strong>FINAL AMOUNT</strong>
					    <input autocomplete="off" id="addfinalamount"  name="finalamount-<?php echo $formId; ?>" type="text" placeholder="Beginning Balance" data-items="8" />
					</div>
   				</td>
   			</tr>
   		</tbody>
   </table>
</div>