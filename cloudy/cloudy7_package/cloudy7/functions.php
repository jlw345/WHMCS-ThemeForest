<?php
$cloudy7_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/visual/shortcodes.php';
require_once get_template_directory() . '/visual/vc_shortcode.php';
//Theme Set up:
function cloudy7_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 

	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('cloudy7', $lang);
    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in home page v03,v04 blog and services.', 'cloudy7' ),
    'home01' =>  esc_html__( 'Navigation Menu: Chosen menu in home page v01.', 'cloudy7' ),
    'home02' =>  esc_html__( 'Navigation Menu: Chosen menu in home page v02.', 'cloudy7' ),
    'service' =>  esc_html__( 'Service Navigation Menu: Chosen menu in sidebar on single service', 'cloudy7' ),
    'home01mobile' =>  esc_html__( 'Navigation Menu: Chosen menu in home page v01 mobile.', 'cloudy7' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'cloudy7_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;

function cloudy7_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'cloudy7' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Nunito:300,400,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function cloudy7_theme_scripts_styles() {
	$cloudy7_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'cloudicon', get_template_directory_uri().'/fonts/cloudicon/cloudicon.css');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/fonts/fontawesome/css/all.css');
    wp_enqueue_style( 'opensans', get_template_directory_uri().'/fonts/opensans/opensans.css');
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/css/owl.carousel.css');
    wp_enqueue_style( 'idangerous', get_template_directory_uri().'/css/idangerous.swiper.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css');
    wp_enqueue_style( 'filter', get_template_directory_uri().'/css/filter.css');
    wp_enqueue_style( 'cloudy7-style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css');
    wp_enqueue_style( 'cloudy7-css', get_stylesheet_uri(), array(), '2018-10-10' );

if(isset($cloudy7_redux_demo['rtl']) && $cloudy7_redux_demo['rtl']==1){
  wp_enqueue_style( 'rtl', get_template_directory_uri().'/rtl.css');  }
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  //Javascript
    wp_enqueue_script("popper", get_template_directory_uri()."/js/popper.min.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("idangerous", get_template_directory_uri()."/js/idangerous.swiper.min.js",array(),false,true);
    wp_enqueue_script("viewportchecker", get_template_directory_uri()."/js/jquery.viewportchecker.min.js",array(),false,true);
    wp_enqueue_script("circliful", get_template_directory_uri()."/js/jquery.circliful.min.js",array(),false,true);
    wp_enqueue_script("countdown", get_template_directory_uri()."/js/jquery.countdown.js",array(),false,true);
    wp_enqueue_script("magnific-popup", get_template_directory_uri()."/js/jquery.magnific-popup.min.js",array(),false,true);
    wp_enqueue_script("slick", get_template_directory_uri()."/js/slick.min.js",array(),false,true);
    wp_enqueue_script("owl-carousel", get_template_directory_uri()."/js/owl.carousel.min.js",array(),false,true);
    wp_enqueue_script("isotope", get_template_directory_uri()."/js/isotope.min.js",array(),false,true);
    wp_enqueue_script("cloudy7-scripts", get_template_directory_uri()."/js/scripts.js",array(),false,true);
    wp_enqueue_script("mixitup", get_template_directory_uri()."/js/jquery.mixitup.min.js",array(),false,true);
    if(is_page_template('page-templates/vps.php') or is_page_template('page-templates/domain.php')){
    wp_enqueue_script("filter", get_template_directory_uri()."/js/filter.js",array(),false,true);
  }
    if(is_page_template('page-templates/knowlegebase.php') or is_page_template('page-templates/legal.php')){
    wp_enqueue_script("cloudy7-sidebar", get_template_directory_uri()."/js/sidebar.js",array(),false,true);
  }
    wp_enqueue_script("cloudy7-map", $protocol ."://maps.googleapis.com/maps/api/js?SyB6w8j2weabWNNnmQbh4Vsi2-sd7Sqv5zM");
    wp_enqueue_script("animateNumber", get_template_directory_uri()."/js/jquery.animateNumber.min.js",array(),false,true);
}
    
add_action( 'wp_enqueue_scripts', 'cloudy7_theme_scripts_styles' );

//Custom Excerpt Function
function cloudy7_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}
  
    function cloudy7_content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
    }

  
