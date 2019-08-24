<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */
if ( ! class_exists( 'Redux' ) ) {
	return;
}
// This line is only for altering the demo. Can be easily removed.
$opt_name = apply_filters( 'opt_name', 'opt_theme_options' );
$theme = wp_get_theme(); // For use with some settings. Not necessary.
$args = array(
	// TYPICAL -> Change these values as you need/desire
	'opt_name' => $opt_name,
	// This is where your data is stored in the database and also becomes your global variable name.
	'display_name' => $theme->get( 'Name' ),
	// Name that appears at the top of your panel
	'display_version' => $theme->get( 'Version' ),
	// Version that appears at the top of your panel
	'menu_type' => 'menu',
	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
	'allow_sub_menu' => true,
	// Show the sections below the admin menu item or not
	'menu_title' => $theme->get( 'Name' ),
	'page_title' => $theme->get( 'Name' ),
	// You will need to generate a Google API key to use this feature.
	// Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
	'google_api_key' => '',
	// Set it you want google fonts to update weekly. A google_api_key value is required.
	'google_update_weekly' => false,
	// Must be defined to add google fonts to the typography module
	'async_typography' => true,
	// Use a asynchronous font on the front end or font string
	// 'disable_google_fonts_link' => true, // Disable this in case you want to create your own google fonts loader
	'admin_bar' => true,
	// Show the panel pages on the admin bar
	'admin_bar_icon' => 'dashicons-smiley',
	// Choose an icon for the admin bar menu
	'admin_bar_priority' => 50,
	// Choose an priority for the admin bar menu
	'global_variable' => '',
	// Set a different name for your global variable other than the opt_name
	'dev_mode' => false,
	// Show the time the page took to load, etc
	'update_notice' => true,
	// If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
	'customizer' => true,
	// Enable basic customizer support
	// 'open_expanded' => true, // Allow you to start the panel in an expanded way initially.
	// 'disable_save_warn' => true, // Disable the save warning when a user changes a field
	// OPTIONAL -> Give you extra features
	'page_priority' => null,
	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_parent' => 'themes.php',
	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	'page_permissions' => 'manage_options',
	// Permissions needed to access the options panel.
	'menu_icon' => 'dashicons-dashboard',
	// Specify a custom URL to an icon
	'last_tab' => '',
	// Force your panel to always open to a specific tab (by id)
	'page_icon' => 'dashicons-smiley',
	// Icon displayed in the admin panel next to your menu_title
	'page_slug' => '',
	// Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
	'save_defaults' => true,
	// On load save the defaults to DB before user clicks save or not
	'default_show' => false,
	// If true, shows the default value next to each field that is not the default value.
	'default_mark' => '',
	// What to print by the field's title if the value shown is default. Suggested: *
	'show_import_export' => true,
	// Shows the Import/Export panel when not used as a field.
	// CAREFUL -> These options are for advanced use only
	'transient_time' => 60 * MINUTE_IN_SECONDS,
	'output' => true,
	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
	'output_tag' => true,
	// Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
	// 'footer_credit' => '', // Disable the footer credit of Redux. Please leave if you can help it.
	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	'database' => '',
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'use_cdn' => true,
	// If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
	// HINTS
	'hints' => array(
		'icon' => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color' => 'lightgray',
		'icon_size' => 'normal',
		'tip_style' => array(
			'color' => 'red',
			'shadow' => true,
			'rounded' => false,
			'style' => ''
		),
		'tip_position' => array(
			'my' => 'top left',
			'at' => 'bottom right'
		),
		'tip_effect' => array(
			'show' => array(
				'effect' => 'slide',
				'duration' => '500',
				'event' => 'mouseover'
			),
			'hide' => array(
				'effect' => 'slide',
				'duration' => '500',
				'event' => 'click mouseleave'
			)
		)
	)
);
Redux::setArgs( $opt_name, $args );
/**
 * Header Options
 *
 * @author Fox
 */
