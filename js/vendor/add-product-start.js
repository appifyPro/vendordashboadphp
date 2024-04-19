$(".searchlist").click(function(){
	 $(".physical_input_box").removeClass("keypress-hover");
});

$(".backtab").click(function(){
	$(".physical_input_box").removeClass("keypress-hover");
});
$(".physical_part .physical_navs a").click(function(){
    $(".physical_part .physical_navs .physical_navs_btn").removeClass('active');
    $(this).parent('.physical_navs_btn').addClass('active');
    var dataToggle = $(this).attr('data-toggle');
	$(".physical_part .physical_tabs_content .tabs_content").removeClass('active');
    $(".physical_part .physical_tabs_content .tabs_content[id='"+dataToggle+"']").addClass('active');
});
$(".search-products").on("keyup", function() {  
	var value = $(this).val().toLowerCase(); 
	$(this).parent().find('.search-tab-big .searchs__results .recent-search').filter(function() { 
		$(this).parents('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
	});
});
$(".physical_inputs").focusin(function(){
	$(this).parent('.physical_input_box').addClass('keypress-hover');
});
$(".physical_inputs").focusout(function(){  
	var searhTxt = $(this).val();
	if(searhTxt == ""){
		$(this).parent('.physical_input_box').removeClass('keypress-hover');
	}
});

$(document).ready(function(){
	$("#dam_return .get").click(function(){			
			$("#dam").show();			
		});

			
		$("#dam_return .get").click(function(){
			$("#dam_return ul.searchs__results li").removeClass('item-selected');
			$(this).parent().addClass('item-selected');
			var value = $(this).find('.product-and-category .recent-search').html();
			var input = $('#dam');
			input.val(value);
		});
		$("#dam_return2 .get").click(function(){			
			$("#dam2").show();			
		});

			
		$("#dam_return2 .get").click(function(){
			$("#dam_return2 ul.searchs__results li").removeClass('item-selected');
			$(this).parent().addClass('item-selected');
			var value = $(this).find('.product-and-category .recent-search').html();
			var input = $('#dam2');
			input.val(value);
		});
	
		$("#ph").click(function(){
		$(".listing-page-footertab").removeClass("show");
		});
		$("#dig").click(function(){
		$(".listing-page-footertab").removeClass("show");
		});
		

	   
		$(".listing_banner_text_part .title").click(function(){
			$(this).parent('.heading_box_part').find('.title_box').show();
			$(this).parent('.heading_box_part').find('.title_box').focus();
			$(this).hide();
		});

		var Val = $(".heading_box_part .title").text();
		$(".heading_box_part .title_box").val(Val);
		$(".heading_box_part .title_box").keyup(function(){
			var inVal = $(this).val();
			$(this).parent('.heading_box_part').find('.title').text(inVal);
		});

		$(".listing_banner_text_part .sub_title").click(function(){
			$(this).hide();
			$(this).parent('.sub_heading_box').find('.subtitle_box').show();
			$(this).parent('.sub_heading_box').find('.subtitle_box').focus();
			$(this).parent('.sub_heading_box').find('a').hide();
		});

		var Value = $(".sub_heading_box .sub_title").text();
		$(".sub_heading_box .subtitle_box").val(Value);
		$(".sub_heading_box .subtitle_box").keyup(function(){
			var inVal2 = $(this).val();
			$(this).parent('.sub_heading_box').find('.sub_title').text(inVal2);
		});
	});

	$(document).click(function(e){
		var menu = $(".heading_box_part .title_box");
		var menu2 = $(".heading_box_part .title");
		if(!menu.is(e.target) && menu.has(e.target).length === 0 && !menu2.is(e.target) && menu2.has(e.target).length === 0){
			$(".heading_box_part .title_box").hide();
			$(".listing_banner_text_part .title").show();
		}
	});

	$(document).click(function(e){
		var menu3 = $(".sub_heading_box .subtitle_box");
		var menu4 = $(".sub_heading_box .sub_title");
		if(!menu3.is(e.target) && menu3.has(e.target).length === 0 && !menu4.is(e.target) && menu4.has(e.target).length === 0){
			$(".sub_heading_box .subtitle_box").hide();
			$(".sub_heading_box").find('a').show();
			$(".listing_banner_text_part .sub_title").show();
		}
	});
	$('#leftside-menu-container a[href="#sidebarProduct"]').trigger('click');
	$('#leftside-menu-container a[data-target="listing"]').addClass('active');
