jQuery(document).ready(function() {


    // console.clear();
    console.log("is ready");



    jQuery("body").on("click", ".close__onBoarding", function() {
        console.log("test");
        jQuery(".body_overlay").css("display", "none");
        jQuery("html, body").css("overflow-y", "auto");
        jQuery("#OnBoarding_Process").toggleClass("OnBoarding_Process_active");
    });

    jQuery("body").on("click", "a.action_button, .onboarding_trigger", function(e) {
        e.preventDefault();
        jQuery(".body_overlay").css("display", "block");
        jQuery("html, body").css("overflow-y", "hidden");
        jQuery("#OnBoarding_Process").toggleClass("OnBoarding_Process_active");
    })


    function checkInputNumeric(typeInput, error_msg) {

        jQuery("body").on('keyup', typeInput, function() {

            var inputVal = $(this).val();
            var gfg = $.isNumeric(inputVal);
            var error = jQuery(this).parents(".credit__input").find(".msg-info");

            if (!gfg) {
                $(error).text(error_msg).fadeIn(200);
            } else {
                $(error).fadeOut(200);
            }
        });
    }


    checkInputNumeric("#ice", "Veuillez saisir 15 caracetres numeriques !");
    checkInputNumeric("#phone", "Veuillez saisir numero telephone valide !");


    jQuery(".vous__stat").click(function() {
        jQuery(".vous__stat").removeClass("active");
        jQuery(this).addClass("active");
    });
    var lenghtNext = jQuery("section.container.active").next("section.container").length;
    console.log(lenghtNext);


    jQuery(".credit__control .next").click(function() {

        jQuery(".swiper-button-next").trigger("click");
        var currentActive = jQuery("section.container.active");
        currentActive.fadeOut(function() {

            jQuery("section.container").removeClass("active");
            currentActive.next("section").fadeIn().addClass("active");

        });


    });



    jQuery(".credit__control .back").click(function() {

        jQuery(".swiper-button-prev").trigger("click");

        // var lenght = jQuery("section.container").length;
        var currentActive = jQuery("section.container.active");

        currentActive.fadeOut(function() {

            jQuery("section.container").removeClass("active");
            currentActive.prev("section").fadeIn().addClass("active");

        });



    });



});