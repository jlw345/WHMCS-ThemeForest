<?php

/**

 * Created by PhpStorm.

 * User: akd

 * Date: 8/13/2017

 * Time: 3:12 PM

 */

$hostiko_redux_option = get_option('opt_theme_options');



?>



<?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>

    <footer id="colophon" class="site-footer col-xs-12">
        <div id="copyright">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
        </div>
    </footer><!-- #colophon -->

<?php } ?>