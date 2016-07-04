<div id="bankstatement-container">
	<div id="bankstatement-period-1" class="bankstatement-period" style="margin:10px 0;">
		<?php
			$currentMonth = date('M Y');
			$lastMonth = date('M Y', strtotime("last month"))
		?>
		<h3 id="period-label">Period 1 -  <?php echo  $lastMonth . ' from ' .$currentMonth?></h3>
		<span>&nbsp;</span>
		<input type="hidden" name="period_start-1" value="<?php echo $lastMonth; ?>"/>
		<input type="hidden" name="period_end-1" value="<?php echo $currentMonth; ?>"/>
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
					<td><input name="nameof-1[]" type="text" value="<?php echo $bankstatement->name; ?>"></td>
					<td><input name="amount-1[]" type="text" value="<?php echo $bankstatement->amount; ?>"></td>
					<td><input name="type-1[]" type="text" value="<?php echo $bankstatement->type; ?>"></td>
					<td><input name="date-1[]" type="text" value="<?php echo $day; ?>""></td>
				</tr>
				<?php 
					}
				?>
				<tr row="add-new">
					<td><a class="cut btn">-- </a></td>
					<td><select style="" class="quform-tooltip chosen-select" name="nameof-1[]" title="Name Select"></select></td>
					<td><input name="amount-1[]" type="text" value=""></td>
					<td><input name="type-1[]" type="text" value=""></td>
					<td><input name="date-1[]" type="text" value=""></td>
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
					        <input autocomplete="off" name="netpayadd-1" id="netpayadd"  type="text" placeholder="NETPAY" data-items="8" />
					    </div>
	   				</td>
	   				<td>
	   					 <div class="border-radius" style="float:none; clear:both; margin-top:9px; margin-left:9px;">
						    <strong>FINAL AMOUNT</strong>
						    <input autocomplete="off" id="addfinalamount"  name="finalamount-1" type="text" placeholder="Beginning Balance" data-items="8" />
						</div>
	   				</td>
	   			</tr>
	   		</tbody>
	   </table>
	</div>
</div>

<input type="button" class ="red_button btn_bankstatement" value="UPDATE CHANGES Preview Bankstate" placeholder="Click for email Preview bt" id="bankstatement-preview">

<div id="addmodern_paystub">
    <h4>Bank statement Modern PAYSTUB template</h4>
    <iframe src="about:blank" id="bankstatement-pdf-preview" scrolling="no" style="width: 100%;" onload1="top.calcHeight(this)"></iframe>
</div>

<script type="text/javascript">
$(document).ready(function() {
	var bankstatements = <?php echo json_encode($bankstatements); ?>;
	var defaultPeriod = $('div.bankstatement-period');

	initBankstatement();
	//generateBankstatementForm();

	function initBankstatement()
	{
		attachEvent();
		attachAdd();

		$.each(bankstatements, function(k, value) {
			$("table.bankstatement-item select.quform-tooltip.chosen-select").append($('<option></option>').attr('value', value.name).attr('bankId', k).text(value.name));
		});	

		$('#bankstatement-preview').off('click');
		$('#bankstatement-preview').on('click', function() {
			var data = $('#form-main').serialize();
			$.ajax({
				url: '/paystub/add_ajax_preview_stub.php',
				data: data,
				method: 'post',
				success: function(result) {
					console.log($('#bankstatement-pdf-preview')[0]);
					$doc = $('#bankstatement-pdf-preview')[0].contentWindow.document;
                    $($doc.body).html(result);
                    var ht = $('#bankstatement-pdf-preview')[0].contentWindow.document.body.scrollHeight;
                    $('#bankstatement-pdf-preview').height(ht);
                    console.log(ht);
				}
			});
		});
	}

	function attachAdd()
	{
		$('input.add-new').off('click');
		$('input.add-new').on('click', function() {
			console.log($(this).parent().prevAll('table.bankstatement-item:first').find('tr[row="add-new"]:first'));
			$(this).parent().prevAll('table.bankstatement-item:first').find('tr[row="add-new"]:first').clone().appendTo($(this).parent().prevAll('table.bankstatement-item:first'));
			attachEvent();
		});

		$('input.add-blank').off('click');
		$('input.add-blank').on('click', function() {

			var divId = $(this).parent().prevAll('table.bankstatement-item:first').parent().attr('id');
			divId = divId.split('-')[2];
			var blankTr = '<tr>';
			blankTr += '<td><a class="cut btn">-- </a></td>';
			blankTr += '<td><input name="nameof-'+ divId +'[]" type="text" value=""></td>';
			blankTr += '<td><input name="amount-'+ divId +'[]" type="text" value=""></td>'
			blankTr += '<td><input name="type-'+ divId +'[]" type="text" value=""></td>';
			blankTr += '<td><input name="date-'+ divId +'[]" type="text" value=""></td>';
			blankTr += '</tr>';

			$(blankTr).appendTo($(this).parent().prevAll('table.bankstatement-item:first'));

			$('a.cut.btn').off('click');
			$('a.cut.btn').on('click', function() {
				$(this).parent().parent().remove();
			});
		});

		$('#period_add').off('click');
		$('#period_add').on('click', function() {
			var num = parseInt($('#num_periods').val());
			
			if(num < 12)
			{
				$('#num_periods').val(num+1);
				generateBankstatementForm();
			}
		});

		$('#period_sub').off('click');
		$('#period_sub').on('click', function() {
			var num = parseInt($('#num_periods').val());

			if(num > 1)
				$('#num_periods').val(num-1)
		});
	}

	function attachEvent()
	{
		$("table.bankstatement-item select.quform-tooltip.chosen-select").on('change', function() {
		var bankId = $('option:selected', this).attr('bankId');
		populate = bankstatements[bankId];

			$(this).parent().siblings().children('input').each(function() {
				var attr = this.name.replace('[]','');
				if(attr == 'amount')
					$(this).val(populate.amount);
				else if(attr == 'type')
					$(this).val(populate.type);
				else 
					$(this).val(Math.floor((Math.random() * 30) + 1));
			});

		});

		$('a.cut.btn').off('click');
		$('a.cut.btn').on('click', function() {
			$(this).parent().parent().remove();
		});
	}

	var callForm;
	function generateBankstatementForm()
	{
		//if(callForm)
			//callForm.abort();

		callForm = $.ajax({
			url: '/paystub/bankstatement_period_form.php',
			data: { formId: $('#num_periods').val() },
			success: function(form) {
				$('#bankstatement-container').append($(form));
				initBankstatement();
			}
		});
	}

});
</script>