
//add user on group chat popup click event
$('.adduserclick').on('click', function (e) {
    e.preventDefault();
    $('#addusergroup').addClass('is-visible');
});

//Forward message on chat
$('.move-foward').on('click', function (e) {
    e.preventDefault();
    $('#forward-message').addClass('is-visible');
});

$('.forward-sent-btn').on('click', function (e) {
    e.preventDefault();
    $('.forward-done-btn').toggleClass('btn-grad');
});
$('.forward-sent-btn').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('send');
});

$('.uk-close').on('click', function (e) {
    e.preventDefault();
    $('#changechatBackground').removeClass('show');
});

//chat change background edit popup
$('.changebgThemeclick').on('click', function (e) {
    e.preventDefault();
    $('#changechatBackground').addClass('show');
    $('.header_dropdown').removeClass('uk-open');
    var value = $('#singleChatOptions').css("bottom") === '-100%' ? '-100%' : '-100%';
	$('#singleChatOptions').animate({
		bottom: value
	});
    
    var value1 = $('#groupChatOptions').css("bottom") === '-100%' ? '-100%' : '-100%';
	$('#groupChatOptions').animate({
		bottom: value1
	});
});

//Snooze conversation popup click event
$('.snoozePopupopen').on('click', function (e) {
    e.preventDefault();
    $('#snoozeconversation').addClass('is-visible');
    $('.header_dropdown').removeClass('uk-open');
});

//Feedback report issue popup click event
$('.feedbackClick').on('click', function (e) {
    e.preventDefault();
    $('#feedback').addClass('is-visible');
    $('.header_dropdown').removeClass('uk-open');
});

$('#emoji-option li').on('click', function (e) {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
});

$('#emoji-option-post li').on('click', function (e) {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
});

$('.minimize-user').on('click', function (e) {
    $('#chatbox1').removeClass('show');
    $('.of-chat').addClass('show');
    $('.single-user').addClass('show')
});

$('.minimize-user-group').on('click', function (e) {
    $('#groupchatbox').removeClass('show');
    $('.of-chat').addClass('show');
    $('.group-public').addClass('show')
});

$('.group-public .of-chat-user-anchor').on('click', function (e) {
    $('#groupchatbox').toggleClass('show');
    $(this).parent('.group-public').removeClass('show');
});
$('.single-user .of-chat-user-anchor').on('click', function (e) {
    $('#chatbox1').toggleClass('show');
    $(this).parent('.single-user').removeClass('show');
});

$('.close-icon-private').on('click', function (e) {
    $(this).parent('.of-chat-user').removeClass('show');
    $('#chatbox1').removeClass('show');
});

$('.close-icon-group').on('click', function (e) {
    $(this).parent('.of-chat-user').removeClass('show');
    $('#groupchatbox').removeClass('show');
});


$(document).on('click','.social-share-option .share',function(){
    $(this).find('.share-options').toggle();
    $(this).parent('.card').siblings('.card').find('.share .share-options').hide();
});
$(document).on('click','#statusUserButton + .dropdown-menu a',function(){
	var color = $(this).find('span').css( "background-color" );
	$(this).parents('.dropdown').find('#statusUserButton').css("background-color",color);
});
$(document).on('click','#statusUserButton2 + .dropdown-menu a',function(){
	var color = $(this).find('span').css( "background-color" );
	$(this).parents('.dropdown').find('#statusUserButton2').css("background-color",color);
});

// chat script
$(document).on('click','#vendor-chat-icon a',function(e){
    e.preventDefault();
    $('.start-new-message').trigger('click');
});

$(document).on('click','#user_names ul li a',function(e){
    e.preventDefault();
    $('#chatbox1').addClass('show');
});
function closeNewMessage(){ 
	var value = $('.new-message-option').toggleClass('show').css("bottom") === '0px' ? '-450px' : '0px';
	$('.new-message-option').animate({
		bottom: value
	});
}
function closeNewMessageprivate(){ 
	var value = $('#private-single-chat').toggleClass('show').css("bottom") === '0px' ? '-450px' : '0px';
	$('.new-message-option').animate({
		bottom: value
	});
}
function bodyClick(){
	$('body').trigger('click');
}
$(document).on('click','.start-new-message',function(){
    bodyClick();
    closeNewMessage();
    var value = $('#Group__Chat_panel_2').css("right") === '0px' ? '-100%' : '0px';
    if(value == '-100%'){
        $('#Group__Chat_panel_2').animate({
            right: value
        });
    }
});

