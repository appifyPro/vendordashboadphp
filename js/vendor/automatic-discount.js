$(document).ready(function() {
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
						'<img class="mx-auto" src="'+dataImage+'" style="height: 115px;border: 0;"/>'+
						'<p class="mt-3 text-muted font-13 line-height-default">'+productName+'</p>'+
						'<p class="mt-3 text-muted font-18 font-weight-600 line-height-default">'+productPrice+'</p>'+
					'</div>';
		$('.added-bundle-product').trigger('add.owl.carousel',html);
		$('.added-bundle-product').trigger('refresh.owl.carousel');
		$('.added-bundle-product').trigger('next.owl.carousel', [300]);
	});
	$(".input_show .radio_input").each(function() {
		if($(this).is(':checked')) {
			var dataV = $(this).attr('data-v');
			$(".input_show .amount_input_part").each(function() {
				var id = $(this).attr('id');
				if(dataV == id) {
					$(".input_show .amount_input_part").hide();
					$(this).show();
				}
			});
		}
	});
});

$(".eligibility_radio_part .radio_input").change(function() {
	var dataV = $(this).attr('data-v');
	$(this).parents('.eligibility_radio_part').find('.search_pro').attr('placeholder', dataV);
	if(dataV == 'ddf') {
		$(this).parents('.eligibility_radio_part').find('.input-group').hide();
	} else {
		$(this).parents('.eligibility_radio_part').find('.input-group').show();
	}
});
$(document).ready(function() {
	$(".eligibility_radio_part .radio_input").each(function() {
		if($(this).is(':checked')) {
			var dataV = $(this).attr('data-v');
			$(this).parents('.eligibility_radio_part').find('.search_pro').attr('placeholder', dataV);
		}
	});
});
$(".usage_limits_checkbox .checkbox_input").change(function() {
	if($(this).is(':checked')) {
		$(this).parent('.checkbox_btn_part').find('.amount_input').show();
	} else {
		$(this).parent('.checkbox_btn_part').find('.amount_input').hide();
	}
});
$(document).ready(function() {
	$(".usage_limits_checkbox .checkbox_input").each(function() {
		if($(this).is(':checked')) {
			$(this).parent('.checkbox_btn_part').find('.amount_input').show();
		} else {
			$(this).parent('.checkbox_btn_part').find('.amount_input').hide();
		}
	});
}); // function GFG_Fun() { 		 //           down.innerHTML = 		 //           Math.random().toString(36).slice(2); 		 //       }		       $(".generat_btn").click(function(){				var code = Math.random().toString(36).slice(2).toUpperCase();;				$("#discount_code").val(code);				$(".sum_title").text(code);		       });					$(".country_shipping .country_list_show .radio_input").change(function(){				var dataToggle = $(this).attr('data-toggle');				$(".country_shipping .input-group").each(function(){					var dataId = $(this).attr('data-id');					if(dataToggle == dataId){						$(this).show();					}					else{						$(this).hide();					}				});			});					$(document).ready(function(){				$(".country_shipping .country_list_show .radio_input").each(function(){					if($(this).is(':checked')){						var dataToggle = $(this).attr('data-toggle');						$(".country_shipping .input-group").each(function(){							var dataId = $(this).attr('data-id');							if(dataToggle == dataId){								$(this).show();							}							else{								$(this).hide();							}						});					}				});			});

