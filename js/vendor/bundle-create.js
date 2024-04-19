
	var maxLength = 500;
	$('textarea').keyup(function() {
	  var length = $(this).val().length;
	  var length = maxLength-length;
	  $('#chars').text(length);
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
	
	$(document).ready(function(){
		var Width = $(window).width();
		if (Width <= 991){
			$(".menu_sidebar .nav .nav-link").addClass('with-sub');
		}	
	});
	$("#bundlename").keyup(function(){
		var Val = $(this).val();
		$(".summary_box1 .sum_title1").text(Val);
	});
	$(document).on('click','.am-pm .format-switcher',function(){
		$(this).parents('.am-pm').find('.format-switcher').removeClass('active');
		$(this).addClass('active');
	});
	$(document).on('click','.input-field.fc-datepicker.input-calendar',function(){
		$(this).parent().find('.time-picker').show();
	});
	$(document).on('click','.time-picker .settings .buttons .submit',function(){
		var hour = $(this).parents('.time-picker').find('input[name="hours"]').val();
		var min = $(this).parents('.time-picker').find('input[name="minute"]').val();
		var dateFormat = $(this).parents('.time-picker').find('.format-switcher.active').html();
		var timer = hour+':'+min+' '+dateFormat;
		$(this).parents('.clockpicker').find('.fc-datepicker.input-calendar').val(timer);
		$(this).parents('.time-picker').hide();
	});
	$(document).on('click','.time-picker .settings .buttons .close-timer',function(){
		$(this).parents('.time-picker').hide();
	});
	$(document).on('click','.product-image-section .product-options-image a',function(){
		var src = $(this).find('img').attr('src');
		var price = $(this).attr('data-price');
		var name = $(this).attr('data-name');
		$('.bundle-product-price').attr('data-price',price);
		$('.bundle-product-price').html(price);
		$('.add-this-bundle-product').attr('data-name',name);
		$('.product-image-section .main-product-image img').attr('src',src)
	});
	$(document).on('click','.add-this-bundle-product',function(){
		var productName = $(this).attr('data-name');
		var productPrice = $('.bundle-product-price').attr('data-price');
		var dataImage = $('.product-image-section .main-product-image img').attr('src');
		var html = 	'<div class="productbox text-center w-100 m-0">'+
						'<img class="mx-auto" src="'+dataImage+'"/>'+
						'<p class="mt-3 text-muted font-13 line-height-default">'+productName+'</p>'+
						'<p class="mt-3 text-muted font-18 font-weight-600 line-height-default">'+productPrice+'</p>'+
					'</div>';
		$('.added-bundle-product').trigger('add.owl.carousel',html);
		$('.added-bundle-product').trigger('refresh.owl.carousel');
		$('.added-bundle-product').trigger('next.owl.carousel', [300]);
	});
	$('#startDate').datetimepicker({
		"allowInputToggle": true,
		"showClose": true,
		"showClear": true,
		"showTodayButton": true,
		"format": "MM/DD/YYYY",
		widgetPositioning: {
			horizontal: 'left',
			vertical: 'bottom'
		}
	});
	$('#end__Date').datetimepicker({
		"allowInputToggle": true,
		"showClose": true,
		"showClear": true,
		"showTodayButton": true,
		"format": "MM/DD/YYYY",
		widgetPositioning: {
			horizontal: 'left',
			vertical: 'bottom'
		}
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
		
		$('#leftside-menu-container a[href="#sidebarBundles"]').trigger('click');
		$('#leftside-menu-container a[data-target="shop-bundle"]').addClass('active');
	});  

	$('.t-datepicker').tDatePicker({
	  formatDate  : 'yyyy-mm-dd',
	  iconDate: '',
	  titleCheckIn : 'From',
	  titleCheckOut : 'To',
	});