$("#search_name").on("keyup", function() { 
	var value = $(this).val().toLowerCase();
	$("#user_names ul li a .userName").filter(function() {
		$(this).parents('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
	});
	if(value != ''){
		$("#user_names ul").css('opacity','1');
	}else{
		$("#user_names ul").css('opacity','1');
	}
});

/* input field value */
$(".search-field-pro").focus(function (e) {
    $(this).next(".value-text").hide();
  });
  $('.search-field-pro').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
        $(this).next(".value-text").show();  
    }
  });

  function messageOpen(){
	checkChatMessageOptions();
	checkGroupChatMessageOptions();
	$('.is_message .notification-option-menu').removeClass('active');
	var currentPos = $('.moving-div').attr('data-pos'); 
	if(currentPos == 1){
		$('.message').show();
		$('.moving-div').animate({
			right: 0
		});
		$('.moving-div').attr('data-pos',0);
	}
}

function openChatOptions(){
	var value = $('#singleChatOptions').css("bottom") === '0px' ? '-100%' : '0px'; 
	var rotate = $('#singleChatOptions').css("bottom") === '0px' ? 'rotate(0deg)' : 'rotate(180deg)';
	$('#singleChatOptions').animate({
		bottom: value
	});
    //$('#chatProfileDropdown').css('transform', rotate);
    $('#chatProfileDropdown').toggleClass('rotate-full');
}

function checkChatMessageOptions(){
	var value = $('#singleChatOptions').css("bottom") === '0px' ? '-100%' : '0px'; 
	if(value == '-100%'){
		var rotate = $('#singleChatOptions').css("bottom") === '0px' ? 'rotate(0deg)' : 'rotate(180deg)';
		$('#singleChatOptions').animate({
			bottom: value
		});
		$('#chatProfileDropdown').css('transform',rotate);
	}
}

function groupChatStepTwo(){
	var value = $('#Group__Chat_panel_2').css("right") === '0px' ? '-100%' : '0px'; 
	$('#Group__Chat_panel_2').animate({
		right: value
	});
}

function groupChatStepOnebyOne(){
	var value = $('#Group__Chat_panel_1_1').css("right") === '0px' ? '-100%' : '0px'; 
	$('#Group__Chat_panel_1_1').animate({
		right: value
	});
}
function groupChatStepwallpaper(){
	var value = $('#Group__Chat_wallpaper').css("right") === '0px' ? '-100%' : '0px'; 
	$('#Group__Chat_wallpaper').animate({
		right: value
	});
}

function closeThisPopUp(){
	$('#groupChat1').toggleClass('show');
}
function addMoreUsersToGroup(){
	$('#groupChat1').toggleClass('show');
	$('#groupchatbox').toggleClass('show');
}
	
	
function openGroupChatOptions(){
	var value = $('#groupChatOptions').css("bottom") === '0px' ? '-100%' : '0px'; 
	var rotate = $('#groupChatOptions').css("bottom") === '0px' ? 'rotate(0deg)' : 'rotate(180deg)';
	$(groupChatOptions).animate({
		bottom: value
	});
    //$('#grprofilemenu').css('transform', rotate);
    $('#grprofilemenu').toggleClass('rotate-full');
}

function checkGroupChatMessageOptions(){
	var value = $('#groupChatOptions').css("bottom") === '0px' ? '-100%' : '0px'; 
	if(value == '-100%'){
		var rotate = $('#groupChatOptions').css("bottom") === '0px' ? 'rotate(0deg)' : 'rotate(180deg)';
		$('#groupChatOptions').animate({
			bottom: value
		});
		$('#grprofilemenu').css('transform',rotate);
	}
}


