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
$('#leftside-menu-container a[href="#sidebarInvoices"]').trigger('click');
$('#leftside-menu-container a[data-target="create-new-invoice"]').addClass('active');
