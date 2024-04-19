$(document).on('click','.product-image-section .product-options-image a',function(){
	var src = $(this).find('img').attr('src');
	$('.product-image-section .main-product-image img').attr('src',src)
});
$('#leftside-menu-container a[href="#sidebarProduct"]').trigger('click');
$('#leftside-menu-container a[data-target="product-details"]').addClass('active');