$("#groupChat1 input[name='searchGroupChatname']").on("keyup", function() { 
    var value = $(this).val().toLowerCase();
    $("#user_group_names ul li a .userName").filter(function() {
        $(this).parents('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});

function addUserToGoup(thisDiv){
    if(!$(thisDiv).hasClass('active')){
        var user =  $(thisDiv).children('.userName').html();
        var userImage = $(thisDiv).children('.user__image').children('img').attr('src');
        var groupData = '<div class="user__data d-inline-block position-relative mr-4 online" data-user="'+user+'" style="flex-shrink: 0;">'+
                            '<div class="user__image">'+
                                '<img class=" rounded-circle" src="'+userImage+'" alt="'+user+'" width="40">'+
                            '</div>'+
                            '<div class="user__name text-center font-12 mt-2 line-height-default">'+
                                '<span>'+user+'</span>'+
                            '</div>'+
                        '</div>';
        $(thisDiv).addClass('active');				
        $('.user__in__group').append(groupData);
        $('.user__in__group').show();
        $('.user__in__group').addClass('d-flex');
    }else{ 
        $(thisDiv).removeClass('active');
        var user =  $(thisDiv).children('.userName').html();
        $('.user__in__group .user__data[data-user="'+user+'"]').remove();
        if($('.user__in__group').children().length < 1 ){
            $('.user__in__group').removeClass('d-flex');
            $('.user__in__group').hide();
        }
    }
}

//Prosenjit new chat function 20-07-2022
function addUserToGouppopup(thisDiv2){
    if(!$(thisDiv2).hasClass('active')){
        var user2 =  $(thisDiv2).children('.userName').html();
        var userImage2 = $(thisDiv2).find('img.border.rounded-circle').attr('src');
        var groupData2 = '<div class="user__data d-inline-block position-relative mr-4 online" data-user="'+user2+'" style="flex-shrink: 0;">'+
                            '<div class="user__image">'+
                                '<img class=" rounded-circle" src="'+userImage2+'" alt="'+user2+'" width="40">'+
                            '</div>'+
                            '<div class="user__name text-center font-12 mt-1 line-height-default" style="max-width:40px">'+
                                '<span>'+user2+'</span>'+
                            '</div>'+
                        '</div>';
        $(thisDiv2).addClass('active');				
        $('.user__in__group2').append(groupData2);
        $('.user__in__group2').show();
        $('.user__in__group2').addClass('d-flex');
        $('.add-group-btn-set').addClass('blue-btn').removeClass('cancel-btn');
    }else{ 
        $(thisDiv2).removeClass('active');
        var user2 =  $(thisDiv2).children('.userName').html();
        $('.user__in__group2 .user__data[data-user="'+user2+'"]').remove();
        if($('.user__in__group2').children().length < 1 ){
            $('.user__in__group2').removeClass('d-flex');
            $('.user__in__group2').hide();
            $('.add-group-btn-set').removeClass('blue-btn').addClass('cancel-btn');
        }
    }
}

$(document).on('click','.user__in__group .remove-user',function(){
    var user = $(this).parents('.user__data').attr('data-user');
    $('#groupChat1 #user_group_names ul li a[data-username="'+user+'"]').removeClass('active');
    $(this).parents('.user__data').remove();
    if($('.user__in__group').children().length < 1 ){
        $('.user__in__group').removeClass('d-flex');
        $('.user__in__group').hide();
    }
});

$(document).on('click','.click-textarea',function(e){
    $(this).parent('.chat-type-box').next('.chat-sender-btn').find('.grey-send-img').hide();
    $(this).parent('.chat-type-box').next('.chat-sender-btn').find('.blue-send-img').show();
    event.stopPropagation();
});

$(document).on('click','#ex-collapse',function(e){
    $('#ex-opt-meta-chat').toggleClass('show');
});

$(document).on('click', '#accept-btn', function (e) {
    $('#chat-screen-first').hide();
    $('#chat-screen-second').addClass('show');
});

$(document).on('click', '#accept-btn-group', function (e) {
    $('#chat-screen-group-first').hide();
    $('#chat-screen-group-second').addClass('show');
});

$(document).on('click', '#minimize-dash-click', function (e) {
    $('#videocall-2').removeClass('show');
    $('#move-div').addClass('show');
});

$(document).on('click', '#minimize-dash-click-group', function (e) {
    $('#confvideocl').removeClass('show');
    $('#move-div-group').addClass('show');
});

$(document).on('click', '#maximize-chat-big-click', function (e) {
    $('#videocall-2').addClass('show');
    $('#move-div').removeClass('show');
});

$(document).on('click', '#maximize-chat-big-click-group', function (e) {
    $('#confvideocl').addClass('show');
    $('#move-div-group').removeClass('show');
});

$(document).on('click', '.drop-call-small', function (e) {
    $('#move-div').removeClass('show');
});

$(document).on('click', '.drop-call-small-group', function (e) {
    $('#move-div-group').removeClass('show');
});

$(document).on('click', '.on-btn', function (e) {
    $(this).removeClass('show');
    $('.off-btn').addClass('show');
});
$(document).on('click', '.off-btn', function (e) {
    $(this).removeClass('show');
    $('.on-btn').addClass('show');
});

$(document).on('click', '.on-btn-cam', function (e) {
    $(this).removeClass('show');
    $('.off-btn-cam').addClass('show');
});
$(document).on('click', '.off-btn-cam', function (e) {
    $(this).removeClass('show');
    $('.on-btn-cam').addClass('show');
});

$(document).on('click', '.on-btn2', function (e) {
    $(this).removeClass('show');
    $('.off-btn2').addClass('show');
});
$(document).on('click', '.off-btn2', function (e) {
    $(this).removeClass('show');
    $('.on-btn2').addClass('show');
});

$(document).on('click', '.on-btn-cam2', function (e) {
    $(this).removeClass('show');
    $('.off-btn-cam2').addClass('show');
});
$(document).on('click', '.off-btn-cam2', function (e) {
    $(this).removeClass('show');
    $('.on-btn-cam2').addClass('show');
});

$(document).on('click', '.on-btn3', function (e) {
    $(this).removeClass('show');
    $('.off-btn3').addClass('show');
});
$(document).on('click', '.off-btn3', function (e) {
    $(this).removeClass('show');
    $('.on-btn3').addClass('show');
});

$(document).on('click', '.on-btn-cam3', function (e) {
    $(this).removeClass('show');
    $('.off-btn-cam3').addClass('show');
});
$(document).on('click', '.off-btn-cam3', function (e) {
    $(this).removeClass('show');
    $('.on-btn-cam3').addClass('show');
});

$(document).on('click', '.on-btn4', function (e) {
    $(this).removeClass('show');
    $('.off-btn4').addClass('show');
});
$(document).on('click', '.off-btn4', function (e) {
    $(this).removeClass('show');
    $('.on-btn4').addClass('show');
});

$(document).on('click', '.on-btn-cam4', function (e) {
    $(this).removeClass('show');
    $('.off-btn-cam4').addClass('show');
});
$(document).on('click', '.off-btn-cam4', function (e) {
    $(this).removeClass('show');
    $('.on-btn-cam4').addClass('show');
});



$('.chat-box-active .bg-secondary').on('click', function () {
    $(this).addClass('direct');
    $(this).siblings().removeClass('direct');
});
$('.chat-box-active .group-click').on('click', function () {
    $('#groupChat1').addClass('show');
});
$('#go-group-chat').on('click', function () {
    $('#groupchatbox').toggleClass('show');
});
$('.closechatprivate').on('click', function () {
    $('#chatbox1').removeClass('show');
});
$('.closechatgroup').on('click', function () {
    $('#groupchatbox').removeClass('show');
});

$('#back-main-chat2').on('click', function () {
    $('#private-single-chat').removeClass('show');
    var value = $('.new-message-option').toggleClass('show').css("bottom") === '0px' ? '-450px' : '0px';
	$('.new-message-option').animate({
		bottom: value
	});
});
$('#back-main-chat').on('click', function () {
    $('#groupChat1').removeClass('show');
    var value = $('.new-message-option').toggleClass('show').css("bottom") === '0px' ? '-450px' : '0px';
	$('.new-message-option').animate({
		bottom: value
	});
});
$('#open-chat').on('click', function (e) {
    $('.talklys-dropdown').removeClass('uk-open');
    $('.talklys-tab .header-option').removeClass('active');
    var value = $('.new-message-option').toggleClass('show').css("bottom") === '0px' ? '-450px' : '0px';
	$('.new-message-option').animate({
		bottom: value
    });
    e.stopPropagation();
});

$('.confimg-wallpaper ul li').on('click', function (e) {
    $(this).toggleClass('check-selected');
    $(this).siblings().removeClass('check-selected');
});

$('.icons-dropdown .dropdown-menu').on({
    "click":function(e) {
        e.stopPropagation();
     }
});
 
$('#emoji-nav').on('click', function (e) {
    $('#emoji-tab').addClass('active');
    $(this).addClass('active');
    $('#stickers-nav').removeClass('active');
    $('#stickers-tab').removeClass('active');

});

$('#stickers-nav').on('click', function (e) {
    $('#stickers-tab').addClass('active');
    $(this).addClass('active');
    $('#emoji-nav').removeClass('active');
    $('#emoji-tab').removeClass('active');

});

function do_resize(textbox) {

	var maxrows=5; 
	var txt=textbox.value;
	var cols=textbox.cols;

	var arraytxt=txt.split('\n');
	var rows=arraytxt.length; 

	for (i=0;i<arraytxt.length;i++) 
	rows+=parseInt(arraytxt[i].length/cols);

	if (rows>maxrows){
		textbox.rows=maxrows;
		$(textbox).css('overflow-y','auto');
	}else{
		$(textbox).css('overflow-y','hidden');
		textbox.rows=rows;
	}
	$('.always__stay__in_bottom').animate({scrollTop:$('.always__stay__in_bottom').height()}, 'slow');
}

function showForwardButton(forward){
	var groupName = $(forward).val();
	if( groupName != ''){
		$('.panel-1 .forward').css('opacity','1');
	}else{
		$('.panel-1 .forward').css('opacity','0');
	}
}

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

//ignore message popup
$('.ignorepopup-click').on('click', function (e) {
    e.preventDefault();
    $('#ignoreconversation').addClass('is-visible'); 
});

$('.dltmsgpopup-click').on('click', function (e) {
    e.preventDefault();
    $('#deletemesg').addClass('is-visible');
});

$('.blckuserpopup-click').on('click', function (e) {
    e.preventDefault();
    $('#blockmodal').addClass('is-visible');
});

$('#private-click-btn').on('click', function (e) {
    $('#private-single-chat').addClass('show');
    $('#chat-screen-start').addClass('hide');
    e.stopPropagation();
});

$('#private-click-btn-contact').on('click', function (e) {
    $('.start-new-message').trigger('click');
    $('#chat-screen-start').addClass('hide');
    e.stopPropagation();
});

$('.chatdropdown').on('click', function (e) {
    e.preventDefault(); 
    e.stopPropagation();
    $(this).find('.menuhover').next('.dropdown-menu').toggleClass('show');
    $(this).parent().siblings('.chat-row').find('.menuhover').next('.dropdown-menu').removeClass('show');
});

$('.chat-box-icon .icons-dropdown .dropdown-toggle').on('click', function (e) {
    e.stopPropagation();
    $(this).next('.dropdown-menu').toggleClass('show');
});

$('.upload-photo-click').on('click', function (e) {
    e.stopPropagation();
    $(this).next('.dropdown-menu').toggleClass('show');
});

$('.accept-button').click(function (e) {
    $(this).parent('.accept-btn-panel').hide();
    $(this).parent('.accept-btn-panel').next('.common-message').addClass('show');
});

$('#chatplus-icon-private').click(function(e){
    $('#plus-icon-showbox').toggleClass('showbox');
    $(this).toggleClass('close-chat-icon');
    e.stopPropagation();
});
$('#chatplus-icon-group').click(function(e){
    $('#plus-icon-showbox-group').toggleClass('showbox');
    $(this).toggleClass('close-chat-icon');
    e.stopPropagation();
});

$('#say-hi').click(function (e) {
    $('.request-come').addClass('d-none');
    $('.full-chat-panel').removeClass('d-none');
    $('.say-hi-message').removeClass('d-none');
});
$('#say-hello').click(function (e) {
    $('.request-come').addClass('d-none');
    $('.full-chat-panel').removeClass('d-none');
    $('.say-hello-message').removeClass('d-none');
});
$('#say-how-r-u').click(function (e) {
    $('.request-come').addClass('d-none');
    $('.full-chat-panel').removeClass('d-none');
    $('.say-how-r-u-message').removeClass('d-none');
});

$(document).on('click', function (e) {
    $('.dropdown-menu').removeClass('show');
    $('.header_dropdown').removeClass('uk-open');
    $('#audiocall').removeClass('is-visible');
    $('#videocall').removeClass('is-visible');
    //$('#confvideocl').removeClass('is-visible');
    //$('#videocall-2').removeClass('is-visible');
    $('#confercall').removeClass('is-visible');
    $('.dropdown-menu').removeClass('show');
    //e.stopPropagation();
});

$('.flikebtn').on('click', function (e) {
    $(this).toggleClass("active");
}); 

$('#zoommodal').on('click', function (e) {
    $('#videocall-2 .modal-wrapper').toggleClass("big-zoom");
});

$('.cancelcall').on('click', function (e) {
    $('.modal').removeClass("show");
});

$('.followUS-btn').on('click', function (e) {
    $(this).toggleClass("active");
    $(".follow-us").toggleClass('hide');
    $(".following").toggleClass('show');
});

//audio call and video call popup
$('.audioCall-click').on('click', function (e) {
    e.stopPropagation();
    $('#single-audio-call').addClass('is-visible');
});
$('.videoCall-click').on('click', function (e) {
    e.stopPropagation();
    $('#videocall-2').addClass('show');
});
$('.videoCall-click-group').on('click', function (e) {
    e.stopPropagation();
    $('#confvideocl').addClass('show');
});

$('.audioCall-click-group').on('click', function (e) {
    e.stopPropagation();
    $('#confercall').addClass('is-visible');
});

$('#emoji-box-top').scroll(function() {
    var windscroll = $('#emoji-box-top').scrollTop();
    //console.log(windscroll);
    if (windscroll == 0) {
        $('#emoji-box-top section#one').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option li.active').removeClass('active');
                $('#emoji-option li#opt-one').addClass('active');
            //}
        });

    }
    else if (windscroll < 400 && windscroll > 300 || windscroll == 300) {
        $('#emoji-box-top section#two').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option li.active').removeClass('active');
                $('#emoji-option li#opt-two').addClass('active');
            //}
        });

    }
    else if (windscroll < 800 && windscroll > 700 || windscroll == 700) {
        $('#emoji-box-top section#three').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option li.active').removeClass('active');
                $('#emoji-option li#opt-three').addClass('active');
            //}
        });

    } 
    else if (windscroll < 1400 && windscroll > 1300 || windscroll == 1300) {
        $('#emoji-box-top section#four').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option li.active').removeClass('active');
                $('#emoji-option li#opt-four').addClass('active');
            //}
        });

    } 
    else if (windscroll < 2100 && windscroll > 2000 || windscroll == 2000) {
        $('#emoji-box-top section#five').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option li.active').removeClass('active');
                $('#emoji-option li#opt-five').addClass('active');
            //}
        });

    } 
    else if (windscroll < 2500 && windscroll > 2400 || windscroll == 2400) {
        $('#emoji-box-top section#six').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option li.active').removeClass('active');
                $('#emoji-option li#opt-six').addClass('active');
            //}
        });

    } 
    else if (windscroll >= 2690) {
        $('#emoji-box-top section#seven').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option li.active').removeClass('active');
                $('#emoji-option li#opt-seven').addClass('active');
            //}
        });

    } 
    else {

        //$('#emoji-option li#opt-two').removeClass('active');
        //$('#emoji-option li#opt-one').addClass('active');

        //$('#emoji-option li.active').removeClass('active');
        //$('#emoji-option li:first').addClass('active');
    }

}).scroll();

