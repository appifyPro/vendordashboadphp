$('#id_3').datetimepicker({
	"allowInputToggle": true,
	"showClose": true,
	"showClear": true,
	"showTodayButton": true,
	"format": "MM/DD/YYYY",
});
$("#repatShiftbtn").click(function(){         
	$('#repatShift').show();
	$(this).hide();      
});
$('#leftside-menu-container a[href="#sidebarStaff"]').trigger('click');
$('#leftside-menu-container a[data-target="staff-working-hours"]').addClass('active');
