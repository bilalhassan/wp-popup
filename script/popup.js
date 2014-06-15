jQuery(document).ready(function($) {



    var margin = 0;
    $('#sc-popup-dim').delay(1500).fadeIn(300, function() {
        margin = $('#sc-popup').width()/2;
        $('#sc-popup').css({'marginLeft': -margin}).fadeIn(350);
    });

    $('#sc-close').click(function() {
        $('#sc-popup').fadeOut(350, function() {
            $('#sc-popup-dim').fadeOut(300);
        });
    });

});