                </div><!-- /.main-content -->
                {if !$inShoppingCart && $secondarySidebar->hasChildren()}
                    <div class="col-md-3 pull-md-left sidebar sidebar-secondary">
                        {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
                    </div>
                {/if}
            <div class="clearfix"></div>
        </div>
    </div>
</section>

<section class="footer-coodiv-thm"><!-- start footer section -->
        <div class="container"><!-- start container -->
            <div class="row justify-content-center"><!-- start row -->
			
                <div class="col-md-4"><!-- col -->
                    <a class="footer-brand" href="#">
                        <img src="{$WEB_ROOT}/templates/{$template}/img/header/logo.png" alt="">
                    </a>

                    <a class="footer-contact-a-hm"><i class="fa fa-life-ring"></i> 00213-123-45-67-89</a> <!-- phone nubmer -->
                    <a class="footer-contact-a-hm"><i class="fa fa-microphone"></i> support@coodiv.net</a> <!-- email -->
                    <a class="footer-contact-a-hm"><i class="fa fa-map-marker"></i> 28 Green Tower, Central City , New York City, united states of america</a> <!-- address -->
                </div><!-- end col -->

                <div class="col-md-2 quiq-links-footer-mb-st"><!-- col -->
                    <h5 class="footer-title-simple">Quick Links</h5><!-- title -->
                    <ul class="main-menu-footer-mn">
                        <li><a href="#">homepage</a></li><!-- link -->
                        <li><a href="#">about us</a></li><!-- link -->
                        <li><a href="#">domains</a></li><!-- link -->
                        <li><a href="#">reseller hosting</a></li><!-- link -->
                        <li><a href="#">web-hosting</a></li><!-- link -->
                    </ul>
                </div><!-- end col -->

                <div class="col-md-2 quiq-links-footer-mb-st"><!-- col -->
                    <h5 class="footer-title-simple">About Us</h5><!-- title -->
                    <ul class="main-menu-footer-mn">
                        <li><a href="#">knowledgebase</a></li><!-- link -->
                        <li><a href="#">help-center</a></li><!-- link -->
                        <li><a href="#">404 page</a></li><!-- link -->
                        <li><a href="#">blog</a></li><!-- link -->
                        <li><a href="#">contact</a></li><!-- link -->
                    </ul>
                </div><!-- end col -->

				
                <div class="col-md-3 stay-in-tch-footer-mb-st"><!-- col -->
                    <h5 class="footer-title-simple">Stay In Touch</h5><!-- title -->
                    <form class="form-contain-home-subscribe"><!-- subscribe form -->
                        <input type="email" id="email-subscribe" name="email-subscribe" placeholder="entre your email please" required>
                        <button type="submit"><i class="fa fa-paper-plane"></i></button>
                    </form><!-- end subscribe form -->

                    <div class="footer-social-links"><!-- social icons -->
                        <a class="facebookcc" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twittercc" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="googlecc" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="dribbblecc" href="#"><i class="fa fa-dribbble"></i></a>
                    </div><!-- end social icons -->
                    <p class="copyright-footer-p">© 2018 Coodiv. Made with Love in Algeria.</p><!-- copyright text -->

                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end footer section -->
	
	
<section id="footer">
    <div class="container">
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <p>Copyright &copy; {$date_year} {$companyname}. All Rights Reserved.</p>
    </div>
</section>

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
                    <i class="fas fa-circle-notch fa-spin"></i> Loading...
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


<!------------------- JavaScript ------------------->

    <!-- waypoints JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/waypoints.min.js"></script>
	
	<!-- counterup JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/jquery.counterup.min.js"></script>

    <!-- particles JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/particles.js"></script>

    <!-- typed JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/typed.js"></script>

    <!-- smoothscroll JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/smoothscroll.js"></script>

    <!-- carousel JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/owlcarousel/owl.carousel.min.js"></script>

    <!-- parallax JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/parallax.min.js"></script>

	<!-- bootstrap offcanvas -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/bootstrap.offcanvas.min.js"></script>
	
    <!-- flickity JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/flickity.pkgd.min.js"></script>

    <!-- template JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/nuhost-scripts.js"></script>

    <!-- mailer JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/mailer.js"></script>
	
	<!-- touchSwipe JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/jquery.touchSwipe.min.js"></script>
	
	<!-- demo JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/demo.js"></script>
	
	<!-- countdown JavaScript -->
    <script src="{$WEB_ROOT}/templates/{$template}/js/jquery.countdown.min.js"></script>
	<script>
	$('#clock').countdown('2019/10/10', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
    });
	</script>
	
<!------------------- End javaScript ------------------->
   
   
</body>
</html>
