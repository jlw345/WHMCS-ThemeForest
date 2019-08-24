/*------------------------------------------------------------------
 * Theme Name: Hostio Responsive Template
 * Theme URI: http://www.brandio.io/envato/hostio
 * Author: Brandio
 * Author URI: http://www.brandio.io/
 * Description: A Bootstrap Responsive HTML5 Template
 * Version: 1.0
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * Bootstrap v3.3.6 (http://getbootstrap.com)
 * Copyright 2016 Brandio.
 -------------------------------------------------------------------*/
"use strict";
$(window).on("load", function() {
    // Search domain button, linked to Name.com
    $("#search-btn").on("click", function(e){
        e.preventDefault();
        var domain=$("#domain-text").val();
        var checkdomain=ValidURL(domain);
        if(checkdomain){
            window.location.href = "https://www.name.com/domain/search-4-4/?keyword="+domain;
        }else{
            alert("Please enter a valid domain.");
        }
        return false;
    });
    // Adding hover style for the feature box
    var featureBox = $(".feature-box", "#features");
    featureBox.on("mouseover",function(){
        featureBox.removeClass("active");
        $(this).addClass("active");
        return false;
    });
    // About page "about.html" and web hosting page "whosting.html"
    // Fix image resize issue.
    var storyImgHolder = $(".image-holder", "#story");
    var storyText = $(".txt-col","#story");
    var platformTooltip = $(".tool-tip", "#platforms");
    
    if ($(window).width() > 990) {
        storyImgHolder.css("height",storyText.height()+140);
        platformTooltip.removeAttr("style");
    }else{
        platformTooltip.each(function(i){
            $(this).css("margin-left",(($(this).width()+20)/2)*-1);
        });
    }
    // About page "about.html" and web hosting page "whosting.html"
    // Fix image resize issue when the window resized
    $(window).on("resize",function() {
        if ($(window).width() > 990) {
            storyImgHolder.css("height",storyText.height()+140);
            platformTooltip.removeAttr("style");
        }else{
            platformTooltip.each(function(i){
                $(this).css("margin-left",(($(this).width()+20)/2)*-1);
            });
        }
        return false;
    });
    // Web hosting page "whosting.html"
    // Change the image when mouse over the platform icon.
    var platformLink = $(".platform-link", "#platforms");
    platformLink.on("mouseover",function(){
        platformLink.removeClass("active");
        $(this).addClass("active");
        $("img", "#browser").removeClass("active");
        var getID = $(this).data("pid");
        $("#p"+getID, "#browser").addClass("active");
        return false;
    });
    // Support page "support.html"
    // The answer "Show" and "hide" function in FAQ section
    $(".faq-question-holder", "#faq-questions").on("click",function(){
        $(this).toggleClass("active"); 
        return false;
    });
    // URL Validation
    function ValidURL(str) {
      var pattern = new RegExp('((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|'+ // domain name
  '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
  '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
  '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
  '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
      if(!pattern.test(str)) {
        return false;
      } else {
        return true;
      }
    }
});