// Widget Sidebar
function cloudy7_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Primary Sidebar', 'cloudy7' ),
    'id'            => 'sidebar-1',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'cloudy7' ),        
        'before_widget' => '<aside id="%1$s" class="widget popular-categories %2$s" >',        
        'after_widget'  => '</aside>',        
        'before_title'  => '<div class="sidebar-title">
                                   <h3>',        
        'after_title'   => '</h3>
                              </div>'
    ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Shop Sidebar', 'cloudy7' ),
    'id'            => 'sidebar-shop',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'cloudy7' ),        
    'before_widget' => '<aside id="%1$s" class="widget popular-categories %2$s" >',        
    'after_widget'  => '</aside>',        
    'before_title'  => '<div class="sidebar-title">
                                   <h3>',        
    'after_title'   => '</h3>
                              </div>'
    ) );

    register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget', 'cloudy7' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'cloudy7' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget', 'cloudy7' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'cloudy7' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Three Widget', 'cloudy7' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'cloudy7' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Four Widget', 'cloudy7' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'cloudy7' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Five Widget', 'cloudy7' ),
    'id'            => 'footer-area-5',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'cloudy7' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Six Widget', 'cloudy7' ),
    'id'            => 'footer-area-6',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'cloudy7' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Seven Widget', 'cloudy7' ),
    'id'            => 'footer-area-7',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'cloudy7' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Eight Widget', 'cloudy7' ),
    'id'            => 'footer-area-8',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'cloudy7' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Widget Area 1', 'cloudy7' ),
    'id'            => 'widget-area-1',
    'description'   => esc_html__( 'Widget Area 1.', 'cloudy7' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
}
add_action( 'widgets_init', 'cloudy7_widgets_init' );

//function tag widgets
function cloudy7_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'cloudy7_tag_cloud_widget' );
function cloudy7_excerpt() {
  $cloudy7_redux_demo = get_option('redux_demo');
  if(isset($cloudy7_redux_demo['blog_excerpt'])){
    $limit = $cloudy7_redux_demo['blog_excerpt'];
  }else{
    $limit = 30;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
if (!function_exists( 'next_pagination' )){
 
    function next_pagination(){
 
        if ( $GLOBALS['wp_query']->max_num_pages <2 ){ return ''; }?>
 
            <?php if ( function_exists('wp_pagenavi') ): ?>
 
            <?php wp_pagenavi(); ?> 
 
            <?php else: ?>
                <nav class="pagination" role="navigation">
 
                    <?php if ( get_next_posts_link() ) : ?>
 
                        <button><?php next_posts_link( __('Previous', 'cloudy7') ); ?></button>
 
                    <?php endif; ?>
 
                    <?php if ( get_previous_posts_link() ) :?>
 
                        <button><?php previous_posts_link(__('Next', 'cloudy7') ); ?></button>
 
                    <?php endif; ?>
 
                </nav>
 
             <?php endif; ?>
 
       <?php }
}
function cloudy7_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => wp_specialchars_decode(esc_html__( '<i class = "fa fa-angle-left"></i>', 'cloudy7' ),ENT_QUOTES),
    'next_text' => wp_specialchars_decode(esc_html__( '<i class = "fa fa-angle-right"></i>', 'cloudy7' ),ENT_QUOTES),
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}

function cloudy7_search_form( $form ) {
    $form = '
  <form method="get" action="' . esc_url(home_url('/')) . '" class="search-group">
        <div class="cd-filter-block">
            <div class="cd-filter-content">
            <input type="text" placeholder="'.esc_attr__('Search', 'cloudy7').'" value="' . get_search_query() . '" name="s">
                <button type="submit" >
                <i class="icon-zoom"></i>
                </button>
            </div>
        </div>

    </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'cloudy7_search_form' );
//Custom comment List:


 
add_action( 'wp_login_form', 'cloudy7_my_form_login' );
function cloudy7_my_form_login( $args = array() ) {
$defaults = array(
        'echo' => true,
        'redirect' => site_url( '/wp-admin' ), 
        'form_id' => 'loginform',
        'label_username' => esc_html__( 'Username' , 'cloudy7'),
        'label_password' => esc_html__( 'Password', 'cloudy7' ),
        'label_remember' => esc_html__( 'Remember Me', 'cloudy7' ),
        'label_log_in' => esc_html__( 'Sign in' , 'cloudy7'),
        'id_username' => 'user_login',
        'id_password' => 'user_pass',
        'id_email'    => 'email',
        'id_remember' => 'rememberme',
        'id_submit' => 'wp-submit',
        'remember' => true,
        'value_username' => '',
        'value_remember' => false,
);
$args = wp_parse_args( $args, apply_filters( 'login_form_defaults', $defaults ) );

$form = '

        <form name="' . $args['form_id'] . '" id="' . $args['form_id'] . '" action="' . esc_url( site_url( 'wp-login.php', 'login_post' ) ) . '" method="post">
                ' . apply_filters( 'login_form_top', '', $args ) . '                
                <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" class="form-control" name="log" placeholder="'.esc_attr__('Username', 'cloudy7').'" id=" '.esc_attr( $args['id_email'] ).'" value="' . esc_attr( $args['value_username'] ) . '" required="required"/>
                   
                </div>
                <div class="form-group">
                        <label for="key" class="sr-only">Password</label>
                        <input type="password" name="pwd" id="' . esc_attr( $args['id_password'] ) . '" class="form-control" placeholder="'.esc_attr__('Password', 'cloudy7').'" value="" size="20" required="required"/>
                    
                </div>
                ' . apply_filters( 'login_form_middle', '', $args ) . '
                
                <div class="form-group">
                        <input type="submit" name="wp-submit" id="' . esc_attr( $args['id_submit'] ) . '" class="btn btn-primary btn-block" value="' . esc_attr( $args['label_log_in'] ) . '" />
                        <input type="hidden" name="redirect_to" value="' . esc_url( $args['redirect'] ) . '" />
                </div>
                ' . apply_filters( 'login_form_bottom', '', $args ) . '
        </form>';

if ( $args['echo'] )
        echo esc_attr($form);
else
        return $form;
    }


 
// Comment Form
function cloudy7_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
    <?php if(get_avatar($comment,$size='70' )!=''){?>
      
      <div class="media">
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        <?php echo get_avatar($comment,$size='70' ); ?>
        <div class="media-body">
          <h4 class="media-heading"><?php printf( get_comment_author_link()) ?></h4>  
          <div class="text-blog mt-0">
            <i class="icon-calendar"></i>
            <span class="pl-2 pr-4"><?php the_time('F Y j'); ?></span>
            <i class="icon-clock"></i>
            <span class="pl-2"> <?php the_time('G:i'); ?></span>
          </div>
          <div class="text-comments">
            <?php comment_text() ?> 
          </div>          
        </div>
      </div><hr>

  <?php }else{?>

      <div class="media">
        <a class="plans badge badge-pill feat bg-green"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a>
        <div class="media-body nopadding">
          <h4 class="media-heading"><?php printf( get_comment_author_link()) ?></h4>
          <div class="text-blog mt-0">
            <i class="icon-calendar"></i>
            <span class="pl-2 pr-4"><?php the_time('F Y j'); ?></span>
            <i class="icon-clock"></i>
            <span class="pl-2"> <?php the_time('G:i'); ?></span>
          </div>
          <div class="text-comments">
            <?php comment_text() ?> 
          </div>          
        </div>
      </div><hr>
      
<?php }?>

<?php
}

