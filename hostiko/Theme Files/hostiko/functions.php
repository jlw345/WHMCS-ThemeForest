<?php
/**
 * hostiko functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hostiko
 */
if (!function_exists('hostiko_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hostiko_setup()
	{
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on hostiko, use a find and replace
		* to change 'hostiko' to the name of your theme in all the template files.
		*/
		load_theme_textdomain('hostiko', get_template_directory() . '/languages');
		add_theme_support('html5', array(
			'comment-list'
		));
		add_theme_support('post-formats', array(
			'aside',
			'gallery',
			'video'
		));
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support('title-tag');
		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(196, 110, true);
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary-1' => esc_html__('Primary', 'hostiko') ,
			'topbar' => esc_html__('Topbar', 'hostiko') ,
		));
		/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('hostiko_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));
		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		));
		/**
		 * Apply theme's stylesheet to the visual editor.
		 *
		 * @uses add_editor_style() Links a stylesheet to visual editor
		 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
		 */
		add_editor_style('css/custom-editor-style.css');
		// Enable shortcodes in text widgets
		add_filter('widget_text', 'do_shortcode');
	}
endif;
add_action('after_setup_theme', 'hostiko_setup');
// Update CSS within in Admin
function admin_style()
{
	wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/custom-editor-style.css');
}
add_action('admin_enqueue_scripts', 'admin_style');
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hostiko_content_width()
{
	$GLOBALS['content_width'] = apply_filters('hostiko_content_width', 640);
}
add_action('after_setup_theme', 'hostiko_content_width', 0);
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hostiko_widgets_init()
{
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'hostiko') ,
		'id' => 'sidebar-1',
		'description' => esc_html__('Add widgets here.', 'hostiko') ,
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action('widgets_init', 'hostiko_widgets_init');
update_option( 'enable_full_version', 1);
/**
 * Enqueue scripts and styles.
 */
function hostiko_scripts()
{
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('font-awesome-pro', get_template_directory_uri() . '/css/hostiko/fonts-awesomepro.css');
	wp_enqueue_style('hostiko-style', get_stylesheet_uri());
	wp_enqueue_style('hostiko-mobile', get_template_directory_uri() . '/css/mobile.css');
	wp_enqueue_style('hostiko-google-font-Roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(
		'jquery'
	) , '2018', true);
	wp_enqueue_script('hostiko-table-js', get_template_directory_uri() . '/js/table.js', array(
		'jquery'
	) , '20151212', true);
	wp_enqueue_script('hostiko-navigation', get_template_directory_uri() . '/js/navigation.js', array(
		'jquery'
	) , '20151215', true);
	wp_enqueue_script('hostiko-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(
		'jQuery'
	) , '20151215', true);
	if (is_singular() && comments_open() && get_option('thread_comments'))
	{
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'hostiko_scripts');
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 *
 *
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * TGM
 */
require_once (get_template_directory() . '/inc/options/require.plugins.php');
/**
 * Framwork redux
 */
require_once (get_template_directory() . '/inc/options/function.options.php');
/**
 * bootstrap walker nav
 */
require_once (get_template_directory() . '/inc/wp-bootstrap-navwalker.php');
/**
 * class-wp-bootstrap-comment-walker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-comment-walker.php';
/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION'))
{
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * change the length of Excerpt
 * call:  hostiko_excerpt(19)
 */
function hostiko_excerpt($limit)
{
	$excerpt = explode(' ', get_the_excerpt() , $limit);
	if (count($excerpt) >= $limit)
	{
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	}
	else
	{
		$excerpt = implode(" ", $excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
	return $excerpt;
}
function hostiko_excerpt_more($more)
{
	return sprintf('<a class="read-more" href="%1$s">%2$s</a>', get_permalink(get_the_ID()) , __($more, 'hostiko'));
}
add_filter('excerpt_more', 'hostiko_excerpt_more');
/**
 * Function close
 */
/**
 * change the length of content
 * call:  hostiko_content(19)
 */
function hostiko_content($limit)
{
	$content = explode(' ', get_the_content() , $limit);
	if (count($content) >= $limit)
	{
		array_pop($content);
		$content = implode(" ", $content) . '...';
	}
	else
	{
		$content = implode(" ", $content);
	}
	$content = preg_replace('/\[.+\]/', '', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}
/**
 * Function close
 */
/**
 * Numaric post function
 * call: hostiko_numeric_posts_nav();
 */
function hostiko_numeric_posts_nav()
{
	if (is_singular())
	{
		return;
	}
	global $wp_query;
	/** Stop execution if there's only 1 page */
	if ($wp_query->max_num_pages <= 1)
	{
		return;
	}
	$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
	$max = intval($wp_query->max_num_pages);
	/**    Add current page to the array */
	if ($paged >= 1)
	{
		$links[] = $paged;
	}
	/**    Add the pages around the current page to the array */
	if ($paged >= 3)
	{
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}
	if (($paged + 2) <= $max)
	{
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}
	echo '<div class="navigation"><ul>' . "\n";
	/**    Previous Post Link */
	if (get_previous_posts_link())
	{
		printf('<li>%s</li>' . "\n", get_previous_posts_link());
	}
	/**    Link to first page, plus ellipses if necessary */
	if (!in_array(1, $links))
	{
		$class = 1 == $paged ? ' class="active"' : '';
		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)) , '1');
		if (!in_array(2, $links))
		{
			echo '<li>â€¦</li>';
		}
	}
	/**    Link to current page, plus 2 pages in either direction if necessary */
	sort($links);
	foreach((array)$links as $link)
	{
		$class = $paged == $link ? ' class="active"' : '';
		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)) , $link);
	}
	/**    Link to last page, plus ellipses if necessary */
	if (!in_array($max, $links))
	{
		if (!in_array($max - 1, $links))
		{
			echo '<li>â€¦</li>' . "\n";
		}
		$class = $paged == $max ? ' class="active"' : '';
		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)) , $max);
	}
	/**    Next Post Link */
	if (get_next_posts_link())
	{
		printf('<li>%s</li>' . "\n", get_next_posts_link());
	}
	echo '</ul></div>' . "\n";
}
/**
 * Header Template
 * call:customLayoutHeader($hostiko_header);
 */