$(document).ready(function() {
	$(".radio_btn_part .radio_input").each(function() {
		if($(this).is(':checked')) {
			var Toggle = $(this).attr('data-toggle');
			$(".dis_box_part .dis_input").each(function() {
				var id = $(this).attr('id');
				if(Toggle == id) {
					$(".dis_box_part .dis_input").hide();
					$(this).show();
				}
			});
		}
	});
	if($("#buy").is(':checked')) {
		$(".buy_x").show();
		$(".without_buy_x").hide();
	} else {
		$(".buy_x").hide();
		$(".without_buy_x").show();
	}
});
$(".radio_btn_part .radio_input").change(function() {
	var Toggle = $(this).attr('data-toggle');
	$(".dis_box_part .dis_input").each(function() {
		var id = $(this).attr('id');
		if(Toggle == id) {
			$(".dis_box_part .dis_input").hide();
			$(this).show();
		}
	});
	if($("#buy").is(':checked')) {
		$(".buy_x").show();
		$(".without_buy_x").hide();
	} else {
		$(".buy_x").hide();
		$(".without_buy_x").show();
	}
});
$("#setEnddate").change(function() {
	if($(this).is(':checked')) {
		$(".end_date_part").show();
	} else {
		$(".end_date_part").hide();
	}
});
$(document).ready(function() {
	if($("#setEnddate").is(':checked')) {
		$(".end_date_part").show();
	} else {
		$(".end_date_part").hide();
	}
});
$(".buy_x_radio .radio_input").change(function() {
	var Toggle = $(this).attr('data-toggle');
	$(".buy_x_input .x_input").each(function() {
		var id = $(this).attr('id');
		if(Toggle == id) {
			$(".buy_x_input .x_input").hide();
			$(this).show();
		}
	});
});
$(document).ready(function() {
	$(".buy_x_radio .radio_input").each(function() {
		if($(this).is(':checked')) {
			var Toggle = $(this).attr('data-toggle');
			$(".buy_x_input .x_input").each(function() {
				var id = $(this).attr('id');
				if(Toggle == id) {
					$(".buy_x_input .x_input").hide();
					$(this).show();
				}
			});
		}
	});
});
$("#discount_code").keyup(function() {
	var Val = $(this).val();
	$(".summary_box .sum_title").text(Val);
});
$("#perc .form-control").keyup(function() {
	var Val = $(this).val();
	$(".entire_order").text(Val + '%');
});
$("#fixAm .form-control").keyup(function() {
	var Val = $(this).val();
	$(".entire_order").text(Val + '€');
});
$("#pur_amount").keyup(function() {
	var Val = $(this).val();
	$(".purchase_am").text(Val);
});
$(".quantity_btn_part .radio_input").change(function() {
	var Toggle = $(this).attr('data-toggle');
	$(".quantity_box_part .dis_input").each(function() {
		var id = $(this).attr('id');
		if(Toggle == id) {
			$(".quantity_box_part .dis_input").hide();
			$(this).show();
		}
	});
});
$(document).ready(function() {
	$(".quantity_btn_part .radio_input").each(function() {
		if($(this).is(':checked')) {
			var Toggle = $(this).attr('data-toggle');
			$(".quantity_box_part .dis_input").each(function() {
				var id = $(this).attr('id');
				if(Toggle == id) {
					$(".quantity_box_part .dis_input").hide();
					$(this).show();
				}
			});
		}
	});
});

$(document).ready(function() {
	$(".productbox #info1").click(function() {
		$('.productbox #info1').hide();
		$(' #show1').show();
		$(' #distbale1').show();
		$(".productbox #list1").css('display', 'flex');
	});
	$(".productbox #list1").click(function() {
		$('.productbox #info1').show();
		$(' #show1').hide();
		$(' #distbale1').hide();
		$(".productbox #list1").css('display', 'none');
	});
	$(".productbox #info2").click(function() {
		$('.productbox #info2').hide();
		$(' #show2').show();
		$(' #distbale2').show();
		$(".productbox #list2").css('display', 'flex');
	});
	$(".productbox #list2").click(function() {
		$('.productbox #info2').show();
		$(' #show2').hide();
		$(' #distbale2').hide();
		$(".productbox #list2").css('display', 'none');
	});
	$(".productbox #info3").click(function() {
		$('.productbox #info3').hide();
		$(' #show3').show();
		$(' #distbale3').show();
		$(".productbox #list3").css('display', 'flex');
	});
	$(".productbox #list3").click(function() {
		$('.productbox #info3').show();
		$(' #show3').hide();
		$(' #distbale3').hide();
		$(".productbox #list3").css('display', 'none');
	});
	$("#openprolist1").click(function() {
		$('#openproductlist').show();
	});
	$("#openprolist2").click(function() {
		$('#openproductlist').show();
	});
});

$(document).ready(function(e) {
	$('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#", "");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
	$('#leftside-menu-container a[href="#sidebarDiscounts"]').trigger('click');
	$('#leftside-menu-container a[data-target="automatic-discount"]').addClass('active');
});
