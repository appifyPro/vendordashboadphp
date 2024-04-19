(function($){
	$(function(){
		$('#dateofBirth').datetimepicker({
			"allowInputToggle": true,
			"showClose": true,
			"showClear": true,
			"showTodayButton": true,
			"format": "MM/DD/YYYY",
				widgetPositioning: {
                    horizontal: 'right',
                    vertical: 'bottom'
                }
		});
	  
	});
})(jQuery);

function textAreaAdjust(o) {
  o.style.height = "1px";
  o.style.height = (10+o.scrollHeight)+"px";
  o.style.overflow = "auto";
}


$('#countryCode option:selected').html($('#countryCode option:selected').attr('value')); // already changed onload

 $('#countryCode').on('change', function () {
     $('#countryCode option').each(function () {
         $(this).html($(this).attr('data-text'));
     });
     $('#countryCode option:selected').html($('#countryCode option:selected').attr('value'));
     $(this).blur();
 });
 // $('#countryCode').on('focus', function () {
     // $('#countryCode option').each(function () {
         // $(this).html($(this).attr('data-text'));
     // });
 // });

 $('#countryCode1 option:selected').html($('#countryCode1 option:selected').attr('value')); // already changed onload

 $('#countryCode1').on('change', function () {
     $('#countryCode1 option').each(function () {
         $(this).html($(this).attr('data-text'));
     });
     $('#countryCode1 option:selected').html($('#countryCode1 option:selected').attr('value'));
     $(this).blur();
 });
 // $('#countryCode1').on('focus', function () {
     // $('#countryCode1 option').each(function () {
         // $(this).html($(this).attr('data-text'));
     // });
 // });
$('#leftside-menu-container a[href="#sidebarCustomers"]').trigger('click');
$('#leftside-menu-container a[data-target="new-client"]').addClass('active');
