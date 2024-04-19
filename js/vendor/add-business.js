$('.has-spinner').click(function () {
		var btn = $(this);
		$(btn).buttonLoader('start');
		setTimeout(function () {
			$(btn).buttonLoader('stop');
		}, 3000);
	});
    jQuery(".for-like").click(function () {
        setTimeout(function () {
            initFlexModal();
        }, 500);
    });
	$(document).on('click','.social-options .social-btn',function(){
		$(this).toggleClass('active');
	});
	$(document).on('focusin','.profile-box input[name="store_name"]',function(){
		$(this).attr('placeholder','');
	});
	
	$(document).on('focusout','.profile-box input[name="store_name"]',function(){
		$(this).attr('placeholder','Add Page Name');
	});
	
    function initFlexModal() {
        $("#Shareslider").flexslider({
            animation: "slide",
            controlNav: true,
            animationLoop: false,
            slideshow: false,
            animationDuration: 700,
            itemWidth: 80,
            itemMargin: 0,
            minItems: 5,
            maxItems: 10,
        });
    }

    var maxLength = 500;
    $("textarea").keyup(function () {
        var length = $(this).val().length;
        var length = maxLength - length;
        $("#chars").text(length);
    });

    $(document).ready(function () {
        $(".ratingimg-group").each(function (i) {
            $(this).css("left", i * -8);
        });
    });
    jQuery("#Status_active").click(function () {
        jQuery("#show_Active").show();
        jQuery("#show_Away").hide();
        jQuery("#show_Dis").hide();
        jQuery("#show_Invisible").hide();
    });
    jQuery("#Status_away").click(function () {
        jQuery("#show_Active").hide();
        jQuery("#show_Dis").hide();
        jQuery("#show_Invisible").hide();
        jQuery("#show_Away").show();
    });
    jQuery("#Status_dis").click(function () {
        jQuery("#show_Active").hide();
        jQuery("#show_Dis").show();
        jQuery("#show_Invisible").hide();
        jQuery("#show_Away").hide();
    });
    jQuery("#Status_invisible").click(function () {
        jQuery("#show_Active").hide();
        jQuery("#show_Dis").hide();
        jQuery("#show_Invisible").show();
        jQuery("#show_Away").hide();
    });

    jQuery("#Status_active1").click(function () {
        jQuery("#show_Active1").show();
        jQuery("#show_Away1").hide();
        jQuery("#show_Dis1").hide();
        jQuery("#show_Invisible1").hide();
    });
    jQuery("#Status_away1").click(function () {
        jQuery("#show_Active1").hide();
        jQuery("#show_Dis1").hide();
        jQuery("#show_Invisible1").hide();
        jQuery("#show_Away1").show();
    });
    jQuery("#Status_dis1").click(function () {
        jQuery("#show_Active1").hide();
        jQuery("#show_Dis1").show();
        jQuery("#show_Invisible1").hide();
        jQuery("#show_Away1").hide();
    });
    jQuery("#Status_invisible1").click(function () {
        jQuery("#show_Active1").hide();
        jQuery("#show_Dis1").hide();
        jQuery("#show_Invisible1").show();
        jQuery("#show_Away1").hide();
    });

    jQuery("#Status_active2").click(function () {
        jQuery("#show_Active2").show();
        jQuery("#show_Away2").hide();
        jQuery("#show_Dis2").hide();
        jQuery("#show_Invisible2").hide();
        jQuery("#show_Active5").show();
        jQuery("#show_Away5").hide();
        jQuery("#show_Dis5").hide();
        jQuery("#show_Invisible5").hide();
    });
    jQuery("#Status_away2").click(function () {
        jQuery("#show_Active2").hide();
        jQuery("#show_Dis2").hide();
        jQuery("#show_Invisible2").hide();
        jQuery("#show_Away2").show();
        jQuery("#show_Active5").hide();
        jQuery("#show_Away5").show();
        jQuery("#show_Dis5").hide();
        jQuery("#show_Invisible5").hide();
    });
    jQuery("#Status_dis2").click(function () {
        jQuery("#show_Active2").hide();
        jQuery("#show_Dis2").show();
        jQuery("#show_Invisible2").hide();
        jQuery("#show_Away2").hide();
        jQuery("#show_Active5").hide();
        jQuery("#show_Away5").hide();
        jQuery("#show_Dis5").show();
        jQuery("#show_Invisible5").hide();
    });
    jQuery("#Status_invisible2").click(function () {
        jQuery("#show_Active2").hide();
        jQuery("#show_Dis2").hide();
        jQuery("#show_Invisible2").show();
        jQuery("#show_Away2").hide();
        jQuery("#show_Active5").hide();
        jQuery("#show_Away5").hide();
        jQuery("#show_Dis5").hide();
        jQuery("#show_Invisible5").sho();
    });

    jQuery("#Status_active4").click(function () {
        jQuery("#show_Active4").show();
        jQuery("#show_Away4").hide();
        jQuery("#show_Dis4").hide();
        jQuery("#show_Invisible4").hide();
    });
    jQuery("#Status_away4").click(function () {
        jQuery("#show_Active4").hide();
        jQuery("#show_Dis4").hide();
        jQuery("#show_Invisible4").hide();
        jQuery("#show_Away4").show();
    });
    jQuery("#Status_dis4").click(function () {
        jQuery("#show_Active4").hide();
        jQuery("#show_Dis4").show();
        jQuery("#show_Invisible4").hide();
        jQuery("#show_Away4").hide();
    });
    jQuery("#Status_invisible4").click(function () {
        jQuery("#show_Active4").hide();
        jQuery("#show_Dis4").hide();
        jQuery("#show_Invisible4").show();
        jQuery("#show_Away4").hide();
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 550) {
            // $('.hidescrollDiv').fadeOut(10);
            $(".showscrollDiv").fadeIn(500);
        } else {
            //   $('.hidescrollDiv').fadeIn(10);
            $(".showscrollDiv").fadeOut(500);
        }
    });



    $(document).ready(function (e) {
        $(".search-panel .dropdown-menu")
            .find("a")
            .click(function (e) {
                e.preventDefault();
                var param = $(this).attr("href").replace("#", "");
                var concept = $(this).text();
                $(".search-panel span#search_concept").text(concept);
                $(".input-group #search_param").val(param);
            });
    });



    $(document).ready(function() {
        $('.catag-select-container .catag-select').click(function(event) {
            $('.catag-select-container .catag-list-container').show();
        });
		$('.selected-product-category').hide();
        $('.search-items').keyup(function(event) {
            var current_text = $(this).val().toLowerCase();
            var filter_item = $('.list-items ul li');
            if(current_text != ''){
                filter_item.addClass('hidden');
                $('.list-items [data-filter-name*="' + current_text + '"]').removeClass('hidden');
            }else {
                filter_item.removeClass('hidden');
            }
        });
        $('.list-items ul li span').click(function(event) { 
			$('.selected-product-category').show();
            var label_text = $(this).attr('data-filter-name');
			var category = $(this).attr('data-category');
            if( !$(this).parent().hasClass('item-selected') ){
				if($(this).attr('data-level') == 'parent'){
					$('.page_category_select_box .catag-select-container ul li').removeClass('item-selected');
					$('.page_category_select_box .catag-list-container ul li .child').hide();
					$('.selected-items .item-section').html('');
					$('.selected-product-category').html('');
					if($(this).parent().find('.child').length){
						$(this).next('.child').show();
					}else{
						$('#navigation-bar .second-nav li.active a').html(category);
						$('#navigation-bar .second-nav li.sub-cat').remove();
						$('.catag-select-container .catag-list-container').hide();
					}
				}else{
					$('#navigation-bar .second-nav li.active a').html($(this).parents('li').find('span').attr('data-category'));
					$('#navigation-bar .second-nav').prepend('<li class="sub-cat" data-itemname="'+label_text+'"><a href="">'+label_text+'</a></li>');
				}
				$(this).parent().addClass('item-selected');
                $('.selected-items .item-section').append('<span class="selected-item-name bg-secondary px-3 py-2 radius-5 mr-3 font-blue font-13" data-itemname="'+label_text+'">'+
                        '<span class="item-name text-capitalize font-blue">'+label_text+'</span>'+
                        '<span class="remove-product ml-3 font-10 cursor-pointer"><i class="fa fa-times" aria-hidden="true"></i></span>'+
                    '</span>');
                $('.catag-select-container .catag-select').addClass('item-added');
                $('.remove-product').click(function(event) {
                    var unselect = $(this).siblings('.item-name').text();
					var itemName = $(this).parent().attr('data-itemname');
					$('#navigation-bar .second-nav li[data-itemname="'+itemName+'"]').remove();
                    $('.list-items [data-filter-name*="' + unselect + '"]').removeClass('item-selected');
                    $('.selected-items .item-section [data-itemname*="' + unselect + '"]').remove();
                    
                    var nav_text = $('.catag-select .selected-items .item-section .selected-item-name').eq('0').find('.item-name').text();
                    $('.selected-product-category').find('.product__category[data-id="'+unselect+'"]').remove();

                    var item_count = $('.selected-items .item-section .selected-item-name').length/2;
                    if( item_count<1 ){
                        $('.selected-product-category').html('');
						$('.selected-product-category').hide();
						$('#navigation-bar .second-nav li.active a').html('Shop');
                        $('.catag-select-container .catag-select').removeClass('item-added');
                    }
                });
                $('.search-items').val('');
                $('.catag-select-container .catag-select').addClass('item-added');
                var nav_text = $('.catag-select .selected-items .item-section .selected-item-name').eq('0').find('.item-name').text();
                $('.selected-product-category').append('<div class="product__category mr-3 bg-secondary text-capitalize line-height-default radius-5 font-13 px-3 py-2 mb-3" data-id="'+label_text+'">'+label_text+'</div>');
            }
        });
        $(document).click(function(e){
            var container = $(".catag-select");
            var container2 = $(".catag-list-container");
            if(!container.is(e.target) && container.has(e.target).length === 0 && !container2.is(e.target) && container2.has(e.target).length === 0){
                $('.catag-list-container').hide();
            }
        });
        
        $('#address').keyup(function(event) {
            var add = $(this).val();
            $('.maps-part>.our-address-block .address-section .address').text(add);
        });
        $('#country').change(function(event) {
            var cnt = $( "#country option:selected" ).text();;
            // console.log(cnt);
            $('.maps-part>.our-address-block .address-section .country-name').text(cnt);
        });
        
         $('.catag-list-container .selected-list-items .title .arrowBtn').click(function(){
            $('.catag-select-container .catag-list-container').hide();
        });
        
        $(".banner-text-box .closeBox").click(function(event){
            event.preventDefault();
            $(this).parent('.banner-text-box').hide();
        });
    });
