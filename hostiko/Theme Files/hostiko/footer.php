<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hostiko
 */
$hostiko_redux_option = get_option( 'opt_theme_options' );
if ( isset( $hostiko_redux_option['constructionPage'] ) && $hostiko_redux_option['constructionPage'] && ! is_user_logged_in() ) {
	?>
    <script src="<?php echo get_template_directory_uri(); ?>/layouts/underconstruction/js/jquery-2.1.3.min.js"></script>
    <!--<![endif]-->
    <!--[if lte IE 8]>
    <script src="js/jquery-1.9.1.min.js"></script>
    <![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/layouts/underconstruction/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/layouts/underconstruction/js/jquery.plugin.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/layouts/underconstruction/js/jquery.countdown.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/layouts/underconstruction/js/main.js"></script>
	<?php
} else {
	$hostiko_footer = $hostiko_redux_option['footerstyle'];
	if ( empty( $hostiko_footer ) ) {
		$hostiko_footer = 'default';
	}
	if ( isset( $_REQUEST['footer'] ) ) {
		$hostiko_footer = $_REQUEST['footer'];
	}
	hostikoLayoutfooter( $hostiko_footer );
	?>
    </div>
    <div id="hostiko-footer">
		<?php if ( is_array( $hostiko_redux_option ) &&($hostiko_redux_option['backtotop']=='1')) {
			if ( $hostiko_redux_option['imageortext'] == '1' ) {
				?>
                <a href="#top" class="go-top"
                   title="Go to the top of the page"><?php echo $hostiko_redux_option['texttop'] ?> </a>
			<?php } else { ?>
                <a href="#top" class="go-top"
                   title="Go to the top of the page"> </a> <?php
			}
		}
		get_template_part( 'layouts/footer/footer-' . $hostiko_footer . '/footer-' . $hostiko_footer, get_post_format() );
		?>
    </div>
    <!--hostiko-footer-->
    </div>
    <!-- #page -->
<?php }
wp_footer(); ?>
</body>
</html>