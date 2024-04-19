var quill = new Quill("#snow-editor", {
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
	});
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
			$('#search-field').focus();
		});
		$('#search-field').keypress(function(event) {
			if (event.which == '13') { 
				
				if (($(this).val() != '') && ($(".tags .addedTag:contains('" + $(this).val() + "') ").length == 0 ))  {
						$('<li class="addedTag bg-secondary radius-5 text-dark px-3 d-inline-block mr-3 my-1 position-relative">' + $(this).val() + '<span onclick="$(this).parent().remove();" class="tagRemove close-icon"></span><input type="hidden" value="' + $(this).val() + '" name="tags[]"></li>').insertBefore('.tags .tagAdd');
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
