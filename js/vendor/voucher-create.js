var maxLength = 500;
	$('textarea').keyup(function() {
		var length = $(this).val().length;
		var length = maxLength - length;
		$('#chars').text(length);
	});

	$(document).ready(function() {
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
	});
	
	jQuery(document).ready(function($) {
		$(".btnrating").on('click', (function(e) {
			var previous_value = $("#selected_rating").val();
			var selected_value = $(this).attr("data-attr");
			$("#selected_rating").val(selected_value);
			$(".selected-rating").empty();
			$(".selected-rating").html(selected_value);

			for (i = 1; i <= selected_value; ++i) {
				$("#rating-star-" + i).toggleClass('btn-primary');
				$("#rating-star-" + i).toggleClass('btn-default');
			}

			for (ix = 1; ix <= previous_value; ++ix) {
				$("#rating-star-" + ix).toggleClass('btn-primary');
				$("#rating-star-" + ix).toggleClass('btn-default');
			}

			$("#selected_rating1").val(selected_value);
			$(".selected-rating1").empty();
			$(".selected-rating1").html(selected_value);
			for (i = 1; i <= selected_value; ++i) {
				$("#loyalty-card-" + i).toggleClass('btn-primary');
				$("#loyalty-card-" + i).toggleClass('btn-default');
			}

			for (ix = 1; ix <= previous_value; ++ix) {
				$("#loyalty-card-" + ix).toggleClass('btn-primary');
				$("#loyalty-card-" + ix).toggleClass('btn-default');
			}
		}));

		$(".vouchercolor1").click(function() {
			$('#Valuebg').addClass('purple-gradient');
			$('#Valuebg').removeClass('blue-gradient');
			$('#Valuebg').removeClass('darkblue-gradient');
			$('#Valuebg').removeClass('green-gradient');
			$('#Valuebg').removeClass('yellow-gradient');
			$('#Valuebg').removeClass('red-gradient');
			$('#Valuebg').removeClass('white-gradient');
			$('.vouchercolor7 i').css('display', 'none');
			$('.vouchercolor1 i').css('display', 'flex');
			$('.vouchercolor2 i').css('display', 'none');
			$('.vouchercolor3 i').css('display', 'none');
			$('.vouchercolor4 i').css('display', 'none');
			$('.vouchercolor5 i').css('display', 'none');
			$('.vouchercolor6 i').css('display', 'none');

		});
		$(".vouchercolor2").click(function() {
			$('#Valuebg').addClass('blue-gradient');
			$('#Valuebg').removeClass('purple-gradient');
			$('#Valuebg').removeClass('darkblue-gradient');
			$('#Valuebg').removeClass('green-gradient');
			$('#Valuebg').removeClass('yellow-gradient');
			$('#Valuebg').removeClass('red-gradient');
			$('#Valuebg').removeClass('white-gradient');
			$('.vouchercolor7 i').css('display', 'none');
			$('.vouchercolor2 i').css('display', 'flex');
			$('.vouchercolor1 i').css('display', 'none');
			$('.vouchercolor3 i').css('display', 'none');
			$('.vouchercolor4 i').css('display', 'none');
			$('.vouchercolor5 i').css('display', 'none');
			$('.vouchercolor6 i').css('display', 'none');

		});
		$(".vouchercolor3").click(function() {
			$('#Valuebg').removeClass('blue-gradient');
			$('#Valuebg').removeClass('purple-gradient');
			$('#Valuebg').addClass('darkblue-gradient');
			$('#Valuebg').removeClass('green-gradient');
			$('#Valuebg').removeClass('yellow-gradient');
			$('#Valuebg').removeClass('red-gradient');
			$('#Valuebg').removeClass('white-gradient');
			$('.vouchercolor7 i').css('display', 'none');
			$('.vouchercolor3 i').css('display', 'flex');
			$('.vouchercolor1 i').css('display', 'none');
			$('.vouchercolor2 i').css('display', 'none');
			$('.vouchercolor4 i').css('display', 'none');
			$('.vouchercolor5 i').css('display', 'none');
			$('.vouchercolor6 i').css('display', 'none');

		});
		$(".vouchercolor4").click(function() {
			$('#Valuebg').removeClass('blue-gradient');
			$('#Valuebg').removeClass('purple-gradient');
			$('#Valuebg').removeClass('darkblue-gradient');
			$('#Valuebg').addClass('green-gradient');
			$('#Valuebg').removeClass('yellow-gradient');
			$('#Valuebg').removeClass('red-gradient');
			$('#Valuebg').removeClass('white-gradient');
			$('.vouchercolor7 i').css('display', 'none');
			$('.vouchercolor4 i').css('display', 'flex');
			$('.vouchercolor1 i').css('display', 'none');
			$('.vouchercolor2 i').css('display', 'none');
			$('.vouchercolor3 i').css('display', 'none');
			$('.vouchercolor5 i').css('display', 'none');
			$('.vouchercolor6 i').css('display', 'none');

		});
		$(".vouchercolor5").click(function() {
			$('#Valuebg').removeClass('blue-gradient');
			$('#Valuebg').removeClass('purple-gradient');
			$('#Valuebg').removeClass('darkblue-gradient');
			$('#Valuebg').removeClass('green-gradient');
			$('#Valuebg').addClass('yellow-gradient');
			$('#Valuebg').removeClass('red-gradient');
			$('#Valuebg').removeClass('white-gradient');
			$('.vouchercolor7 i').css('display', 'none');
			$('.vouchercolor5 i').css('display', 'flex');
			$('.vouchercolor1 i').css('display', 'none');
			$('.vouchercolor2 i').css('display', 'none');
			$('.vouchercolor3 i').css('display', 'none');
			$('.vouchercolor4 i').css('display', 'none');
			$('.vouchercolor6 i').css('display', 'none');

		});
		$(".vouchercolor6").click(function() {
			$('#Valuebg').removeClass('blue-gradient');
			$('#Valuebg').removeClass('purple-gradient');
			$('#Valuebg').removeClass('darkblue-gradient');
			$('#Valuebg').removeClass('green-gradient');
			$('#Valuebg').removeClass('yellow-gradient');
			$('#Valuebg').addClass('red-gradient');
			$('#Valuebg').removeClass('white-gradient');
			$('.vouchercolor7 i').css('display', 'none');
			$('.vouchercolor6 i').css('display', 'flex');
			$('.vouchercolor1 i').css('display', 'none');
			$('.vouchercolor2 i').css('display', 'none');
			$('.vouchercolor3 i').css('display', 'none');
			$('.vouchercolor4 i').css('display', 'none');
			$('.vouchercolor5 i').css('display', 'none');

		});
		
		$(".vouchercolor7").click(function() {
			$('#Valuebg').addClass('white-gradient');
			$('#Valuebg').removeClass('purple-gradient');
			$('#Valuebg').removeClass('blue-gradient');
			$('#Valuebg').removeClass('darkblue-gradient');
			$('#Valuebg').removeClass('green-gradient');
			$('#Valuebg').removeClass('yellow-gradient');
			$('#Valuebg').removeClass('red-gradient');
			$('.vouchercolor1 i').css('display', 'none');
			$('.vouchercolor2 i').css('display', 'none');
			$('.vouchercolor3 i').css('display', 'none');
			$('.vouchercolor4 i').css('display', 'none');
			$('.vouchercolor5 i').css('display', 'none');
			$('.vouchercolor6 i').css('display', 'none');
			$('.vouchercolor7 i').css('display', 'flex');

		});
		
		$("#userid_1").click(function() {
			$('#user_1').show();
			$('#user_11').show();
			$('#user_2').hide();
			$('#user_12').hide();
			$('#user_default').hide();
			$('#user_default1').hide();

		});
		$("#userid_2").click(function() {
			$('#user_2').show();
			$('#user_1').hide();
			$('#user_11').hide();
			$('#user_12').show();
			$('#user_default').hide();
			$('#user_default1').hide();
		});
		$('#leftside-menu-container a[href="#sidebarVoucher"]').trigger('click');
		$('#leftside-menu-container a[data-target="create-voucher"]').addClass('active');
	});
