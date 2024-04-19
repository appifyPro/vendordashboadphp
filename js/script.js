function closeMenuSidebar(e){ 
	if ($(e).parents('.ps-panel--sidebar').hasClass('active')) {
		$('.ps-panel--sidebar').removeClass('active');
		$('.ps-site-overlay').removeClass('active');
	}
}
function selectCountry(){
	var country = $('#languagsettings input[name="country-switch"]:checked').val();
	$('button[data-target="#languagsettings"]').attr('data-value',country);
	$('button[data-target="#languagsettings"]').html('&nbsp;&nbsp;<img src="img/english.svg">&nbsp;&nbsp;'+country+'<img src="img/arrow-footer.svg">');
	$('#language-notification').html(country);
	$('#language-notification').parents('.current-language').css('display','block');
	$('#language-notification').parents('.current-language').css('animation-name','blurNotificationAnimation');
	setTimeout(function(){ $('#language-notification').parents('.current-language').css('display','none'); }, 3000);
}

function countrySwitchPopup(e){
	var value = $(e).attr('data-value');
	$('#language-notification').parents('.current-language').css('animation-name','blurNotificationAnimation')
	$('#languagsettings input[value="'+value+'"]').prop("checked", true);
}

function switchCurrency(){
	var dataValue = $('#currency .modal-body .currency-setting-model-text.active').attr('data-value');
	var dataSymbol = $('#currency .modal-body .currency-setting-model-text.active').attr('data-symbol');
	$('button[data-target="#currency"]').attr('data-value',dataValue);
	$('button[data-target="#currency"]').html('&nbsp;&nbsp;'+dataSymbol+'&nbsp;&nbsp;'+dataValue+'<img src="img/arrow-footer.svg">');
	$('#currency-notification').html(dataValue);
	$('#currency-notification').parents('.current-currency').css('display','block');
	$('#currency-notification').parents('.current-currency').css('animation-name','blurNotificationAnimation')
	setTimeout(function(){ $('#currency-notification').parents('.current-currency').css('display','none'); }, 3000);
}
function currencySwitchPopup(e){
	var value = $(e).attr('data-value');
	$('#currency-notification').parents('.current-currency').css('animation-name','')
	$('#currency .modal-body .currency-setting-model-text[data-value="'+value+'"]').addClass('active');
}
// function closeNewMessage(){ 
// 	var value = $('.new-message-option').css("bottom") === '0px' ? '-150%' : '0px';
// 	$('.new-message-option').animate({
// 		bottom: value
// 	});
// }
// function bodyClick(){
// 	$('body').trigger('click');
// }

// $("#search_name").on("keyup", function() { 
// 	var value = $(this).val().toLowerCase();
// 	$("#user_names ul li a .userName").filter(function() {
// 		$(this).parents('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
// 	});
// 	if(value != ''){
// 		$("#user_names ul").css('opacity','1');
// 	}else{
// 		$("#user_names ul").css('opacity','0');
// 	}
// });

// /* input field value */
//   $(".search-field-pro").focus(function (e) {
//     $(this).next(".value-text").hide();
//   });
//   $('.search-field-pro').keypress(function(event){
//     var keycode = (event.keyCode ? event.keyCode : event.which);
//     if(keycode == '13'){
//         $(this).next(".value-text").show();  
//     }
// });

// function messageOpen(){
// 	checkChatMessageOptions();
// 	checkGroupChatMessageOptions();
// 	$('.is_message .notification-option-menu').removeClass('active');
// 	var currentPos = $('.moving-div').attr('data-pos'); 
// 	if(currentPos == 1){
// 		$('.user-message').show();
// 		$('.moving-div').animate({
// 			right: 0
// 		});
// 		$('.moving-div').attr('data-pos',0);
// 	}
// }

// function openChatOptions(){
// 	var value = $('#singleChatOptions').css("bottom") === '0px' ? '-100%' : '0px'; 
// 	var rotate = $('#singleChatOptions').css("bottom") === '0px' ? 'rotate(0deg)' : 'rotate(180deg)';
// 	$('#singleChatOptions').animate({
// 		bottom: value
// 	});
// 	$('#chatProfileDropdown').css('transform',rotate);
// }

// function checkChatMessageOptions(){
// 	var value = $('#singleChatOptions').css("bottom") === '0px' ? '-100%' : '0px'; 
// 	if(value == '-100%'){
// 		var rotate = $('#singleChatOptions').css("bottom") === '0px' ? 'rotate(0deg)' : 'rotate(180deg)';
// 		$('#singleChatOptions').animate({
// 			bottom: value
// 		});
// 		$('#chatProfileDropdown').css('transform',rotate);
// 	}
// }

// function groupChatStepTwo(){
// 	var value = $('#Group__Chat_panel_2').css("right") === '0px' ? '-100%' : '0px'; 
// 	$('#Group__Chat_panel_2').animate({
// 		right: value
// 	});
// }

// function closeThisPopUp(){
// 	$('#groupChat1').collapse('toggle');
// }
// function addMoreUsersToGroup(){
// 	$('#groupChat1').collapse('toggle');
// 	$('#groupchatbox').collapse('toggle');
// }
	
	
// function openGroupChatOptions(){
// 	var value = $('#groupChatOptions').css("bottom") === '0px' ? '-100%' : '0px'; 
// 	var rotate = $('#groupChatOptions').css("bottom") === '0px' ? 'rotate(0deg)' : 'rotate(180deg)';
// 	$(groupChatOptions).animate({
// 		bottom: value
// 	});
// 	$('#grprofilemenu').css('transform',rotate);
// }

// function checkGroupChatMessageOptions(){
// 	var value = $('#groupChatOptions').css("bottom") === '0px' ? '-100%' : '0px'; 
// 	if(value == '-100%'){
// 		var rotate = $('#groupChatOptions').css("bottom") === '0px' ? 'rotate(0deg)' : 'rotate(180deg)';
// 		$('#groupChatOptions').animate({
// 			bottom: value
// 		});
// 		$('#grprofilemenu').css('transform',rotate);
// 	}
// }

// function do_resize(textbox) {

// 	var maxrows=5; 
// 	var txt=textbox.value;
// 	var cols=textbox.cols;

// 	var arraytxt=txt.split('\n');
// 	var rows=arraytxt.length; 

// 	for (i=0;i<arraytxt.length;i++) 
// 	rows+=parseInt(arraytxt[i].length/cols);

// 	if (rows>maxrows){
// 		textbox.rows=maxrows;
// 		$(textbox).css('overflow-y','auto');
// 	}else{
// 		$(textbox).css('overflow-y','hidden');
// 		textbox.rows=rows;
// 	}
// 	$('.always__stay__in_bottom').animate({scrollTop:$('.always__stay__in_bottom').height()}, 'slow');
// }
 
// function showForwardButton(forward){
// 	var groupName = $(forward).val();
// 	if( groupName != ''){
// 		$('.panel-1 .forward').css('opacity','1');
// 	}else{
// 		$('.panel-1 .forward').css('opacity','0');
// 	}
//  }
 
function feedbackTab(e){
	$("#step1").removeClass("disabled");
	$(e).addClass("active");
}
// function addUserToGoup(thisDiv){
// 	if(!$(thisDiv).hasClass('active')){
// 		var user =  $(thisDiv).children('.userName').html();
// 		var userImage = $(thisDiv).children('img').attr('src');
// 		var groupData = '<div class="user__data d-inline-block position-relative online mr-4" data-user="'+user+'" style="flex-shrink: 0;">'+
// 							'<div class="user__image">'+
// 								'<img class=" rounded-circle" src="'+userImage+'" alt="'+user+'" width="40">'+
// 							'</div>'+
// 							'<div class="user__name text-center font-12 mt-1 line-height-default" style="max-width:38px">'+
// 								'<span>'+user+'</span>'+
// 							'</div>'+
// 						'</div>';
// 		$(thisDiv).addClass('active');				
// 		$('.user__in__group').append(groupData);
// 		$('.user__in__group').show();
// 		$('.user__in__group').addClass('d-flex');
// 	}else{ 
// 		$(thisDiv).removeClass('active');
// 		var user =  $(thisDiv).children('.userName').html();
// 		$('.user__in__group .user__data[data-user="'+user+'"]').remove();
// 		if($('.user__in__group').children().length < 1 ){
// 			$('.user__in__group').removeClass('d-flex');
// 			$('.user__in__group').hide();
// 		}
// 	}
// }
$('.login-user.index .all-category-data').owlCarousel({
	margin:8,
	loop: true,
	nav:false,
	dots:false,
	autoWidth:true,
	autoplay:false
});
$('.vendor-options-carousel').owlCarousel({
	margin:8,
	loop: false,
	nav:false,
	dots:false,
	autoWidth:true,
	autoplay:false
});
$('.vendor-options-carousel-mobile').owlCarousel({
	loop: false,
	nav:false,
	dots:false,
	autoWidth:true,
	autoplay:false
});
$(".see-less-btn").on("click", function (e) {
	$(".main-menu-seemore").removeClass("show");
 });
$('.owl-product-slider').owlCarousel({
	items:1,
	margin:0,
	loop: false,
	nav:false,
	dots:true,
	autoWidth:false,
	autoplay:false,
	lazyLoad : true,
});

$('.owl-mob-product-list').owlCarousel({
	items: 3,
	stagePadding: 20,
	margin:14,
	loop: true,
	center:true,
	nav:false,
	dots:true,
	autoplay:false,
	lazyLoad : true,
});

$('.list-page-menu-mobile').owlCarousel({
	items: 4,
	loop: false,
	nav:false,
	dots:true,
	autoplay:false,
	lazyLoad: true,
	autoWidth: true,
});

