(function($) {
    "use strict";
    var tpj=jQuery;
    var revapi211;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_211_1").revolution==undefined) {
            revslider_showDoubleJqueryError("#rev_slider_211_1");
        }
        else {
            revapi211=tpj("#rev_slider_211_1").show().revolution( {
                sliderType: "hero", jsFileLocation: "revolution/js/", sliderLayout: "auto", dottedOverlay: "none", delay: 9000, navigation: {}
                , responsiveLevels: [1240, 1024, 778, 480], visibilityLevels: [1240, 1024, 778, 480], gridwidth: [1400, 1240, 778, 480], gridheight: [768, 768, 960, 720], lazyType: "none", parallax: {
                    type: "3D", origo: "slidercenter", speed: 1000, levels: [5, 10, 15, 20, 25, 30, 5, 0, 45, 50, 47, 48, 49, 50, 51, 55], type: "3D", ddd_shadow: "off", ddd_bgfreeze: "off", ddd_overflow: "hidden", ddd_layer_overflow: "visible", ddd_z_correction: 65,
                }
                , spinner: "off", autoHeight: "off", disableProgressBar: "on", hideThumbsOnMobile: "off", hideSliderAtLimit: 0, hideCaptionAtLimit: 0, hideAllCaptionAtLilmit: 0, debugMode: false, fallbacks: {
                    simplifyAll: "off", disableFocusListener: false,
                }
            }
            );
        }
    }
    );
    /*ready*/
}

)(jQuery);