//for group chat
$('#emoji-box-top-group').scroll(function() {
    var windscroll = $('#emoji-box-top-group').scrollTop();
    //console.log(windscroll);
    if (windscroll == 0) {
        $('#emoji-box-top-group section#one-group').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-group li.active').removeClass('active');
                $('#emoji-option-group li#opt-one-group').addClass('active');
            //}
        });

    }
    else if (windscroll < 400 && windscroll > 300 || windscroll == 300) {
        $('#emoji-box-top-group section#two-group').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-group li.active').removeClass('active');
                $('#emoji-option-group li#opt-two-group').addClass('active');
            //}
        });

    }
    else if (windscroll < 800 && windscroll > 700 || windscroll == 700) {
        $('#emoji-box-top-group section#three-group').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-group li.active').removeClass('active');
                $('#emoji-option-group li#opt-three-group').addClass('active');
            //}
        });

    } 
    else if (windscroll < 1400 && windscroll > 1300 || windscroll == 1300) {
        $('#emoji-box-top-group section#four-group').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-group li.active').removeClass('active');
                $('#emoji-option-group li#opt-four-group').addClass('active');
            //}
        });

    } 
    else if (windscroll < 2100 && windscroll > 2000 || windscroll == 2000) {
        $('#emoji-box-top-group section#five-group').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-group li.active').removeClass('active');
                $('#emoji-option-group li#opt-five-group').addClass('active');
            //}
        });

    } 
    else if (windscroll < 2500 && windscroll > 2400 || windscroll == 2400) {
        $('#emoji-box-top-group section#six-group').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-group li.active').removeClass('active');
                $('#emoji-option-group li#opt-six-group').addClass('active');
            //}
        });

    } 
    else if (windscroll >= 2690) {
        $('#emoji-box-top-group section#seven-group').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-group li.active').removeClass('active');
                $('#emoji-option-group li#opt-seven-group').addClass('active');
            //}
        });

    } 
    else {

        //$('#emoji-option li#opt-two').removeClass('active');
        //$('#emoji-option li#opt-one').addClass('active');

        //$('#emoji-option li.active').removeClass('active');
        //$('#emoji-option li:first').addClass('active');
    }

}).scroll();


