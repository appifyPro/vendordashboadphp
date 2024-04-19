function textAreaAdjust(o) {
    o.style.height = "1px";
    o.style.height = (10 + o.scrollHeight) + "px";
    o.style.overflow = "auto";
}
$(document).ready(function() {
    $("#addOtherAddress").click(function() {
        $("#Openaddress").toggle();
        $("#addAddress").toggle();
    });
    $("#addanoSerBTN").click(function() {
        $("#serviceformRepeat").show();
        $(this).hide();
    });
	$(document).on('keyup','.return-info',function(){
		var packageRecive = $('input[name="package-recive"]').val();
		var tracking = $('input[name="tracking"]').val();
		if(packageRecive && tracking){
			$(this).parents('.returnInformation').find('.our-custom-select').removeClass('disabled');
		}else{
			$(this).parents('.returnInformation').find('.our-custom-select').addClass('disabled');
		}
	});
	$(document).on('click','.returnInformation .our-custom-select .options li',function(){ 
		let txt = $(this).attr('value');
		$(this).parents('.returnInformation').find('.action-area').hide();
		if(txt == 'Partial Refund'){
			$(this).parents('.returnInformation').find('.action-area.partial-refund').show();
		}else if(txt == 'Convert to Voucher'){
			$(this).parents('.returnInformation').find('.action-area.convert-voucher').show();
		}else if(txt == 'Convert to Credit Note'){
			$(this).parents('.returnInformation').find('.action-area.convert-credit-note').show();
		}else if(txt == 'Full Refund'){
			$(this).parents('.returnInformation').find('.action-area.full-refund').show();
		}
	});
});
$(".serch-customer").on("keyup", function() {  
	var value = $(this).val().toLowerCase(); 
	$(this).next().find('a').filter(function() { 
		$(this).parents('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
	});
});
$(".search-product").on("keyup", function() {  
	var value = $(this).val().toLowerCase(); 
	$(this).next().find('ul li a').filter(function() { 
		$(this).parents('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
	});
});
$('#leftside-menu-container a[href="#sidebarRefunds"]').trigger('click');
$('#leftside-menu-container a[data-target="vendor-refund-note"]').addClass('active');
