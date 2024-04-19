$(document).on('click','.support-inbox .right-side-box .showMenu,.support-inbox .left-side-box .closeSideBar',function(){
	var value = $('.support-inbox .left-side-box').css("left") === '0px' ? '-100%' : '0px';
	$('.support-inbox .left-side-box').animate({
		left: value
	});
});
$(document).on('click','.right-side-box .backToMenu',function(){
	$('#footer-bars-click').trigger('click');
});
$(document).on('click','#vendor-chat-icon a',function(e){
	e.preventDefault();
	$('.start-new-message').trigger('click');
});
