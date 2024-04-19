$(document).on('click',function(){
	$(document).on('click','.navigation-steps',function(e){
		e.preventDefault();
		document.body.scrollTop = 0; // For Safari
		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		var dataId = $(this).attr('href');
		$('.shopping-checkout-container .card .card-body').hide();
		$(dataId).show();
	});
});

