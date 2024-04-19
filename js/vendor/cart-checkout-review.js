$(document).ready(function() {
	$(document).on('click', '.qty-changer', function() {
		var request = $(this).attr('data-value');
		var qty = $(this).parent().find('input[name="qty"]').val();
		if(request == 'add') {
			qty = parseInt(qty) + parseInt(1);
			$(this).parent().find('input[name="qty"]').val(qty);
		}
		if(request == 'minus' && qty > 1) {
			qty = parseInt(qty) - parseInt(1);
			$(this).parent().find('input[name="qty"]').val(qty);
		}
	});
});