// Chat background change script
var els = document.getElementsByClassName("styled-button");

for (var i = 0; i < els.length; i++) {
  // console.log(els[i].id);
  els[i].addEventListener("click", function (event) {
      changeBackground(this.id);
      changeBackgroundprivate(this.id);
  });
}

function changeBackground(id) {
  // document.querySelectorAll('[id^="background"]');
  // var classes = console.log(document.querySelector("body").classList.length);
  // clear all background classes from body
  const cls = [
    "background-image-none",
    "background-image-beach",
    "background-image-bhuddaBig",
    "background-image-bhuddaSmall",
    "background-image-bubble",
    "background-image-developer",
    "background-image-flowers",
    "background-image-hearts",
    "background-image-hearts-black-and-white",
    "background-image-math",
    "background-image-music",
    "background-image-peace",
    "background-image-sky",
    "background-image-squares",
    "background-image-squares-dots",
    "background-image-sunset",
    "background-image-tools",
    "background-image-tools1",
    "background-image-universe"
    ];
  document.getElementById("descnote2").classList.remove(...cls);

    switch (id) {
        case "none":
            document.getElementById("descnote2").classList.add("background-image-none");
        break;
        case "beach":
        document.getElementById("descnote2").classList.add("background-image-beach");
        break;
        case "bhuddaBig":
            document.getElementById("descnote2").classList.add("background-image-bhuddaBig");
        break;
        case "bhuddaSmall":
            document.getElementById("descnote2").classList.add("background-image-bhuddaSmall");
        break;
        case "bubble":
            document.getElementById("descnote2").classList.add("background-image-bubble");
        break;
        case "developer":
            document.getElementById("descnote2").classList.add("background-image-developer");
        break;
        case "flowers":
            document.getElementById("descnote2").classList.add("background-image-flowers");
        break;
        case "hearts":
            document.getElementById("descnote2").classList.add("background-image-hearts");
        break;
        case "hearts-black-and-white":
            document.getElementById("descnote2").classList.add("background-image-hearts-black-and-white");
        break;
        case "math":
            document.getElementById("descnote2").classList.add("background-image-math");
        break;
        case "music":
            document.getElementById("descnote2").classList.add("background-image-music");
        break;
        case "peace":
            document.getElementById("descnote2").classList.add("background-image-peace");
        break;
        case "sky":
            document.getElementById("descnote2").classList.add("background-image-sky");
        break;
        case "squares":
            document.getElementById("descnote2").classList.add("background-image-squares");
        break;
        case "squares-dots":
            document.getElementById("descnote2").classList.add("background-image-squares-dots");
        break;
        case "sunset":
            document.getElementById("descnote2").classList.add("background-image-sunset");
        break;
        case "tools":
            document.getElementById("descnote2").classList.add("background-image-tools");
        break;
        case "tools1":
            document.getElementById("descnote2").classList.add("background-image-tools1");
            break;
        case "universe":
            document.getElementById("descnote2").classList.add("background-image-universe");
        break;
        default:
            console.log("switch caught nothing");
        break;
  }
}
function changeBackgroundprivate(id) {
    // document.querySelectorAll('[id^="background"]');
    // var classes = console.log(document.querySelector("body").classList.length);
    // clear all background classes from body
    const cls = [
    "background-image-none",
    "background-image-beach",
    "background-image-bhuddaBig",
    "background-image-bhuddaSmall",
    "background-image-bubble",
    "background-image-developer",
    "background-image-flowers",
    "background-image-hearts",
    "background-image-hearts-black-and-white",
    "background-image-math",
    "background-image-music",
    "background-image-peace",
    "background-image-sky",
    "background-image-squares",
    "background-image-squares-dots",
    "background-image-sunset",
    "background-image-tools",
    "background-image-tools1",
    "background-image-universe"
    ];
    document.getElementById("descnote").classList.remove(...cls);

    switch (id) {
        case "none":
            document.getElementById("descnote").classList.add("background-image-none");
        break;
        case "beach":
        document.getElementById("descnote").classList.add("background-image-beach");
        break;
        case "bhuddaBig":
            document.getElementById("descnote").classList.add("background-image-bhuddaBig");
        break;
        case "bhuddaSmall":
            document.getElementById("descnote").classList.add("background-image-bhuddaSmall");
        break;
        case "bubble":
            document.getElementById("descnote").classList.add("background-image-bubble");
        break;
        case "developer":
            document.getElementById("descnote").classList.add("background-image-developer");
        break;
        case "flowers":
            document.getElementById("descnote").classList.add("background-image-flowers");
        break;
        case "hearts":
            document.getElementById("descnote").classList.add("background-image-hearts");
        break;
        case "hearts-black-and-white":
            document.getElementById("descnote").classList.add("background-image-hearts-black-and-white");
        break;
        case "math":
            document.getElementById("descnote").classList.add("background-image-math");
        break;
        case "music":
            document.getElementById("descnote").classList.add("background-image-music");
        break;
        case "peace":
            document.getElementById("descnote").classList.add("background-image-peace");
        break;
        case "sky":
            document.getElementById("descnote").classList.add("background-image-sky");
        break;
        case "squares":
            document.getElementById("descnote").classList.add("background-image-squares");
        break;
        case "squares-dots":
            document.getElementById("descnote").classList.add("background-image-squares-dots");
        break;
        case "sunset":
            document.getElementById("descnote").classList.add("background-image-sunset");
        break;
        case "tools":
            document.getElementById("descnote").classList.add("background-image-tools");
        break;
        case "tools1":
            document.getElementById("descnote").classList.add("background-image-tools1");
            break;
        case "universe":
            document.getElementById("descnote").classList.add("background-image-universe");
        break;
        default:
            console.log("switch caught nothing");
        break;
    }
}
  

