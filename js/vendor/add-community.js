$('.has-spinner').click(function () {
        var btn = $(this);
        $(btn).buttonLoader('start');
        setTimeout(function () {
            $(btn).buttonLoader('stop');
        }, 3000);
    });
	$('select').selectpicker();
	$(document).on('change','#category',function(){
		var selectedOption = $(this).find('option').filter(':selected').attr('data-target');
		if(selectedOption != 'undefine'){
			$('.second-nav.first-menu').removeClass('d-flex');
			$(selectedOption).addClass('d-flex');
		}
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
        $(".banner-text-box .closeBox").click(function(event){
            event.preventDefault();
            $(this).parent('.banner-text-box').hide();
        });
    });
	$(document).on('keyup', '#comment_reply .user-comment-reply', function() {
		var valueOfText = $(this).val();
		var lineNo = $(this).val().substr(0, $(this).selectionStart).split("\n").length;
		if ($(this).val().length < 250) {
			var row = 5;
			if (lineNo > 5) {
				row = lineNo;
			}
			$(this).addClass('overflow-hidden');
			$(this).attr('rows', row);
		}
		if ($(this).val().length > 250 && $(this).val().length < 600 && lineNo < 13) {
			var row = lineNo;
			if (lineNo < Math.floor($(this).val().length / 60 + 1)) {
				row = Math.floor($(this).val().length / 60 + 1);
			}
			$(this).addClass('overflow-hidden');
			$(this).attr('rows', row);
		}
		if ($(this).val().length > 600 || lineNo > 12) {
			$(this).removeClass('overflow-hidden');
			$(this).attr('rows', 12);
		}
	});