$section = array(
	'title' => esc_html__( 'General', 'hostiko' ),
	'icon' => 'el el-home'
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      => __('Pre-Loader','hostiko' ),
	'id'         => 'Preloader',
	'subsection' => true,
	'desc'       => '',
	'fields' => array(
		array(
			'id'       => 'show-preloader',
			'type'     => 'switch',
			'title'    => __( 'Show Pre-Loader for Website', 'hostiko' ),
			'subtitle' => __( 'Enable or disable Feature ', 'hostiko' ),
			'default'  => true,
		),
		array(
			'id' => 'preloader-background',
			'type' => 'background',
			'title' => __( 'Pre-loader Background', 'hostiko' ),
			'output' => array( '#preloader' ),
			'subtitle' => __( 'Pre-loader Background with image, color, etc.', 'hostiko' ),
			'desc' => __( 'This is the description field, again good for additional info.', 'hostiko' ),
			'default'  => array(
				'background-color' => '#ffffff',
			),
			'required' => array( 'show-preloader', "=", 1 ),
		),
		array(
			'id' => 'preloader-image',
			'type' => 'background',
			'title' => __( 'Pre-loader image', 'hostiko' ),
			'output' => array( '#status' ),
			'subtitle' => __( 'Pre-loader image', 'hostiko' ),
			'desc' => __( 'This is the description field, again good for additional info.', 'hostiko' ),
			'required' => array( 'show-preloader', "=", 1 ),
		),
		array(
			'id'       => 'preloader-dimensions',
			'type'     => 'dimensions',
			'units'    => array( 'em', 'px', '%' ),
			'output'   => array( '#status' ),
			'title'    => __( 'Dimensions (Width/Height) Option', 'hostiko' ),
			'subtitle' => __( 'Allow your users to choose width, height, and/or unit.', 'hostiko' ),
			'desc'     => __( 'Enable or disable any piece of this field. Width, Height, or Units.', 'hostiko' ),
			'default'  => array(
				'Width'  => '250',
				'Height' => '250'
			),
			'required' => array( 'show-preloader', "=", 1 ),
		),
	)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      => __( 'Top Bar', 'hostiko' ),
	'id'         => 'topbartext',
	'subsection' => true,
	'desc'       => '',
	'fields'     => array(
		array(
			'id' => 'topbar',
			'type' => 'button_set',
			'title' => __( 'Top Bar', 'hostiko' ),
			'subtitle' => __( 'If you want a Top Bar please switch it on.', 'hostiko' ),
			'desc' => __( 'by default on.', 'hostiko' ),
			//Must provide key => value pairs for options
			'options' => array(
				'1' => 'ON',
				'2' => 'OFF'
			),
			'default' => '1',
			'required' =>array(
				array('headerstyle','=','default'),
				)
		),
		array(
			'id' => 'opt-topbartext',
			'type' => 'text',
			'title' => __( 'Text for Topbar', 'hostiko' ),
			'subtitle' => __( 'Enter text', 'hostiko' ),
			'desc' => __( 'Empty field will remove this section from website', 'hostiko' ),
			'default' => 'Get Social with us...!',
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'opt-topbar-background',
			'type' => 'color_rgba',
			'title' => __( 'Topbar Background', 'hostiko' ),
			'subtitle' => 'Set color and alpha channel',
			'desc' => 'We targeted Topbar class to change color',
			'important' => true,
			// See Notes below about these lines.
			'output' => array( 'background' => '.top_bar' ),
			//'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
			'default' => array(
				'background' => 'transparent',
				'alpha' => 0.3,
			),
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id'             => 'opt-spacing',
			'type'           => 'spacing',
			'output'         => array( '.top_bar' ),
			'mode'           => 'padding',
			'units'          => array( 'px' ),
			'units_extended' => 'false',
			'title'          => __( 'Padding Option', 'hostiko' ),
			'subtitle'       => __( 'Allow your users to choose the spacing or margin they want.', 'hostiko' ),
			'desc'           => __( 'You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'hostiko' ),
			'default'        => array(
				'padding-top'    => '7px',
				'padding-right'  => '0px',
				'padding-bottom' => '7px',
				'padding-left'   => '0px',
				'units'          => 'px',
			),
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'info_criticalhtobar',
			'type' => 'info',
			'style' => 'critical',
			'icon' => 'el-icon-info-sign',
			'title' => __('<b>Header Builder Activated</b>', 'hostiko'),
			'desc' => __(
				'Ordinary logo and header options are disabled cause you have activated <b>"Header Builder"</b>.<br>
				If you would like to use ordinary option please choose appropriate header to activate those options.<br>
				<br>
				( More Help ? Read Our <a href="https://designingmedia.com/documentation/hostiko/">Online Document</a>  )</b><br>
				( Or Open <a href="https://designingmedia.com/support/">Support Ticket</a> <b>Mon-Fri, 10.00 - 19.00 (GMT), UTC +5</b>. We love to Help you)</b><br><br>.  ', 'hostiko'),
	)
	)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      => __( 'Social Media', 'hostiko' ),
	'id'         => 'socialmedia',
	'subsection' => true,
	'desc'       => '',
	'fields'     => array(
		array(
			'id' => 'opt-facebook',
			'type' => 'text',
			'title' => __( 'Facebook URL', 'hostiko' ),
			'subtitle' => __( 'Enter your facebook url', 'hostiko' ),
			'desc' => __( 'Empty field will remove this section from website', 'hostiko' ),
			'default' => '#',
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'opt-twitter',
			'type' => 'text',
			'title' => __( 'Twitter URL', 'hostiko' ),
			'subtitle' => __( 'Enter your twitter url', 'hostiko' ),
			'desc' => __( 'Empty field will remove this section from website', 'hostiko' ),
			'default' => '#',
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'opt-google',
			'type' => 'text',
			'title' => __( 'Google URL', 'hostiko' ),
			'subtitle' => __( 'Enter your google url', 'hostiko' ),
			'desc' => __( 'Empty field will remove this section from website', 'hostiko' ),
			'default' => '#',
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'info_criticalhsocial',
			'type' => 'info',
			'style' => 'critical',
			'icon' => 'el-icon-info-sign',
			'title' => __('<b>Header Builder Activated</b>', 'hostiko'),
			'desc' => __(
				'Ordinary logo and header options are disabled cause you have activated <b>"Header Builder"</b>.<br>
				If you would like to use ordinary option please choose appropriate header to activate those options.<br>
				<br>
				( More Help ? Read Our <a href="https://designingmedia.com/documentation/hostiko/">Online Document</a>  )</b><br>
				( Or Open <a href="https://designingmedia.com/support/">Support Ticket</a> <b>Mon-Fri, 10.00 - 19.00 (GMT), UTC +5</b>. We love to Help you)</b><br><br>.  ', 'hostiko'),
		)
	)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      => __( 'Contact Information', 'hostiko' ),
	'id'         => 'miscinfo',
	'subsection' => true,
	'desc'       => '',
	'fields'     => array(
		array(
			'id' => 'opt-email1',
			'type' => 'text',
			'title' => __( 'Email', 'hostiko' ),
			'subtitle' => __( 'Enter your email', 'hostiko' ),
			'desc' => __( 'Empty field will remove this section from website', 'hostiko' ),
			'default' => 'info@designingmedia.com',
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'opt-phone',
			'type' => 'text',
			'title' => __( 'Phone', 'hostiko' ),
			'subtitle' => __( 'Enter your Phone', 'hostiko' ),
			'desc' => __( 'Empty field will remove this section from website', 'hostiko' ),
			'default' => '(+1) 123 456 7890',
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'opt-address-footer',
			'type' => 'text',
			'title' => __( 'Address', 'hostiko' ),
			'subtitle' => __( 'Enter your Address', 'hostiko' ),
			'desc' => __( 'Empty field will remove this section from website', 'hostiko' ),
			'default' => 'Envato labs, behind alis steet, Melbourne, Australia.',
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'info_criticalhcontact',
			'type' => 'info',
			'style' => 'critical',
			'icon' => 'el-icon-info-sign',
			'title' => __('<b>Header Builder Activated</b>', 'hostiko'),
			'desc' => __(
				'Ordinary logo and header options are disabled cause you have activated <b>"Header Builder"</b>.<br>
				If you would like to use ordinary option please choose appropriate header to activate those options.<br>
				<br>
				( More Help ? Read Our <a href="https://designingmedia.com/documentation/hostiko/">Online Document</a>  )</b><br>
				( Or Open <a href="https://designingmedia.com/support/">Support Ticket</a> <b>Mon-Fri, 10.00 - 19.00 (GMT), UTC +5</b>. We love to Help you)</b><br><br>.  ', 'hostiko'),
		)
	)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      => __( 'Back To Top Button', 'hostiko' ),
	'id'         => 'backtotopbutton',
	'subsection' => true,
	'desc'       => '',
	'fields' => array(
		array(
			'id'       => 'backtotop',
			'type'     => 'switch',
			'title'    => __( 'Show back to top button', 'hostiko' ),
			'subtitle' => __( 'Enable or disable Feature ', 'hostiko' ),
			'default'  => false,
		),
		array(
			'id'       => 'imageortext',
			'type'     => 'switch',
			'title'    => __( 'Select Image or Text', 'hostiko' ),
			'on'       => 'Text',
			'off'      => 'Image',
			'default'  => true,
			'required' => array( 'backtotop', "=", 1 ),
		),
		array(
			'id'       => 'texttop',
			'type'     => 'text',
			'title'    => __( 'Text For Back to Top Button', 'hostiko' ),
			'default'  => 'Back To Top',
			'required' => array( 'imageortext', "=", 1 ),
		),
		array(
			'id'          => 'bttp-typography',
			'type'        => 'typography',
			'title'       => __( 'Content Setting', 'hostiko' ),
			'google'      => true,
			'font-backup' => true,
			'output'      => array( '.go-top' ),
			'units'       => 'px',
			'subtitle'    => __( 'Typography option with each property can be called individually.', 'hostiko' ),
			'default'     => array(
				'color' => '#333',
				'google'      => true,
				'font-size'   => '14px',
				'line-height' => '14px'
			),
			'required'    => array( 'imageortext', "=", 1 ),
		),
		array(
			'id' => 'backtop-background',
			'type' => 'color_rgba',
			'title' => __( 'Background', 'hostiko' ),
			'subtitle' => __( 'Set color and alpha channel', 'hostiko' ),
			'desc' => 'We targeted go-top class to change color',
			'important' => true,
			// See Notes below about these lines.
			'output' => array( 'background' => '.go-top' ),
			//'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
			'default'  => array(
				'background' => 'transparent',
				'alpha' => 0.3,
			),
			'required' => array( 'imageortext', "=", 1 ),
		),
		array(
			'id'       => 'backtotoploader-dimensions',
			'type'     => 'dimensions',
			'units'    => array( 'em', 'px', '%' ),
			'output'   => array( '.go-top' ),
			'title'    => __( 'Dimensions (Width/Height) Option', 'hostiko' ),
			'subtitle' => __( 'Allow your users to choose width, height, and/or unit.', 'hostiko' ),
			'desc'     => __( 'Enable or disable any piece of this field. Width, Height, or Units.', 'hostiko' ),
			'default'  => array(
				'Width'  => '250px',
				'Height' => '250px'
			),
			'required' => array( 'imageortext', "=", 0 ),
		),
		array(
			'id'       => 'backtotop-image',
			'type'     => 'background',
			'title'    => __( 'Back To Top Image', 'hostiko' ),
			'output'   => array( '.go-top' ),
			'subtitle' => __( 'Image for  Button', 'hostiko' ),
			'desc'     => __( 'This is the description field, again good for additional info.', 'hostiko' ),
			'required' => array( 'imageortext', "=", 0 ),
		),
		array(
			'id'     => 'backtop-spacing',
			'type'   => 'spacing',
			'output' => array( '.go-top' ),
			'mode'   => 'absolute',
			'units'  => array( 'px' ),
			'title'  => __( 'Position', 'hostiko' ),
			'left'   => true,
			'right'  => true,
			'bottom' => true,
			'top'    => true,
			'default'  => array(
				'left'   => 'inherit',
				'right'  => 'inherit',
				'bottom' => 'inherit',
			),
			'required' => array( 'backtotop', "=", 1 ),
		),
	)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title' => esc_html__( 'Logo & Header Settings', 'hostiko' ),
	'icon' => 'el el-adjust-alt'
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      =>  __( 'Logo & Header','hostiko'),
	'id'         => 'headerstylesection',
	'subsection' => true,
	'desc'       => '',
	'fields' => array(
		array(
			'id' => 'headerstyle',
			'type' => 'select',
			'title' => __( 'Style of header', 'hostiko' ),
			'subtitle' => __( 'by default contained', 'hostiko' ),
			// Must provide key => value pairs for select options
			'options' => array(
				'default' => 'default',
				'hostiko'  => 'hostiko (Header Builder)',
				'hostiko2' => 'hostiko2 (Header Builder)',
				'hostiko3' => 'hostiko3 (Header Builder)',
				'hostiko4' => 'hostiko4 (Header Builder)',
				'hostiko5' => 'hostiko5(Header Builder) ',
				'hostiko6' => 'hostiko6(Header Builder)',
				'hostiko7' => 'hostiko7 (Header Builder)',
				'hostiko8' => 'hostiko8 (Header Builder)',
				'hostiko9' => 'hostiko9 (Header Builder)',
				'hostiko10' => 'hostiko10 (Header Builder)',
				'hostiko11' => 'hostiko11 (Header Builder)',
				'hostiko12' => 'hostiko12 (Header Builder)',
				'hostiko13' => 'hostiko13 (Header Builder)',
				'hostiko14' => 'hostiko14 (Header Builder)',
				'hostiko15' => 'hostiko15 (Header Builder)',
				'hostiko16' => 'hostiko16 (Header Builder)',
				'hostiko17' => 'hostiko17 (Header Builder)',
				'hostiko18' => 'hostiko18 (Header Builder)',
				'hostiko19' => 'hostiko19 (Header Builder)',
				'hostiko20' => 'hostiko20 (Header Builder)',
				'hostiko21' => 'hostiko21 (Header Builder)',
				'hostiko22' => 'hostiko22 (Header Builder)',
				'hostiko23' => 'hostiko23 (Header Builder)',
				'hostiko24' => 'hostiko24 (Header Builder)',
				'hostiko25' => 'hostiko25 (Header Builder)',
				'hostiko26' => 'hostiko26 (Header Builder)',
				'hostiko27' => 'hostiko27 (Header Builder)',
				'hostiko28' => 'hostiko28 (Header Builder)',
				'hostiko29' => 'hostiko29 (Header Builder)',
				'hostiko30' => 'hostiko30 (Header Builder)',
				'custom' => 'custom (Header Builder)',
			),
			'default' => 'default',
		),
		array(
			'id' => 'logo',
			'type' => 'media',
			'url' => true,
			'title' => __( 'Logo', 'hostiko' ),
			'compiler' => 'true',
			//'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
			'desc' => __( 'Upload your logo.', 'hostiko' ),
			'subtitle' => __( 'Recommended size: Height: 39px and Width: 162px', 'hostiko' ),
			'default' => array( 'url' => get_template_directory_uri() . '/assets/images/logo.png' ),
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'opt-color-rgba1',
			'type' => 'color_rgba',
			'title' =>  __( 'Menu background','hostiko'),
			'subtitle' =>  __( 'Set color and alpha channel','hostiko'),
			'desc' =>  __( 'We targeted site-header class to change color','hostiko'),
			'important' => true,
			// See Notes below about these lines.
			'output' => array( 'background' => '.top_nav' ),
			//'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
			'default' => array(
				'background' => 'transparent',
				'alpha' => 0.3,
			),
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'opt-color-rgba',
			'type' => 'color_rgba',
			'title' =>  __( 'Menu Scroll Color','hostiko'),
			'subtitle' =>  __( 'Set color and alpha channel','hostiko'),
			'desc' =>  __( 'We targeted Affix class to change color','hostiko'),
			'important' => true,
			// See Notes below about these lines.
			'output' => array( 'background' => '.affix' ),
			//'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
			'default' => array(
				'background' => '#000000',
				'alpha' => 0.3,
			),
			'required' =>array(
				array('headerstyle','=','default'),
			)
		),
		array(
			'id' => 'info_criticalh',
			'type' => 'info',
			'style' => 'critical',
			'icon' => 'el-icon-info-sign',
			'title' => __('<b>Header Builder Activated</b>', 'hostiko'),
			'desc' => __(
				'Ordinary logo and header options are disabled cause you have activated <b>"Header Builder"</b>.<br>
				If you would like to use ordinary option please choose appropriate header to activate those options.<br>
				<br>
				( More Help ? Read Our <a href="https://designingmedia.com/documentation/hostiko/">Online Document</a>  )</b><br>
				( Or Open <a href="https://designingmedia.com/support/">Support Ticket</a> <b>Mon-Fri, 10.00 - 19.00 (GMT), UTC +5</b>. We love to Help you)</b><br><br>.  ', 'hostiko'),
			'required' =>array( 'headerstyle', "=", array( 'custom','hostiko10','hostiko11','hostiko12','hostiko13', 'hostiko14','hostiko15','hostiko16','hostiko17','hostiko18','hostiko19','hostiko20','hostiko21','hostiko22','hostiko23','hostiko24','hostiko25','hostiko26','hostiko27','hostiko28','hostiko29','hostiko30') ),
		),
	)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title' => esc_html__( 'Blog Option', 'hostiko' ),
	'icon' => 'el el-cogs'
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      =>  __( 'Blog Styling','hostiko'),
	'id'         => 'blogstylingsection',
	'subsection' => true,
	'desc'       => '',
	'fields' => array(
		array(
			'id' => 'blogstylecss',
			'type' => 'select',
			'title' => __( 'Blog CSS', 'hostiko' ),
			'subtitle' => __( 'CSS for blog.', 'hostiko' ),
			// Must provide key => value pairs for select options
			'options' => array(
				'hostiko'  => 'hostiko',
				'hostiko2' => 'hostiko2',
				'hostiko3' => 'hostiko3',
				'hostiko4' => 'hostiko4',
				'hostiko5' => 'hostiko5',
				'hostiko6' => 'hostiko6',
				'hostiko7' => 'hostiko7',
                'hostiko8' => 'hostiko8',
                'hostiko9' => 'hostiko9',
                'hostiko10' => 'hostiko10',
                'hostiko11' => 'hostiko11',
                'hostiko12' => 'hostiko12',
                'hostiko13' => 'hostiko13',
                'hostiko14' => 'hostiko14',
                'hostiko15' => 'hostiko15',
                'hostiko16' => 'hostiko16',
                'hostiko17' => 'hostiko17',
                'hostiko18' => 'hostiko18',
                'hostiko19' => 'hostiko19',
                'hostiko20' => 'hostiko20',
                'hostiko21' => 'hostiko21',
                'hostiko22' => 'hostiko22',
                'hostiko23' => 'hostiko23',
                'hostiko24' => 'hostiko24',
                'hostiko25' => 'hostiko25',
                'hostiko26' => 'hostiko26',
				'hostiko27' => 'hostiko27',
				'hostiko28' => 'hostiko28',
				'hostiko29' => 'hostiko29',
				'hostiko30' => 'hostiko30',
			),
			'hostiko' => 'hostiko',
		),
		array(
			'id'       => 'blogstyle',
			'type'     => 'select',
			'title'    => __( 'Blog Style', 'hostiko' ),
			'subtitle' => __( 'Blog Style.', 'hostiko' ),
			// Must provide key => value pairs for select options
			'options'  => array(
				'hostiko' => 'Default',
				/*'grid-1' => 'Gird 1 column',
				'grid-2' => 'Gird 2 column',
				'grid-2-img' => 'Gird 2 column Only Images',
				'grid-2-img-nospace' => 'Gird 2 column Only Images without Space',
				'grid-3' => 'Gird 3 column',
				'grid-3-img' => 'Gird 3 column Only Images',
				'grid-3-img-nospace' => 'Gird 3 column Only Images without Space',
				'grid-4' => 'Gird 4 column',
				'grid-4-img' => 'Gird 4 column Only Images',
				'grid-4-img-nospace' => 'Gird 4 column Only Images without Space',
				'list-1-left' => 'List 1 column left image',
				'list-1-right' => 'List 1 column right image',
				'list-2-left' => 'List 2 column left image',
				'list-2-right' => 'List 2 column right image',
				'news-2' => 'Newspaper layout 2 columns',
				'news-2-img' => 'Newspaper 2 column Only Images',
				'news-2-img-nospace' => 'Newspaper 2 column Only Images without Space',
				'news-3' => 'Newspaper layout 3 columns',
				'news-3-img' => 'Newspaper 3 column Only Images',
				'news-3-img-nospace' => 'Newspaper 3 column Only Images without Space',
				'news-4' => 'Newspaper layout 4 columns',
				'news-4-img' => 'Newspaper 4 column Only Images',
				'news-4-img-nospace' => 'Newspaper 4 column Only Images without Space',
				'timeline' => 'Time Line Layout',
				'card-1' => 'Card Layout 1',
				'card-2' => 'Card Layout 2',*/
			),
			'default'  => 'hostiko',
		),
		array(
			'id' => 'hostiko-subbanner-overlay',
			'type' => 'color_rgba',
			'title' =>  __( 'Blog banner overlay','hostiko'),
			'subtitle' =>  __( 'Set color and alpha channel','hostiko'),
			'desc' =>  __( 'We targeted site-header class to change color','hostiko'),
			'important' => true,
			// See Notes below about these lines.
			'output' => array( 'background' => '.sub-banner:before' ),
			//'compiler'  => array('color' => '.site-header, .site-footer', 'background-color' => '.nav-bar'),
			'default'  => array(
				'background' => 'transparent',
				'alpha' => 0.3,
			),
			'required' => array( 'showblogbanner', "=", 1 ),
		),
		array(
			'id' => 'opt_dimensions4',
			'type' => 'dimensions',
			'units' => array( 'px', '%' ),
			'width' => false,
			'height' => true,
			'output' => array( '.sub-banner' ),
			'title' => __( 'Blog banner Height Option', 'hostiko' ),
			'subtitle' => __( 'Allow your users to choose height, and/or unit.', 'hostiko' ),
			'desc' => __( 'Enable or disable any piece of this field. Height, or Units.', 'hostiko' ),
			'default'  => array(
				'Width' => '100%',
				'Height' => '250'
			),
			'required' => array( 'showblogbanner', "=", 1 ),
		),
		)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      => 'Blog Options',
	'id'         => 'blogOptionssection',
	'subsection' => true,
	'desc'       => '',
	'fields' => array(
		array(
			'id'       => 'pagenav',
			'type'     => 'select',
			'title'    => __( 'Pagenation Style', 'hostiko' ),
			'subtitle' => __( 'You can select Pagenation Style from here', 'hostiko' ),
			'desc'     => __( 'Select Pagenation Style option', 'hostiko' ),
			// Must provide key => value pairs for select options
			'options'  => array(
				'nav' => 'Pagenation',
				/*'btn' => 'Load More Button',
				'infinite' => 'Load More on Scroll',*/
			),
			'default'  => 'nav',
		),
		array(
			'id'       => 'showblogbanner',
			'type'     => 'switch',
			'title'    => __( 'Use Custom Image for Blog Page', 'hostiko' ),
			'subtitle' => __( 'Enable or disable Feature Image for Blog Page', 'hostiko' ),
			'default'  => true,
		),
		array(
			'id' => 'subbanner-background',
			'type' => 'background',
			'title' => __( 'Blog Banner', 'hostiko' ),
			'output' => array( '.sub-banner' ),
			'subtitle' => __( 'Sub banner background with image, color, etc.', 'hostiko' ),
			'desc' => __( 'This is the description field, again good for additional info.', 'hostiko' ),
			'default'  => array(
				'background-color' => 'grey',
			),
			'required' => array( 'showblogbanner', "=", 1 ),
		),
		array(
			'id'       => 'showblogtitle',
			'type'     => 'switch',
			'title'    => __( 'Use Blog Title Page', 'hostiko' ),
			'subtitle' => __( 'Enable or disable Feature Image for Blog Page', 'hostiko' ),
			'default'  => true,
		),
		array(
			'id'       => 'blogheading',
			'type'     => 'text',
			'title'    => __( 'Blog Heading', 'hostiko' ),
			'subtitle' => __( 'This Heaing will appear on Banner of Blog Page', 'hostiko' ),
			'desc'     => __( 'This is the description field, again good for additional info.', 'hostiko' ),
			'default'  => 'Blog',
			'required' => array( 'showblogtitle', "=", 1 ),
		),
		array(
			'id'       => 'showsiglepostbanner',
			'type'     => 'switch',
			'title'    => __( 'Use Custom Image for Blog post page', 'hostiko' ),
			'subtitle' => __( 'Enable or disable Feature Image for Blog post page', 'hostiko' ),
			'default'  => false,
		),
		array(
			'id'       => 'blogbannersingle',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Single Post banner w/ URL', 'hostiko' ),
			'desc'     => __( 'Single Blog Post option.', 'hostiko' ),
			'subtitle' => __( 'Upload any media using the WordPress native uploader', 'hostiko' ),
			'default'  => array( 'url' => get_template_directory_uri() . '/assets/images/subpage-banner.jpg' ),
			'required' => array( 'showsiglepostbanner', "=", 1 ),
		),
		array(
			'id'       => 'showsingleblogtitle',
			'type'     => 'switch',
			'title'    => __( 'Use Custom Single Post Title', 'hostiko' ),
			'subtitle' => __( 'Enable or disable Single Post Title', 'hostiko' ),
			'default'  => false,
		),
		array(
			'id'       => 'singleblogheading',
			'type'     => 'text',
			'title'    => __( 'Single Post Banner Heading', 'hostiko' ),
			'subtitle' => __( 'Single Blog Post Banner Heading', 'hostiko' ),
			'desc'     => __( 'This is the description field, again good for additional info.', 'hostiko' ),
			'default'  => 'Blog',
			'required' => array( 'showsingleblogtitle', "=", 1 ),
		),
		array(
			'id'       => 'featureimagesblog',
			'type'     => 'switch',
			'title'    => __( 'Enable Feature Image of Blog Page', 'hostiko' ),
			'default'  => true,
		),
		array(
			'id'       => 'featureimagesingle',
			'type'     => 'switch',
			'title'    => __( 'Enable Feature Image of Single Post', 'hostiko' ),
			'default'  => true,
		),
	)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      =>  __( 'Blog Layout','hostiko'),
	'id'         => 'blogLayoutsection',
	'subsection' => true,
	'desc'       => '',
	'fields' => array(
		array(
			'id'       => 'layoutblog1',
			'type'     => 'select',
			'title'    => __( 'Select Blog layout', 'hostiko' ),
			'subtitle' => __( 'You can select layout from here', 'hostiko' ),
			'desc'     => __( 'Select sidebar option', 'hostiko' ),
			// Must provide key => value pairs for select options
			'options'  => array(
				'full_layout'  => 'Full View',
				'left_layout'  => 'Left Sidebar',
				'right_layout' => 'Right Sidebar'
			),
			'default'  => 'left_layout',
		),
		array(
			'id'       => 'layoutblogsingle',
			'type'     => 'select',
			'title'    => __( 'Single Post layout option', 'hostiko' ),
			'subtitle' => __( 'Single Blog Post layout', 'hostiko' ),
			'desc'     => __( 'Select sidebar option', 'hostiko' ),
			// Must provide key => value pairs for select options
			'options'  => array(
				'full_layout'  => 'Full View',
				'left_layout'  => 'Left Sidebar',
				'right_layout' => 'Right Sidebar'
			),
			'default'  => 'full_layout',
		),
	)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      =>  __( 'Blog Content','hostiko'),
	'id'         => 'blogcontentsection',
	'subsection' => true,
	'desc'       => '',
	'fields' => array(
		array(
			'id'       => 'post_content',
			'type'     => 'radio',
			'title'    => __( 'Post Content', 'hostiko' ),
			'subtitle' => __( 'Display either post excerpts or the full post content', 'hostiko' ),
			'options'  => array(
				'1' => 'Excerpt',
				'2' => 'Full post',
			),
			'default'  => '2'
		),
		array(
			'id'    => 'excerpt_length',
			'type'  => 'text',
			'title' => __( 'Excerpt length', 'hostiko' ),
			'desc'     => __( 'Length (in words) to generate excerpt from the post content. Attention! If the post excerpt is explicitly specified - it appears unchanged.', 'hostiko' ),
			'validate' => 'numeric',
			'default'  => '30',
			'required' => array( 'post_content', "=", 1 ),
		),
		array(
			'id'    => 'excerpt_more',
			'type'  => 'text',
			'title' => __( 'Excerpt More Text', 'hostiko' ),
			'default'  => 'Read More',
			'required' => array( 'post_content', "=", 1 ),
		),
	)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      =>  __( 'Related Post','hostiko'),
	'id'         => 'blogrelatedpostsection',
	'subsection' => true,
	'desc'       => __( 'Realted post style','hostiko'),
	'fields' => array(
		array(
			'id'       => 'relatedpost',
			'type'     => 'switch',
			'title'    => __( 'Use for Enable or Disable Related Post', 'hostiko' ),
			'default'  => false,
		),
		array(
			'id'       => 'relatedorderby',
			'type'     => 'select',
			'title'    => __('Order By', 'hostiko'),
			'subtitle' => __('No validation can be done on this field type', 'hostiko'),
			'desc'     => __('This is the description field, again good for additional info.', 'hostiko'),
			// Must provide key => value pairs for select options
			'options'  => array(
				'name' => 'Name',
				'date' => 'Date',
				'rand' => 'Random'
			),
			'default'  => '2',
			'required' => array( 'relatedpost', "=", 1 ),
		),
		array(
			'id'       => 'posts_per_page',
			'type'     => 'select',
			'title'    => __('Post Per Page', 'hostiko'),
			'subtitle' => __('No validation can be done on this field type', 'hostiko'),
			'desc'     => __('This is the description field, again good for additional info.', 'hostiko'),
			// Must provide key => value pairs for select options
			'options'  => array(
				'1' => '1',
				'2' => '2',
				'3' => '3',
				'4' => '4',
				'5' => '5',
				'6' => '6',
			),
			'default'  => '3',
			'required' => array( 'relatedpost', "=", 1 ),
		),
		array(
			'id'       => 'rrelatedpostheading',
			'type'     => 'text',
			'title'    => __('Related Post Heading', 'hostiko'),
			'default'  => 'Related Post',
			'required' => array( 'relatedpost', "=", 1 ),
		),
	)
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title' => esc_html__( 'Footer Settings', 'hostiko' ),
	'icon' => 'el el-edit'
);
Redux::setSection( $opt_name, $section );
$section = array(
	'title'      => __( 'Footer Style','hostiko'),
	'id'         => 'footerstylesection',
	'subsection' => true,
	'desc'       => '',
	'fields' => array(
		array(
			'id' => 'footerstyle',
			'type' => 'select',
			'title' => __( 'Style of Footer', 'hostiko' ),
			// Must provide key => value pairs for select options
			'options' => array(
				'default' => 'default',
				'hostiko'  => 'hostiko (Footer Builder)',
				'hostiko2' => 'hostiko2 (Footer Builder)',
				'hostiko3' => 'hostiko3 (Footer Builder)',
				'hostiko4' => 'hostiko4 (Footer Builder)',
				'hostiko5' => 'hostiko5 (Footer Builder)',
				'hostiko6' => 'hostiko6 (Footer Builder)',
				'hostiko7' => 'hostiko7 (Footer Builder)',
				'hostiko8' => 'hostiko8 (Footer Builder)',
				'hostiko9' => 'hostiko9 (Footer Builder)',
				'hostiko10' => 'hostiko10 (Footer Builder)' ,
				'hostiko11' => 'hostiko11 (Footer Builder)',
				'hostiko12' => 'hostiko12 (Footer Builder)',
				'hostiko13' => 'hostiko13 (Footer Builder)',
				'hostiko14' => 'hostiko14 (Footer Builder)',
				'hostiko15' => 'hostiko15 (Footer Builder)',
				'hostiko16' => 'hostiko16 (Footer Builder)',
				'hostiko17' => 'hostiko17 (Footer Builder)',
				'hostiko18' => 'hostiko18 (Footer Builder)',
				'hostiko19' => 'hostiko19 (Footer Builder)',
				'hostiko20' => 'hostiko20 (Footer Builder)',
				'hostiko21' => 'hostiko21 (Footer Builder)',
				'hostiko22' => 'hostiko22 (Footer Builder)',
				'hostiko23' => 'hostiko23 (Footer Builder)',
				'hostiko24' => 'hostiko24 (Footer Builder)',
				'hostiko25' => 'hostiko25 (Footer Builder)',
				'hostiko26' => 'hostiko26 (Footer Builder)',
				'hostiko27' => 'hostiko27 (Footer Builder)',
				'hostiko28' => 'hostiko28 (Footer Builder)',
				'hostiko29' => 'hostiko29 (Footer Builder)',
				'hostiko30' => 'hostiko30 (Footer Builder)',
				'custom' => 'custom (Footer Builder)',
			),
			'default' => 'default',
		),
		array(
			'id' => 'flogo',
			'type' => 'media',
			'url' => true,
			'title' => __( 'Footer Logo', 'hostiko' ),
			'compiler' => 'true',
			//'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
			'desc' => __( 'Upload your logo.', 'hostiko' ),
			'subtitle' => __( 'Recommended size: Height: 67px and Width: 165px', 'hostiko' ),
			'default' => array( 'url' => get_template_directory_uri() . '/assets/images/footer-logo.png' ),
			'required' =>array(
				array('footerstyle','=','default'),
			
			),
		),
		array(
			'id' => 'footer-background',
			'type' => 'background',
			'title' => __( 'Footer Background', 'hostiko' ),
			'output' => array( '#hostiko-footer' ),
			'subtitle' => __( 'footer background with image, color, etc.', 'hostiko' ),
			'desc' => __( 'This is the description field, again good for additional info.', 'hostiko' ),
			'default' => array(
				'background-color' => '#1e1e1e',
			),
			'required' =>array(
			array('footerstyle','=','default'),
			),
		),
		array(
			'id'       => 'opt-menu-1',
			'type'     => 'select',
			'title'    => __( 'Footer Menu 1', 'hostiko' ),
			'subtitle' => __( 'Create Menu from WordPress Options', 'hostiko' ),
			'desc'     => __( 'Name of the Menu will be created as heading', 'hostiko' ),
			'data'     => 'menus',
			'required' =>array(
				array('footerstyle','=','default'),
			),
		),
		array(
			'id'       => 'opt-menu-2',
			'type'     => 'select',
			'title'    => __( 'Footer Menu 2', 'hostiko' ),
			'subtitle' => __( 'Create Menu from WordPress Options', 'hostiko' ),
			'desc'     => __( 'Name of the Menu will be created as heading', 'hostiko' ),
			'data'     => 'menus',
			'required' =>array(
				array('footerstyle','=','default'),
			),
		),
		array(
			'id' => 'info_critical',
			'type' => 'info',
			'style' => 'critical',
			'icon' => 'el-icon-info-sign',
			'title' => __('<b>Footer Builder Activated</b>', 'hostiko'),
			'desc' => __(
				'Ordinary logo and Footer options are disabled cause you have activated <b>"Footer Builder"</b>.<br>
				If you would like to use ordinary option please choose appropriate header to activate those options.<br>
				<br>
				( More Help ? Read Our <a href="https://designingmedia.com/documentation/hostiko/">Online Document</a>  )</b><br>
				( Or Open <a href="https://designingmedia.com/support/">Support Ticket</a> <b>Mon-Fri, 10.00 - 19.00 (GMT), UTC +5</b>. We love to Help you)</b><br><br>.  ', 'hostiko'),
			'required' =>array( 'footerstyle', "=", array( 'custom','hostiko10','hostiko11','hostiko12','hostiko13','hostiko14','hostiko15','hostiko16','hostiko17','hostiko18','hostiko19' ,'hostiko20','hostiko21','hostiko22','hostiko23','hostiko24','hostiko25' ,'hostiko26','hostiko27','hostiko28','hostiko29','hostiko30'      ) ),
		),
	)
);
Redux::setSection( $opt_name, $section );
Redux::setSection( $opt_name, array(
	'title'  => esc_html__( '404 Page', 'hostiko' ),
	'icon'   => 'el el-error',
	'fields' => array(
		array(
			'id' => 'logo',
			'type' => 'media',
			'url' => true,
			'title' => __( 'Logo', 'hostiko' ),
			'compiler' => 'true',
			//'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
			'desc' => __( 'Upload your logo.', 'hostiko' ),
			'subtitle' => __( 'Recommended size: Height: 39px and Width: 162px', 'hostiko' ),
			'default' => array( 'url' => get_template_directory_uri() . '/assets/images/logo.png' ),
		),
		array(
			'id'       => '404bg',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( '404 background w/ URL', 'hostiko' ),
			'desc'     => __( 'background for 404', 'hostiko' ),
			'subtitle' => __( 'Upload any media using the WordPress native uploader', 'hostiko' ),
			'default'  => array( 'url' => get_template_directory_uri() . '/assets/images/subpage-banner.jpg' )
		),
		array(
			'id'       => '404text',
			'type'     => 'text',
			'title'    => __( '404 Text', 'hostiko' ),
			'subtitle' => __( '404 text will appear on 404 page', 'hostiko' ),
			'desc'     => __( 'See the 404 page after saveing it', 'hostiko' ),
			'default'  => 'NOT FOUND'
		),
		array(
			'id'       => '404text2',
			'type'     => 'text',
			'title'    => __( '404 Text', 'hostiko' ),
			'subtitle' => __( '404 text will appear on 404 page', 'hostiko' ),
			'desc'     => __( 'See the 404 page after saveing it', 'hostiko' ),
			'default'  => 'Oops! That page can&rsquo;t be found.'
		),
		array(
			'id'       => '404text3',
			'type'     => 'text',
			'title'    => __( '404 Text', 'hostiko' ),
			'subtitle' => __( '404 text will appear on 404 page', 'hostiko' ),
			'desc'     => __( 'See the 404 page after saveing it', 'hostiko' ),
			'default'  => __( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'hostiko' ),
		),
	)
) );
Redux::setSection( $opt_name, array(
	'title'  => esc_html__( 'Under Construction Page', 'hostiko' ),
	'icon'   => 'el el-cog',
	'fields' => array(
		array(
			'id'       => 'constructionPage',
			'type'     => 'switch',
			'title'    => __( 'Use for Enable or Disable Construction Page', 'hostiko' ),
			'subtitle' => __( 'Enable or Disable Construction Page', 'hostiko' ),
			'default'  => false,
		),
		/*array(
			'id' => 'date',
			'type' => 'text',
			'title' => __('Comming Soon Date', 'hostiko'),
			'subtitle' => __('Add date in this formate(2018, 1, 1)', 'hostiko'),
			'desc' => __('', 'hostiko'),
			'default' => __('2018, 1, 1', 'hostiko'),
		),*/
		array(
			'id' => 'logoc',
			'type' => 'media',
			'url' => true,
			'title' => __( 'Logo', 'hostiko' ),
			'compiler' => 'true',
			//'mode' => false, // Can be set to false to allow any media type, or can also be set to any mime type.
			'desc' => __( 'Upload your logo.', 'hostiko' ),
			'subtitle' => __( 'Recommended size: Height: 39px and Width: 162px', 'hostiko' ),
			'default' => array( 'url' => get_template_directory_uri() . '/assets/images/logo.png' ),
		),
		array(
			'id'       => 'constructionBg',
			'type'     => 'media',
			'url'      => true,
			'title'    => __( 'Under Construction background w/ URL', 'hostiko' ),
			'desc'     => __( 'Under Construction background', 'hostiko' ),
			'subtitle' => __( 'Upload any media using the WordPress native uploader', 'hostiko' ),
			'default'  => array( 'url' => get_template_directory_uri() . '/assets/images/subpage-banner.jpg' )
		),
		array(
			'id'       => 'date',
			'type'     => 'text',
			'title'    => __( 'Comming Soon Date', 'hostiko' ),
			'subtitle' => __( 'Add date in this formate(2018, 1, 1)', 'hostiko' ),
			'desc'     => __( 'Comming Soon Dat', 'hostiko' ),
			'default'  => __( '2019, 1, 1', 'hostiko' ),
		),
		array(
			'id'        => 'constructionoverly',
			'type'      => 'color_rgba',
			'title'     => __('Under Construction Background olverlay Color','hostiko'),
			'subtitle'  => __('Set color and alpha channel','hostiko'),
			'important' => true,
			'default'   => array(
				'background' => '#fff',
				'alpha'      => 0.6,
			),
		),
		array(
			'id'        => 'contentcolor',
			'type'      => 'color_rgba',
			'title'     => __('Under Construction Background olverlay Color','hostiko'),
			'subtitle'  => __('Set color and alpha channel','hostiko'),
			'important' => true,
			'default'   => array(
				'background' => '#fff',
			),
		),
		array(
			'id'       => 'headingText',
			'type'     => 'text',
			'title'    => __( 'UNDER CONSTRUCTION', 'hostiko' ),
			'subtitle' => __( 'Default text is coming soon', 'hostiko' ),
			'default'  => __( 'Coming soon', 'hostiko' ),
		),
		array(
			'id'       => 'subheadingText',
			'type'     => 'textarea',
			'title'    => __( 'Discription Text', 'hostiko' ),
			'default'  => __( 'Our website is under construction. We\'ll be here soon with our new awesome site, subscribe to be notified. ', 'hostiko' ),
		),
		array(
			'id' => 'opt-copyrights',
			'type' => 'editor',
			'title' => __( 'CopyRight Text', 'hostiko' ),
			'subtitle' => __( 'Subtitle text would go here.', 'hostiko' ),
			'default' => __('Copyright 2018 <a href="#">DesigningMedia</a>. All Rights Reserved','hostiko'),
			'args' => array(
				'teeny' => true,
				'textarea_rows' => 10
			),
		),
	)
) );
/* Logo */