//Make the DIV element draggagle:
// dragElement(document.getElementById("move-div"));

// function dragElement(elmnt) {
//   var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
//   if (document.getElementById(elmnt.id)) {
//     /* if present, the header is where you move the DIV from:*/
//     document.getElementById(elmnt.id).onmousedown = dragMouseDown;
//   } else {
//     /* otherwise, move the DIV from anywhere inside the DIV:*/
//     elmnt.onmousedown = dragMouseDown;
//   }

//   function dragMouseDown(e) {
//     e = e || window.event;
//     e.preventDefault();
//     // get the mouse cursor position at startup:
//     pos3 = e.clientX;
//     pos4 = e.clientY;
//     document.onmouseup = closeDragElement;
//     // call a function whenever the cursor moves:
//     document.onmousemove = elementDrag;
//   }

//   function elementDrag(e) {
//     e = e || window.event;
//     e.preventDefault();
//     // calculate the new cursor position:
//     pos1 = pos3 - e.clientX;
//     pos2 = pos4 - e.clientY;
//     pos3 = e.clientX;
//     pos4 = e.clientY;
//     // set the element's new position:
//     elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
//     elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
//   }

//   function closeDragElement() {
//     /* stop moving when mouse button is released:*/
//     document.onmouseup = null;
//     document.onmousemove = null;
//   }
// }