function hostikoLayoutHeader($style = '')
{
	if (isset($style) && !empty($style))
	{
		wp_enqueue_style('header-' . $style . '-css', get_template_directory_uri() . '/layouts/header/header-' . $style . '/header-' . $style . '.css');
	}
	else
	{
		wp_enqueue_style('header-default-css', get_template_directory_uri() . '/layouts/header/header-default/header-default.css');
	}
}
function hostiko_template_css()
{
	$hostiko_redux_option = get_option('opt_theme_options');
	if (isset($hostiko_redux_option['blogstylecss']) && !empty($hostiko_redux_option['blogstylecss']))
	{
		$hostiko_blogStyle = $hostiko_redux_option['blogstylecss'];
	}
	else
	{
		$hostiko_blogStyle = 'default';
	}
	$templatename = basename(get_page_template());
	if ($templatename == 'hostiko.php' || $templatename == 'page-subpage.php' || is_404())
	{
		wp_enqueue_style('hostiko-overwrite-01', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko.css');
		wp_enqueue_style('hostiko-mobile-01', get_template_directory_uri() . '/css/hostiko/mobile-hostiko.css');
	}
    elseif ($templatename == 'hostiko2.php' || is_404())
	{
		wp_enqueue_style('hostiko-overwrite-02', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko2.css');
		wp_enqueue_style('hostiko-mobile-02', get_template_directory_uri() . '/css/hostiko/mobile-hostiko2.css');
	}
    elseif ($templatename == 'hostiko3.php' || is_404())
	{
		wp_enqueue_style('hostiko-overwrite3', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko3.css');
		wp_enqueue_style('hostiko-mobile3', get_template_directory_uri() . '/css/hostiko/mobile-hostiko3.css');
	}
    elseif ($templatename == 'hostiko4.php' || is_404())
	{
		wp_enqueue_style('hostiko-overwrite4', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko4.css');
		wp_enqueue_style('hostiko-mobile4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko4.css');
	}
    elseif ($templatename == 'hostiko5.php' || is_404())
	{
		wp_enqueue_style('overwrite-hostiko5', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko5.css');
		wp_enqueue_style('hostiko-mobile5', get_template_directory_uri() . '/css/hostiko/mobile-hostiko5.css');
	}
    elseif ($templatename == 'hostiko6.php' || is_404())
	{
		wp_enqueue_style('hostiko-overwrite6', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko6.css');
		wp_enqueue_style('hostiko-mobile6', get_template_directory_uri() . '/css/hostiko/mobile-hostiko6.css');
	}
    elseif ($templatename == 'hostiko7.php' || is_404())
	{
		wp_enqueue_style('hostiko-overwrite7', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko7.css');
		wp_enqueue_style('hostiko-mobile7', get_template_directory_uri() . '/css/hostiko/mobile-hostiko7.css');
	}
	elseif ($templatename == 'hostiko8.php' || is_404())
	{
		wp_enqueue_style('hostiko-overwrite8', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko8.css');
		wp_enqueue_style('hostiko-mobile8', get_template_directory_uri() . '/css/hostiko/mobile-hostiko8.css');
	}
    elseif ($templatename == 'hostiko9.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout9-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko9.css');
		wp_enqueue_style('hostiko-layout9-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko9.css');
	}
    elseif ($templatename == 'hostiko10.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout10-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko10.css');
		wp_enqueue_style('hostiko-layout10-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko10.css');
	}
    elseif ($templatename == 'hostiko11.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout11-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko11.css');
		wp_enqueue_style('hostiko-layout11-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko11.css');
	}
    elseif ($templatename == 'hostiko12.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout12-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko12.css');
		wp_enqueue_style('hostiko-layout12-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko12.css');
	}
    elseif ($templatename == 'hostiko13.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout13-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko13.css');
		wp_enqueue_style('hostiko-layout13-mobile', get_template_directory_uri() . '/css/hostiko/mobile-hostiko13.css');
	}
    elseif ($templatename == 'hostiko14.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout14-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko14.css');
		wp_enqueue_style('hostiko-layout14-mobile', get_template_directory_uri() . '/css/hostiko/mobile-hostiko14.css');
	}
    elseif ($templatename == 'hostiko14.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout14-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko14.css');
		wp_enqueue_style('hostiko-layout14-mobile', get_template_directory_uri() . '/css/hostiko/mobile-hostiko14.css');
	}
    elseif ($templatename == 'hostiko15.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout15-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko15.css');
		wp_enqueue_style('hostiko-layout15-mobile', get_template_directory_uri() . '/css/hostiko/mobile-hostiko15.css');
	}
    elseif ($templatename == 'hostiko16.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout16-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko16.css');
		wp_enqueue_style('hostiko-layout16-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko16.css');
	}
    elseif ($templatename == 'hostiko17.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout17-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko17.css');
		wp_enqueue_style('hostiko-layout17-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko17.css');
	}
    elseif ($templatename == 'hostiko18.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout18-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko18.css');
		wp_enqueue_style('hostiko-layout18-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko18.css');
	}
    elseif ($templatename == 'hostiko19.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout19-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko19.css');
		wp_enqueue_style('hostiko-layout19-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko19.css');
	}
    elseif ($templatename == 'hostiko20.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout20-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko20.css');
		wp_enqueue_style('hostiko-layout20-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko20.css');
	}
    elseif ($templatename == 'hostiko21.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout21-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko21.css');
		wp_enqueue_style('hostiko-layout21-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko21.css');
	}
    elseif ($templatename == 'hostiko22.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout22-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko22.css');
		wp_enqueue_style('hostiko-layout22-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko22.css');
	}
    elseif ($templatename == 'hostiko23.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout23-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko23.css');
		wp_enqueue_style('hostiko-layout23-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko23.css');
	}
    elseif ($templatename == 'hostiko24.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout24-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko24.css');
		wp_enqueue_style('hostiko-layout24-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko24.css');
	}
    elseif ($templatename == 'hostiko25.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout25-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko25.css');
		wp_enqueue_style('hostiko-layout25-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko25.css');
	}
    elseif ($templatename == 'hostiko26.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout26-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko26.css');
		wp_enqueue_style('hostiko-layout26-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko26.css');
	}
    elseif ($templatename == 'hostiko27.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout27-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko27.css');
		wp_enqueue_style('hostiko-layout27-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko27.css');
	}
	elseif ($templatename == 'hostiko28.php' || is_404())
	{
		wp_enqueue_style('hostiko-layout28-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko28.css');
		wp_enqueue_style('hostiko-layout28-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko28.css');
	}
	elseif ($templatename == 'hostiko29.php' || is_404())
    {
        wp_enqueue_style('hostiko-layout29-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko29.css');
        wp_enqueue_style('hostiko-layout29-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko29.css');
	}
	elseif ($templatename == 'hostiko30.php' || is_404())
    {
        wp_enqueue_style('hostiko-layout30-overwrite', get_template_directory_uri() . '/css/hostiko/overwrite-hostiko30.css');
        wp_enqueue_style('hostiko-layout30-mobile-temp4', get_template_directory_uri() . '/css/hostiko/mobile-hostiko30.css');

    }
    elseif ($templatename == 'card-blog.php' || $templatename == 'list-blog.php' || $templatename == 'card-blog-2.php')
	{
		wp_enqueue_style('card-blog', get_template_directory_uri() . '/css/blog-card/blog-card.css');
	}
    elseif (is_home() || is_single() || is_archive() || is_search() || is_404())
	{
		wp_enqueue_style('' . $hostiko_blogStyle . '-blog-style', get_template_directory_uri() . '/css/blog-' . $hostiko_blogStyle . '/style-' . $hostiko_blogStyle . '.css');
		wp_enqueue_style('' . $hostiko_blogStyle . '-blog-mobile', get_template_directory_uri() . '/css/blog-' . $hostiko_blogStyle . '/mobile-' . $hostiko_blogStyle . '.css');
	}
	else
	{
	}
}


