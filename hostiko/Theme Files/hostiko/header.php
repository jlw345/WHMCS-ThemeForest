<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hostiko
 */
$hostiko_redux_option = get_option('opt_theme_options');
$hostiko_header = $hostiko_redux_option['headerstyle'];
if(isset($_REQUEST['header'])){
	$hostiko_header = $_REQUEST['header'];
}
if ( empty( $hostiko_header ) ) {
	$hostiko_header = 'default';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
    wp_head();?>
<?php
if(isset($hostiko_redux_option['constructionPage'])&&$hostiko_redux_option['constructionPage']&&!is_user_logged_in()){
	?>
	 <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ;?>/layouts/underconstruction/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ;?>/layouts/underconstruction/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ;?>/layouts/underconstruction/css/animate.css">
  <!-- Theme CSS -->
  <link rel="stylesheet" href="<?php echo  get_template_directory_uri() ;?>/layouts/underconstruction/css/style.css">
  </head>
  <body <?php body_class(); ?> >
	<?php
}
else{?>
</head>
<?php
/**    CSS include of header as per Redux **/
hostikoLayoutHeader($hostiko_header);
hostiko_template_css();
?>
<body <?php body_class(); ?>>
    <?php if(($hostiko_redux_option['show-preloader'] != '0') &&
            !empty($hostiko_redux_option['show-preloader'])
    )
            {
     ?>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
                <?php
            }  ?>
    <!--- your page content goes here -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hostiko' ); ?></a>
	<?php
	get_template_part('layouts/header/header-'. $hostiko_header .'/header-'. $hostiko_header, get_post_format());
		?>
	<div id="content" class="site-content container">
<?php }?>