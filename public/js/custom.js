$(document).ready(function () {
	$(document).on('change', '#car_detail_container', function() { 
		if($(this).val() == '0'){
			$('#cus_name').val('');
			$('#cus_mobile').val('');
			$('#car_number').val('');
			$('#car_km').val('');
			$('#car_name').val('');	    
			$('#order_car_id').remove();
			$('#order_customer_id').remove();
			return false;
		}
		var url = $(this).data('url')+'?id='+$(this).val();
		$.get(url, function(data, status){
			$('#cus_name').val(data.cus_name);
			$('#cus_mobile').val(data.cus_phone);
			$('#car_number').val(data.car_no);
			$('#car_km').val(data.car_km);
			$('#car_name').val(data.car_name);	 
			$('#order_car_id').remove();
			$('#order_customer_id').remove();
			$('.hidden_fields').append('<input type="hidden" name="car_id" id="order_car_id" value="'+data.car_id+'"/>');
			$('.hidden_fields').append('<input type="hidden" name="customer_id" id="order_customer_id" value="'+data.customer_id+'"/>');   
		});
	});
	$(document).on('change', '.category_select', function() { 
		var total = 0;
		$.each($(".category_select option:selected"), function () {
	        total = parseInt(total) + parseInt($(this).attr('data-price'));	        
	    });
	    var disc = $('#discount_select').val();
	    if (disc > 0) {
		    var dec = (disc/100).toFixed(2);
		    discountAmount = total*dec;
		    total = total - discountAmount;
		}
		$('.total_amount_calculate').val(total);
		$('.total_amount_calculate_data').html(total);
	});
	$('#discount_select').keyup(function() {
	  	discount = $(this).val();
	  	total = 0;
	  	$.each($(".category_select option:selected"), function () {
	        total = parseInt(total) + parseInt($(this).attr('data-price'));	        
	    });
	  	if (discount > 0) {
	  		var dec = (discount/100).toFixed(2);
		    discountAmount = total*dec;
		    total = total - discountAmount;	  		
	  	}
	  	$('.total_amount_calculate').val(total);
		$('.total_amount_calculate_data').html(total);
	});
});