function cloudy7_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'cloudy7_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'cloudy7' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'cloudy7' ) => 'type2',
                                esc_html__( 'Slider 1', 'cloudy7' ) => 'slider_1',
                                esc_html__( 'Pricing', 'cloudy7' ) => 'pricing_special',
                                esc_html__( 'Service', 'cloudy7' ) => 'service',
                                esc_html__( 'Best Services', 'cloudy7' ) => 'best_services',
                                esc_html__( 'Case Study', 'cloudy7' ) => 'case_study',
                                esc_html__( 'Slider 2', 'cloudy7' ) => 'slider_2',
                                esc_html__( 'Domain Pricing', 'cloudy7' ) => 'domain_pricing',
                                esc_html__( 'Email Pricing', 'cloudy7' ) => 'email_pricing',
                                esc_html__( 'Statistics', 'cloudy7' ) => 'statistics',
                                esc_html__( 'Partner', 'cloudy7' ) => 'partner',
                                esc_html__( 'Trial', 'cloudy7' ) => 'trial',
                                esc_html__( 'Trial Home 3', 'cloudy7' ) => 'trial_home3',
                                esc_html__( 'Slider 3', 'cloudy7' ) => 'slider_3',
                                esc_html__( 'Features', 'cloudy7' ) => 'features',
                                esc_html__( 'Plan 1', 'cloudy7' ) => 'plan1',
                                esc_html__( 'Plan 2', 'cloudy7' ) => 'plan2',
                                esc_html__( 'Pricing Home 3', 'cloudy7' ) => 'pricing_home3',
                                esc_html__( 'Team', 'cloudy7' ) => 'team',
                                esc_html__( 'Features Home 4', 'cloudy7' ) => 'features_4',
                                esc_html__( 'Package', 'cloudy7' ) => 'package',
                                esc_html__( 'Pricing Home 4', 'cloudy7' ) => 'pricing_home4',
                                esc_html__( 'Question', 'cloudy7' ) => 'question',
                                esc_html__( 'Services Slider', 'cloudy7' ) => 'services_slider',
                                esc_html__( 'Services Pricing', 'cloudy7' ) => 'hosting_pricing',
                                esc_html__( 'Hosting Service', 'cloudy7' ) => 'hosting_service',
                                esc_html__( 'Services Specification', 'cloudy7' ) => 'hosting_specification',
                                esc_html__( 'Hosting Question', 'cloudy7' ) => 'hosting_question',
                                esc_html__( 'Reseller Service', 'cloudy7' ) => 'reseller_service',
                                esc_html__( 'Reseller Specification', 'cloudy7' ) => 'reseller_specification',
                                esc_html__( 'Dedicated Pricing', 'cloudy7' ) => 'dedicated_pricing',
                                esc_html__( 'Dedicated Service', 'cloudy7' ) => 'dedicated_service',
                                esc_html__( 'Dedicated Features', 'cloudy7' ) => 'dedicated_features',
                                esc_html__( 'Dedicated Specification', 'cloudy7' ) => 'dedicated_specification',
                                esc_html__( 'Section', 'cloudy7' ) => 'dedicated_section',
                                esc_html__( 'WordPress Slider', 'cloudy7' ) => 'wordpress_slider',
                                esc_html__( 'WordPress Services', 'cloudy7' ) => 'wordpress_services',
                                esc_html__( 'WordPress Team', 'cloudy7' ) => 'wordpress_team',
                                esc_html__( 'Contact Form', 'cloudy7' ) => 'wordpress_contact',
                                esc_html__( 'VPS-Domain Service', 'cloudy7' ) => 'vps_service',
                                esc_html__( 'VPS Pricing', 'cloudy7' ) => 'vps_pricing',
                                esc_html__( 'VPS Question', 'cloudy7' ) => 'vps_question',
                                esc_html__( 'Domain Slider', 'cloudy7' ) => 'domain_slider',
                                esc_html__( 'Domain Contact', 'cloudy7' ) => 'domain_contact',
                                esc_html__( 'Popup Contact', 'cloudy7' ) => 'popup_contact',
                                esc_html__( 'Countdown', 'cloudy7' ) => 'countdown',
                                esc_html__( 'About', 'cloudy7' ) => 'about',
                                esc_html__( 'About Service', 'cloudy7' ) => 'about_service',
                                esc_html__( 'About Team', 'cloudy7' ) => 'about_team',
                                esc_html__( 'Team Style 1', 'cloudy7' ) => 'team_style1',
                                esc_html__( 'Team Style 2', 'cloudy7' ) => 'team_style2',
                                esc_html__( 'Team Style 3', 'cloudy7' ) => 'team_style3',
                                esc_html__( 'Sign Up', 'cloudy7' ) => 'sign_up',
                                esc_html__( 'Log In', 'cloudy7' ) => 'log_in',
                                esc_html__( 'Contact Slider', 'cloudy7' ) => 'contact_slider',
                                esc_html__( 'Contact Address', 'cloudy7' ) => 'contact_address',
                                esc_html__( 'Contact Page', 'cloudy7' ) => 'contact_page',
                                esc_html__( 'SSL Features', 'cloudy7' ) => 'ssl_features',
                                esc_html__( 'Checkout Order', 'cloudy7' ) => 'checkout_order',
                                esc_html__( 'New Product', 'cloudy7' ) => 'new_product',

                             ),
                             'description' => esc_html__( 'Select type row', 'cloudy7' )
      )); 



vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'cloudy7'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "cloudy7"),   
    ));


vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle', 'cloudy7'),
                              "param_name" => "ses_subtitle",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle, Leave a blank do not show frontend.", "cloudy7"),   
    ));



vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section green text', 'cloudy7'),
                              "param_name" => "ses_green_text",
                              "value" => "",
                              "description" => esc_html__("Section green text, Leave a blank do not show frontend.", "cloudy7"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Link', 'cloudy7'),
                              "param_name" => "ses_link",
                              "value" => "",
                              "description" => esc_html__("Section Link, Leave a blank do not show frontend.", "cloudy7"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Text Link', 'cloudy7'),
                              "param_name" => "ses_text_link",
                              "value" => "",
                              "description" => esc_html__("Text Link, Leave a blank do not show frontend.", "cloudy7"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Text Button', 'cloudy7'),
                              "param_name" => "ses_text_btn",
                              "value" => "",
                              "description" => esc_html__("Section Text Button, Leave a blank do not show frontend.", "cloudy7"),   
    ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'cloudy7' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'cloudy7' )
      ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image custom', 'cloudy7' ),
                             'param_name' => 'ses_image2',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'cloudy7' )
      ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image logo', 'cloudy7' ),
                             'param_name' => 'ses_image3',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'cloudy7' )
      ));
  
