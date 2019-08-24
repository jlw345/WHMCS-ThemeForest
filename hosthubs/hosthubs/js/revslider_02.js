    (function($) {
    "use strict";
		var tpj=jQuery;			
			var revapi70;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_70_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_70_1");
				}else{
				revapi70 = tpj("#rev_slider_70_1").show().revolution({
				sliderType:"hero",
				jsFileLocation:"../revolution/js/",
				sliderLayout:"fullwidth",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
				},
				responsiveLevels:[1240,1024,778,480],
				gridwidth:[1400,1240,778,480],
				gridheight:[768,768,960,720],
				lazyType:"none",
				parallax: {
					type:"mouse+scroll",
					origo:"slidercenter",
					speed:2000,
					levels:[1,2,3,20,25,30,35,40,45,50],
					disable_onmobile:"on"
				},
				shadow:0,
				spinner:"spinner2",
				autoHeight:"off",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					disableFocusListener:false,
				}
				});
			}
		});	/*ready*/
	})(jQuery);