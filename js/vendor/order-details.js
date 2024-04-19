$(document).ready(function(){
	$("#Paid").click(function(){
		$("#Paid1").show();	
		$("#Pending1").hide();
		$("#Canceled1").hide();
		$("#Rejected1").hide();	
	   
	});
	$("#Pending").click(function(){
		$("#Paid1").hide();	
		$("#Pending1").show();
		$("#Canceled1").hide();
		$("#Rejected1").hide();	
	   
	})
	$("#Canceled").click(function(){
		$("#Paid1").hide();	
		$("#Pending1").hide();
		$("#Canceled1").show();
		$("#Rejected1").hide();	
	   
	})
	$("#Rejected").click(function(){
		$("#Paid1").hide();	
		$("#Pending1").hide();
		$("#Canceled1").hide();
		$("#Rejected1").show();	
	   
	})
	
	$("#Paid2").click(function(){
		$("#Paid3").show();	
		$("#Pending3").hide();
		$("#Canceled3").hide();
		$("#Rejected3").hide();	
	   
	});
	$("#Pending2").click(function(){
		$("#Paid3").hide();	
		$("#Pending3").show();
		$("#Canceled3").hide();
		$("#Rejected3").hide();	
	})
	$("#Canceled2").click(function(){
		$("#Paid3").hide();	
		$("#Pending3").hide();
		$("#Canceled3").show();
		$("#Rejected3").hide();	
	})
	$("#Rejected2").click(function(){
		$("#Paid3").hide();	
		$("#Pending3").hide();
		$("#Canceled3").hide();
		$("#Rejected3").show();	
	})
	$(document).on('click','.more-action-options a',function(){
		$('.paid_btn_part .dynamic-button').text($(this).text());
	});
	$(document).on('click','.dropdown-toggle.arrow-none.card-drop.text-body.fw-bold.font-14.font-nunito.font-weight-bold',function(){
		alert('asdasd');
	});
	$('#leftside-menu-container a[href="#sidebarOrders"]').trigger('click');
	$('#leftside-menu-container a[data-target="order-details"]').addClass('active');
 });
 