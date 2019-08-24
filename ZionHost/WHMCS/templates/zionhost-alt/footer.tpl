
        </div><!-- /.main-content -->
        {if !$inShoppingCart && $secondarySidebar->hasChildren()}
            <div class="col-md-3 pull-md-left sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
            </div>
        {/if}
    </div>
    <div class="clearfix"></div>
</section>

<section id="footer">

    <p>Copyright &copy; {$date_year} {$companyname}. All Rights Reserved.</p>

</section>

<!--<script src="{$BASE_PATH_JS}/bootstrap.min.js"></script>-->
<script src="{$BASE_PATH_JS}/jquery-ui.min.js"></script>
<script type="text/javascript">
    var csrfToken = '{$token}',
        markdownGuide = '{lang key="markdown.title"}',
        locale = '{if !empty($mdeLocale)}{lang key="locale"}{else}en_GB{/if}',
        saved = '{lang key="markdown.saved"}',
        saving = '{lang key="markdown.saving"}';
</script>
<script src="{$WEB_ROOT}/templates/{$template}/js/whmcs.js"></script>
<script src="{$BASE_PATH_JS}/AjaxModal.js"></script>

<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body panel-body">
                Loading...
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

{$footeroutput}

<!-- CODES FROM ZIONHOST THEME FOOTER GOES BELOW (DO not touch the codes above this line)-->
<footer class=" footer-cross">
<div id="show_footer" class="footer ">
    <div class="container">
      <div class="one_fourth animate-in" data-anim-type="fade-in-right" data-anim-delay="100">
        		<h4 class="white">About Company</h4>
		        <div class="title_line"></div>
        <p>Pellentesque mi purus, eleifend sed commodo vel, sagittis ac dui. Morbi at vestibulum dui.</p>
        <div class="clearfix margin_top1"></div>
        <ul class="faddress">
		        <li><i class="fa fa-map-marker fa-lg"></i>&nbsp;&nbsp;15 Barnes Wallis Way, Buckshaw      Village, Chorley, USA</li>
		        <li><i class="fa fa-phone"></i>&nbsp;&nbsp;+1 (012) 345 6789</li>
		        <li><a href="mailto:info@yourdomain.com"><i class="fa fa-envelope"></i>&nbsp;&nbsp;info@yourdomain.com</a></li>
        		</ul>
      </div>
      <!--end item-->
      
      <div class="one_fourth animate-in" data-anim-type="fade-in-right" data-anim-delay="200">
        <h4 class="white">Usefull Links</h4>
        <div class="title_line"></div>
        <ul class="listitem">
							<li id="menu-item-35" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-35"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">Customer Support</a></li>
<li id="menu-item-36" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">Documentation</a></li>
<li id="menu-item-37" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">Resources</a></li>
<li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">General FAQs</a></li>
<li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">Rackspace Community</a></li>
<li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">Developer Center</a></li>
        </ul>
      </div>
      <!--end item-->
      
	  <div class="one_fourth animate-in clear" data-anim-type="fade-in-right" data-anim-delay="300">
        <h4 class="white">Legal and Help</h4>
        <div class="title_line"></div>
		<ul class="listitem">
							<li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">Contact Us</a></li>
<li id="menu-item-42" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-42"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">My Account</a></li>
<li id="menu-item-43" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-43"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">Legal &#038; Privacy</a></li>
<li id="menu-item-44" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-44"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">Report Abuse</a></li>
<li id="menu-item-45" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">Terms of Service</a></li>
<li id="menu-item-46" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-46"><i class="fa fa-angle-right"></i>&nbsp;<a href="#">Subpoenas</a></li>
        </ul>
      </div>
      <!--end item--> 

      	  	  <div class="one_fourth last animate-in" data-anim-type="fade-in-right" data-anim-delay="400">
        <h4 class="white">Subscribe Newsletter</h4>
        <div class="title_line"></div>
        <p>Subscribe to our email newsletter for <br>
		useful tips and valuable resources.</p>
        <div class="clearfix margin_top1"></div>
        
        <div class="newsletter">
		  		  <form id="footer_signup" action="" method="post">
<input type="hidden" name="token" value="5a160630d244e3513279f5fa1e21fc20a88ecda0" />
							<input class="email_input" name="email" id="email" placeholder="Enter your E-mail..." type="email"/>
							<input class="email_submit" value="Subscribe" type="submit"/>
						</form>
		  		  
        </div>
		<div id="footer_response" class="margin_top2"></div>
        
        		<div class="clearfix margin_top2"></div>
        
        <ul class="social_icons animate-in" data-anim-type="fade-in-right" data-anim-delay="400">
          		  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
		            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
		            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		  		  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
		            <li class="last"><a href="#"><i class="fa fa-flickr"></i></a></li>
		          </ul>
		      </div>
	        <!--end item--> 
      
    </div>
  </div>
<!--end footer-->
    <div class="copyrights">
    <div class="container">
      <div class="one_half"><span>Copyright - 2016 yourdomian. All rights reserved.</span></div>
      	  <div class="one_half last">
        <div class="payments"><span>Payments We Accept</span> <img src="{$WEB_ROOT}/templates/{$template}/img/card-02.png" alt=""> <img src="{$WEB_ROOT}/templates/{$template}/img/card-01.png" alt=""> <img src="{$WEB_ROOT}/templates/{$template}/img/card-04.png" alt=""> <img src="{$WEB_ROOT}/templates/{$template}/img/card-05.png" alt=""> <img src="{$WEB_ROOT}/templates/{$template}/img/card-03.png" alt=""></div>
      </div>
	      </div>
  </div>
  <!--end copyrights--> 
</footer>
<!-- CODES FROM ZIONHOST THEME FOOTER GOES ABOVE (DO not touch the codes below this line)-->
</div>
<!--end sitewraper--> 

<a href="#" class="scrollup"></a> 
<!-- end scroll to top of the page-->
<!-- page loder -->
<script>
(function($) {
  "use strict";
// makes sure the whole site is loaded
jQuery(window).load(function() {
	"use strict";
        // will first fade out the loading animation
	jQuery(".preloader_status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(1000).fadeOut("slow");
})
})(jQuery);
</script>
<script src='templates/{$template}/js/zionhostjs/zionhost-main.js'></script>
<script src='templates/{$template}/js/zionhostjs/animations.min.js'></script>
<script src='templates/{$template}/js/zionhostjs/appear.min.js'></script>
<script src='templates/{$template}/js/zionhostjs/jquery.validate.min.js'></script>
<script src='templates/{$template}/js/zionhostjs/jquery-scrolltofixed.js'></script>
<script src='templates/{$template}/js/zionhostjs/ScrollToFixed_custom.js'></script>
<script src='templates/{$template}/js/zionhostjs/bootstrap.min.js'></script>
<script src='templates/{$template}/js/zionhostjs/customeUI.js'></script>
<script src='templates/{$template}/js/zionhostjs/totop.js'></script>
<script src='templates/{$template}/js/zionhostjs/parallax.js'></script>
</body>
</html>