function hostiko_remove_styles() {
	
	$templatename = basename(get_page_template());
    if ( $templatename == 'newsletter.php'  ) {
		
		wp_dequeue_style( 'hostiko-style' );
		wp_dequeue_style( 'bootstrap' );
		
		
      
    }
}
add_action( 'wp_print_styles', 'hostiko_remove_styles',110 );


/**
 * Breadcrumb for subpages
 * call:  hostiko_get_breadcrumb();
 */
function hostiko_get_breadcrumb()
{
	echo '<div class="breadcrumb_hostiko"><ul><li><a href="' . home_url() . '" rel="nofollow">Home</a></li>';
	if (is_category() || is_single())
	{
		echo "<li class='spacer'> &nbsp;&nbsp;&#187;&nbsp;&nbsp; </li>";
		the_category(' &bull; ');
		if (is_single())
		{
			echo "<li class='spacer'> &nbsp;&nbsp;&#187;&nbsp;&nbsp; </li><li class='single-the-title'>";
			the_title();
			echo "</li>";
		}
	}
    elseif (is_page())
	{
		echo "<li class='spacer'> &nbsp;&nbsp;&#187;&nbsp;&nbsp; </li><li class='br-page-title'>";
		echo the_title();
		echo "</li>";
	}
    elseif (is_search())
	{
		echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
		echo "<li>";
		echo the_search_query();
		echo "</li>";
	}
	echo "</ul></div>";
}
add_shortcode('breadcrumb', 'hostiko_get_breadcrumb');
/**
 * Function close
 */
/**
 * Footer Template
 * call:customLayoutfooter($hostiko_footer);
 */
