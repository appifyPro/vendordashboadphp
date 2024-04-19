$(document).on('click','.addToTaxTable',function(){
	var state = $('.state-dropdown input').val();
	var country = $('.country-dropdown  input').val();
	if(state != '' && country != ''){
		var html = '<div class="'+state.toLowerCase()+' pb-3 mb-3" data-Country="'+country+'">'+
						'<p class="line-height-default color-black font-14 mb-2">'+state+'</p>'+
						'<div class="d-flex">'+
							'<input type="text" class="form-control form-control-sm default-placeholder stateTax font-blue w-33" placeholder="2" name="'+state+'_tax">'+
							'<input type="text" class="form-control ml-5 form-control-sm default-placeholder font-blue w-33" placeholder="VAT" name="'+state+'_type">'+
							'<input type="text" class="form-control ml-5 form-control-sm default-placeholder font-blue w-33" placeholder="Type Tax Rate" name="'+state+'_text_type">'+
						'</div>'+
					'</div>';
		$('.regions-tax').show();
		$('.regions-tax .region').append(html);
	}
});
$(document).on('click','.saveToTaxTable',function(){
	$( ".regions-tax .region > div" ).each(function( index ){ 
		var country = $(this).attr('data-Country'); 
		var tax = $(this).find('.stateTax').val();
		var tableRow = 	'<tr>'+
							'<th class="font-nunito font-14 light-blue">'+
								'<img src="img/flag/germany.png" class="vertical-middle mr-2" width="30">'+
								country+
							'</th>'+
							'<th class="font-nunito font-14 text-muted">'+tax+'%</th>'+
							'<th class="font-nunito font-14"></th>'+
							'<th class="font-nunito font-14"></th>'+
						'</tr>';
		$('#country-tax-list tbody').append(tableRow);
	});
});
$(".search-product").on("keyup", function() {  
	var value = $(this).val().toLowerCase(); 
	$(this).next().find('ul li a').filter(function() { 
		$(this).parents('li').toggle($(this).text().toLowerCase().indexOf(value) > -1)
	});
});
$('#leftside-menu-container a[data-target="vendor-product-tax-setting"]').addClass('active');