vc_add_param('vc_column',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Type', 'cloudy7' ),
                             'param_name' => 'type',
                             'value' => array(
                                esc_html__( 'None', 'cloudy7' ) => 'none',
                                esc_html__( 'Domain Prices', 'cloudy7' ) => 'domain_prices',
                                esc_html__( 'Form Trial', 'cloudy7' ) => 'form_trial',
                                esc_html__( 'Plan Details', 'cloudy7' ) => 'plan_details',
                                esc_html__( 'Package', 'cloudy7' ) => 'package',
                                esc_html__( 'Contact', 'cloudy7' ) => 'contact',
                                esc_html__( 'Countdown', 'cloudy7' ) => 'countdown',
                                esc_html__( 'Features Menu', 'cloudy7' ) => 'ssl_features_menu',
                                esc_html__( 'Features Info', 'cloudy7' ) => 'ssl_features_info',
                                esc_html__( 'Menu Order Checkout', 'cloudy7' ) => 'menu_order',
                                esc_html__( 'Price Order Checkout', 'cloudy7' ) => 'price_order_checkout',
                                                           ),
                             'description' => esc_html__( 'Select type section content', 'cloudy7' )
      )); 
vc_add_param('vc_column',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'cloudy7' ),
                             'param_name' => 'image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'cloudy7' )
      ));
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'cloudy7'),
                              "param_name" => "title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "cloudy7"),   
    ));
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title 2', 'cloudy7'),
                              "param_name" => "title2",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "cloudy7"),   
    ));
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title 3', 'cloudy7'),
                              "param_name" => "title3",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "cloudy7"),   
    ));

vc_add_param('vc_column',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle', 'cloudy7'),
                              "param_name" => "subtitle",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle, Leave a blank do not show frontend.", "cloudy7"),   
    ));


}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'cloudy7_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function cloudy7_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'Contact Form 7', 'cloudy7' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'cloudy7' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
      array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'cloudy7' ), // The plugin name.
            'slug'               => 'visualcomposer',
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'Mega Main Menu', 'cloudy7' ), // The plugin name.
            'slug'               => 'mega_main_menu',
            'source'             => get_template_directory_uri() . '/framework/plugins/mega_main_menu.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'Woocommerce', 'cloudy7' ), // The plugin name.
            'slug'               => 'woocommerce',
            'source'             => get_template_directory_uri() . '/framework/plugins/woocommerce.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'Widget Settings Import Export', 'cloudy7' ), // The plugin name.
            'slug'               => 'widget-settings-importexport',
            'source'             => get_template_directory_uri() . '/framework/plugins/widget-settings-importexport.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'WP Custom Register Login', 'cloudy7' ), // The plugin name.
            'slug'               => 'wp-custom-register-login',
            'source'             => get_template_directory_uri() . '/framework/plugins/wp-custom-register-login.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'                     => esc_html__( 'Cloudy7 Common', 'cloudy7' ),
            'slug'                     => 'cloudy7-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/cloudy7-common.zip',
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'cloudy7' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'cloudy7' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'cloudy7' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'cloudy7' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'cloudy7' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'cloudy7' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'cloudy7' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'cloudy7' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'cloudy7' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'cloudy7' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'cloudy7' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'cloudy7' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'cloudy7' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'cloudy7' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'cloudy7' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'cloudy7' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'cloudy7' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}




function cloudy7_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import cloudy7',
            'import_file_url'            => 'http://shtheme.com/import/cloudy7/content.xml',
            'import_preview_image_url'   => 'http://shtheme.com/import/cloudy7/Image-Preview.png',
            'import_notice'              => esc_html__( 'Import data example cloudy7', 'cloudy7' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'cloudy7_import_files' );




function cloudy7_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'primary' );
    

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home Page v01' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'cloudy7_after_import_setup' );


?>