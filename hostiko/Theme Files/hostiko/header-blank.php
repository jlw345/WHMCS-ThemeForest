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
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php
    wp_head();?>
</head>
<?php
/**    CSS include of header as per Redux **/
hostikoLayoutHeader($hostiko_header);
hostiko_template_css();
?>
<body <?php body_class(); ?>>
