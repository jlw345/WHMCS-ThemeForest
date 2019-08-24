
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

<!-- Footer Area Start -->
<div id="footer">
	<!-- Footer Widgets Start -->
	<div class="footer-widgets">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<!-- About Widget Start -->
					<div class="about">
						<h4 class="title">about company</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, doloribus, inventore. Aspernatur eius exercitationem.</p>
						<address>
							<p><i class="fa fa-fw fa-map-marker-alt"></i> Shewrapara Bus Stand, Dhaka 1216</p>
							<p><i class="fa fa-fw fa-phone"></i> +88017-0010-010</p>
							<p><i class="fa fa-fw fa-envelope"></i> info@example.com</p>
						</address>
					</div>
					<!-- About Widget End -->
				</div>
				<div class="col-md-3">
					<!-- Useful Links Widget Start -->
					<div class="useful-links">
						<h4 class="title">useful links</h4>
						<ul>
							<li><i class="fa fa-angle-right"></i><a href="#">Lorem ipsum dolor sit</a></li>
							<li><i class="fa fa-angle-right"></i><a href="#">Lorem ipsum dolor sit</a></li>
							<li><i class="fa fa-angle-right"></i><a href="#">Lorem ipsum dolor sit</a></li>
							<li><i class="fa fa-angle-right"></i><a href="#">Lorem ipsum dolor sit</a></li>
							<li><i class="fa fa-angle-right"></i><a href="#">Lorem ipsum dolor sit</a></li>
						</ul>
					</div>
					<!-- Useful Links Widget End -->
				</div>
				<div class="col-md-3">
					<!-- Recent Posts Widget Start -->
					<div class="recent-posts">
						<h4 class="title">Recent Posts</h4>
						<div class="recent-post-item">
							<div class="image">
								<img src="{$WEB_ROOT}/templates/{$template}/img/recent-post-1.jpg" alt="" class="image">
							</div>
							<div class="content">
								<h5 class="heading"><a href="#">lorem ipsum dolor</a></h5>
								<p class="summery">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<p class="meta">By <a href="#">John Deo</a> / Feb 15</p>
							</div>
						</div>
						<div class="recent-post-item">
							<div class="image">
								<img src="{$WEB_ROOT}/templates/{$template}/img/recent-post-2.jpg" alt="" class="image">
							</div>
							<div class="content">
								<h5 class="heading"><a href="#">lorem ipsum dolor</a></h5>
								<p class="summery">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<p class="meta">By <a href="#">John Deo</a> / Feb 15</p>
							</div>
						</div>
					</div>
					<!-- Recent Posts Widget End -->
				</div>
				<div class="col-md-3">
					<!-- Twitter Widget Start -->
					<div class="twitter">
						<div id="footerTwitter" data-user-name="themelooks"></div>
					</div>
					<!-- Twitter Widget End -->
				</div>
			</div>
		</div>
		<div class="bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<!-- Payment Methods Start -->
						<div class="payment-methods">
							We Accept: <img src="{$WEB_ROOT}/templates/{$template}/img/payment-methods.png" alt="">
						</div>
						<!-- Payment Methods Start -->
					</div>
					<div class="col-sm-6">
						<!-- Social Links Start -->
						<div class="social-links">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fab fa-tumblr"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
						<!-- Social Links Start -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Widgets End -->
	<!-- Copyright Start -->
	<div class="copyright">
		<div class="container">
			<p>Copyright {$date_year} &copy; <a href="#">{$companyname}</a>. All Rights Reserved.</p>
		</div>
	</div>
	<!-- Copyright End -->
</div>
<!-- Footer Area End -->

<!-- Back To Top Button Start -->
<div class="back-to-top">
	<button><i class="fa fa-angle-up"></i></button>
</div>

<!-- template Js -->


<!-- ====jQuery Validation Plugin Script==== -->
<script src="{$WEB_ROOT}/templates/{$template}/js/jquery.validate.min.js"></script>

<!-- ====Owl Carousel Script==== -->
<script src="{$WEB_ROOT}/templates/{$template}/js/owl.carousel.min.js"></script>

<!-- ====bxSlider Script==== -->
<script src="{$WEB_ROOT}/templates/{$template}/js/jquery.bxslider.min.js"></script>

<!-- ====jQuery Waypoints Plugin Script==== -->
<script src="{$WEB_ROOT}/templates/{$template}/js/jquery.waypoints.min.js"></script>

<!-- ====jQuery Counter Up Plugin Script==== -->
<script src="{$WEB_ROOT}/templates/{$template}/js/jquery.counterup.min.js"></script>

<!-- ====Twitter Widget==== -->
<script src="https://platform.twitter.com/widgets.js"></script>

<!-- ====Main Script==== -->
<script src="{$WEB_ROOT}/templates/{$template}/js/main.js"></script>

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

</body>
</html>