// //Make the DIV element draggagle:
// dragElement(document.getElementById("move-div-group"));

// function dragElement(elmnt) {
//   var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
//   if (document.getElementById(elmnt.id)) {
//     /* if present, the header is where you move the DIV from:*/
//     document.getElementById(elmnt.id).onmousedown = dragMouseDown;
//   } else {
//     /* otherwise, move the DIV from anywhere inside the DIV:*/
//     elmnt.onmousedown = dragMouseDown;
//   }

//   function dragMouseDown(e) {
//     e = e || window.event;
//     e.preventDefault();
//     // get the mouse cursor position at startup:
//     pos3 = e.clientX;
//     pos4 = e.clientY;
//     document.onmouseup = closeDragElement;
//     // call a function whenever the cursor moves:
//     document.onmousemove = elementDrag;
//   }

//   function elementDrag(e) {
//     e = e || window.event;
//     e.preventDefault();
//     // calculate the new cursor position:
//     pos1 = pos3 - e.clientX;
//     pos2 = pos4 - e.clientY;
//     pos3 = e.clientX;
//     pos4 = e.clientY;
//     // set the element's new position:
//     elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
//     elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
//   }

//   function closeDragElement() {
//     /* stop moving when mouse button is released:*/
//     document.onmouseup = null;
//     document.onmousemove = null;
//   }
// }

