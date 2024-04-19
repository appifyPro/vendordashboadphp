$(document).ready(function(){

	var owl = $('.owl-carousellist');
	owl.owlCarousel({
		margin: 10,
		loop: false,
		responsive : {
			0: {
				items: 2,
				margin: 10
			},
			768: {
				items: 4,
				margin: 10
			},
			1200: {
				items: 8,
				margin: 10
			}
		}
	});
	
	var mobileOwl = $('.listing_brand_part .d-flex.flex-wrap.scrolbox');
	mobileOwl.owlCarousel({
		margin: 10,
		loop: false,
		responsive : {
			0: {
				items: 2
			},
			550: {
				items: 4
			},
			768:{
				items: 5
			},
			991:{
				items: 6
			},
			1200: {
				items: 8
			}
		}
	});
	
    $(".searchlist").click(function(){
         $(".physical_input_box").removeClass("keypress-hover");
    });

    $(".backtab").click(function(){
        $(".physical_input_box").removeClass("keypress-hover");
    });
	$("#dam_return1 a").click(function(){
    });
    $("#dam_return1 a").click(function(){ 
        $("#selecbox1").addClass("active");	
        //$("#close1").addClass("show");
        $("#dam1").show();
        
    });

    $("#close1").click(function(){
        $("#selecbox1").removeClass("active");			
        //$("#close1").removeClass("show");
        $("#dam1").hide();
        $("#brand1").show();

    });	
            
    $("#dam_return1 a").click(function(){
        var value = $(this).html();
        var input = $('#dam1');
    
        input.val(value);
    });
    
    


    $("#dam_return2 a").click(function(){
        $("#selecbox2").addClass("active");	
        //$("#close2").addClass("show");
        $("#dam2").show();
    });

    $("#close2").click(function(){
        $("#selecbox2").removeClass("active");			
        //$("#close2").removeClass("show");
        $("#dam2").hide();
    });			
    $("#dam_return2 a").click(function(){
        var value = $(this).html();
        var input = $('#dam2');
        input.val(value);
    });

    $("#dam_return3 a").click(function(){
        $("#selecbox3").addClass("active");	
        //$("#close3").addClass("show");
        $("#dam3").show();
    });

    $("#close3").click(function(){
        $("#selecbox3").removeClass("active");			
        //$("#close3").removeClass("show");
        $("#dam3").hide();
    });			
    $("#dam_return3 a").click(function(){
        var value = $(this).html();
        var input = $('#dam3');
        input.val(value);
    });

    $("#dam_return4 a").click(function(){
        $("#selecbox4").addClass("active");	
        //$("#close4").addClass("show");
        $("#dam4").show();
    });

    $("#close4").click(function(){
        $("#selecbox4").removeClass("active");			
        //$("#close4").removeClass("show");
        $("#dam4").hide();
    });			
    $("#dam_return4 a").click(function(){
        var value = $(this).html();
        var input = $('#dam4');
        input.val(value);
    });

    $("#dam_return5 a").click(function(){
        $("#selecbox5").addClass("active");	
        //$("#close5").addClass("show");
        $("#dam5").show();
    });

    $("#close5").click(function(){
        $("#selecbox5").removeClass("active");			
        //$("#close5").removeClass("show");
        $("#dam5").hide();
    });			
    $("#dam_return5 a").click(function(){
        var value = $(this).html();
        var input = $('#dam5');
        input.val(value);
    });

    $("#dam_return6 a").click(function(){
        $("#selecbox6").addClass("active");	
        //$("#close6").addClass("show");
        $("#dam6").show();
    });

    $("#close6").click(function(){
        $("#selecbox6").removeClass("active");			
        //$("#close6").removeClass("show");
        $("#dam6").hide();
    });			
    $("#dam_return6 a").click(function(){
        var value = $(this).html();
        var input = $('#dam6');
        input.val(value);
    });

    $("#dam_return7 a").click(function(){
        $("#selecbox7").addClass("active");	
        //$("#close7").addClass("show");
        $("#dam7").show();
    });

    $("#close7").click(function(){
        $("#selecbox7").removeClass("active");			
        //$("#close7").removeClass("show");
        $("#dam7").hide();
    });			
    $("#dam_return7 a").click(function(){
        var value = $(this).html();
        var input = $('#dam7');
        input.val(value);
    });

    $("#dam_return8").click(function(){
        $("#selecbox8").addClass("active");	
        //$("#close8").addClass("show");
        $("#dam8").show();
    });

    $("#close8").click(function(){
        $("#selecbox8").removeClass("active");			
        //$("#close8").removeClass("show");
        $("#dam8").hide();
    });			
    $("#dam_return8").click(function(){
        var value = $(this).html();
        var input = $('#dam8');
        input.val(value);
    });

    $("#dam_return9").click(function(){
        $("#selecbox9").addClass("active");	
        //$("#close9").addClass("show");
        $("#dam9").show(); 
		owl.trigger('to.owl.carousel',[1, 500, true]);
    });

    $("#close9").click(function(){
        $("#selecbox9").removeClass("active");			
        //$("#close9").removeClass("show");
        $("#dam9").hide();
		owl.trigger('to.owl.carousel',[0, 500, true]);
    });			
    $("#dam_return9").click(function(){
        var value = $(this).html();
        var input = $('#dam9');
        input.val(value);
    });

    $("#dam_return10").click(function(){
        $("#selecbox10").addClass("active");	
        //$("#close10").addClass("show");
        $("#dam10").show();
		owl.trigger('to.owl.carousel',[2, 500, true]);
    });

    $("#close10").click(function(){
        $("#selecbox10").removeClass("active");			
        //$("#close10").removeClass("show");
        $("#dam10").hide();
		owl.trigger('to.owl.carousel',[1, 500, true]);
    });			
    $("#dam_return10").click(function(){
        var value = $(this).html();
        var input = $('#dam10');
        input.val(value);
    });

$("#dam_return11 a").click(function(){
        $("#selecbox11").addClass("active");	
        //$("#close11").addClass("show");
        $("#dam11").show();
    });

    $("#close11").click(function(){
        $("#selecbox11").removeClass("active");			
        //$("#close11").removeClass("show");
        $("#dam11").hide();
    });			
    $("#dam_return11 a").click(function(){
        var value = $(this).html();
        var input = $('#dam11');
        input.val(value);
    });
    $("#dam_return12 a").click(function(){
        $("#selecbox12").addClass("active");	
        //$("#close12").addClass("show");
        $("#dam12").show();
    });

    $("#close12").click(function(){
        $("#selecbox12").removeClass("active");			
        //$("#close12").removeClass("show");
        $("#dam12").hide();
    });			
    $("#dam_return12 a").click(function(){
        var value = $(this).html();
        var input = $('#dam12');
        input.val(value);
    });
    
    $("#dam_return13 a").click(function(){
        $("#selecbox13").addClass("active");	
        //$("#close13").addClass("show");
        $("#dam13").show();
    });

    $("#close13").click(function(){
        $("#selecbox13").removeClass("active");			
        //$("#close13").removeClass("show");
        $("#dam13").hide();
    });			
    $("#dam_return13 a").click(function(){
        var value = $(this).html();
        var input = $('#dam13');
        input.val(value);
    });
    
    $("#dam_return14 a").click(function(){
        $("#selecbox14").addClass("active");	
        //$("#close14").addClass("show");
        $("#dam14").show();
    });

    $("#close14").click(function(){
        $("#selecbox14").removeClass("active");			
        //$("#close14").removeClass("show");
        $("#dam14").hide();
    });			
    $("#dam_return14 a").click(function(){
        var value = $(this).html();
        var input = $('#dam14');
        input.val(value);
    });
    
    $("#dam_return15 a").click(function(){
        $("#selecbox15").addClass("active");	
        //$("#close15").addClass("show");
        $("#dam15").show();
    });

    $("#close15").click(function(){
        $("#selecbox15").removeClass("active");			
        //$("#close15").removeClass("show");
        $("#dam15").hide();
    });			
    $("#dam_return15 a").click(function(){
        var value = $(this).html();
        var input = $('#dam15');
        input.val(value);
    });
    
    $("#dam_return16 a").click(function(){
        $("#selecbox16").addClass("active");	
        //$("#close16").addClass("show");
        $("#dam16").show();
    });

    $("#close16").click(function(){
        $("#selecbox16").removeClass("active");			
        //$("#close16").removeClass("show");
        $("#dam16").hide();
    });			
    $("#dam_return16 a").click(function(){
        var value = $(this).html();
        var input = $('#dam16');
        input.val(value);
    });
    
    $("#dam_return17 a").click(function(){
        $("#selecbox17").addClass("active");	
        //$("#close17").addClass("show");
        $("#dam17").show();
    });

    $("#close17").click(function(){
        $("#selecbox17").removeClass("active");			
        //$("#close17").removeClass("show");
        $("#dam17").hide();
    });			
    $("#dam_return17 a").click(function(){
        var value = $(this).html();
        var input = $('#dam17');
        input.val(value);
    });
    
    $("#dam_return18").click(function(){
        $("#selecbox18").addClass("active");	
        //$("#close18").addClass("show");
        $("#dam18").show();
    });

    $("#close18").click(function(){
        $("#selecbox18").removeClass("active");			
        //$("#close18").removeClass("show");
        $("#dam18").hide();
    });			
    $("#dam_return18").click(function(){
        var value = $(this).html();
        var input = $('#dam18');
        input.val(value);
    });
    
    $("#dam_return19").click(function(){
        $("#selecbox19").addClass("active");	
        //$("#close19").addClass("show");
        $("#dam19").show();
    });

    $("#close19").click(function(){
        $("#selecbox19").removeClass("active");			
        //$("#close19").removeClass("show");
        $("#dam19").hide();
    });			
    $("#dam_return19").click(function(){
        var value = $(this).html();
        var input = $('#dam19');
        input.val(value);
    });
    
    $("#dam_return20").click(function(){
        $("#selecbox20").addClass("active");	
        //$("#close20").addClass("show");
        $("#dam20").show();
    });

    $("#close20").click(function(){
        $("#selecbox20").removeClass("active");			
        //$("#close20").removeClass("show");
        $("#dam20").hide();
    });			
    $("#dam_return20").click(function(){
        var value = $(this).html();
        var input = $('#dam20');
        input.val(value);
    });
	
	$(document).on('click','.scrolbox .owl-stage-outer .owl-item .brand_box.active p',function(){
		var continueBtn = $('#wizard-last2').attr('style');
		if(continueBtn == ''){
			$('#wizard-last2').addClass('visiable');
		}
		var dataTarget = $(this).attr('data-id');
		var activeStep = $('.wizard.cust-wizard .wizard-body .step.active').attr('data-num');
		var buttonTrigger = activeStep - dataTarget + 1;
		if(buttonTrigger != 0){
			for(var i=1; i < buttonTrigger;i++){
				$('#wizard-prev').trigger('click');
			}
		}
		$(this).parent().find('.removeBtn').trigger('click');
	});

    $("#notif-click").click(function(){
        $('.notif-tab-big').toggleClass('d-block');
      });

      $("#request-click").click(function(){
        $('.request-tab-big').toggleClass('d-block');
      });

      $(".headerSection").each(function(){
          var Height = $(this).outerHeight();
          $(".body_content").css('padding-top', Height);
      });
    
});
