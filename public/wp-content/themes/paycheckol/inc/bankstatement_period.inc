<div class="border-radius">
    <strong>FINAL AMOUNT</strong>
    <input autocomplete="off" id="addfinalamount"  name="finalamount" type="text" placeholder="Beginning Balance" data-items="8" />
</div>
<div id="bankstatement-container">
	<div id="bankstatement-period-1">
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
					<td><input name="nameof[]" type="text" value="<?php echo $bankstatement->name; ?>"></td>
					<td><input name="amount[]" type="text" value="<?php echo $bankstatement->amount; ?>"></td>
					<td><input name="type[]" type="text" value="<?php echo $bankstatement->type; ?>"></td>
					<td><input name="date[]" type="text" value="<?php echo $day; ?>""></td>
				</tr>
				<?php 
					}
				?>
				<tr row="add-new">
					<td><a class="cut btn">-- </a></td>
					<td><select style="" class="quform-tooltip chosen-select" name="nameof[]" title="Name Select"></select></td>
					<td><input name="amount[]" type="text" value=""></td>
					<td><input name="type[]" type="text" value=""></td>
					<td><input name="date[]" type="text" value=""></td>
				</tr>
			</tbody>
		</table>
		<div class="border-radius" style="float:none; clear:both; margin-top:9px; margin-left:9px;">
	        <strong>NETPAY PER PERIOD</strong>
	        <input autocomplete="off" name="netpayadd" id="netpayadd"  type="text" placeholder="NETPAY" data-items="8" />
	    </div>
		<div style="margin-top:8px;">
			<input type="button" class="add-new" name="addnew" value="Add new item" />
	    	<input type="button" class="add-blank" value="Add blank item" />  
	    </div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	var bankstatements = <?php echo json_encode($bankstatements); ?>;
	var defaultPeriod = $('#bankstatement-period-1').clone();
	var select = $("table.bankstatement-item select.quform-tooltip.chosen-select");
	$.each(bankstatements, function(k, value) {
		select.append($('<option></option>').attr('value', value.name).attr('bankId', k).text(value.name));
	});

	attachEvent();
	attachAdd();

	function attachAdd()
	{
		$('input.add-new').off('click');
		$('input.add-new').on('click', function() {
			$(this).parent().prevAll('table.bankstatement-item:first').find('tr[row="add-new"]:first').clone().appendTo($(this).parent().prevAll('table.bankstatement-item:first'));
			attachEvent();
		});

		$('input.add-blank').off('click');
		$('input.add-blank').on('click', function() {
			
			var blankTr = '<tr>';
			blankTr += '<td><a class="cut btn">-- </a></td>';
			blankTr += '<td><input name="nameof[]" type="text" value=""></td>';
			blankTr += '<td><input name="amount[]" type="text" value=""></td>'
			blankTr += '<td><input name="type[]" type="text" value=""></td>';
			blankTr += '<td><input name="date[]" type="text" value=""></td>';
			blankTr += '</tr>';

			$(blankTr).appendTo($(this).parent().prevAll('table.bankstatement-item:first'));

			$('a.cut.btn').off('click');
			$('a.cut.btn').on('click', function() {
				$(this).parent().parent().remove();
			});
		});

		$('#period_add').off('click');
		$('#period_add').on('click', function() {
			var num = $('num_periods').val();
			$('num_periods').val(num+1);

			defaultPeriod.appendTo($('#bankstatement-container'));
		});

		$('#period_sub').off('click');
		$('#period_sub').on('click', function() {
			var num = $('num_periods').val();
			$('num_periods').val(num-1)
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
});
</script>