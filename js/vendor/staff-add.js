$('#leftside-menu-container a[href="#sidebarStaff"]').trigger('click');
$('#leftside-menu-container a[data-target="staff"]').addClass('active');
$('#id_2').datetimepicker({
	"allowInputToggle": true,
	"showClose": true,
	"showClear": true,
	"showTodayButton": true,
	"format": "MM/DD/YYYY",
});
$('#id_3').datetimepicker({
	"allowInputToggle": true,
	"showClose": true,
	"showClear": true,
	"showTodayButton": true,
	"format": "MM/DD/YYYY",
});
$('#countryCode1 option:selected').html($('#countryCode1 option:selected').attr('value'));
$('#countryCode2 option:selected').html($('#countryCode1 option:selected').attr('value'));
$('#countryCode1').on('change', function () {
	$('#countryCode1 option').each(function () {
		$(this).html($(this).attr('data-text'));
	});
	$('#countryCode1 option:selected').html($('#countryCode1 option:selected').attr('value'));
	$(this).blur();
});
$('#countryCode2').on('change', function () {
	$('#countryCode1 option').each(function () {
		$(this).html($(this).attr('data-text'));
	});
	$('#countryCode2 option:selected').html($('#countryCode2 option:selected').attr('value'));
	$(this).blur();
});
$('#selectall').click(function(event) {   
	if(this.checked) {
		// Iterate each checkbox
		$(':checkbox').each(function() {
			this.checked = true;                        
		});
	} else {
		$(':checkbox').each(function() {
			this.checked = false;                       
		});
	}
});
$(document).on('click','.this__toggle',function(){
	$(this).parent().find('.this__toggle').removeClass('active');
	$(this).addClass('active');
});