$(document).ready(function(){
	$(document).on('click','.account-dashboard  .account-wrapper .show--ecommerce-menu',function(){
		var value = $('.account-wrapper .ecommerce-menu').css("right") === '0px' ? '-100%' : '0px';
		if(value == '0px'){
			$('.account-dashboard ').scrollTop(0);
			$('.account-wrapper #dashboard-menu1').hide();
			$('.account-wrapper .ecommerce-menu').show();
			$('.account-wrapper .ecommerce-menu').animate({
				right: value
			});
			
		}
	});
	$(document).on('click','.account-dashboard  .account-wrapper .contentAreaTab',function(){
		var dataTarget = $(this).attr('data-target');
		var value = $('.account-wrapper '+dataTarget).css("right") === '0px' ? '-100%' : '0px';
		if(value == '0px'){
			$('.account-dashboard').scrollTop(0);
			$('.account-wrapper #dashboard-menu1').hide();
			$('.account-wrapper '+dataTarget).show();
			$('.account-wrapper '+dataTarget).animate({
				right: value
			});
			
		}
	});

	$(document).on('click','.account-dashboard  .account-wrapper .contentAreaTab2',function(){
		var dataTarget = $(this).attr('data-target');
		var value = $('.account-wrapper '+dataTarget).css("right") === '0px' ? '-100%' : '0px';
		if(value == '0px'){
			$('.account-dashboard').scrollTop(0);
			$('.account-wrapper #dashboard-menu2').hide();
			$('.account-wrapper '+dataTarget).show();
			$('.account-wrapper '+dataTarget).animate({
				right: value
			});
			
		}
	});
	
	$(document).on('click','.account-dashboard  .account-wrapper .backto-account-menu',function(){
		var value = $('.account-wrapper .ecommerce-menu').css("right") === '0px' ? '-100%' : '0px';
		if(value != '0px'){
			$('.account-wrapper .ecommerce-menu').animate({
				right: value
			});
			setTimeout(function(){ 
				$('.account-wrapper .ecommerce-menu').hide();
				$('.account-wrapper #dashboard-menu1').show(); 
			}, 400);
		}
	});
	$(document).on('click','.account-dashboard  .account-wrapper .backToAccountSection',function(){
		var parentId = $(this).parents('.carousel.slide').attr('id');
		var value = $('.account-wrapper #'+parentId).css("right") === '0px' ? '-100%' : '0px';
		if(value != '0px'){
			$('.account-wrapper #'+parentId).animate({
				right: value
			});
			setTimeout(function(){ 
				$('.account-wrapper #'+parentId).hide();
				$('.account-wrapper #dashboard-menu1').show(); 
			}, 400);
		}
	});

	$(document).on('click','.account-dashboard  .account-wrapper .backToAccountSection2',function(){
		var parentId = $(this).parents('.carousel.slide').attr('id');
		var value = $('.account-wrapper #'+parentId).css("right") === '0px' ? '-100%' : '0px';
		if(value != '0px'){
			$('.account-wrapper #'+parentId).animate({
				right: value
			});
			setTimeout(function(){ 
				$('.account-wrapper #'+parentId).hide();
				$('.account-wrapper #dashboard-menu2').show(); 
			}, 400);
		}
	});

	$(document).on('focusin','#search',function(){
		$('.search-back').css('z-index','1');
		$('.search-back').show();
	});
	$(document).on('focusout','#search',function(){
		$('.search-back').css('z-index','-1');
		$('.search-back').hide();
		$('body').trigger('click');
	});
	$(document).on('click','.notification-option',function(){
		$('.notification-option-menu').hide();
		var link = $(this);
		var offset = link.offset();
		var top = offset.top;
		var bottom = top + link.outerHeight();
		bottom = $(window).height() - bottom - 70;
		if(!$(this).next('.notification-option-menu').hasClass('active')){
			if(bottom < 0 && $(window).width() < 1199){
				$(this).next('.notification-option-menu').addClass('bottom');
			}
			$(this).next('.notification-option-menu').addClass('active');
			$(this).next('.notification-option-menu').show();
		}else{
			if(bottom < 0 && $(window).width() < 1199){
				$(this).next('.notification-option-menu').removeClass('bottom');
			}
			$(this).next('.notification-option-menu').removeClass('active');
			$(this).next('.notification-option-menu').hide();
		}
	});
	$(document).on('click','.user-notification-section a',function(){
		$('#notification_edit .modal-content').hide();
		$('#notification_edit .modal-content[data-id="default"]').show();
		$('.notification-option-menu').removeClass('active');
	});
	$(document).on('click','.profile-status .header-profilepic .menuhover',function(){
		$(this).toggleClass('active');
	});
	$(document).on('click','#notification_edit .notification-edit-div .notification-action ',function(){
		var section = '#'+$(this).attr('data-id');
		$('#notification_edit .modal-content').hide();
		$(section).css({'display':'block','transform':'translateX(0%) translateZ(1px)','transition': '2s'});
	});
	$(document).on('click','#show_pin',function(){
		$('#user_pin .modal-content').hide();
		$('#user_pin .modal-content[data-id="default"]').show();
	});
	$(document).on('click','#user_pin .change-section ',function(){
		var section = '#'+$(this).attr('data-id');
		$('#user_pin .modal-content').hide();
		$(section).css({'display':'block','transform':'translateX(0%) translateZ(1px)','transition': '2s'});
	});
	$(document).on('click','#notification_edit .back-to-menu',function(){
		$('#notification_edit .modal-content').hide();
		$('#notification_edit .modal-content[data-id="default"]').show();
	});
	
	/*$(document).on('click','.screenshot-secetion label,#cameraUploda',function(){
		$(this).parent().find('input').trigger('click');
	});*/
	$(document).on('click','.screenshot-secetion .add_moreImages img',function(){ 
		var incrementNumber = $(this).attr('data-value');
		var dataId = $(this).attr('data-id');
		var newIncrement = parseInt(incrementNumber) + parseInt(1);
		$(this).parents('.screenshot-secetion').find('.all-input').append('<input type="file" name="screenshot['+incrementNumber+']" class="report_screenshot d-none" data-id="'+dataId+'" data-increment="'+newIncrement+'">');
		$(this).parents('.screenshot-secetion').find('.all-input input:last-child').trigger('click');
		$(this).attr('data-value',newIncrement);
	});
	$(document).on('change','.screenshot-secetion input',function(){ 
		var imgageId = $(this).attr('data-id');
		var image = document.getElementById(imgageId); 
		image.src = URL.createObjectURL(event.target.files[0]);
	});
	$(document).on('change','.screenshot-secetion .report_screenshot',function(){ 
		var dataId = $(this).attr('data-id');
		var imageValue= $(this).attr('data-increment');
		var numFiles = $(this)[0].files.length;
		for(i=0; i < numFiles; i++){
			var html = 	'<div class="image-view position-relative d-inline-block mr-4">'+
							'<div class="remove-image position-absolute" style="top: -8px;right: -8px;" data-target="'+imageValue+'">'+
								'<span class="font-11 bg-danger rounded-circle cursor-pointer text-white line-height-default" style="padding: 2px 6px !important;">x</span>'+
							'</div>'+
							'<img src="'+URL.createObjectURL(event.target.files[i])+'" class="image'+imageValue+'" width="50" height="50">'+
						'</div>';
			$('#'+dataId).append(html);
		}
	});
	$(document).on('click','.un-read',function(){
		$(this).removeClass('un-read');
	});
	
	// add and remove .active
$('body').on('click', '', function () {
	$('.grey-send-img').show();
	$('.blue-send-img').hide();
});
	
	// custom select box

$('.custom-select').each(function(){
	var $this = $(this), numberOfOptions = $(this).children('option').length;
	
	$this.addClass('select-hidden'); 
	$this.wrap('<div class="select selected-value"></div>');
	$this.after('<div class="select-styled sel-value font-16"></div>');

	var $styledSelect = $this.next('div.select-styled');
	$styledSelect.text($this.children('option').eq(0).text());

	var $list = $('<ul />', {
					'class': 'options scroll-dropdown scroll-design scrollbox'
	}).insertAfter($styledSelect);

	for (var i = 0; i < numberOfOptions; i++) {
					$('<li />', {
									text: $this.children('option').eq(i).text(),
									rel: $this.children('option').eq(i).val()
					}).appendTo($list);
	}

	var $listItems = $list.children('li');

	$styledSelect.click(function(e) {
					e.stopPropagation();
					$('div.select-styled.active').not(this).each(function(){
									$(this).removeClass('active').next('ul.options').hide();
					});
					$(this).toggleClass('active').next('ul.options').toggle();
	});

	$listItems.click(function(e) {
					e.stopPropagation();
					$styledSelect.text($(this).text()).removeClass('active');
					$this.val($(this).attr('rel'));
					$list.hide();
					//console.log($this.val());
	});

	$(document).click(function() {
					$styledSelect.removeClass('active');
					$list.hide();
	});

	var country = $('#country').find(":selected").text();
});

	$(document).on('click','.click-textarea',function(){
		$('.grey-send-img').hide();
		$('.blue-send-img').show();
		event.stopPropagation();
	});

	$(document).on('click','.chatplus-icon',function(){
		$('#plus-icon-showbox').toggleClass('showbox');
		$(this).toggleClass('close-chat-icon');
		event.stopPropagation();
	});

	$(document).on('click','.image-view .remove-image',function(){
		var imageId = $(this).attr('data-target'); 
		$(this).parents('.screenshot-secetion').find('.all-input input[data-increment="'+imageId+'"]').remove();
		$(this).parent().remove();
	});
	$(document).on('change','#groupChatimage',function(){ 
		var image = document.getElementById('newGroupChatImage'); 
		image.src = URL.createObjectURL(event.target.files[0]);
		$('.upload__group__photo #cameraUploda .old').hide();
		$('#newGroupChatImage').show();
	});
	
	$(document).on('click','.trigger-close',function(){
		$(this).parents('.modal-content').find('button.uk-modal-close-default').trigger('click');
	});

	$(document).on('click','#regulation-click',function(){
		$('.regulation-panel').addClass('show');
		$('.dangerous-alert-show').addClass('show');
		$('#dregulations-modal').addClass('uk-open');
	});
	$(document).on('click','#regulation-click-no',function(){
		$('.regulation-panel').removeClass('show');
		$('.dangerous-alert-show').removeClass('show');
		$('#dregulations-modal').removeClass('uk-open');
	});
	
	
	$(document).on('click','#user_pin .back-to-menu',function(){
		$('#user_pin .modal-content').hide();
		$('#user_pin .modal-content[data-id="default"]').show();
	});
	
	function OTPInput() {
	  const inputs = document.querySelectorAll('#pin-input-area > *[id]');
	  for (let i = 0; i < inputs.length; i++) {
		inputs[i].addEventListener('keydown', function(event) {
		  if (event.key === "Backspace") {
			inputs[i].value = '';
			if (i !== 0)
			  inputs[i - 1].focus();
		  } else {
			if (i === inputs.length - 1 && inputs[i].value !== '') {
			  return true;
			} else if ((event.keyCode > 47 && event.keyCode < 58) || (event.keyCode > 95 && event.keyCode < 106)) {
			  inputs[i].value = event.key;
			  if (i !== inputs.length - 1)
				inputs[i + 1].focus();
			  event.preventDefault();
			} else if (event.keyCode > 64 && event.keyCode < 91) {
			  inputs[i].value = event.key//String.fromCharCode(event.keyCode);
			  if (i !== inputs.length - 1)
				inputs[i + 1].focus();
			  event.preventDefault();
			}
		  }
		});
	  }
	}
	OTPInput();
	
	
	
	
	
	
	$('img.is_avatar').tooltip({ boundary: 'window' })
		/*var owl = $('.owl-carousel1');
		 owl.owlCarousel({
		   margin: 10,
		   loop: true,
		   responsive: {
			 0: {
			   items: 4
			 },
			 600: {
			   items: 2
			 },
			 1000: {
			   items: 3
			 }
		   }
		 })

		 var owl = $('.owl-carousel2');
		 owl.owlCarousel({
		   margin: 10,
		   loop: true,
		   responsive: {
			 0: {
			   items: 4
			 },
			 600: {
			   items: 2
			 },
			 1000: {
			   items: 3
			 }
		   }
		 })

		 var owl = $('.dis-vouchr-slider');
		 owl.owlCarousel({
		   margin: 10,
		   loop: true,
		   responsive: {
			 0: {
			   items: 2
			 },
			 600: {
			   items: 2
			 },
			 1000: {
			   items: 2
			 }
		   }
		 })*/
		 
	var shareDiv = $('#sharefeed .modal-body .share-options');
	shareDiv.owlCarousel({
		margin: 10,
		loop: true,
		items:6,
		nav:true
	})
	var addImage = $('.promotional-ads-1 .advertisment-images');
	addImage.owlCarousel({
		margin: 5,
		loop: true,
		items:4,
		nav:true
	})
	var addImages = $('.promotional-ads-2 .advertisment-images');
	addImages.owlCarousel({
		margin: 5,
		loop: true,
		items:2,
		nav:true
	})
		 
	var mobileMenu = $('.top-links-section #mobile-menu-section');
	mobileMenu.owlCarousel({
		margin: 30,
		loop: false,
		navigation :false,
		dots:false,
		autoWidth:true
	})
	var horizontalSlider = $('.horizontal-slider'); 
	horizontalSlider.owlCarousel({
		margin: 25,
		loop: false,
		nav:false,
		dots:false,
		autoWidth:true,
	});
	var horizontalProductSlider = $('.horizontal-product-slider'); 
	horizontalProductSlider.owlCarousel({
		margin: 8,
		loop: false,
		nav:false,
		dots:false,
		autoWidth:true,
	});
	var vendorTalk = $('.vender-talk-image');
		vendorTalk.owlCarousel({
		items: 1,
		loop: true,
		nav:false,
		dots:false,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:false,
	})
	
	var screenWidth = $(window).width();;
	if(screenWidth < 768){
		var addCommunitySlider = $('#navigation-bar .second-nav '); 
		addCommunitySlider.addClass('owl-carousel');
		addCommunitySlider.owlCarousel({
			margin: 10,
			loop: false,
			nav:false,
			dots:false,
			autoWidth:true,
		});
	} 
	
	$('.select-list-box ul li.option').click(function() {
		$(this).siblings().toggle();
		$(this).parents('.select-list-box').next('input').val($(this).attr('values'));
		$('.select-list-box ul li.option').removeClass('active');
		$(this).addClass('active')
	})
	
	$(document).on('click','#currency .modal-body .currency-setting-model-text',function(){
		$('#currency .modal-body .currency-setting-model-text').removeClass('active');
		$(this).addClass('active');
	});
	
	
	$('#input-searchs,#input-search').on('keypress input', function() {
		$('.ps-panel--search-result').addClass('active');
		$('body').addClass('search-active');
	})
	$('body').on('click', function(event) { 
		var $trigger = $(".menuhover.tooltip.header-option.active");
		if($trigger !== event.target && !$trigger.has(event.target).length){
			$('.menuhover.tooltip.header-option').removeClass('active');
		}   
	});
	$(document).on('click','.header_widgets li .menuhover.dots',function(){
		if($(this).hasClass('active')){ 
			$('.header_widgets li .menuhover.dots').removeClass('active');		
		}else{ 
			$('.header_widgets li .menuhover.dots').removeClass('active');				
			$(this).toggleClass('active');
		}
	});
	$(document).on('click','.header_widgets li .menuhover.header-option',function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');	
		}else{
			$('.header_widgets li .menuhover.header-option').removeClass('active');				
			$(this).addClass('active');
		}
	});
	
	/*$('.message-head-content').click(function(event) {
		var dataMove = $(this).attr('data-right');
		var prevVal = $('.message-head-content.active').attr('data-right');
		var diff = dataMove - prevVal;
		var currntDivPos = $('.moving-div').attr('data-pos'); 
		var newPos = parseInt(diff) +  parseInt(currntDivPos);
		var positivePos = Math.abs(newPos);
		if(diff != 0 && diff > 0){
			$('.moving-div').animate({
				right: positivePos
			});
			$('.moving-div').attr('data-pos',positivePos);
			$('.message-head-content.active').removeClass('active');
			$(this).addClass('active');
		}
		if(diff != 0 && diff < 0){
			$('.moving-div').animate({
				right: positivePos
			});
			$('.moving-div').attr('data-pos',positivePos);
			$('.message-head-content.active').removeClass('active');
			$(this).addClass('active');
		}
	});*/
	$(document).on('click','.message-setting-option',function(){
		var currentPos = $('.moving-div').attr('data-pos'); 
		var width = $(window).width();
		if(width > 1199){
			if(currentPos == 0){
				$('.moving-div').animate({
					right: 382
				});
				$('.user-message').hide();
				$('.moving-div').attr('data-pos',1);
			}else{
				$('.user-message').show();
				$('.moving-div').animate({
					right: 0
				});
				$('.moving-div').attr('data-pos',0);
			}
		}else{
			if(currentPos == 0){
				$('.moving-div').animate({
					right: '103%'
				});
				$('.user-message').hide();
				$('.moving-div').attr('data-pos',1);
			}else{
				$('.user-message').show();
				$('.moving-div').animate({
					right: 0
				});
				$('.moving-div').attr('data-pos',0);
			}
		}
	});

	
	// $(document).on('click','.start-new-message',function(){
	// 	bodyClick();
	// 	closeNewMessage();
	// 	var value = $('#Group__Chat_panel_2').css("right") === '0px' ? '-100%' : '0px';
	// 	if(value == '-100%'){
	// 		$('#Group__Chat_panel_2').animate({
	// 			right: value
	// 		});
	// 	}
	// });
	
	
	// $("#groupChat1 input[name='searchGroupChatname']").on("keyup", function() { 
	// 	var value = $(this).val().toLowerCase();
	// 	$("#user_group_names ul li a .userName").filter(function() {
	// 		$(this).parents('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
	// 	});
	// });
	
	$("#user__all_message__search").on("keyup", function() {  
		var value = $(this).val().toLowerCase(); 
		$(".user__all_message ul li a .drop_text strong").filter(function() {
			$(this).parent().parent().parent('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
	
	$("#searchs").on("keyup", function() {  
		var value = $(this).val().toLowerCase(); 
		$(".searchs__results .recent-search").filter(function() { 
			$(this).parents('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
	
	$("#searchs_shipping").on("keyup", function() {  
		var value = $(this).val().toLowerCase(); 
		$(".searchs__results .recent-search").filter(function() { 
			$(this).parents('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
	
	// function addUserToGoup(thisDiv){
	// 	if(!$(thisDiv).hasClass('active')){
	// 		var user =  $(thisDiv).children('.userName').html();
	// 		var userImage = $(thisDiv).children('img').attr('src');
	// 		var groupData = '<div class="user__data d-inline-block position-relative mr-4 online" data-user="'+user+'" style="flex-shrink: 0;">'+
	// 							'<div class="user__image">'+
	// 								'<img class=" rounded-circle" src="'+userImage+'" alt="'+user+'" width="60">'+
	// 							'</div>'+
	// 							'<div class="user__name text-center font-12 mt-1 line-height-default" style="max-width:60px">'+
	// 								'<span>'+user+'</span>'+
	// 							'</div>'+
	// 						'</div>';
	// 		$(thisDiv).addClass('active');				
	// 		$('.user__in__group').append(groupData);
	// 		$('.user__in__group').show();
	// 		$('.user__in__group').addClass('d-flex');
	// 	}else{ 
	// 		$(thisDiv).removeClass('active');
	// 		var user =  $(thisDiv).children('.userName').html();
	// 		$('.user__in__group .user__data[data-user="'+user+'"]').remove();
	// 		if($('.user__in__group').children().length < 1 ){
	// 			$('.user__in__group').removeClass('d-flex');
	// 			$('.user__in__group').hide();
	// 		}
	// 	}
	// }
	
	$(document).on('click','.user__in__group .remove-user',function(){
		var user = $(this).parents('.user__data').attr('data-user');
		$('#groupChat1 #user_group_names ul li a[data-username="'+user+'"]').removeClass('active');
		$(this).parents('.user__data').remove();
		if($('.user__in__group').children().length < 1 ){
			$('.user__in__group').removeClass('d-flex');
			$('.user__in__group').hide();
		}
	});
	
	
	
	$(".physical_input").keyup(function(){
		  var searhTxt = $(this).val();
		  if(searhTxt != "")
		  {
			$(this).parent('.physical_input_box').addClass('keypress-hover');
		  }
		  else
		  {
			$(this).parent('.physical_input_box').removeClass('keypress-hover');
		  }
	});
	
	
	$(".physical_part .physical_navs li a").click(function(){
		$(".physical_part .physical_navs li").removeClass('active');
		$(this).parent('li').addClass('active');
		var dataToggle = $(this).attr('data-toggle');
		$(".physical_part .physical_tabs_content .tabs_content").each(function(){
			var id = $(this).attr('id');
			if(dataToggle == id){
				$(".physical_part .physical_tabs_content .tabs_content").removeClass('active');
				$(this).addClass('active');
			}
		});
	})
	
	
	$("#searchcr a").click(function(){
		var value = $(this).html();
		var input = $('#cr');
		input.val(value);
	});
	$("#searchcr1 a").click(function(){
		var value = $(this).html();
		var input = $('#cr1');
		input.val(value);
	});
	$("#searchcr a").click(function(){
		$(".physical_input_box").removeClass("keypress-hover");       
	
	});
	$("#searchcr1 a").click(function(){
		$(".physical_input_box").removeClass("keypress-hover");       
	
	});
	$("#reportbtn li a").click(function(){
		$("#step2").removeClass("disabled");
		$(this).addClass("active");   
	});
	
	$(".rsp-home-tab .box-for-width .box-of-img").click(function(){
			if($(this).hasClass('active')){
				$('.rsp-home-tab .box-for-width .box-of-img').removeClass('active');
			}else{
				$('.rsp-home-tab .box-for-width .box-of-img').removeClass('active');
				$(this).addClass('active');
			}
			var dataId = $(this).attr('id');
			if($('.mobile-menu.az-sidebar[data-id="'+dataId+'"]').hasClass('active')){
				$('.mobile-menu.az-sidebar').removeClass('active');
				$('.mobile-menu.az-sidebar').hide();
			}else{
				$('.mobile-menu.az-sidebar').hide();
				$('.mobile-menu.az-sidebar').removeClass('active');
				$('.mobile-menu.az-sidebar[data-id="'+dataId+'"]').addClass('active');
				$('.mobile-menu.az-sidebar[data-id="'+dataId+'"]').show();
			}
		});

		$("#footer-bars-click").click(function(){
			$(".leftside-menu.position-fixed").removeClass('show');
			$('.return-management-system .second_header').removeClass('zi-high');
			//$('.button-menu-mobile.open-left').hide();
		});

		$("#rspn-footer-bar-search").click(function(){
		    $('#rspn-footer-box-search').toggleClass("opacity-0");
		    $('#rspn-footer-box-search').parent().siblings().toggleClass("d-none");
		    $('.rspn-footer-search-suggst').addClass('d-none');
		    $('.rspn-footer-search-suggst').removeClass('d-block');
		});

	jQuery("#Status_active3").click(function(){
        jQuery('#show_Active3').show();
        jQuery('#show_Away3').hide();
								jQuery('#show_Dis3').hide();
		jQuery('#show_Invisible3').hide();
		jQuery('#status-online').show();
		jQuery('#status-warning').hide();
		jQuery('#status-danger').hide();
		jQuery('#status-invisible').hide();
								
	});
	jQuery("#Status_away3").click(function(){
        jQuery('#show_Active3').hide();
		jQuery('#show_Dis3').hide();
		jQuery('#show_Invisible3').hide();
		jQuery('#show_Away3').show();
		
		jQuery('#status-online').hide();
		jQuery('#status-warning').show();
		jQuery('#status-danger').hide();
		jQuery('#status-invisible').hide();
	});
	jQuery("#Status_dis3").click(function(){
        jQuery('#show_Active3').hide();
		jQuery('#show_Dis3').show();
		jQuery('#show_Invisible3').hide();
		jQuery('#show_Away3').hide();
		
		jQuery('#status-online').hide();
		jQuery('#status-warning').hide();
		jQuery('#status-danger').show();
		jQuery('#status-invisible').hide();
	});
	jQuery("#Status_invisible3").click(function(){
	    jQuery('#show_Active3').hide();
		jQuery('#show_Dis3').hide();
		jQuery('#show_Invisible3').show();
		jQuery('#show_Away3').hide();
		
		jQuery('#status-online').hide();
		jQuery('#status-warning').hide();
		jQuery('#status-danger').hide();
		jQuery('#status-invisible').show();
	});

	jQuery("#Status_active4").click(function(){
		jQuery('#show_Active4').show();
		jQuery('#show_Away4').hide();
jQuery('#show_Dis4').hide();
jQuery('#show_Invisible4').hide();
});
jQuery("#Status_away4").click(function(){
		jQuery('#show_Active4').hide();
jQuery('#show_Dis4').hide();
jQuery('#show_Invisible4').hide();
		jQuery('#show_Away4').show();
});
jQuery("#Status_dis4").click(function(){
		jQuery('#show_Active4').hide();
jQuery('#show_Dis4').show();
jQuery('#show_Invisible4').hide();
		jQuery('#show_Away4').hide();
});
jQuery("#Status_invisible4").click(function(){
jQuery('#show_Active4').hide();
jQuery('#show_Dis4').hide();
jQuery('#show_Invisible4').show();
		jQuery('#show_Away4').hide();
});
		
	$(document).on("click",".our-custom-select:not(.disabled)",function(){
		$(this).toggleClass('active');
	});
	$(document).on("click",".our-custom-select.dropdown",function(){
		$(this).removeClass('active');
	});
	$(".our-custom-select .options").on('click','li',function(){
		let txt = $(this).attr('value');
		$(this).parent(".options").siblings('.selected-value').find('input').val(txt);
		$(this).parent(".options").siblings('.selected-value').find('.sel-value').text($(this).text());
	});
	$(document).on('click','#accordioncolor #color ul li',function(){
		$('#accordioncolor #color ul li').removeClass('active');
		$(this).addClass('active');
	});
	$(document).on('click','#mobileaccordioncolor #color ul li',function(){
		$('#mobileaccordioncolor #color ul li').removeClass('active');
		$(this).addClass('active');
	});
	$(document).on('click','.all_product .brand-like .like-icon', function(){
		$(this).toggleClass('active');
	});
	 
	$(document).on('click','.variant-content .add-gallery-img',function(){
		$(this).parents('.dropbtn').next().trigger('click');
	});
	
	$(document).on('change','.variant-content .report_screenshot',function(){ 
		var numFiles = $(this)[0].files.length;
		var id = $(this).attr('id');
		for(i=0; i < numFiles; i++){
			
			var randomNumber = Math.floor(Math.random()*90000) + 10000;
			var progressDiv = 	'<div class="d-flex mt-4 align-items-center data'+randomNumber +'">'+
									'<img src="'+URL.createObjectURL(event.target.files[i])+'" class="w-h-65px radius-4"/>'+
									'<div class="ml-3 w-100">'+
										'<div class="small-progress my-2">'+ 
											'<div class="d-flex align-items-center">'+
												'<span class="file-name" style="overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;"></span>'+
												'<span class="loaded_n_total ml-3" style="flex-shrink: 0;"></span>'+
											'</div>'+
											'<div id="progressBar'+randomNumber+'" class="progress-bar" role="progressbar" value="0" max="100" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:0;height:4px"></div>'+
											'<div class="upload-status"></div>'+
										'</div>'+
									'</div>'+
									'<div class="success w-h-28px ml-3">'+
										'<img src="assets/image/success.png" alt="success" width="28" style="display:none;">'+
									'</div>'+
								'</div>';
			$('.uploadinpop .modal-content .modal-content-popup').append(progressDiv);
			$('.uploadinpop').css('display','block');
			uploadFile(id,'progressBar'+randomNumber,randomNumber,i);
			var img = URL.createObjectURL(event.target.files[i])
			var html =	'<div class="small-image position-relative image-container-div mr-4" href="'+img+'">'+
							'<div class="img-box" href="'+img+'">'+
								'<img src="'+img+'" width="38" height="48">'+
							'</div>'+
							'<div class="position-absolute menuhover cursor-pointer" style="top: -10px;right: -10px;">'+
								'<img src="assets/image/close.svg" class="imgnone delete-uploaded-smallimage"  data-target="'+img+'" alt="Delete Image" width="20">'+
								'<img src="assets/image/close_hover.svg"  data-target="'+img+'" class="imgblock delete-uploaded-smallimage" alt="Delete Image" width="20">'+
							'</div>'+
						'</div>';
			$(this).parents('.variant-content').find('.variant-box-img').append(html);
			$('.variant-listing .variant-box-img').data('lightGallery').destroy(true);
			//smallImageGalleryData();
		}
		setTimeout(function(){ 
			$('.uploadinpop').css('display','none'); 
			$('.uploadinpop .modal-content .modal-content-popup').html('');
		}, 3000);
	});
	
	
	
	$(document).on('change','.profile-box #uplodFile1',function(){ 
		var numFiles = $(this)[0].files.length; 
		var id = $(this).attr('id');
		for(i=0; i < numFiles; i++){
			
			var randomNumber = Math.floor(Math.random()*90000) + 10000;
			var progressDiv = 	'<div class="d-flex mt-4 align-items-center data'+randomNumber +'">'+
									'<img src="'+URL.createObjectURL(event.target.files[i])+'" class="w-h-65px radius-4"/>'+
									'<div class="ml-3 w-100">'+
										'<div class="small-progress my-2">'+ 
											'<div class="d-flex align-items-center">'+
												'<span class="file-name" style="overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;"></span>'+
												'<span class="loaded_n_total ml-3" style="flex-shrink: 0;"></span>'+
											'</div>'+
											'<div id="progressBar'+randomNumber+'" class="progress-bar" role="progressbar" value="0" max="100" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:0;height:4px"></div>'+
											'<div class="upload-status"></div>'+
										'</div>'+
									'</div>'+
									'<div class="success w-h-28px ml-3">'+
										'<img src="assets/image/success.png" alt="success" width="28" style="display:none;">'+
									'</div>'+
								'</div>';
			$('.uploadinpop .modal-content .modal-content-popup').append(progressDiv);
			$('.uploadinpop').css('display','block');
			uploadFile(id,'progressBar'+randomNumber,randomNumber,i);
		}
		setTimeout(function(){ 
			$('.uploadinpop').css('display','none'); 
			$('.uploadinpop .modal-content .modal-content-popup').html('');
		}, 3000);
	});
	
	$(document).on('change','.banner-widget #uplodFileBanner',function(){ 
		var numFiles = $(this)[0].files.length; 
		var id = $(this).attr('id');
		for(i=0; i < numFiles; i++){
			
			var randomNumber = Math.floor(Math.random()*90000) + 10000;
			var progressDiv = 	'<div class="d-flex mt-4 align-items-center data'+randomNumber +'">'+
									'<img src="'+URL.createObjectURL(event.target.files[i])+'" class="w-h-65px radius-4"/>'+
									'<div class="ml-3 w-100">'+
										'<div class="small-progress my-2">'+ 
											'<div class="d-flex align-items-center">'+
												'<span class="file-name" style="overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;"></span>'+
												'<span class="loaded_n_total ml-3" style="flex-shrink: 0;"></span>'+
											'</div>'+
											'<div id="progressBar'+randomNumber+'" class="progress-bar" role="progressbar" value="0" max="100" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:0;height:4px"></div>'+
											'<div class="upload-status"></div>'+
										'</div>'+
									'</div>'+
									'<div class="success w-h-28px ml-3">'+
										'<img src="assets/image/success.png" alt="success" width="28" style="display:none;">'+
									'</div>'+
								'</div>';
			$('.uploadinpop .modal-content .modal-content-popup').append(progressDiv);
			$('.uploadinpop').css('display','block');
			uploadFile(id,'progressBar'+randomNumber,randomNumber,i);
		}
		setTimeout(function(){ 
			$('.uploadinpop').css('display','none'); 
			$('.uploadinpop .modal-content .modal-content-popup').html('');
		}, 3000);
	});
	
	$(document).on('change','.uploadicons-wrap .report_screenshot',function(){ 
		$('.browser_upload.uploadicons-wrap.main_show').removeClass('main_show');
		var numFiles = $(this)[0].files.length;
		var id = $(this).attr('id');
		for(i=0; i < numFiles; i++){
			var fileName = $(this)[0].files[i].name; 
			var fileSize = $(this)[0].files[i].size;
			var img = URL.createObjectURL(event.target.files[i]);
			var randomNumber = Math.floor(Math.random()*90000) + 10000;
			var progressDiv = 	'<div class="d-flex mt-4 align-items-center data'+randomNumber +'">'+
									'<img src="'+img+'" class="w-h-65px radius-4"/>'+
									'<div class="ml-3 w-100">'+
										'<div class="small-progress my-2">'+ 
											'<div class="d-flex align-items-center">'+
												'<span class="file-name" style="overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;"></span>'+
												'<span class="loaded_n_total ml-3" style="flex-shrink: 0;"></span>'+
											'</div>'+
											'<div id="progressBar'+randomNumber+'" class="progress-bar" role="progressbar" value="0" max="100" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:0;height:4px"></div>'+
											'<div class="upload-status"></div>'+
										'</div>'+
									'</div>'+
									'<div class="success w-h-28px ml-3">'+
										'<img src="assets/image/success.png" alt="success" width="28" style="display:none;">'+
									'</div>'+
								'</div>';
			$('.uploadinpop .modal-content .modal-content-popup').append(progressDiv);
			$('.uploadinpop').css('display','block');
			uploadFile(id,'progressBar'+randomNumber,randomNumber,i);
			
			var html =  '<div class="row" data-target="'+img+'">'+
							'<div class="col-10 col-sm-10 col-md-10 align-self-center pl-0">'+
								'<div class="summary d-flex">'+
									'<div class="align-self-center"><p class="font-17 counter"></p></div>'+
									'<div class="pl-4 m-p-0 pr-4 align-self-center pdg-left-right"><img src="assets/img/digital-campaign.svg" width="40"></div>'+
									'<p class="mt-0 auctiontxt mx-2 d-flex align-self-center text-dark">'+
										'<span class="file-name">'+fileName+'</span><span class="file-size ml-5">'+bytesToSize(fileSize)+'</span>'+
										//'<p class="mt-0 auctiontxt m-p-0 ml-auto pl-3 align-self-center">'+
											//'<button class="added-btn bttn bttn-primary" style="background: #B1F2AC !important;color: #075001 !important;max-width: 90px !important;font-weight: 500 !important;box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.2) !important;height: 25px !important;padding: 2px 14px !important;">Added</button>'+
										//'</p>'+
									'</p>'+
								'</div>'+
							'</div>'+
							'<div class="col-2 col-sm-2 col-md-2 align-self-center pl-0">'+
								'<div class="summary d-flex"  style="float: right;">'+
									'<div class="pl-4 pr-0">'+
										'<a href="#" data-delete="'+img+'" class="delete-this-image">'+
											'<div class="menuhover align-self-center">'+
												'<img src="assets/img/trash.svg" class="imgnone" width="35">'+
												'<img src="assets/img/trash-hover.svg" class="imgblock" width="35">'+
											'</div>'+
										'</a>'+
									'</div>'+
								'</div>'+
							'</div>'+
						'</div>';
			$('.counter-reset-zero.pdg-right').append(html);
		}
		setTimeout(function(){ 
			$('.uploadinpop').css('display','none'); 
			$('.uploadinpop .modal-content .modal-content-popup').html('');
		}, 3000);
	});
	
	$(document).on('click','.delete-this-image',function(e){
		e.preventDefault();
		var dataId = $(this).attr('data-delete');
		$("#uploafile").modal('show');
		$("#uploafile .modal-footer .popbutton").attr("data-delete",dataId);
	});
	
	$(document).on('click','#uploafile .modal-footer .popbutton',function(){
		var imgUrl = $(this).attr('data-delete');
		$('.counter-reset-zero.pdg-right .row[data-target="'+imgUrl+'"]').remove();
	});
	
	$(document).on('click','.upload_image_div .img-box,.variant-box .addImages',function(){
		$(this).next().find('.dd-button').trigger('click');
	});
	$(document).on('click','.uploadImageTrigger',function(){
		$('.upload_image_div .img-box').find('.dd-button .dd-input').prop('checked',false);
		$('#uploadPictureInput').trigger('click');
	});
	//imageLightGallery();
	//smallImageGallery();
	//smallImageGalleryData();
	var imageArray = [];
	$(document).on('change','#uploadPictureInput',function(){ 
		var numFiles = $(this)[0].files.length;
		var id = $(this).attr('id'); 
		for(i=0; i < numFiles; i++){
			var randomNumber = Math.floor(Math.random()*90000) + 10000;
			var progressDiv = 	'<div class="d-flex mt-4 align-items-center data'+randomNumber +'">'+
									'<img src="'+URL.createObjectURL(event.target.files[i])+'" class="w-h-65px radius-4"/>'+
									'<div class="ml-3 w-100">'+
										'<div class="small-progress my-2">'+ 
											'<div class="d-flex align-items-center">'+
												'<span class="file-name" style="overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;"></span>'+
												'<span class="loaded_n_total ml-3" style="flex-shrink: 0;"></span>'+
											'</div>'+
											'<div id="progressBar'+randomNumber+'" class="progress-bar" role="progressbar" value="0" max="100" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:0;height:4px"></div>'+
											'<div class="upload-status"></div>'+
										'</div>'+
									'</div>'+
									'<div class="success w-h-28px ml-3">'+
										'<img src="assets/image/success.png" alt="success" width="28" style="display:none;">'+
									'</div>'+
								'</div>';
			$('.uploadinpop .modal-content .modal-content-popup').append(progressDiv);
			$('.uploadinpop').css('display','block');
			uploadFile(id,'progressBar'+randomNumber,randomNumber,i);
			var imgUrl = URL.createObjectURL(event.target.files[i]);
			var html = 	'<div class="carousel-item text-center" href="'+imgUrl+'">'+
								'<img  class="border p-2  radius-5" src="'+imgUrl+'">'+
						'</div>';
			if(imageArray.length === 0){
				var html = 	'<div class="carousel-item active text-center" href="'+imgUrl+'">'+
								'<img  class="border p-2  radius-5" src="'+imgUrl+'">'+
						'</div>';
			}
			var $owl = $("#product .carousel-inner");
			$owl.find('.default-img').remove();
			$owl.append(html);
			$owl.trigger('refresh.owl.carousel');
			imageArray.push(imgUrl);
			$('.image-container-div').remove();
			imageArray.forEach(addImageFunction);
			//$('#product .carousel-inner').data('lightGallery').destroy(true);
			//$('#upload_your_picture').data('lightGallery').destroy(true);
			//imageLightGallery();
			//smallImageGallery();
		}
		setTimeout(function(){ 
			$('.uploadinpop').css('display','none'); 
			$('.uploadinpop .modal-content .modal-content-popup').html('');
		}, 3000);
	});
	
	$(document).on('click','.image-container-div .delete-uploaded-image',function(){
		var dataId = $(this).attr('data-target');
		$("#fordelete").modal('show');
		$("#fordelete .modal-footer .popbutton").attr("data-delete",dataId);
	});
	$(document).on('click','#fordelete .modal-footer .popbutton',function(){
		var imgUrl = $(this).attr('data-delete');
		var $owl = $("#product .carousel-inner");
		$owl.find('.carousel-item[href="'+imgUrl+'"]').remove();
		$owl.trigger('refresh.owl.carousel');
		imageArray = arrayRemove(imageArray, imgUrl);
		$('.image-container-div').remove();
		imageArray.forEach(addImageFunction);
		if(imageArray.length === 0){
			var html = 	'<div class="carousel-item default-img text-center active" href="assets/img/demo_backgorun.png">'+
							'<img src="assets/img/demo_backgorun.png">'+
						'</div>';
			$owl.append(html)
		}
		$('#product .carousel-inner').data('lightGallery').destroy(true);
		$('#upload_your_picture').data('lightGallery').destroy(true);
		//imageLightGallery();
		//smallImageGallery();
	});
	$(document).on('click','.image-container-div .delete-uploaded-smallimage',function(){
		var dataId = $(this).attr('data-target');
		$("#fordeletesmallimage").modal('show');
		$("#fordeletesmallimage .modal-footer .popbutton").attr("data-delete",dataId);
	});
	$(document).on('click','#fordeletesmallimage .modal-footer .popbutton',function(){
		var imgUrl = $(this).attr('data-delete');
		$('.variant-content .small-image[href="'+imgUrl+'"]').remove();
		//$('.variant-content .small-image[href="'+imgUrl+'"]').addClass('.asdf');
	});
	$(document).on('click','.dropbtn .dd-button',function(e){
		e.preventDefault();
		if($(this).next('.dd-input').prop('checked')){
			$(this).next('.dd-input').prop('checked',false);
		}else{
			$('.dropbtn .dd-input').prop('checked',false);
			$(this).next('.dd-input').prop('checked',true)
		}
		
	}); 
	
	var tooltipSlider = document.getElementById('slider-tooltips');
	if(tooltipSlider){
		noUiSlider.create(tooltipSlider, {
			start: [0, 1, 5],
			tooltips: [false, wNumb({
				decimals: 1
			}), true],
			connect: true,
			range: {
				'min': 1,
				'max': 5
			}
		});
	}
	var tooltipSliderMobile = document.getElementById('mobile-slider-tooltips');
	if(tooltipSliderMobile){
		noUiSlider.create(tooltipSliderMobile, {
			start: [0, 1, 5],
			tooltips: [false, wNumb({
				decimals: 1
			}), true],
			connect: true,
			range: {
				'min': 1,
				'max': 5
			}
		});
	}
	var tooltipSlider1 = document.getElementById('price-range');
	var tooltipSliderMobile1 = document.getElementById('mobile-price-range');
	if(tooltipSlider1){
		noUiSlider.create(tooltipSlider1, {
			animate: true,
			start: [0, 0, 120],
			tooltips: [false, wNumb({
				decimals: 1
			}), true],
			connect: true,
			range: {
				'min': 0,
				'max': 200
			}
		});
	}
	if(tooltipSliderMobile1){
		noUiSlider.create(tooltipSliderMobile1, {
			animate: true,
			start: [0, 0, 120],
			tooltips: [false, wNumb({
				decimals: 1
			}), true],
			connect: true,
			range: {
				'min': 0,
				'max': 200
			}
		});
	}
	var horizontalTypeSlider = $('.horizontal-type-slider'); 
	horizontalTypeSlider.owlCarousel({
		margin: 10,
		loop: false,
		nav:false,
		dots:false,
		autoWidth:true,
	});

});
function _(el) {
  return document.getElementById(el);
}

function uploadFile(id,progressId,randomNumber,i) {
	var file = _(id).files[i];
	var formdata = new FormData();
	formdata.append(id, file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener('progress', function(evt) {
		var imageSize = bytesToSize(evt.total);
		$('.data'+randomNumber+' .loaded_n_total').html(imageSize);
		$('.data'+randomNumber+' .file-name').html(file.name);
		var percent = (evt.loaded / evt.total) * 100;
		//_(progressId).style.width = Math.round(percent)+"%";
		$('.data'+randomNumber+' .upload-status').html(Math.round(percent) + "% uploaded");
		if(Math.round(percent) == 100){
			$('.data'+randomNumber+' .success img').show();
		}
	}, false);
	ajax.open("POST", "file_upload_parser.php?name="+id); 
	ajax.send(formdata);
}
function bytesToSize(bytes) { 
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Byte';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return  Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i]; 
}


function addImageFunction(item, index) {
	var htmlDiv = '';
	var imgOptions 	= 	'<div class="dropbtn">'+
							'<label class="dropdown">'+
								'<div class="dd-button">'+
									'<img src="img/close-icon.svg" class="w-h-18px on-hover" alt="Delete Message"'+
								'</div>'+
								'<input type="checkbox" class="dd-input d-none">'+
								'<ul class="photo-dropdown dd-menu d-none">'+
									'<li class="m-0 w-100 hover-grey"><img src="assets/image/readmessage.svg" class="mr-3" alt="Mark as read" width="32"> Title Picture</li>'+
									'<li class="m-0 w-100 hover-grey"><img src="assets/image/crop_image.svg" class="mr-3" alt="Mark as read" width="32"> Crop Picture</li>'+
									'<li class="m-0 w-100  hover-grey delete-uploaded-image" data-target="'+item+'"><img src="assets/image/delete.svg" class="mr-3" alt="Delete Message" width="32"> Delete Picture</li>'+
								'</ul>'+
							'</label>'+
						'</div>';
	var htmlDiv = 	'<li class="image-container-div border">'+
						'<div class="img-box" href="'+item+'"><img src="'+item+'" /></div>'+
						imgOptions+
					'</li>';
	/*if(index == 10){
		htmlDiv = 	'<li class="extra_image_div image-container-div border">'+
						'<div class="img-box" href="'+item+'"><img src="'+item+'" /></div>'+
						'<div class="img-name-more"></div>'+
						imgOptions+
					'</li>';
	}else if(index > 10){
		var number = parseInt(index) - parseInt(10);
		$('.extra_image_div .img-box').addClass('img-box-more');
		$('.extra_image_div .img-box-more').removeClass('img-box');
		$('.extra_image_div .img-name-more').html('+'+number);
	}*/
	$(htmlDiv).insertBefore($('.upload_image_div'));
}

function arrayRemove(arr, value) { 
	return arr.filter(function(ele){ 
		return ele != value; 
	});
} 

// Initialize function, create initial tokens with itens that are already selected by the user
function init(element) {
	// Create div that wroaps all the elements inside (select, elements selected, search div) to put select inside
	const wrapper = document.createElement("div");
	wrapper.addEventListener("click", clickOnWrapper);
	wrapper.classList.add("multi-select-component");

	// Create elements of search
	const search_div = document.createElement("div");
	search_div.classList.add("search-container");
	const input = document.createElement("input");
	input.classList.add("selected-input");
	input.setAttribute("autocomplete", "off");
	input.setAttribute("tabindex", "0");
	input.addEventListener("keyup", inputChange);
	input.addEventListener("keydown", deletePressed);
	input.addEventListener("click", openOptions);

	const dropdown_icon = document.createElement("a");
	dropdown_icon.setAttribute("href", "#");
	dropdown_icon.classList.add("dropdown-icon");

	dropdown_icon.addEventListener("click", clickDropdown);
	const autocomplete_list = document.createElement("ul");
	autocomplete_list.classList.add("autocomplete-list")
	search_div.appendChild(input);
	search_div.appendChild(autocomplete_list);
	search_div.appendChild(dropdown_icon);

	// set the wrapper as child (instead of the element)
	element.parentNode.replaceChild(wrapper, element);
	// set element as child of wrapper
	wrapper.appendChild(element);
	wrapper.appendChild(search_div);

	createInitialTokens(element);
	addPlaceholder(wrapper);
}

function removePlaceholder(wrapper) {
	const input_search = wrapper.querySelector(".selected-input");
	input_search.removeAttribute("placeholder");
}

function addPlaceholder(wrapper) {
	const input_search = wrapper.querySelector(".selected-input");
	const tokens = wrapper.querySelectorAll(".selected-wrapper");
	if (!tokens.length && !(document.activeElement === input_search))
		input_search.setAttribute("placeholder", "---------");
}


// Function that create the initial set of tokens with the options selected by the users
function createInitialTokens(select) {
	let {
		options_selected
	} = getOptions(select);
	const wrapper = select.parentNode;
	for (let i = 0; i < options_selected.length; i++) {
		createToken(wrapper, options_selected[i]);
	}
}


// Listener of user search
function inputChange(e) {
	const wrapper = e.target.parentNode.parentNode;
	const select = wrapper.querySelector("select");
	const dropdown = wrapper.querySelector(".dropdown-icon");

	const input_val = e.target.value;

	if (input_val) {
		dropdown.classList.add("active");
		populateAutocompleteList(select, input_val.trim());
	} else {
		dropdown.classList.remove("active");
		const event = new Event('click');
		dropdown.dispatchEvent(event);
	}
}


// Listen for clicks on the wrapper, if click happens focus on the input
function clickOnWrapper(e) {
	const wrapper = e.target;
	if (wrapper.tagName == "DIV") {
		const input_search = wrapper.querySelector(".selected-input");
		const dropdown = wrapper.querySelector(".dropdown-icon");
		if (!dropdown.classList.contains("active")) {
			const event = new Event('click');
			dropdown.dispatchEvent(event);
		}
		input_search.focus();
		removePlaceholder(wrapper);
	}

}

function openOptions(e) {
	const input_search = e.target;
	const wrapper = input_search.parentElement.parentElement;
	const dropdown = wrapper.querySelector(".dropdown-icon");
	if (!dropdown.classList.contains("active")) {
		const event = new Event('click');
		dropdown.dispatchEvent(event);
	}
	e.stopPropagation();

}

// Function that create a token inside of a wrapper with the given value
function createToken(wrapper, value) {
	const search = wrapper.querySelector(".search-container");
	// Create token wrapper
	const token = document.createElement("div");
	token.classList.add("selected-wrapper");
	const token_span = document.createElement("span");
	token_span.classList.add("selected-label");
	token_span.innerText = value;
	const close = document.createElement("a");
	close.classList.add("selected-close");
	close.setAttribute("tabindex", "-1");
	close.setAttribute("data-option", value);
	close.setAttribute("data-hits", 0);
	close.setAttribute("href", "#");
	close.innerText = "x";
	close.addEventListener("click", removeToken)
	token.appendChild(token_span);
	token.appendChild(close);
	wrapper.insertBefore(token, search);
}


// Listen for clicks in the dropdown option
function clickDropdown(e) {

	const dropdown = e.target;
	const wrapper = dropdown.parentNode.parentNode;
	const input_search = wrapper.querySelector(".selected-input");
	const select = wrapper.querySelector("select");
	dropdown.classList.toggle("active");

	if (dropdown.classList.contains("active")) {
		removePlaceholder(wrapper);
		input_search.focus();

		if (!input_search.value) {
			populateAutocompleteList(select, "", true);
		} else {
			populateAutocompleteList(select, input_search.value);

		}
	} else {
		clearAutocompleteList(select);
		addPlaceholder(wrapper);
	}
}


// Clears the results of the autocomplete list
function clearAutocompleteList(select) {
	const wrapper = select.parentNode;

	const autocomplete_list = wrapper.querySelector(".autocomplete-list");
	autocomplete_list.innerHTML = "";
}

// Populate the autocomplete list following a given query from the user
function populateAutocompleteList(select, query, dropdown = false) {
	const {
		autocomplete_options
	} = getOptions(select);


	let options_to_show;

	if (dropdown)
		options_to_show = autocomplete_options;
	else
		options_to_show = autocomplete(query, autocomplete_options);

	const wrapper = select.parentNode;
	const input_search = wrapper.querySelector(".search-container");
	const autocomplete_list = wrapper.querySelector(".autocomplete-list");
	autocomplete_list.innerHTML = "";
	const result_size = options_to_show.length;

	if (result_size == 1) {

		const li = document.createElement("li");
		li.innerText = options_to_show[0];
		li.setAttribute('data-value', options_to_show[0]);
		li.addEventListener("click", selectOption);
		autocomplete_list.appendChild(li);
		if (query.length == options_to_show[0].length) {
			const event = new Event('click');
			li.dispatchEvent(event);

		}
	} else if (result_size > 1) {

		for (let i = 0; i < result_size; i++) {
			const li = document.createElement("li");
			li.innerText = options_to_show[i];
			li.setAttribute('data-value', options_to_show[i]);
			li.addEventListener("click", selectOption);
			autocomplete_list.appendChild(li);
		}
	} else {
		const li = document.createElement("li");
		li.classList.add("not-cursor");
		li.innerText = "No options found";
		autocomplete_list.appendChild(li);
	}
}


// Listener to autocomplete results when clicked set the selected property in the select option 
function selectOption(e) {
	const wrapper = e.target.parentNode.parentNode.parentNode;
	const input_search = wrapper.querySelector(".selected-input");
	const option = wrapper.querySelector('select option[value="${e.target.dataset.value}"]');

	option.setAttribute("selected", "");
	createToken(wrapper, e.target.dataset.value);
	if (input_search.value) {
		input_search.value = "";
	}

	input_search.focus();

	e.target.remove();
	const autocomplete_list = wrapper.querySelector(".autocomplete-list");


	if (!autocomplete_list.children.length) {
		const li = document.createElement("li");
		li.classList.add("not-cursor");
		li.innerText = "No options found";
		autocomplete_list.appendChild(li);
	}

	const event = new Event('keyup');
	input_search.dispatchEvent(event);
	e.stopPropagation();
}


// function that returns a list with the autcomplete list of matches
function autocomplete(query, options) {
	// No query passed, just return entire list
	if (!query) {
		return options;
	}
	let options_return = [];

	for (let i = 0; i < options.length; i++) {
		if (query.toLowerCase() === options[i].slice(0, query.length).toLowerCase()) {
			options_return.push(options[i]);
		}
	}
	return options_return;
}


// Returns the options that are selected by the user and the ones that are not
function getOptions(select) {
	// Select all the options available
	const all_options = Array.from(
		select.querySelectorAll("option")
	).map(el => el.value);

	// Get the options that are selected from the user
	const options_selected = Array.from(
		select.querySelectorAll("option:checked")
	).map(el => el.value);

	// Create an autocomplete options array with the options that are not selected by the user
	const autocomplete_options = [];
	all_options.forEach(option => {
		if (!options_selected.includes(option)) {
			autocomplete_options.push(option);
		}
	});

	autocomplete_options.sort();

	return {
		options_selected,
		autocomplete_options
	};

}

// Listener for when the user wants to remove a given token.
function removeToken(e) {
	// Get the value to remove
	const value_to_remove = e.target.dataset.option;
	const wrapper = e.target.parentNode.parentNode;
	const input_search = wrapper.querySelector(".selected-input");
	const dropdown = wrapper.querySelector(".dropdown-icon");
	// Get the options in the select to be unselected
	const option_to_unselect = wrapper.querySelector('select option[value="${value_to_remove}"]');
	option_to_unselect.removeAttribute("selected");
	// Remove token attribute
	e.target.parentNode.remove();
	input_search.focus();
	dropdown.classList.remove("active");
	const event = new Event('click');
	dropdown.dispatchEvent(event);
	e.stopPropagation();
}

// Listen for 2 sequence of hits on the delete key, if this happens delete the last token if exist
function deletePressed(e) {
	const wrapper = e.target.parentNode.parentNode;
	const input_search = e.target;
	const key = e.keyCode || e.charCode;
	const tokens = wrapper.querySelectorAll(".selected-wrapper");

	if (tokens.length) {
		const last_token_x = tokens[tokens.length - 1].querySelector("a");
		let hits = +last_token_x.dataset.hits;

		if (key == 8 || key == 46) {
			if (!input_search.value) {

				if (hits > 1) {
					// Trigger delete event
					const event = new Event('click');
					last_token_x.dispatchEvent(event);
				} else {
					last_token_x.dataset.hits = 2;
				}
			}
		} else {
			last_token_x.dataset.hits = 0;
		}
	}
	return true;
}

// You can call this function if you want to add new options to the select plugin
// Target needs to be a unique identifier from the select you want to append new option for example #multi-select-plugin
// Example of usage addOption("#multi-select-plugin", "tesla", "Tesla")
function addOption(target, val, text) {
	const select = document.querySelector(target);
	let opt = document.createElement('option');
	opt.value = val;
	opt.innerHTML = text;
	select.appendChild(opt);
}

document.addEventListener("DOMContentLoaded", () => {

	// get select that has the options available
	const select = document.querySelectorAll("[data-multi-select-plugin]");
	select.forEach(select => {

		init(select);
	});

	// Dismiss on outside click
	document.addEventListener('click', () => {
		// get select that has the options available
		const select = document.querySelectorAll("[data-multi-select-plugin]");
		for (let i = 0; i < select.length; i++) {
			if (event) {
				var isClickInside = select[i].parentElement.parentElement.contains(event.target);

				if (!isClickInside) {
					const wrapper = select[i].parentElement.parentElement;
					const dropdown = wrapper.querySelector(".dropdown-icon");
					const autocomplete_list = wrapper.querySelector(".autocomplete-list");
					//the click was outside the specifiedElement, do something
					dropdown.classList.remove("active");
					autocomplete_list.innerHTML = "";
					addPlaceholder(wrapper);
				}
			}
		}
	});

});
/*var selectVar = "";
selectVar = document.getElementById("budget");
if(selectVar){
	for (var i = 0; i <= 100; i++) {
		var option = document.createElement("option");
		option.text = i;
		option.value = i;

		select.appendChild(option);
	}
}*/

/*var html5Slider = document.getElementById("html5");

noUiSlider.create(html5Slider, {
	start: [0, 4],
	connect: true,
	range: {
		min: 0,
		max: 100
	}
});*/

var inputNumber = document.getElementById("budget");

var snapSlider = document.getElementById('driver-age');
if(snapSlider){
	noUiSlider.create(snapSlider, {
		start: [18, 65],
		step: 1,
		connect: true,
		tooltips: false,
		format: wNumb({
			decimals: 0,
			postfix: '',
		}),
		range: {
			'min': 18,
			'max': 65
		}
	});
	var snapValues = [
		document.getElementById('slider-snap-value-lower'),
		document.getElementById('slider-snap-value-upper')
	];

	snapSlider.noUiSlider.on('update', function(values, handle) {
		snapValues[handle].innerHTML = values[handle];
	});
}

//slide with in modal
$(function () {
	$('.first-content2').hide();
	$('.zero-button').on('click', function () {
		$('.zero-content').hide();
		$('.first-content').show();
	 });
  $('.first-button').on('click', function () {
    $('.first-content').hide();
    $('.second-content').show();
  });
  $('.back-content').on('click', function () {
    $('.second-content').hide();
    $('.first-content').show();
		});
		$('.second-button').on('click', function () {
			$('.second-content').hide();
			$('.third-content').show();
	});
	$('.back-content2').on('click', function () {
			$('.third-content').hide();
			$('.second-content').show();
	});
	$('.back-content0').on('click', function () {
		$('.first-content').hide();
		$('.zero-content').show();
		  });
});

/*var quill = new Quill("#snow-editor", {
	   theme: "snow",
	   modules: {
		   toolbar: [
			   [{
				   font: []
			   }, {
				   size: []
			   }],
			   ["bold", "italic", "underline"],
			   [{
				   color: []
			   }, {
				   background: []
			   }],
			   [{
				   header: [!1, 1, 2, 3, 4, 5, 6]
			   }],
			   [{
				   list: "ordered"
			   }, {
				   list: "bullet"
			   }, {
				   indent: "-1"
			   }, {
				   indent: "+1"
			   }],
			   ["direction", {
				   align: []
			   }],
			   ["image"]
		   ]
	   }
	});*/
	/*$( ".droppable-area1, .droppable-area2" ).sortable({
		connectWith: ".connected-sortable",
		stack: '.connected-sortable ul'
	}).disableSelection();*/


	// ------------step-wizard-------------
	$(document).on('ready',function(){
		$('#addTagBtn').on('click', function(){
			$('#tags option:selected').each(function() {
				$(this).appendTo($('#selectedTags'));
			});
		});

		$('.selectpicker').selectpicker();
		$('#removeTagBtn').on('click', function(){
			$('#selectedTags option:selected').each(function(el) {
				$(this).appendTo($('#tags'));
			});
		});
		$('.tagRemove').on('click', function(event){
			event.preventDefault();
			$(this).parent().remove();
		});
		$('ul.tags').on('click', function(){
			$('.search-field-pro').focus();
		});
		$('.search-field-pro').keypress(function(event) {
			if (event.which == '13') { 
				
				if (($(this).val() != '') && ($(".tags .addedTag:contains('" + $(this).val() + "') ").length == 0 ))  {
						$('<li class="addedTag bg-secondary radius-5 text-dark px-3 d-inline-block mr-3 my-1 position-relative">' + $(this).val() + '<span onclick="$(this).parent().remove();" style="top: -2px;right: -5px;line-height: 14px;" class="tagRemove position-absolute w-h-14px bg-grey text-center text-white font-12 rounded-circle">x</span><input type="hidden" value="' + $(this).val() + '" name="tags[]"></li>').insertBefore('.tags .tagAdd');
						$(this).val('');

				} else {
					$(this).val('');

				}
				return false;
			}
		});

	});
	$(document).ready(function () {
	   $('.secondtab').hide();
		$(document).on('click','#customoption',function(){
			
			const selectedvalue = $('.customvalue').val();
			
			if(selectedvalue=='Auction Digital Product'){
			  $('.firsttab').hide();
			  $('.secondtab').show();
			}else{
				 $('.secondtab').hide();
				  $('.firsttab').show();
			}
		});
		$('.nav-tabs > li a[title]').tooltip();
	
		//Wizard
		$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	
			var target = $(e.target);
	
			if (target.parent().hasClass('disabled')) {
				return false;
			}
		});
	
		//Datatable vendor order overview page
		$('#vendor-order-overview').DataTable({
					language: {
						searchPlaceholder: "Search Products"
					},
					dom: 'Blfrtip',
					buttons: [{
									extend: 'collection',
									text: 'Export',
									autoClose: true,
									buttons: [
										'excelHtml5',
										'csvHtml5',
										'pdfHtml5'
									],
									fade: true,
					}]
		});

		//Datatable vendor bundle overview page
		$('#vendor-bundle-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor voucher overview page
		$('#vendor-voucher-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor loyalcard overview page
		$('#vendor-loyalcard-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor shipping overview page
		$('#vendor-shipping-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor invoice overview page
		$('#vendor-invoice-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor credit note overview page
		$('#vendor-creditNote-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor deleiveryNote overview page
		$('#vendor-deleiveryNote-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor return overview page
		$('#vendor-return-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor customer overview page
		$('#vendor-customer-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor discount overview page
		$('#vendor-discount-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor custTransaction overview page
		$('#vendor-custTransaction-overview').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor customer-order-list overview page
		$('#customer-order-list').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor customer-future-traction overview page
		$('#customer-future-traction').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
		});
		
		//Datatable vendor gross-earning overview page
		$('#gross-earning').DataTable({
			language: {
				searchPlaceholder: "Search Products"
			},
			dom: 'Blfrtip',
			buttons: [{
							extend: 'collection',
							text: 'Export',
							autoClose: true,
							buttons: [
								'excelHtml5',
								'csvHtml5',
								'pdfHtml5'
							],
							fade: true,
			}]
});
		
	});
	$('#date-range-picker').daterangepicker({
		"timePicker": true,
		"ranges": {
						'Today': [moment(), moment()],
					'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
					'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
		},
		"startDate": "01/15/2022",
		"endDate": "01/21/2022"
}, function(start, end, label) {
	console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
});

// Single start datepicker
$('#single-start-datepicker').daterangepicker({
	"singleDatePicker": true,
	"showCustomRangeLabel": false,
	"startDate": "01/22/2022",
	"endDate": "01/28/2022"
}, function(start, end, label) {
console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
});

// Single start datepicker
$('#single-end-datepicker').daterangepicker({
	"singleDatePicker": true,
	"showCustomRangeLabel": false,
	"startDate": "01/22/2022",
	"endDate": "01/28/2022"
}, function(start, end, label) {
console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
});

// Start timepicker
$('.start-timePicker').timepicker({
	timeFormat: 'h:mm p',
	interval: 60,
	minTime: '10',
	maxTime: '6:00pm',
	defaultTime: '11',
	startTime: '10:00',
	dynamic: false,
	dropdown: true,
	scrollbar: true
});

$(".chooseDatefield").click(function() {
	$(".usage_date_checkbox").addClass('showdiv');
});

$(".right-now").click(function() {
	$(".usage_date_checkbox").removeClass('showdiv');
});

$('.calender-button').click(function () {
	$(this).addClass('calender-icon');
		$('.calender-button-click').addClass('expand');
});
	
$(document).on('click','.table-area .payout-tabs a',function(){
	$('.table-area .payout-tabs a').removeClass('active');
	var dataTarget = $(this).attr('data-target');
	$(this).addClass('active');
	$('.table-responsives > .dataTables_wrapper ').hide();
	$('.table-responsives > '+dataTarget).show();
});

	$(document).on('click','.prev-step',function (e) {
		var active = $('.wizard .nav-tabs li.active');
		prevTab(active);
	
	});
	$(document).on('click','.next-step',function (e) {
		var active = $('.wizard .nav-tabs li.active');
		active.next().removeClass('disabled');
		nextTab(active);
	});
	
	$(".our-custom-select .options").on('click','li',function(){
		//console.log('akash');
		let txt = $(this).text();
		$(this).parent(".options").siblings('.selected-value').find('input').val(txt);
		$(this).parent(".options").siblings('.selected-value').find('.sel-value').text(txt);
	});
	function nextTab(elem) {
		$(elem).next().find('a[data-toggle="tab"]').click();
	}
	function prevTab(elem) {
		$(elem).prev().find('a[data-toggle="tab"]').click();
	}
	
	
	$('.nav-tabs').on('click', 'li', function () {
		$('.nav-tabs li.active').removeClass('active');
		$(this).addClass('active');
	});

	$(function () {
		$('#mainCategory').change(function () {
			$('#subCategory').show();
	
		});
		$('#subCategory').change(function () {
			$('#fursubCategory').show();
	
		});
	});

	$('.user-notification-section .simplebar-offset ul.customer-tab').hide();
	$(document).on('click','.notificationType .type-wrapper .tab',function(){
		var datatarget = $(this).attr('data-target');
		$('.notificationType .type-wrapper .tab').removeClass('active');
		$(this).toggleClass('active');
		$('.user-notification-section .simplebar-offset ul.firend-tab').hide();
		$('.user-notification-section .simplebar-offset ul.customer-tab').hide();
		$('.user-notification-section .simplebar-offset ul.'+datatarget).show();
	});

	$(".ps-form--quick-search .our-custom-select .options").on('click','li',function(){
	$('.ps-form--quick-search .thisIsTextDiv').text($(this).text());
	var txt = $('.ps-form--quick-search .thisIsTextDiv').width();
	var actualWidth = txt + 73;
	$(this).parents('.our-custom-select').css({'min-width':actualWidth+'px','width':actualWidth+'px'})
});


  $( function() {
    //$( "#upload_your_picture" ).sortable({
      //revert: true
    //});
  } );

  $( function() {
    $( ".connected-sortable.droppable-area1" ).sortable({
      revert: true
    });
  } );

$(document).on('click','.is-animating.cancelcall',function(){
	UIkit.modal($(this).attr('data-target')).hide();
});

$(window).on('load', function (e) {
  $('.verification_left_part.mobile-box.flow-pages').hide();
  $('.verification_right_part.upload-step-section.flow-step').addClass('mr-0').addClass('w-100');
  $('.next-step').on('click', function (e){
  	$('.verification_left_part.mobile-box.flow-pages').show();
  	$('.verification_right_part.upload-step-section.flow-step').removeClass('mr-0').removeClass('w-100');
  });

  $('#second-slide-btn').on('click', function (e){
  	$('.verification_left_part.mobile-box.flow-pages').hide();
  	$('.verification_right_part.upload-step-section.flow-step').addClass('mr-0').addClass('w-100');
  });
 });

$(document).ready(function($) {
  $('.verification_left_part.mobile-box.flow-pages').hide();
  $('.verification_right_part.upload-step-section.flow-step').addClass('mr-0').addClass('w-100');
  $('.next-step').on('click', function (e){
  	$('.verification_left_part.mobile-box.flow-pages').show();
  	$('.verification_right_part.upload-step-section.flow-step').removeClass('mr-0').removeClass('w-100');
  });

  $('#second-slide-btn').on('click', function (e){
  	$('.verification_left_part.mobile-box.flow-pages').hide();
  	$('.verification_right_part.upload-step-section.flow-step').addClass('mr-0').addClass('w-100');
		});
		
		$('.second-slide-btn-click').on('click', function (e){
  	$('.verification_left_part.mobile-box.flow-pages').hide();
  	$('.verification_right_part.upload-step-section.flow-step').addClass('mr-0').addClass('w-100');
		});

  $('.show-new-right-offer').on('click', function (e){
  	$('#new-offerbox').show();
  	$('#old-offerbox').hide();
  });
  $('.hide-new-right-offer').on('click', function (e){
  	$('#new-offerbox').hide();
  	$('#old-offerbox').show();
		});
		$('.image-new-right-offer').on('click', function (e){
  	$('#productImage-offerbox').show();
  	$('#old-offerbox').hide();
		});
		$('.image-back-old-right-offer').on('click', function (e){
  	$('#productImage-offerbox').hide();
  	$('#old-offerbox').show();
		});
});

$('.plus-icon').click(function () {
	if ($(this).prev().val() < 1000) {
				$(this).prev().val(+$(this).prev().val() + 1);
	}
});
$('.minus-icon').click(function () {
	if ($(this).next().val() > 1) {
				if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
	}
});

$(".generat_btn").click(function(){
		var code = Math.random().toString(36).slice(2).toUpperCase();
		$("#discount_code").val(code);
		$(".sum_title").text(code);
	});



$('#appointmentAccount .collapse-btn').trigger('click');
$('.load-trigger').trigger('click');
$(document).on('click','.social-share-option .share',function(){
	$(this).find('.share-options').toggle();
});
$(document).on('click','#statusUserButton + .dropdown-menu a',function(){
	var color = $(this).find('span').css( "background-color" );
	$(this).parents('.dropdown').find('#statusUserButton').css("background-color",color);
});
$(document).on('click','#statusUserButton2 + .dropdown-menu a',function(){
	var color = $(this).find('span').css( "background-color" );
	$(this).parents('.dropdown').find('#statusUserButton2').css("background-color",color);
});

$(document).ready(function () {
	$(document).on('click','.button-menu-mobile2',function(){
		$('.leftside-menu ').addClass("show");
		$('.button-menu-mobile.open-left').show();
		$('.return-management-system .second_header').addClass('zi-high');
	});
	$(document).on('click','.button-menu-mobile.open-left',function(){
		$('.leftside-menu ').removeClass("show");
		//$('.button-menu-mobile.open-left').hide();
		$('.return-management-system .second_header').removeClass('zi-high');
	});

	
	$(document).on('click','.store-change-dropdown .dropdown-menu li',function(){
		var storename = $(this).find('.store-name').text();
		$(this).parents('.store-change-dropdown').find('button').text(storename);
	});

	$(document).on('click','.customer-search-list .list-group-item',function(){
		var customerName = $(this).find('.product-name').text();
		$(this).parents('.physical_input_box').addClass('hide').find('#dropdownMenuButton').val(customerName);
	});

	$(document).on('click','.main-category-row .customer-search-list .list-group-item',function(){
		var customerName = $(this).find('.product-name').text();
		$(this).parents('.physical_input_box').addClass('hide').find('#dropdownMenuButton').val(customerName);
		$(this).parents('.main-category-row').next().removeClass('d-none');
		//$('#sub-category-2').removeClass('d-none');
	});
	$(document).on('click','.sub-cat-choose .styled-select ul li',function(){
		alert('hello');
		//var customerName = $(this).find('.product-name').text();
		$(this).parents('.sub-cat-choose').next().removeClass('d-none');
	});

	$(function() {
		$('.sub-category-select').change(function(){
			$(this).parents('.sub-cat-choose').next().removeClass('d-none');
		});
});

	$(document).on('click', '#search-customer-input', function (e) { 
		//$('.search-return-note').toggleClass('uk-open');
	});
	$(document).on('click', '#search-product-input', function (e) { 
		//$('.search-product-note').toggleClass('uk-open');
	});
	
	$(document).on('click', '.value-text-ul li a', function (e) {
		e.preventDefault();
		var customSearch = $(this).find('.value-pro-text').text();
		$(this).parents('.search-return-note').removeClass('uk-open').prev('#search-customer-input').val(customSearch);
		e.stopPropagation();
	});

	$(document).on('click', '.value-product-ul li a', function (e) {
		e.preventDefault();
		var productSearch = $(this).find('.value-product-text').text();
		$(this).parents('.search-product-note').removeClass('uk-open').prev('#search-product-input').val(productSearch);
		e.stopPropagation();
	});

	$(document).on('click', '.header_search .searchs__results ul li a', function (e) {
		e.preventDefault();
		var headerSearch = $(this).find('.recent-search').text();
		$(this).parents('.searchs__results').removeClass('uk-open').prev('#searchs').val(headerSearch);
		e.stopPropagation();
	});

	/*$('#leftside-menu-container a[href="#delivery"]').trigger('click');
	$('#leftside-menu-container a[data-target="page-10"]').addClass('active');

	$('#leftside-menu-container a[href="#delivery"]').trigger('click');
	$('#leftside-menu-container a[data-target="page-11"]').addClass('active');

	$('#leftside-menu-container a[href="#delivery"]').trigger('click');
	$('#leftside-menu-container a[data-target="page-12"]').addClass('active');

	$('#leftside-menu-container a[href="#delivery"]').trigger('click');
	$('#leftside-menu-container a[data-target="page-13"]').addClass('active');

	$('#leftside-menu-container a[href="#delivery"]').trigger('click');
	$('#leftside-menu-container a[data-target="page-14"]').addClass('active');

	$('#leftside-menu-container a[href="#delivery"]').trigger('click');
	$('#leftside-menu-container a[data-target="page-15"]').addClass('active');

	/*$('#leftside-menu-container a[data-target="page-10"]').click(function(){
		$('#leftside-menu-container a[data-target="page-10"]').addClass('active');
		$('#leftside-menu-container a[data-target="page-10"]').siblings().removeClass('active');
	});

	$('#leftside-menu-container a[data-target="page-11"]').click(function(){
		$('#leftside-menu-container a[data-target="page-11"]').addClass('active');
		$('#leftside-menu-container a[data-target="page-11"]').siblings().removeClass('active');
	});*/

});

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

$(function () {
	$("#forgotpassword-email").keyup(function () {
					//Reference the Button.
					var btnSubmit = $("#email-send-button");

					//Verify the TextBox value.
					if ($(this).val().trim() != "") {
									//Enable the TextBox when TextBox has value.
									btnSubmit.addClass('dp-flex');
					} else {
									//Disable the TextBox when TextBox is empty.
									btnSubmit.removeClass('dp-flex');
					}
	});
});

$('.header_widgets .header-section li').on('click', function (e) {
	$(this).toggleClass('active');
	$(this).siblings().removeClass('active');
	$(this).parent('.header-section').siblings().find('li.blueline-menu').removeClass('active');
	e.stopPropagation();
});

// Tags Input
$("#variantWant").tagsinput('items');

$(document).ready(function () {
	var maxLength = 500;
	$('textarea').keyup(function() {
		var length = $(this).val().length;
		var length = maxLength - length;
		$('#chars').text(length);
	});
		var Width = $(window).width();
		if (Width <= 991) {
			$(".menu_sidebar .nav .nav-link").addClass('with-sub');
		}
		$(".generat_btn").click(function() {
			var code = Math.random().toString(36).slice(2).toUpperCase();;
			$("#unique_id").val(code);
			$(".unq-title").text(code);
		});
		$("#unique_id").keyup(function() {
			var Val = $(this).val();
			$(".unq-box .unq-title").text(Val);
		});
		$("#unique_id-discount").keyup(function() {
			var Val = $(this).val();
			$(".unq-title-discount").text(Val);
		});
	});
	$("#heading").keyup(function() {
		var Val = $(this).val();
		$(".summary_box1 .sum_title1").text(Val);
	});
	$("#description").keyup(function() {
		var Val = $(this).val();
		$(".summary_box2 .sum_title2").text(Val);
	});

	$("#terms").keyup(function() {
		var Val = $(this).val();
		if(Val.length < 1075){
			$(".terms .termsvalue").text(Val);
		}
	});
	$("#gift").keyup(function() {
		var Val = $(this).val();
		$(".gift .giftvalue").text(Val);
	});
	$("#vacation").keyup(function() {
		var Val = $(this).val();
		$(".vacation .vacationvalue").text(Val);
	});


	$(document).ready(function() {
		$(".searchlist").click(function(){
			 $(".physical_input_box").removeClass("keypress-hover");
		});

		$(".backtab").click(function(){
			$(".physical_input_box").removeClass("keypress-hover");
		});
		
		$("#previewimg").change(function() {
			$(this).find("option:selected").each(function() {
				var optionValue = $(this).attr("value");
				if (optionValue) {
					$(".box").not("." + optionValue).hide();
					$("." + optionValue).show();
				} else {
					$(".box").hide();
					$(".cat1").show();
				}
			});
		}).change();

		$("#subcat").change(function() {
			$(this).find("option:selected").each(function() {
				var optionValue = $(this).attr("value");
				if (optionValue) {
					$(".box2").not("." + optionValue).hide();
					$("." + optionValue).show();
				} else {
					$(".box2").hide();

				}
			});
		}).change();

    $("input[name='deleiverydone']").click(function() {
        var test = $(this).val();
        $(".timediv").hide();
        $("#vendor"+test).show();
    });
	});

	//loyality card rating star selected
$(".CommonAttribute").hide();
$(".ratingStar-wrap").hide();
$(".DropdownClass").customSelectBox();
	$(".rating-star").customSelectBox().change(function (e, params) {
		var count=parseInt($(this).val());
		$(".CommonAttribute").show();
		$(".ratingStar-wrap").show();
		$(".CommonAttribute:gt("+(count-1)+")").hide();
});

$(".dropdown-menu li label").click(function(){
	var selText = $(this).text();
	$(this).parents('.dropdown').find('.dropdown-toggle').find('.exlightGrey-text').addClass('font-blue').html(selText);
});

$(".row-custom .col-custom").click(function(){
	$(this).addClass('active').siblings().removeClass('active');
});


	
	$(".searchlist").click(function(){
		 $(".physical_input_box").removeClass("keypress-hover");
	});

	$(".backtab").click(function(){
		$(".physical_input_box").removeClass("keypress-hover");
	});

	$('.az-sidebar .with-sub').on('click', function(e){
	  e.preventDefault();
	  $(this).parent().toggleClass('show');
	  $(this).parent().siblings().removeClass('show');
	})
	
	$("#bundlename").keyup(function(){
		var Val = $(this).val();
		$(".summary_box1 .sum_title1").text(Val);
	});
	$(document).on('click','.radio_input[type="radio"]',function(){ 
		var available = $(this).parent().find('span').text();
		$('.bundle-product-list .badge.avilable-type').html(available);
		$('.bundle-product-list .badge').show();
	});

	$(document).ready(function(){ 
		$("#chooseshop").change(function(){
	        $(this).find("option:selected").each(function(){
	            var optionValue = $(this).attr("value");
	            if(optionValue){
	                $(".box2").not("." + optionValue).hide();
	                $("." + optionValue).show();
	            } else{
	                $(".box2").hide();
					$(".shop1").show();
	            }
	        });
	    }).change();
	});

	
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
		
		$('.chat-box-active .bg-secondary').on('click', function () {
			$(this).addClass('direct');
			$(this).siblings().removeClass('direct');
});

		$(document).on('click','.support-inbox .right-side-box .showMenu,.support-inbox .left-side-box .closeSideBar',function(){
			var value = $('.support-inbox .left-side-box').css("left") === '0px' ? '-100%' : '0px';
			$('.support-inbox .left-side-box').animate({
				left: value
			});
		});
		$(document).on('click','.right-side-box .backToMenu',function(){
			$('#footer-bars-click').trigger('click');
		});
		// $(document).on('click','#vendor-chat-icon a',function(e){
		// 	e.preventDefault();
		// 	$('.start-new-message').trigger('click');
		// });




/* Multiselect start */

function multifilter(){
	var valThis = $('#multitxtSearchValue').val();
	$('.mus-container option').each(function(){
	 var text = $(this).text();
		(text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();
	});
};

Array.prototype.search = function(elem) {
	for(var i = 0; i < this.length; i++) {
		 if(this[i] == elem) return i;
	}
	
	return -1;
};

var Multiselect = function(selector) {
	if(!$(selector)) {
		 console.error("ERROR: Element %s does not exist.", selector);
		 return;
	}

	this.selector = selector;
	this.selections = [];

	(function(that) {
		 that.events();
	})(this);
};

Multiselect.prototype = {
	open: function(that) {
		 var target = $(that).parent().attr("data-target");

		 // If we are not keeping track of this one's entries, then
		 // start doing so.
		 if(!this.selections) {
			  this.selections = [ ];
		 }

		$(this.selector + ".multiselect").toggleClass("active");
		$(this.selector + ".multiselect").parents('.row').siblings().find('.multiselect').removeClass("active");
		$(this.selector + ".multiselect").parents('.col-12').siblings().find('.multiselect').removeClass("active");
	},

	close: function() {
		 //$(this.selector + ".multiselect").removeClass("active");
	},

	events: function() {
		 var that = this;

		 $(document).on("click", that.selector + ".multiselect > .title", function(e) {
			  if(e.target.className.indexOf("close-icon") < 0) {
					that.open();
			  }
		 });

		 $(document).on("click", that.selector + ".multiselect option", function(e) {
			  var selection = $(this).attr("value");
			  var target = $(this).parent().parent().attr("data-target");

			  var io = that.selections.search(selection);

			  if(io < 0) that.selections.push(selection);
			  else that.selections.splice(io, 1);

			  that.selectionStatus();
			  that.setSelectionsString();
			  //var cselectdiv = $('<div>').text(selection);
			 //$('#current-selected-multi .current-selected-value').append(cselectdiv);
		 });

		 $(document).on("click", that.selector + ".multiselect > .title > .close-icon", function(e) {
			  that.clearSelections();
		 });

		 $(document).click(function(e) {
			  if(e.target.className.indexOf("title") < 0) {
					if(e.target.className.indexOf("text") < 0) {
						 if(e.target.className.indexOf("-icon") < 0) {
							  if(e.target.className.indexOf("selected") < 0 ||
								  e.target.localName != "option") {
									that.close();
							  }
						 }
					}
			  }
		 });
	},

	selectionStatus: function() {
		 var obj = $(this.selector + ".multiselect");

		 if(this.selections.length) obj.addClass("selection");
		 else obj.removeClass("selection");
	},

	clearSelections: function() {
		 this.selections = [];
		 this.selectionStatus();
		 this.setSelectionsString();
	},

	getSelections: function() {
		 return this.selections;
	},

	setSelectionsString: function() {
		var selects = this.getSelectionsString().split(", ");
		var selectsfordiv = this.getSelections();
		 $(this.selector + ".multiselect > .title").attr("title", selects);

		var opts = $(this.selector + ".multiselect option");

		var cselectdiv = $('<div>').text(selectsfordiv);
		if(selectsfordiv.length > 0) {
		 	//$('#current-selected-multi .current-selected-value').append(cselectdiv);
	  }

		 if(selects.length > 2) {
			  var _selects = this.getSelectionsString().split(", ");
			 _selects = _selects.splice(0, 2);
			 var prosel = selects.length - 2;
			  $(this.selector + ".multiselect > .title > .text")
				 .text(_selects + " [+" + prosel + "]");
				 $('.multiselect .title .text').removeClass('hide');
		 }
		 else {
			  $(this.selector + ".multiselect > .title > .text")
				 .text(selects);
				 $('.multiselect .title .text').removeClass('hide');
			 
		 }

		 for(var i = 0; i < opts.length; i++) {
			 $(opts[i]).removeClass("selected");
			 $('#current-selected-multi').addClass('hide');
		 }

		 for(var j = 0; j < selects.length; j++) {
			  var select = selects[j];

			  for(var i = 0; i < opts.length; i++) {
					if($(opts[i]).attr("value") == select) {
						$(opts[i]).addClass("selected");
						$('#current-selected-multi').removeClass('hide');
						 break;
					}
			  }
		 }
	},

	getSelectionsString: function() {
		 if(this.selections.length > 0)
			  return this.selections.join(", ");
		 else return "Select";
	},

	setSelections: function(arr) {
		 if(!arr[0]) {
			  error("ERROR: This does not look like an array.");
			  return;
		 }

		 this.selections = arr;
		 this.selectionStatus();
		 this.setSelectionsString();
	},
};	

$(document).ready(function() {
	var multi = new Multiselect("#theme");
	//var multi = new Multiselect("#brand");
	var multi = new Multiselect("#size"); 
	var multi = new Multiselect("#size-category"); 
	var multi = new Multiselect("#color"); 
	var multi = new Multiselect("#department"); 
	var multi = new Multiselect("#fabric-type"); 
	var multi = new Multiselect("#collar-type");
	var multi = new Multiselect("#season");
	var multi = new Multiselect("#cutout");
	var multi = new Multiselect("#particularities");
	var multi = new Multiselect("#vintage");
	var multi = new Multiselect("#size-cat2");
	var multi = new Multiselect("#accents");
	var multi = new Multiselect("#closure"); 
	var multi = new Multiselect("#product-line");
	var multi = new Multiselect("#chest-Cirumference");
	var multi = new Multiselect("#model"); 
	var multi = new Multiselect("#printmaking"); 
	var multi = new Multiselect("#textile-maintenance"); 
	var multi = new Multiselect("#handmade"); 
	var multi = new Multiselect("#number-units");
	var multi = new Multiselect("#units-measurement");
});

// Close when clicking outside
$(document).on('click', '#clear-select-multi', function () {
	$('#current-selected-multi').addClass('hide');
	$('.multiselect .mus-container option').removeClass('selected');
	$('.multiselect .title .text').addClass('hide');
});

/* Multiselect end */


// Lightgallery
		jQuery("#animated-thumbnails-gallery")
  .justifiedGallery({
    captions: false,
    lastRow: "hide",
    rowHeight: 180,
    margins: 5
  })
  .on("jg.complete", function () {
    window.lightGallery(
      document.getElementById("animated-thumbnails-gallery"),
      {
        autoplayFirstVideo: false,
        pager: false,
        galleryId: "nature",
        plugins: [lgZoom, lgThumbnail],
        mobileSettings: {
          controls: true,
          showCloseIcon: true,
          download: true,
          rotate: false
        }
      }
    );
		});

		jQuery("#animated-thumbnails-gallery-group")
  .justifiedGallery({
    captions: false,
    lastRow: "hide",
    rowHeight: 180,
    margins: 5
  })
  .on("jg.complete", function () {
    window.lightGallery(
      document.getElementById("animated-thumbnails-gallery-group"),
      {
        autoplayFirstVideo: false,
        pager: false,
        galleryId: "nature",
        plugins: [lgZoom, lgThumbnail],
        mobileSettings: {
          controls: true,
          showCloseIcon: true,
          download: true,
          rotate: false
        }
      }
    );
		});
		
		//chat-footer height
		var maxword = 19;
		$('#description').on('keyup', function() {
				//remove white space and check if length is greater
				if ($(this).val().trim().length > maxword) {
						//using addclass to add a class
						$('#descnote').addClass('height-incrase1')
				} else {
						$('#descnote').removeClass('height-incrase1')
		
				}
		});
		var maxword2 = 39;
		$('#description').on('keyup', function() {
				//remove white space and check if length is greater
				if ($(this).val().trim().length > maxword2) {
						//using addclass to add a class
						$('#descnote').addClass('height-incrase2')
				} else {
						$('#descnote').removeClass('height-incrase2')
		
				}
		});
		var maxword4 = 19;
		$('#description2').on('keyup', function() {
				//remove white space and check if length is greater
				if ($(this).val().trim().length > maxword4) {
						//using addclass to add a class
						$('#descnote2').addClass('height-incrase1')
				} else {
						$('#descnote2').removeClass('height-incrase1')
		
				}
		});
		var maxword3 = 39;
		$('#description2').on('keyup', function() {
				//remove white space and check if length is greater
				if ($(this).val().trim().length > maxword3) {
						//using addclass to add a class
						$('#descnote2').addClass('height-incrase2')
				} else {
						$('#descnote2').removeClass('height-incrase2')
		
				}
		});

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
			$("#dropFiles").on('dragenter', function(ev) {
				// Entering drop area. Highlight area
				$(this).addClass("highlightDropArea");
			});
			
			$("#dropFiles").on('dragleave', function(ev) {
			 // Going out of drop area. Remove Highlight
			 $(this).removeClass("highlightDropArea");
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
$(".browse").click(function(){
$(this).next().toggleClass("main_show");
});
$(".our-custom-select.returnType .options").on('click','li',function(){
var dataOption = $(this).attr('value');
if(dataOption == 1){
	var txt = $(this).text();
	$(this).parents('tr').find('td:last-child').text(txt);
}
else if(dataOption == 2){
	var txt = $(this).attr('data-price');
	$(this).parents('tr').find('td:last-child').text(txt);
}else if(dataOption == ''){
	$(this).parents('tr').find('td:last-child').text('');
}
});
$('#leftside-menu-container a[href="#sidebarReturns"]').trigger('click');
$('#leftside-menu-container a[data-target="vandor-create-return"]').addClass('active');

$(document).on('click', '#back-marketplace', function (e) {
    $('#footer-bars-box').addClass('show');
    $('#dashboard-menu2').addClass('market-tab');
    $('#appointmentAccountAcco.collapse').addClass('show');
    $('#appointmentAccount.collapse-btn').removeClass('collapsed');
    e.stopPropagation();
});

$(document).on('click', '#back-order-section', function (e) {
    $('#appointmentAccountAcco.collapse').removeClass('show');
    $('#appointmentAccount.collapse-btn').addClass('collapsed');
    //e.stopPropagation();
});

$('#abroadclick').on('click', function () {
	$('.abroard-column').toggleClass('show');
});

$(document).on('click', '#range-date-select', function (e) {
	$('.calendar').toggleClass('show');
}); 
$(document).on('click', '#cancel-select', function (e) {
	$('.calendar').removeClass('show');
}); 
$(document).on('click', '#apply-select', function (e) {
	$('.calendar').removeClass('show');
}); 
$(document).on('click','.click-i-img',function(){ 
	$(this).parent('.imark-icon').find('.c-tooltipwrap').addClass('show');
});
$(document).on('click','.tooltip-close-icon',function(){ 
	$(this).parents('.imark-icon').find('.c-tooltipwrap').removeClass('show');
});

$(document).on('click','#priceperunitclick',function(){ 
	$('.price-per-unit-wrap').toggleClass('hide');
});
$(document).on('click','#preorderclick',function(){ 
	$('.pre-order-wrap').toggleClass('hide');
});

$(document).on('click','#limittolabel',function(){ 
	$('.tab-content .pre-order-limit-ul li .input-group').removeClass('hide');
});
$(document).on('click','#nolimitlabel',function(){ 
	$('.tab-content .pre-order-limit-ul li .input-group').addClass('hide');
});

$(document).on('click','.field-group .input-group .s-discount-value .cmtxt',function(){ 
	$(this).addClass('active');
	$(this).siblings().removeClass('active');
});
$(document).on('click','li.custom-bill-click',function(){ 
	$(".billingcycles-hide").addClass('show');
});
$(document).on('click','li.custom-bill-remove',function(){ 
	$(".billingcycles-hide").removeClass('show');
});

/** Single optiongroup selection box start */
(function($){
	var customSelect = $('select.custom-select');
	// FIRST, create the custom select menus from the existing select
	customSelect.each(function() {
		var that = $(this);
		var listID = that.attr('id'),
		groups = that.children('optgroup'),
			theOptions = "",
			startingOption = "",
			customSelect = "";
		//check if there are option groups 
		if(groups.length) {
			groups.each(function() {
				var curGroup = $(this);
				var	curName = curGroup.attr('label');
				//Open the option group
				theOptions += '<li class="optgroup">' + curName + '</li>';
				//get the options
				curGroup.children('option').each(function() {
					var curOpt = $(this);
					var curVal = curOpt.attr('value'),
						curHtml = curOpt.html(),
						isSelected = curOpt.attr('selected');
					if(isSelected === 'selected') {
						startingOption = curHtml;
						theOptions += '<li class="selected" data-value="' + curVal + '">' + curHtml + '</li>';
					}else {
						theOptions += '<li data-value="' + curVal + '">' + curHtml + '</li>';
					}
				});
				//Close the option group
				//theOptions += '<li class="optgroup-close"></li>';
			});
			//add options not in a group to the top of the list
			that.children('option').each(function() {
				var curOpt = $(this);
				var curVal = curOpt.attr('value'),
					curHtml = curOpt.html(),
					isSelected = curOpt.attr('selected');
				if(isSelected === 'selected') {
					startingOption = curHtml;
					theOptions = '<li class="selected" data-value="' + curVal + '">' + curHtml + '</li>' + theOptions;
				}else {
					theOptions = '<li data-value="' + curVal + '">' + curHtml + '</li>' + theOptions;
				}
			});
		} else {
			that.children('option').each(function() {
				var curOpt = $(this);
				var curVal = curOpt.attr('value'),
					curHtml = curOpt.html(),
					isSelected = curOpt.attr('selected');
				if(isSelected === 'selected') {
					startingOption = curHtml;
					theOptions += '<li class="selected" data-value="' + curVal + '">' + curHtml + '</li>';
				}else {
					theOptions += '<li data-value="' + curVal + '">' + curHtml + '</li>';
				}
			});
		}
		//build the custom select
		customSelect = '<div class="dropdown-container"><div class="dropdown-select entypo-down-open-big"><span>' + startingOption + '</span></div><ul class="dropdown-select-ul" data-role="' + listID +'">' + theOptions + '</ul></div> <!-- .custom-select-wrapper -->';
		//append it after the actual select
		$(customSelect).insertAfter(that);
	});
	
	var	selectdd = $('.dropdown-select'),
		selectul = $('.dropdown-select-ul'),
		selectli = $('.dropdown-select-ul li');
	//THEN make them work
	selectdd.on('click',function(){
		$(this).parent('.dropdown-container').toggleClass('active');
	});
	//Hide it on mouseleave
	selectul.on('mouseleave',function(){
		$(this).parent('.dropdown-container').removeClass('active');
	});
	//select the option
	selectli.on('click',function(){
		var that = $(this);
		//ensure clicking group labels does not cause change
		if(!that.hasClass('optgroup')) {
			var	parentUl = that.parent('ul'),
				thisdd = parentUl.siblings('.dropdown-select'),
				lihtml = that.html(),
				livalue = that.attr('data-value'),
				originalSelect = '#' + parentUl.attr('data-role');
			//close the dropdown
			parentUl.parent('.dropdown-container').toggleClass('active');
			//remove selected class from all list items
			that.siblings('li').removeClass('selected');
			//add .selected to clicked li
			that.addClass('selected');
			//set the value of the hidden input
			$(originalSelect).val(livalue);
			//change the dropdown text
			thisdd.children('span').html(lihtml);
		}
	});
})(jQuery);
 /** Single optiongroup selection box end */


/* Single select dropdown start */
function create_custom_dropdowns() {
	$('.select-type-search').each(function (i, select) {
		 if (!$(this).next().hasClass('dropdown-select')) {
			  $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list-wrap"><div class="list"><ul id="uloptlist"></ul><span class="no-result-found">No Result Found</span></div></div></div>');
			  var dropdown = $(this).next();
			  var options = $(select).find('option');
			 var selected = $(this).find('option:selected');
			 dropdown.find('.current').html(selected.data('display-text') || selected.text());
			 //dropdown.find('.list').find('.selected-wrap').find('.current-selected-value').html(selected.data('display-text') || selected.text());
			 
			  options.each(function (j, o) {
					var display = $(o).data('display-text') || '';
				  dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
			  });
			 $('#txtSearchValue').val('');
		 }
	});

	$('.dropdown-select ul').before('<div class="dd-search"><span class="fa fa-search form-control-feedback"></span><input id="txtSearchValue" placeholder="Search or enter your own" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div><div id="outputDiv"></div> <div class="selected-wrap hide"><div class="flex"><h3>Selected</h3><button type="button" class="select-clear">Clear</button></div><div class="current-selected-value"></div></div><div class="frequently-selected-text">Frequently selected</div>');
}

// Event listeners

// Open/close
$(document).on('click', '.dropdown-select', function (event) {
	if($(event.target).hasClass('dd-searchbox')){
		 return;
	}
	$('.dropdown-select').not($(this)).removeClass('open');
	$(this).toggleClass('open');
	if ($(this).hasClass('open')) {
		 $(this).find('.option').attr('tabindex', 0);
		 $(this).find('.selected').focus();
	} else {
		 $(this).find('.option').removeAttr('tabindex');
		 $(this).focus();
	}
});

// Close when clicking outside
$(document).on('click', '.select-clear', function () {
	$(this).parents('.selected-wrap').addClass('hide');
	$('.dropdown-select').find('.option').removeClass('selected');
	$('.frequently-selected-text').show();
	$(this).parents('.dropdown-select').find('.current').text('');
	//currentdiv.innerHTML = '';
});
$(document).on('click', function (event) {
	if ($(event.target).closest('.dropdown-select').length === 0) {
		 $('.dropdown-select').removeClass('open');
		$('.dropdown-select .option').removeAttr('tabindex');
	}
	event.stopPropagation();
});

function filter(){
	var valThis = $('#txtSearchValue').val();
	$('.dropdown-select ul > li').each(function(){
		var text = $(this).text();
		
		(text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();   
		//$('.no-result-found').addClass('show');
	});
	var inputText = document.getElementById("txtSearchValue").value;
	var outputDiv = document.getElementById("outputDiv");
	outputDiv.textContent = inputText;
	if (inputText) {
		$(outputDiv).addClass('own-option-aadd');
	 } else {
		$(outputDiv).removeClass('own-option-aadd');
	 }
	$('#current-selected').addClass('hide');
	//$('#uloptlist li').siblings().removeClass('selected');
};

$(document).on('click', '#outputDiv', function (e) { 
	var inputText2 = document.getElementById("txtSearchValue").value;
	var outputdiv = document.getElementById("outputDiv")
	var outputText = document.getElementById("outputDiv").textContent;
	var inputField = document.getElementById("current-clear");
	inputField.textContent = outputText;
	$(outputdiv).hide();
	var outputList = document.getElementById("uloptlist");
	var newListItem = document.createElement("li");
	$(newListItem).addClass('option selected');
	$('.select-type-search .list ul li.option').next().removeClass('selected');
	newListItem.textContent = outputText;
	outputList.appendChild(newListItem);
	inputText2.value = "";
	$('#txtSearchValue').val('');
	$('.dropdown-select ul > li').show();
});
// Search

// Option click
$(document).on('click', '.dropdown-select .option', function (event) {
	$(this).closest('.list').find('.selected').removeClass('selected');
	$(this).addClass('selected');
	var text = $(this).data('display-text') || $(this).text();
	$(this).closest('.dropdown-select').find('.current').text(text);
	$(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
	$('.frequently-selected-text').hide();

	//var selected = $('.select-type-search').find('option:selected');
	var selected = $(this).parents('.s-type-wrap').find('select option:selected');
	$(this).parents('.dropdown-select').find('.selected-wrap').removeClass('hide');
	$(this).parents('.dropdown-select').find('.selected-wrap .current-selected-value').html(selected.data('display-text') || selected.text());
});

// Keyboard events
$(document).on('keydown', '.dropdown-select', function (event) {
	var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
	// Space or Enter
	//if (event.keyCode == 32 || event.keyCode == 13) {
	if (event.keyCode == 13) {
		 if ($(this).hasClass('open')) {
			  focused_option.trigger('click');
		 } else {
			  $(this).trigger('click');
		 }
		 return false;
		 // Down
	} else if (event.keyCode == 40) {
		 if (!$(this).hasClass('open')) {
			  $(this).trigger('click');
		 } else {
			  focused_option.next().focus();
		 }
		 return false;
		 // Up
	} else if (event.keyCode == 38) {
		 if (!$(this).hasClass('open')) {
			  $(this).trigger('click');
		 } else {
			  var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
			  focused_option.prev().focus();
		 }
		 return false;
		 // Esc
	} else if (event.keyCode == 27) {
		 if ($(this).hasClass('open')) {
			  $(this).trigger('click');
		 }
		 return false;
	}
});

$(document).ready(function () {
	create_custom_dropdowns();
});


/** Single select dropdown end */

$(document).ready(function() {

		$('#files-video').change(function() {
		  var file = this.files[0];
		  var videoURL = URL.createObjectURL(file);
		  
		  var videoElement = $('<video controls><source src="' + videoURL + '" type="' + file.type + '"></video>');
			$('#uploaded-videos').append(videoElement);
			$('.new-video-wrap').addClass('hide');
			$('.new-photo-wrap').addClass('before-video');
			$('#uploaded-videos').removeClass('ui-sortable-handle');
			$('#uploaded-videos').addClass('video-wrap');
			$("#sortableImgThumbnailPreview").sortable({
				connectWith: ".RearangeBox",
			  
					
				 start: function( event, ui ) { 
						$(ui.item).removeClass("dragElemThumbnail");
						ui.placeholder.height(ui.item.height());
			 
				  },
					stop:function( event, ui ) { 
						$(ui.item).removeClass("dragElemThumbnail");
				  }
			  });
		});
	
		$('.item-condition input[type="radio"]').on('change', function() {
			//var selectedValue = $('input[name="radioGroup"]:checked').val();
			var selectedLabel = $('input[name="articlecondition"]:checked').parent().find('.item-condition-text').text().trim();
			
			$('#confirm-item-btn').addClass('blue-btn');
			$('#confirm-item-btn').removeClass('invisible-btn');
			$('#article-condition').text(selectedLabel);
			$('#article-category-popup').removeClass('uk-open');
			$('#article-category-popup').removeClass('uk-flex');
			$('html').removeClass('uk-modal-page');
		});
	 
});

$(".remove-text-btn").on("click", function (e) {
	e.preventDefault();
	$(this)
	  .parent(".cart_text")
	  .parent(".cart-text-sec")
	  .parent(".dropdown_cart_scrollbar_li")
	  .hide();
 });