$('#emoji-box-top-post').scroll(function() {
    var windscroll = $('#emoji-box-top-post').scrollTop();
    //console.log(windscroll);
    if (windscroll == 0) {
        $('#emoji-box-top-post section#one-post').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-post li.active').removeClass('active');
                $('#emoji-option-post li#opt-one-post').addClass('active');
            //}
        });

    }
    else if (windscroll < 400 && windscroll > 300 || windscroll == 300) {
        $('#emoji-box-top-post section#two-post').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-post li.active').removeClass('active');
                $('#emoji-option-post li#opt-two-post').addClass('active');
            //}
        });

    }
    else if (windscroll < 800 && windscroll > 700 || windscroll == 700) {
        $('#emoji-box-top-post section#three-post').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-post li.active').removeClass('active');
                $('#emoji-option-post li#opt-three-post').addClass('active');
            //}
        });

    } 
    else if (windscroll < 1400 && windscroll > 1300 || windscroll == 1300) {
        $('#emoji-box-top-post section#four-post').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-post li.active').removeClass('active');
                $('#emoji-option-post li#opt-four-post').addClass('active');
            //}
        });

    } 
    else if (windscroll < 2100 && windscroll > 2000 || windscroll == 2000) {
        $('#emoji-box-top-post section#five-post').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-post li.active').removeClass('active');
                $('#emoji-option-post li#opt-five-post').addClass('active');
            //}
        });

    } 
    else if (windscroll < 2500 && windscroll > 2400 || windscroll == 2400) {
        $('#emoji-box-top-post section#six-post').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-post li.active').removeClass('active');
                $('#emoji-option-post li#opt-six-post').addClass('active');
            //}
        });

    } 
    else if (windscroll >= 2690) {
        $('#emoji-box-top-post section#seven-post').each(function() {
    // The number at the end of the next line is how pany pixels you from the top you want it to activate.
            //if ($(this).position().top <= windscroll - 0) {
                $('#emoji-option-post li.active').removeClass('active');
                $('#emoji-option-post li#opt-seven-post').addClass('active');
            //}
        });

    } 
    else {

        //$('#emoji-option li#opt-two').removeClass('active');
        //$('#emoji-option li#opt-one').addClass('active');

        //$('#emoji-option li.active').removeClass('active');
        //$('#emoji-option li:first').addClass('active');
    }

}).scroll();


