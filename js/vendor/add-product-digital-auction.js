// ------------step-wizard-------------
			
			$(document).ready(function () {
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
					$(this).parents('.clockpicker').find('.d-flex .fc-datepicker.input-calendar').val(timer);
					$(this).parents('.time-picker').hide();
				});
				$(document).on('click','.time-picker .settings .buttons .close-timer',function(){
					$(this).parents('.time-picker').hide();
				});
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

				$(".next-step").click(function (e) {

					var active = $('.wizard .nav-tabs li.active');
					active.next().removeClass('disabled');
					nextTab(active);

				});
				$(".prev-step").click(function (e) {

					var active = $('.wizard .nav-tabs li.active');
					prevTab(active);

				});
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