function hostikoLayoutfooter($style = '')
{
	if (isset($style) && !empty($style))
	{
		wp_enqueue_style('footer-' . $style . '-css', get_template_directory_uri() . '/layouts/footer/footer-' . $style . '/footer-' . $style . '.css');
	}
	else
	{
		wp_enqueue_style('header-default-css', get_template_directory_uri() . '/layouts/footer/footer-default/footer-default.css');
	}
}
function footerLogoPath()
{
	$hostiko_redux_option = get_option('opt_theme_options');
	$logoURL = $hostiko_redux_option['flogo']['url'];
	if (isset($_REQUEST['flogo']))
	{
		// hostiko3
		$logoURL_temp = get_template_directory_uri() . '/assets/images/' . $_REQUEST['flogo'];
		$logoURL_path = get_template_directory() . '/assets/images/' . $_REQUEST['flogo'];
		if (file_exists($logoURL_path))
		{
			$logoURL = $logoURL_temp;
		}
	}
	return $logoURL;
}
add_shortcode('flogoURL', 'footerLogoPath');
function hostiko_user_contact_methods($user_contact)
{
	$user_contact['facebook'] = __('Facebook URL', 'hostiko');
	$user_contact['skype'] = __('Skype Username', 'hostiko');
	$user_contact['twitter'] = __('Twitter Handle', 'hostiko');
	$user_contact['youtube'] = __('Youtube Channel', 'hostiko');
	$user_contact['linkedin'] = __('LinkedIn', 'hostiko');
	return $user_contact;
}
add_filter('user_contactmethods', 'hostiko_user_contact_methods');
function blogstyle_register()
{
}
function add_column_selection_meta_box()
{
	global $post;
	if ('template/columns.php' == get_post_meta($post->ID, '_wp_page_template', true) || 'template/newspaper.php' == get_post_meta($post->ID, '_wp_page_template', true))
	{
		add_meta_box('column-layout', 'Blog Column Layout', 'show_column_meta_box', 'page', 'side', 'high');
	}
}
add_action('add_meta_boxes', 'add_column_selection_meta_box');
function show_column_meta_box()
{
	global $post;
	// echo get_post_meta( $post->ID, '_wp_page_template', true );
	$column_layout = intval(get_post_meta($post->ID, 'column_layout', true)); ?>
    <select style="width: 150px" name="column_layout">
		<?php
		// Generate all items of drop-down list
		for ($column = 1; $column <= 4; $column++)
		{
		?>
        <option value="<?php
		echo $column; ?>" <?php
		echo selected($column, $column_layout); ?>>
			<?php
			echo $column; ?> Column Layout <?php
			} ?>
    </select>
    <!-- All fields will go here -->
	<?php
}
add_action('save_post', 'add_column_meta_box', 10, 2);
function add_column_meta_box($post_id, $post)
{
	// Check post type for testimonial reviews
	if ($post->post_type == 'page')
	{
		// Store data in post meta table if present in post data
		if (isset($_POST['column_layout']) && $_POST['column_layout'] != '')
		{
			update_post_meta($post_id, 'column_layout', $_POST['column_layout']);
		}
	}
}
function AKD_load_more_scripts()
{
	global $wp_query;
	$option = get_option('opt_theme_options');
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
	// register our main script but do not enqueue it yet
	if ($option['pagenav'] == 'btn')
	{
		wp_register_script('my_loadmore', get_stylesheet_directory_uri() . '/js/custom_script2.js', array(
			'jquery'
		));
	}
    elseif ($option['pagenav'] == 'infinite')
	{
		wp_register_script('my_loadmore', get_stylesheet_directory_uri() . '/js/custom_script.js', array(
			'jquery'
		));
	}
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script('my_loadmore', 'akd_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode($wp_query->query_vars) , // everything about your loop is here
		'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	));
	wp_enqueue_script('my_loadmore');
}
add_action('wp_enqueue_scripts', 'AKD_load_more_scripts');
function AKD_loadmore_ajax_handler()
{
	// prepare our arguments for the query
	$args = json_decode(stripslashes($_POST['query']) , true);
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
	// it is always better to use WP_Query but not here
	query_posts($args);
	if (have_posts()):
		// run the loop
		while (have_posts()):
			the_post();
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
			get_template_part('template-parts/content', get_post_format());
			// for the test purposes comment the line above and uncomment the below one
			// the_title();
		endwhile;
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
add_action('wp_ajax_loadmore', 'AKD_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'AKD_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
function display_construction_page()
{
	$hostiko_redux_option = get_option('opt_theme_options');
	if (isset($hostiko_redux_option['constructionPage']) && $hostiko_redux_option['constructionPage'] && !is_user_logged_in())
	{
		$protocol = $_SERVER['SERVER_PROTOCOL'];
		if (!in_array($protocol, array(
			'HTTP/1.1',
			'HTTP/2',
			'HTTP/2.0'
		)))
		{
			$protocol = 'HTTP/1.0';
		}
		header($protocol . ' 503 Service Unavailable');
		get_header();
		get_template_part('template-parts/content', 'underconstruction');
		get_footer();
		exit;
	}
}
add_action('wp', 'display_construction_page', 0, 1);
function check_theme_xyz()
	{
		if ( is_admin() ) {
			return;
		}
		$plugins_url = plugins_url();
		$val = get_option('enable_full_version');
		if(isset($val) && $val==0){
			wp_enqueue_style( 'popuptlm-remodal', $plugins_url."/AKD-Framework/frameworks/ReduxCore/inc/extensions/tlm/tlm/remodal-default-theme.css",false,'1','all');
			wp_enqueue_style( 'popuptlm', $plugins_url."/AKD-Framework/frameworks/ReduxCore/inc/extensions/tlm/tlm/remodal.css",false,'1','all');
			//echo "<script>alert('Please active your theme.')</script>";
			$popup_content = __('Dear customer, Please Active your theme. <br/>','hostiko');
			$html = '<div class="popup-license remodal" data-remodal-id="popup_license" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                  <div>
                                    <h2 id="modal1Title">'.__('Theme Registration','hostiko').'</h2>
                                    <p id="modal1Desc">'.
				$popup_content
				.'</p><p align="center"><a href="https://www.youtube.com/watch?v=nzBQf3nnJA8" target="_blank">how to obtain purchase code?</a></p><br><a href="wp-admin/admin.php?page=Hostiko&tab=1#popup_license" class="remodal-confirm">Register now</a><a href="https://themeforest.net/item/hostico-wordpress-whmcs-hosting-theme/20786821" class="remodal-cancel">Buy License</a>
                                  </div>
                                </div>';
			$html .= '<script type="text/javascript" src="'.$plugins_url.'/AKD-Framework/frameworks/ReduxCore/inc/extensions/tlm//tlm/remodal.js"></script>';
			$html .= "<script> var inst = jQuery('[data-remodal-id=popup_license]').remodal(); setTimeout(function(){ inst.open(); }, 2500); </script>";
			echo $html;
		}
	}
	//add_action('init', 'check_theme_xyz',11);
	add_action('wp_footer', 'check_theme_xyz');
/* Function to add related posts with thumb on single post pages */
function related_posts_with_thumb()
{
	$hostiko_redux_option = get_option('opt_theme_options');
	if (is_array($hostiko_redux_option) && ($hostiko_redux_option['relatedpost'] == '1'))
	{
		$content = '';
		global $post;
		if (is_single())
		{
			$rel_posts = '';
			// 1. get category IDs of the current article and save to variable as an array.
			$categories = get_the_category();
			foreach($categories as $category)
			{
				$rel_cat[] = $category->cat_ID;
			}
			// 2. arguments for wp_query.
			$orderby = $hostiko_redux_option['relatedorderby'];
			$posts_per_page = $hostiko_redux_option['posts_per_page'];
			$heading = $hostiko_redux_option['rrelatedpostheading'];
			$noimage = get_template_directory_uri() . '/assets/images/640x400.png';
			$image = '<img src="' . $noimage . '" alt="" width="640px" />';
			$rep_args = array(
				'post__not_in' => array(
					$post->ID
				) , // don't display current post.
				'category__in' => $rel_cat, // get posts within current categories.
				'posts_per_page' => $posts_per_page, // number of posts to display.
				'orderby' => $orderby
				// display random posts.
			);
			// 3. run the query.
			$rep_query = new wp_query($rep_args);
			// 4. if the query has posts start the loop.
			if ($rep_query->have_posts())
			{
				while ($rep_query->have_posts()):
					$rep_query->the_post();
					if (has_post_thumbnail($post->ID))
					{
						$rel_img = get_the_post_thumbnail($post->ID, '640'); //# get featured image with default thumbnail size.
					}
					else
					{
						$rel_img = $image;
					}
					$rel_title = get_the_title(); // get post title.
					$rel_link = get_permalink(); // get post link.
					$rel_posts.= "<div class='content_rel_posts col-lg-4 col-lg-6 col-sm-6 col-xs-12'> <a href='$rel_link'>$rel_img</a> <h4><a href='$rel_link'> $rel_title </a></h4></div>";
				endwhile;
				wp_reset_postdata();
			}
			// 5. Output.
			$content.= "<div class='widget'><h3 class='widget-title'>$heading</h3> $rel_posts</div>";
		}
		echo $content;
	}
}
function body_class_customization($body_classes)
{
	if (defined('WHMCS_BRIDGE'))
	{
		global $wp_query;
		$page_id = $wp_query->get_queried_object_id();
		$bridge_page_id = get_option('cc_whmcs_bridge_pages');
		if ($page_id == $bridge_page_id)
		{
			$body_classes[] = 'whmcs_bridge_page';
			wp_dequeue_script('bootstrap-js');
		}
	}
	return $body_classes;
}
add_filter('body_class', 'body_class_customization');
if( function_exists('acf_add_local_field_group') ):
	function cptui_register_my_cpts()
	{
		/**
		 * Post Type: Testimonial.
		 */
		$labels = array(
			"name" => __("Testimonial", "hostiko"),
			"singular_name" => __("Testimonial", "hostiko"),
		);
		$args = array(
			"label" => __("Testimonial", "hostiko"),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"delete_with_user" => false,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"has_archive" => false,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array("slug" => "testimonial", "with_front" => true),
			"query_var" => true,
			"menu_icon" => "dashicons-format-quote",
			"supports" => array("title", "editor", "thumbnail"),
		);
		register_post_type("testimonial", $args);
	}
	add_action('init', 'cptui_register_my_cpts');
		acf_add_local_field_group(array(
			'key' => 'group_5c46ebb0e75ec',
			'title' => 'Testimonails',
			'fields' => array(
				array(
					'key' => 'field_5c46ebe2dfd06',
					'label' => 'Designation',
					'name' => 'designation',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 'CEO',
					'placeholder' => 'Designation',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5c46ec42dfd07',
					'label' => 'Rating',
					'name' => 'rating',
					'type' => 'range',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => 3,
					'min' => '',
					'max' => 5,
					'step' => '',
					'prepend' => '',
					'append' => '',
				),
				array(
					'key' => 'field_5c46ed00e85a5',
					'label' => 'Social Media',
					'name' => 'social_media',
					'type' => 'group',
					'instructions' => 'Font Awesome icon will change according to name e.g fa-facebook',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5c46ed5ce85a6',
							'label' => 'Option 1',
							'name' => 'option_1',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => 'facebook',
							'prepend' => 'fa-',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c46ee62d4622',
							'label' => 'Link 1',
							'name' => 'link_1',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_5c46ed5ce85a6',
										'operator' => '!=empty',
									),
								),
							),
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'https://www.facebook.com/',
							'placeholder' => 'https://www.facebook.com/',
							'prepend' => 'URL',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c46ee13e3a03',
							'label' => 'Option 2',
							'name' => 'option_2',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => 'Twitter',
							'prepend' => 'fa-',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c46eeab4f22c',
							'label' => 'Link 2',
							'name' => 'Link_2',
							'type' => 'text',
							'instructions' => 'k',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_5c46ee13e3a03',
										'operator' => '!=empty',
									),
								),
							),
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'https://www.twitter.com/',
							'placeholder' => 'https://www.twitter.com/',
							'prepend' => 'URL',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c46ee1be3a04',
							'label' => 'Option 3',
							'name' => 'option_3',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => 'instagram',
							'prepend' => 'fa-',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5c46ef89f5966',
							'label' => 'Link 3',
							'name' => 'Link_3',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_5c46ee1be3a04',
										'operator' => '!=empty',
									),
								),
							),
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 'https://www.instagram.com/',
							'placeholder' => 'https://www.instagram.com/',
							'prepend' => 'URL',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'testimonial',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		));
		endif;
	if (defined('WPB_VC_VERSION'))
	{
		vc_map(array(
			"name" => __("Testimonials", 'hostiko') ,
			"base" => "my_testimonials",
			"class" => "",
			"category" => __('Testimonial', 'hostiko') ,
			'description' => __('Testimonial', 'hostiko') ,
			"params" => array(
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__('Select Style', 'hostiko' ),
					'param_name'  => 'tstyle',
					'description' => esc_html__('You can select Testimonial Style', 'hostiko' ),
					'value'       => array(
						esc_html__('Select Style',   'hostiko' )    => '',
						esc_html__('Style one',       'hostiko' )    => '1',
						esc_html__('Style Two',  'hostiko' )    => '2',
						esc_html__('Style Three',  'hostiko' )    => '3',
					),
				),
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__('Select Type', 'hostiko' ),
					'param_name'  => 'ttypes',
					'description' => esc_html__('You can select Testimonial Type', 'hostiko' ),
					'dependency'    => array(
						'element'   => 'tstyle',
						"not_empty" => true,
					),
					'value'       => array(
						esc_html__('Select Type',   'hostiko' )    => '',
						esc_html__('Auto',       'hostiko' )    => '1',
						esc_html__('Static',       'hostiko' )    => '2',
					),
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__('Enter No of Testimonial to show', 'hostiko' ),
					'param_name'  => 'auto',
					'description' => esc_html__('-1  means All', 'hostiko' ),
					'dependency'    => array(
						'element'   => 'ttypes',
						'value'     => '1'
					),
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__('Enter No of Words to show', 'hostiko' ),
					'param_name'  => 'content_length',
					'description' => esc_html__('40', 'hostiko' ),
					'dependency'    => array(
						'element'   => 'ttypes',
						'value'     => '1'
					),
				),
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html__('Single Image for Testimonial', 'hostiko' ),
					'param_name'  => 'timage',
					'description' => esc_html__('Image Size should not less than 120 x 120', 'hostiko' ),
					'dependency'    => array(
						'element'   => 'ttypes',
						'value'     => '2'
					),
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__('Title for Testimonial', 'hostiko' ),
					'param_name'  => 'ttitle',
					'value'		=>'Fergus Douchebag',
					'description' => esc_html__('Default: Fergus Douchebag', 'hostiko' ),
					'dependency'    => array(
						'element'   => 'ttypes',
						'value'     => '2'
					),
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__('Designation', 'hostiko' ),
					'param_name'  => 'tdesignation',
					'value'		=>'Graphic Designer',
					'description' => esc_html__('Default: Graphic Designer', 'hostiko' ),
					'dependency'    => array(
						'element'   => 'ttypes',
						'value'     => '2'
					),
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__('Content for Testimonial', 'hostiko' ),
					'param_name'  => 'tdiscritpion',
					'dependency'    => array(
						'element'   => 'ttypes',
						'value'     => '2'
					),
				),
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__('Rating', 'hostiko' ),
					'param_name'  => 'tratings',
					'description' => esc_html__('Default: Graphic Designer', 'hostiko' ),
					'dependency'    => array(
						'element'   => 'ttypes',
						'value'     => '2'
					),
					'value'       => array(
						'Select Stars'=>'',
						'1 Star'=>'1',
						'2 Star'=>'2',
						'3 Star'=>'3',
						'4 Star'=>'4',
						'5 Star'=>'5',
					),
				),
			)
		));
	}
	add_shortcode('my_testimonials', 'my_testimonials');
	function my_testimonials($atts, $contents = null)
{
    extract(shortcode_atts(array(
        'tstyle' => '1',
        'ttypes' => '1',
        'auto' => '-1',
        'content_length' => '40',
        'timage' => '',
        'ttitle' => '',
        'tdesignation' => '',
        'tdiscritpion' => '',
        'tratings' => '3',
    ) , $atts));
    // echo '<pre> Var'.print_r($atts,true).'</pre>';
    //exit();
    /*exit();*/
    $content = '';
    $img = wp_get_attachment_image_src($timage);
    if( class_exists('acf') ) {
        if ($ttypes==1) {
            $args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => $auto,
                'post_status' => 'publish',
            );
            $list = '';
            $Carousel =  uniqid('myCarousel');
            $featured_product = new WP_Query($args);
            if ($featured_product->have_posts()):
                ob_start();
                $content .= '<div id="'.$Carousel.'" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">';
                if ($tstyle==1){
                    $i = 0;
                    $active='';
                    while ( $featured_product->have_posts() ): $featured_product->the_post();
                        if ($i==0) {
                            $active =' active';
                        }
                        else{
                            $active='';
                        }
                        $list .= '<li data-target="#'.$Carousel.'" data-slide-to="'.$i.'" class="'.$active.'"></li>';
                        $i++;
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                        $content .= '
									<div class="item '.$active.' ">
										<div class="client_review_style1 reviews_common">
											 <div class="client_review_inner">
											  <div class="client_info_sec">
                                                <h2>'.get_the_title(get_the_ID()).'</h2>
                                                 <p>'.get_field( "designation", get_the_ID() ).'</p>
                                                    </div>
                                                        <div class="client_views_sec">
                                                     <p>'.hostiko_content($content_length).'</p>
                                                        </div>
                                                    ';
                        $rating = get_field( "rating", get_the_ID() );
                        if(isset($rating) && !empty($rating) && $rating>0){
                            $content .= '<div class="rating_client">
													<ul>';
                            for($r=1;$r<=$rating;$r++){
                                $content .= '<li><i class="fa fa-star"></i> </li>';
                            }
                            $content .= '</ul>
													</div>';
                        }
                        $social_media = get_field('social_media', get_the_ID() );
                        //echo '<pre>'.print_r($social_media,true).'</pre>';
                        $content .= '<div class="client_socail_media">
													<ul>';
                        if((isset($social_media['option_1']) && !empty($social_media['option_1'])) && (isset($social_media['link_1']) && !empty($social_media['link_1']))){
                            $content .= '<li><a href="'.$social_media['link_1'].'"><i class="fa fa-'.$social_media['option_1'].'"></i> </a> </li>';}
                        if((isset($social_media['option_2']) && !empty($social_media['option_2'])) && (isset($social_media['Link_2']) && !empty($social_media['Link_2']))){
                            $content .= '<li><a href="'.$social_media['Link_2'].'"><i class="fa fa-'.$social_media['option_2'].'"></i> </a> </li>';}
                        if((isset($social_media['option_3']) && !empty($social_media['option_3'])) && (isset($social_media['Link_3']) && !empty($social_media['Link_3']))){
                            $content .= '<li><a href="'.$social_media['Link_3'].'"><i class="fa fa-'.$social_media['option_3'].'"></i> </a> </li>';}
                        $content .= '<ul></div>  </div>';
                        $content .= '		
								<div class="client_profie_pic">
								  <figure><img src="'.$featured_img_url .'"></figure>
													</div> </div> </div>  ';
                    endwhile;
                    $content .= '<ol class="carousel-indicators style1">'.$list.'</ol>' ;
                }
                if ($tstyle==2){
                    $i = 0;
                    $active='';
                    while ( $featured_product->have_posts() ): $featured_product->the_post();
                        if ($i==0) {
                            $active =' active';
                        }
                        else{
                            $active='';
                        }
                        $list .= '<li data-target="#'.$Carousel.'" data-slide-to="'.$i.'" class="'.$active.'"></li>';
                        $i++;
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                        $content .= '
										<div class="item'.$active.'">
							            <div class="client_review_style2 reviews_common">
										<div class="client_profie_pic">
                                     <figure><img src="'.$featured_img_url.'"></figure>
                                         </div>
											 <div class="client_review_inner end_social">';
                        $rating = get_field( "rating", get_the_ID() );
                        if(isset($rating) && !empty($rating) && $rating>0){
                            $content .= '
                                    <div class="rating_client">
													<ul>';
                            for($r=1;$r<=$rating;$r++){
                                $content .= '<li><i class="fa fa-star"></i> </li>';
                            }
                            $content .= '</ul>
                                </div> 
								 <div class="client_info_sec">
                                        <h2>'.get_the_title(get_the_ID()).'</h2>
                                        <p>'.get_field( "designation", get_the_ID() ).'</p>
                                    </div> 
                                    <div class="client_views_sec">
                                        <p>'.hostiko_content($content_length).'</p>
                                    </div>
													';
                        }
                        $social_media = get_field('social_media', get_the_ID() );
                        //echo '<pre>'.print_r($social_media,true).'</pre>';
                        $content .= '
                            <div class="client_socail_media">
							<ul>';
                        if((isset($social_media['option_1']) && !empty($social_media['option_1'])) && (isset($social_media['link_1']) && !empty($social_media['link_1']))){
                            $content .= '<li><a href="'.$social_media['link_1'].'"><i class="fa fa-'.$social_media['option_1'].'"></i> </a> </li>';}
                        if((isset($social_media['option_2']) && !empty($social_media['option_2'])) && (isset($social_media['Link_2']) && !empty($social_media['Link_2']))){
                            $content .= '<li><a href="'.$social_media['Link_2'].'"><i class="fa fa-'.$social_media['option_2'].'"></i> </a> </li>';}
                        if((isset($social_media['option_3']) && !empty($social_media['option_3'])) && (isset($social_media['Link_3']) && !empty($social_media['Link_3']))){
                            $content .= '<li><a href="'.$social_media['Link_3'].'"><i class="fa fa-'.$social_media['option_3'].'"></i> </a> </li>';}
                        $content .= '<ul>
                                </div>';
                        $content .= '</div></div> </div>
								';
                    endwhile;
                    $content .= '<ol class="carousel-indicators style2">'.$list.'</ol> ';
                }
                if ($tstyle==3){
                    $i = 0;
                    $active='';
                    while ( $featured_product->have_posts() ): $featured_product->the_post();
                        if ($i==0) {
                            $active =' active';
                        }
                        else{
                            $active='';
                        }
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                        $list .= '<li data-target="#'.$Carousel.'" data-slide-to="'.$i.'" class="'.$active.'"></li>';
                        $i++;
                        $content .= '
        <div class="item'.$active.'">
            <div class="client_review_style3 reviews_common">
                   <div class="client_review_inner">';
                        $rating = get_field( "rating", get_the_ID() );
                        if(isset($rating) && !empty($rating) && $rating>0){
                            $content .= '<div class="rating_client">
                                <ul>';
                            for($r=1;$r<=$rating;$r++){
                                $content .= '<li><i class="fa fa-star"></i> </li>';
                            }
                            $content .= '</ul>
                            </div>';
                        }
                        $content .= '<div class="client_views_sec">
                                '.hostiko_content($content_length).'
                            </div>
                       <div class="client_comp_info">
                                    <div class="client_info_sec">
                                        <h2>'.get_the_title(get_the_ID()).'</h2>
                                        <p>'.get_field( "designation", get_the_ID() ).'</p>
                                    </div>
                            ';
                        $social_media = get_field('social_media', get_the_ID() );
                        //echo '<pre>'.print_r($social_media,true).'</pre>';
                        $content .= '<div class="client_socail_media">
                                <ul>';
                        if((isset($social_media['option_1']) && !empty($social_media['option_1'])) && (isset($social_media['link_1']) && !empty($social_media['link_1']))){
                            $content .= '<li><a href="'.$social_media['link_1'].'"><i class="fa fa-'.$social_media['option_1'].'"></i> </a> </li>';}
                        if((isset($social_media['option_2']) && !empty($social_media['option_2'])) && (isset($social_media['Link_2']) && !empty($social_media['Link_2']))){
                            $content .= '<li><a href="'.$social_media['Link_2'].'"><i class="fa fa-'.$social_media['option_2'].'"></i> </a> </li>';}
                        if((isset($social_media['option_3']) && !empty($social_media['option_3'])) && (isset($social_media['Link_3']) && !empty($social_media['Link_3']))){
                            $content .= '<li><a href="'.$social_media['Link_3'].'"><i class="fa fa-'.$social_media['option_3'].'"></i> </a> </li>';}
                        $content .= '</ul>
                            </div>
                        </div>
                         <div class="client_profie_pic">
                                    <figure><img src="'.$featured_img_url.'"></figure>
                                </div>
                    </div>
                </div>
        </div>';
                    endwhile;
                    /*$y = 0;
                    $active='';*/
                    $content .= '<ol class="carousel-indicators style3">'.$list.'</ol>';
                }
                $content .= '</div></div>';
            endif;
        }
    }
    if ($ttypes==2) {
        if ($tstyle==1) {
            $content .= '
				<div class="client_review_style1 reviews_common">
					<div class="client_review_inner">
					<div class="client_info_sec">
                        <h2>'.$ttitle.'</h2>
                        <p>'.$tdesignation.'</p>
                    </div>
                    <div class="client_views_sec">
                    <p>'.$tdiscritpion.'</p>
                </div>
					';
            if(isset($img) && is_array($img)){$content .= '';}
            if(isset($ttitle) && !empty($ttitle)){$content .= '';}
            if(isset($tdesignation) && !empty($tdesignation)){$content .= '';}
            if(isset($tratings) && !empty($tratings) && $tratings>0){
                $content .= '<div class="rating_client">
							<ul>';
                for($r=1;$r<=$tratings;$r++){
                    $content .= '<li><i class="fa fa-star"></i> </li>';
                }
                $content .= '</ul>
							</div>';
            }
            $content .= '				
						</div>
						  <div class="client_profie_pic">
                    <figure><img src="'.$img[0].'"></figure>
                </div>
				</div>';
        }
        if ($tstyle==2) {
            $content .= '
				<div class="client_review_style2 reviews_common">
					';
            if(isset($img) && is_array($img)){
                $content .= '
             <div class="client_profie_pic">
            <figure><img src="'.$img[0].'"></figure>
        </div>
';
            }
            $content .='<div class="client_review_inner">';
            if(isset($tratings) && !empty($tratings) && $tratings>0){
                $content .= '<div class="rating_client">
						<ul>';
                for($r=1;$r<=$tratings;$r++){
                    $content .= '<li><i class="fa fa-star"></i> </li>';
                }
                $content .= '</ul>
						</div> ';
                $content .='<div class="client_info_sec">';
                if(isset($ttitle) && !empty($ttitle)){
                    $content .= '<h2>'.$ttitle.'</h2>';
                }
                if(isset($tdesignation) && !empty($tdesignation)){
                    $content .= '<p>'.$tdesignation.'</p>';
                }
                $content .=' </div>';
                if(isset($tdiscritpion) && !empty($tdiscritpion)){
                    $content .= '<div class="client_views_sec"><p>'.$tdiscritpion.'</p></div>';
                }
            }
            $content .= '</div>
					</div>
				';
        }
        if ($tstyle==3) {
            $content .= '
					<div class="client_review_style3 reviews_common">
						<div class="client_review_inner">';
            if(isset($tratings) && !empty($tratings) && $tratings>0){
                $content .= '<div class="rating_client">
									<ul>';
                for($r=1;$r<=$tratings;$r++){
                    $content .= '<li><i class="fa fa-star"></i> </li>';
                }
                $content .= '</ul>
									</div>';
            }
            if(isset($tdiscritpion) && !empty($tdiscritpion)){
                $content .= '<div class="client_views_sec"><p>'.$tdiscritpion.'</p></div>';
            }
            $content .='<div class="client_comp_info">';
            if(isset($ttitle) && !empty($ttitle)){
                $content .= '<div class="client_info_sec"><h2>'.$ttitle.'</h2>';
            }
            if(isset($tdesignation) && !empty($tdesignation)){
                $content .= '<p>'.$tdesignation.'</p></div>';
            }
            $content .= '</div>';
            if(isset($img) && is_array($img)){
                $content .= '<div class="client_profie_pic"><figure><img src="'.$img[0].'"></figure></div>';
            }
            $content .= '
							</div>
				</div>';
        }
    }
    return $content;
    wp_reset_query();
    //return ob_get_clean();
}