<?php 
$textdoimain = 'cloudy7';
global $pre_text;

$pre_text = 'VG ';


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Text Slider Home 1", 'cloudy7'),
   "base" => "text_slider_1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Item 1', 'cloudy7' ) => 'type1',
            __( 'Item 2', 'cloudy7' ) => 'type2',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ), 
      array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle 2", 'cloudy7'),
         "param_name" => "green_sub",
         "value" => "",
         "description" => __("Subtitle color green", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Change 1", 'cloudy7'),
         "param_name" => "text1",
         "value" => "",
         "description" => __("The first text change", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Change 2", 'cloudy7'),
         "param_name" => "text2",
         "value" => "",
         "description" => __("The second text change", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Change 3", 'cloudy7'),
         "param_name" => "text3",
         "value" => "",
         "description" => __("The third text change", 'cloudy7')
   ),
    )));
}
// Kết thúc khối slider

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Pricing", 'cloudy7'),
   "base" => "pricing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Left Wrapper', 'cloudy7' ) => 'type1',
            __( 'Plan Badge Wrapper', 'cloudy7' ) => 'type2',
            __( 'Right Wrapper', 'cloudy7' ) => 'none',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge", 'cloudy7'),
         "param_name" => "badge",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),   
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Small", 'cloudy7'),
         "param_name" => "from",
         "value" => "",
         "description" => __("Input small text", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Currency", 'cloudy7'),
         "param_name" => "currency",
         "value" => "",
         "description" => __("Input currency", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price", 'cloudy7'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Input price", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Period", 'cloudy7'),
         "param_name" => "period",
         "value" => "",
         "description" => __("Input period", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 1", 'cloudy7'),
         "param_name" => "info1",
         "value" => "",
         "description" => __("Input 1st info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 2", 'cloudy7'),
         "param_name" => "info2",
         "value" => "",
         "description" => __("Input 2nd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 3", 'cloudy7'),
         "param_name" => "info3",
         "value" => "",
         "description" => __("Input 3rd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 4", 'cloudy7'),
         "param_name" => "info4",
         "value" => "",
         "description" => __("Input 4th info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Service", 'cloudy7'),
   "base" => "service",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Normal Wrapper', 'cloudy7' ) => 'type1',
            __( 'Plan Badge Green Wrapper', 'cloudy7' ) => 'type2',
            __( 'Plan Badge Grey Wrapper', 'cloudy7' ) => 'type3',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Badge", 'cloudy7'),
      "param_name" => "badge",
      "value" => "",
      "description" => __("Input badge", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon", 'cloudy7'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Input icon", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'cloudy7'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Input title", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'cloudy7'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Input subtitle", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'cloudy7'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'cloudy7'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Input text button", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Best Services", 'cloudy7'),
   "base" => "best_services",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Green Plan Badge Wrapper', 'cloudy7' ) => 'type1',
            __( 'Grey Plan Badge Wrapper', 'cloudy7' ) => 'type2',
            __( 'Normal Wrapper', 'cloudy7' ) => 'none',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ), 
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge", 'cloudy7'),
         "param_name" => "badge",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon", 'cloudy7'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ), 
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Case Study", 'cloudy7'),
   "base" => "case_study",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Author", 'cloudy7'),
      "param_name" => "author",
      "value" => "",
      "description" => __("Input the author", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("The first content", 'cloudy7'),
      "param_name" => "content1",
      "value" => "",
      "description" => __("Input the first content", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("The second content", 'cloudy7'),
      "param_name" => "content2",
      "value" => "",
      "description" => __("Input the second content if exists", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Italic", 'cloudy7'),
      "param_name" => "italic",
      "value" => "",
      "description" => __("Input the italic text if exists", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'cloudy7'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'cloudy7'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Input text button", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Text Slider 2", 'cloudy7'),
   "base" => "text_slider_2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Domain", 'cloudy7'),
      "param_name" => "domain",
      "value" => "",
      "description" => __("Input the domain", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Unit", 'cloudy7'),
      "param_name" => "unit",
      "value" => "",
      "description" => __("Input unit", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Price", 'cloudy7'),
      "param_name" => "price",
      "value" => "",
      "description" => __("Input an unit price", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Menu Domain Pricing", 'cloudy7'),
   "base" => "menu_domain_pricing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'cloudy7'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Input title 1", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'cloudy7'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Input title 2", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 3", 'cloudy7'),
      "param_name" => "title3",
      "value" => "",
      "description" => __("Input title 3", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 4", 'cloudy7'),
      "param_name" => "title4",
      "value" => "",
      "description" => __("Input title 4", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 5", 'cloudy7'),
      "param_name" => "title5",
      "value" => "",
      "description" => __("Input title 5", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Domain Pricing", 'cloudy7'),
   "base" => "domain_pricing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   
   array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Option 1: Promotion', 'cloudy7' ) => 'type1',
            __( 'Option 2', 'cloudy7' ) => 'type2',
            __( 'Option 3', 'cloudy7' ) => 'type3',
            __( 'Option 4', 'cloudy7' ) => 'type4',
            __( 'Option 5', 'cloudy7' ) => 'none',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),   
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge", 'cloudy7'),
         "param_name" => "badge",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Information", 'cloudy7'),
      "param_name" => "info",
      "value" => "",
      "description" => __("Input information", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Unit 1", 'cloudy7'),
      "param_name" => "unit1",
      "value" => "",
      "description" => __("Input unit 1", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Unit 2", 'cloudy7'),
      "param_name" => "unit2",
      "value" => "",
      "description" => __("Input unit 2", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Unit 3 ", 'cloudy7'),
      "param_name" => "unit3",
      "value" => "",
      "description" => __("Input unit 3", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Promotion Unit", 'cloudy7'),
      "param_name" => "promotion",
      "value" => "",
      "description" => __("Input promotion unit", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'cloudy7'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Input text button", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Email Pricing", 'cloudy7'),
   "base" => "email_pricing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'First Wrapper', 'cloudy7' ) => 'type1',
            __( 'Active Wrapper', 'cloudy7' ) => 'type2',
            __( 'Third Wrapper', 'cloudy7' ) => 'none',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),   
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge", 'cloudy7'),
         "param_name" => "badge",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Operating System", 'cloudy7'),
         "param_name" => "operating_system",
         "value" => "",
         "description" => __("", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Currency", 'cloudy7'),
         "param_name" => "currency",
         "value" => "",
         "description" => __("Input currency", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price", 'cloudy7'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Input price", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Period", 'cloudy7'),
         "param_name" => "period",
         "value" => "",
         "description" => __("Input period", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 1", 'cloudy7'),
         "param_name" => "info1",
         "value" => "",
         "description" => __("Input 1st info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 2", 'cloudy7'),
         "param_name" => "info2",
         "value" => "",
         "description" => __("Input 2nd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 3", 'cloudy7'),
         "param_name" => "info3",
         "value" => "",
         "description" => __("Input 3rd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 4", 'cloudy7'),
         "param_name" => "info4",
         "value" => "",
         "description" => __("Input 4th info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 5", 'cloudy7'),
         "param_name" => "info5",
         "value" => "",
         "description" => __("Input 5th info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
      )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Statistics", 'cloudy7'),
   "base" => "statistics",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Number", 'cloudy7'),
      "param_name" => "number",
      "value" => "",
      "description" => __("Input number inside circle", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'cloudy7'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Percent", 'cloudy7'),
      "param_name" => "percent",
      "value" => "",
      "description" => __("Input percent", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Border color", 'cloudy7'),
      "param_name" => "color",
      "value" => "",
      "description" => __("Input boder color example :#dc3545", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'cloudy7'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Input subtitle", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Partner", 'cloudy7'),
   "base" => "partner",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Trial", 'cloudy7'),
   "base" => "trial",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'cloudy7'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Input title", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'cloudy7'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Input subtitle", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Text Slider 3", 'cloudy7'),
   "base" => "text_slider_3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'cloudy7'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Input title", 'cloudy7')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'cloudy7' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Features", 'cloudy7'),
   "base" => "features",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Plan Details", 'cloudy7'),
   "base" => "plan_details",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon", 'cloudy7'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Input icon", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Information", 'cloudy7'),
      "param_name" => "info",
      "value" => "",
      "description" => __("Input information", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Plan Info", 'cloudy7'),
   "base" => "plan_info",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text 1", 'cloudy7'),
      "param_name" => "text1",
      "value" => "",
      "description" => __("Input text 1", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Currency 1", 'cloudy7'),
      "param_name" => "currency1",
      "value" => "",
      "description" => __("Input currency 1", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Price 1", 'cloudy7'),
      "param_name" => "price1",
      "value" => "",
      "description" => __("Input price 1", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Period 1", 'cloudy7'),
      "param_name" => "period1",
      "value" => "",
      "description" => __("Input period 1", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text 2", 'cloudy7'),
      "param_name" => "text2",
      "value" => "",
      "description" => __("Input text 2", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Currency 2", 'cloudy7'),
      "param_name" => "currency2",
      "value" => "",
      "description" => __("Input currency 2", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Price 2", 'cloudy7'),
      "param_name" => "price2",
      "value" => "",
      "description" => __("Input price 2", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Period 2", 'cloudy7'),
      "param_name" => "period2",
      "value" => "",
      "description" => __("Input period 2", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'cloudy7'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Input title", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'cloudy7'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'cloudy7'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Input text button", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Pricing Home 3", 'cloudy7'),
   "base" => "pricing_home3",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Normal Wrapper', 'cloudy7' ) => 'type1',
            __( 'Plan Badge Active Wrapper', 'cloudy7' ) => 'type2',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge", 'cloudy7'),
         "param_name" => "badge",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),   
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Small", 'cloudy7'),
         "param_name" => "from",
         "value" => "",
         "description" => __("Input small text", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Currency", 'cloudy7'),
         "param_name" => "currency",
         "value" => "",
         "description" => __("Input currency", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price", 'cloudy7'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Input price", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Period", 'cloudy7'),
         "param_name" => "period",
         "value" => "",
         "description" => __("Input period", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 1", 'cloudy7'),
         "param_name" => "info1",
         "value" => "",
         "description" => __("Input 1st info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 2", 'cloudy7'),
         "param_name" => "info2",
         "value" => "",
         "description" => __("Input 2nd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 3", 'cloudy7'),
         "param_name" => "info3",
         "value" => "",
         "description" => __("Input 3rd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 4", 'cloudy7'),
         "param_name" => "info4",
         "value" => "",
         "description" => __("Input 4th info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Team", 'cloudy7'),
   "base" => "team",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 1", 'cloudy7'),
         "param_name" => "link1",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 1", 'cloudy7'),
         "param_name" => "icon1",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 2", 'cloudy7'),
         "param_name" => "link2",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 2", 'cloudy7'),
         "param_name" => "icon2",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 3", 'cloudy7'),
         "param_name" => "link3",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 3", 'cloudy7'),
         "param_name" => "icon3",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 4", 'cloudy7'),
         "param_name" => "link4",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 4", 'cloudy7'),
         "param_name" => "icon4",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Name", 'cloudy7'),
         "param_name" => "name",
         "value" => "",
         "description" => __("Input name of member of team", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Job", 'cloudy7'),
         "param_name" => "job",
         "value" => "",
         "description" => __("Input job of each member", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'cloudy7'),
         "param_name" => "description",
         "value" => "",
         "description" => __("Description about member", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Text Slider 4", 'cloudy7'),
   "base" => "text_slider_4",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 1", 'cloudy7'),
         "param_name" => "link1",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 1", 'cloudy7'),
         "param_name" => "text_btn1",
         "value" => "",
         "description" => __("Input the text button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 2", 'cloudy7'),
         "param_name" => "link2",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 2", 'cloudy7'),
         "param_name" => "text_btn2",
         "value" => "",
         "description" => __("Input the text button", 'cloudy7')
   ),
       )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Features Home 4", 'cloudy7'),
   "base" => "features_4",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'cloudy7' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
       )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Package Menu", 'cloudy7'),
   "base" => "package_menu",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
         
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Currency", 'cloudy7'),
         "param_name" => "currency",
         "value" => "",
         "description" => __("Input currency", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price", 'cloudy7'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Input price", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Period", 'cloudy7'),
         "param_name" => "period",
         "value" => "",
         "description" => __("Input period", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge", 'cloudy7'),
         "param_name" => "badge",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
       )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Package Details", 'cloudy7'),
   "base" => "package_details",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Option 1', 'cloudy7' ) => 'type1',
            __( 'Option 2', 'cloudy7' ) => 'type2',
            __( 'Option 3', 'cloudy7' ) => 'type3',
            __( 'Option 4', 'cloudy7' ) => 'type4',
            __( 'Button', 'cloudy7' ) => 'none',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Original Title ", 'cloudy7'),
         "param_name" => "original_title",
         "value" => "",
         "description" => __("Original Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title ", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 1", 'cloudy7'),
         "param_name" => "icon1",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 2", 'cloudy7'),
         "param_name" => "icon2",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 3", 'cloudy7'),
         "param_name" => "icon3",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 1", 'cloudy7'),
         "param_name" => "text1",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 2", 'cloudy7'),
         "param_name" => "text2",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 3", 'cloudy7'),
         "param_name" => "text3",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 1", 'cloudy7'),
         "param_name" => "link1",
         "value" => "",
         "description" => __("Input link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 1", 'cloudy7'),
         "param_name" => "text_btn1",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 2", 'cloudy7'),
         "param_name" => "link2",
         "value" => "",
         "description" => __("Input link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 2", 'cloudy7'),
         "param_name" => "text_btn2",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 3", 'cloudy7'),
         "param_name" => "link3",
         "value" => "",
         "description" => __("Input link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 3", 'cloudy7'),
         "param_name" => "text_btn3",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
       )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Pricing Home 4", 'cloudy7'),
   "base" => "pricing_home4",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Plan Badge Wrapper', 'cloudy7' ) => 'type1',
            __( 'Normal Wrapper', 'cloudy7' ) => 'type2',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge", 'cloudy7'),
         "param_name" => "badge",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),   
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Small", 'cloudy7'),
         "param_name" => "from",
         "value" => "",
         "description" => __("Input small text", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Currency", 'cloudy7'),
         "param_name" => "currency",
         "value" => "",
         "description" => __("Input currency", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price", 'cloudy7'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Input price", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Period", 'cloudy7'),
         "param_name" => "period",
         "value" => "",
         "description" => __("Input period", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 1", 'cloudy7'),
         "param_name" => "info1",
         "value" => "",
         "description" => __("Input 1st info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 2", 'cloudy7'),
         "param_name" => "info2",
         "value" => "",
         "description" => __("Input 2nd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 3", 'cloudy7'),
         "param_name" => "info3",
         "value" => "",
         "description" => __("Input 3rd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 4", 'cloudy7'),
         "param_name" => "info4",
         "value" => "",
         "description" => __("Input 4th info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
       )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Question", 'cloudy7'),
   "base" => "question",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Question", 'cloudy7'),
         "param_name" => "question",
         "value" => "",
         "description" => __("Input question", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Answer 1", 'cloudy7'),
         "param_name" => "answer1",
         "value" => "",
         "description" => __("Input answer", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Answer 2", 'cloudy7'),
         "param_name" => "answer2",
         "value" => "",
         "description" => __("Input answer", 'cloudy7')
   ),
       )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Services Slider", 'cloudy7'),
   "base" => "services_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'cloudy7'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Input title", 'cloudy7')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'cloudy7' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Hosting Pricing", 'cloudy7'),
   "base" => "hosting_pricing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Option 1', 'cloudy7' ) => 'type1',
            __( 'Option 2', 'cloudy7' ) => 'type2',
            __( 'Option 3', 'cloudy7' ) => 'type3',
            __( 'Option 4', 'cloudy7' ) => 'type4',
            __( 'Button', 'cloudy7' ) => 'none',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Original Title ", 'cloudy7'),
         "param_name" => "original_title",
         "value" => "",
         "description" => __("Original Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title ", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 1", 'cloudy7'),
         "param_name" => "icon1",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 2", 'cloudy7'),
         "param_name" => "icon2",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 3", 'cloudy7'),
         "param_name" => "icon3",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 1", 'cloudy7'),
         "param_name" => "text1",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 2", 'cloudy7'),
         "param_name" => "text2",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 3", 'cloudy7'),
         "param_name" => "text3",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 1", 'cloudy7'),
         "param_name" => "link1",
         "value" => "",
         "description" => __("Input link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 1", 'cloudy7'),
         "param_name" => "text_btn1",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 2", 'cloudy7'),
         "param_name" => "link2",
         "value" => "",
         "description" => __("Input link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 2", 'cloudy7'),
         "param_name" => "text_btn2",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 3", 'cloudy7'),
         "param_name" => "link3",
         "value" => "",
         "description" => __("Input link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 3", 'cloudy7'),
         "param_name" => "text_btn3",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Hosting Service", 'cloudy7'),
   "base" => "hosting_service",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Normal Wrapper', 'cloudy7' ) => 'type1',
            __( 'Green Plan Badge Wrapper', 'cloudy7' ) => 'type2',
            __( 'Grey Plan Badge Wrapper', 'cloudy7' ) => 'none',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Badge", 'cloudy7'),
      "param_name" => "badge",
      "value" => "",
      "description" => __("Input badge", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon", 'cloudy7'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Input icon", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'cloudy7'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Input title", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'cloudy7'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Input subtitle", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'cloudy7'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Button", 'cloudy7'),
      "param_name" => "text_btn",
      "value" => "",
      "description" => __("Input text button", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Specification", 'cloudy7'),
   "base" => "hosting_specification",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Title', 'cloudy7' ) => 'type1',
            __( 'Option 1', 'cloudy7' ) => 'type2',
            __( 'Option 2', 'cloudy7' ) => 'type3',
            __( 'Button', 'cloudy7' ) => 'none',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Original Title ", 'cloudy7'),
         "param_name" => "original_title",
         "value" => "",
         "description" => __("Original Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 1 ", 'cloudy7'),
         "param_name" => "text1",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge 1", 'cloudy7'),
         "param_name" => "badge1",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 2 ", 'cloudy7'),
         "param_name" => "text2",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge 2", 'cloudy7'),
         "param_name" => "badge2",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 3 ", 'cloudy7'),
         "param_name" => "text3",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge 3", 'cloudy7'),
         "param_name" => "badge3",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 4 ", 'cloudy7'),
         "param_name" => "text4",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge 4", 'cloudy7'),
         "param_name" => "badge4",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 1", 'cloudy7'),
         "param_name" => "link1",
         "value" => "",
         "description" => __("Input link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 1", 'cloudy7'),
         "param_name" => "text_btn1",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 2", 'cloudy7'),
         "param_name" => "link2",
         "value" => "",
         "description" => __("Input link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 2", 'cloudy7'),
         "param_name" => "text_btn2",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 3", 'cloudy7'),
         "param_name" => "link3",
         "value" => "",
         "description" => __("Input link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 3", 'cloudy7'),
         "param_name" => "text_btn3",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 4", 'cloudy7'),
         "param_name" => "link4",
         "value" => "",
         "description" => __("Input link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button 4", 'cloudy7'),
         "param_name" => "text_btn4",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Reseller Service", 'cloudy7'),
   "base" => "reseller_service",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Normal Wrapper', 'cloudy7' ) => 'type1',
            __( 'Plan Green Badge Wrapper', 'cloudy7' ) => 'type2',
            __( 'Plan Grey Badge Wrapper', 'cloudy7' ) => 'type3',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge", 'cloudy7'),
         "param_name" => "badge",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),   
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'cloudy7' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Dedicated Slider", 'cloudy7'),
   "base" => "dedicated_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
            'type' => 'attach_image',
            'heading' => __( 'Image', 'cloudy7' ),
            'param_name' => 'image',
            'value' => '',
            'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
      ),
      array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __("Title", 'cloudy7'),
            "param_name" => "title",
            "value" => "",
            "description" => __("Title", 'cloudy7')
      ),
      array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => __("Subtitle", 'cloudy7'),
            "param_name" => "subtitle",
            "value" => "",
            "description" => __("Subtitle", 'cloudy7')
      ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Dedicated Pricing", 'cloudy7'),
   "base" => "dedicated_pricing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Normal Wrapper', 'cloudy7' ) => 'type1',
            __( 'Plan Badge Wrapper', 'cloudy7' ) => 'type2',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge", 'cloudy7'),
         "param_name" => "badge",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),   
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Small", 'cloudy7'),
         "param_name" => "from",
         "value" => "",
         "description" => __("Input small text", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Currency", 'cloudy7'),
         "param_name" => "currency",
         "value" => "",
         "description" => __("Input currency", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price", 'cloudy7'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Input price", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Period", 'cloudy7'),
         "param_name" => "period",
         "value" => "",
         "description" => __("Input period", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 1", 'cloudy7'),
         "param_name" => "info1",
         "value" => "",
         "description" => __("Input 1st info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 2", 'cloudy7'),
         "param_name" => "info2",
         "value" => "",
         "description" => __("Input 2nd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 3", 'cloudy7'),
         "param_name" => "info3",
         "value" => "",
         "description" => __("Input 3rd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 4", 'cloudy7'),
         "param_name" => "info4",
         "value" => "",
         "description" => __("Input 4th info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 5", 'cloudy7'),
         "param_name" => "info5",
         "value" => "",
         "description" => __("Input 5th info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Green Text ", 'cloudy7'),
         "param_name" => "green_text",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 6", 'cloudy7'),
         "param_name" => "info6",
         "value" => "",
         "description" => __("Input 6th info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Video", 'cloudy7'),
   "base" => "video",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'cloudy7' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Url video", 'cloudy7'),
         "param_name" => "video",
         "value" => "",
         "description" => __("Input url video", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Dedicated Section", 'cloudy7'),
   "base" => "dedicated_section",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Left Wrapper', 'cloudy7' ) => 'type1',
            __( 'Right Wrapper', 'cloudy7' ) => 'type2',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ), 
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'cloudy7' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Contact", 'cloudy7'),
   "base" => "wordpress_contact",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon", 'cloudy7'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Input icon", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'cloudy7'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Input title", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'cloudy7'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Input subtitle", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Phone", 'cloudy7'),
      "param_name" => "link_phone",
      "value" => "",
      "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Telephone Number", 'cloudy7'),
      "param_name" => "phone_number",
      "value" => "",
      "description" => __("Input telephone number", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Email", 'cloudy7'),
      "param_name" => "link_mail",
      "value" => "",
      "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Email Address", 'cloudy7'),
      "param_name" => "email",
      "value" => "",
      "description" => __("Input email address", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."VPS Slider", 'cloudy7'),
   "base" => "vps_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."VPS Portfolio", 'cloudy7'),
   "base" => "vps_portfolio",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of portfolio", 'cloudy7'),
         "param_name" => "number",
         "value" => "",
         "description" => __("Number of portfolio", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."VPS Pricing", 'cloudy7'),
   "base" => "vps_pricing",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Normal Wrapper', 'cloudy7' ) => 'type1',
            __( 'Plan Badge Wrapper', 'cloudy7' ) => 'type2',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Badge", 'cloudy7'),
         "param_name" => "badge",
         "value" => "",
         "description" => __("Input text badge", 'cloudy7')
   ),   
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Small", 'cloudy7'),
         "param_name" => "from",
         "value" => "",
         "description" => __("Input small text", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Currency", 'cloudy7'),
         "param_name" => "currency",
         "value" => "",
         "description" => __("Input currency", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Price", 'cloudy7'),
         "param_name" => "price",
         "value" => "",
         "description" => __("Input price", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Period", 'cloudy7'),
         "param_name" => "period",
         "value" => "",
         "description" => __("Input period", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 1", 'cloudy7'),
         "param_name" => "info1",
         "value" => "",
         "description" => __("Input 1st info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 2", 'cloudy7'),
         "param_name" => "info2",
         "value" => "",
         "description" => __("Input 2nd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 3", 'cloudy7'),
         "param_name" => "info3",
         "value" => "",
         "description" => __("Input 3rd info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 4", 'cloudy7'),
         "param_name" => "info4",
         "value" => "",
         "description" => __("Input 4th info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Info 5", 'cloudy7'),
         "param_name" => "info5",
         "value" => "",
         "description" => __("Input 5th info", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Input link when click to", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."VPS Video", 'cloudy7'),
   "base" => "vps_video",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'cloudy7' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Url video", 'cloudy7'),
         "param_name" => "video",
         "value" => "",
         "description" => __("Input url video", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Input text button", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Domain Portfolio", 'cloudy7'),
   "base" => "domain_portfolio",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of portfolio", 'cloudy7'),
         "param_name" => "number",
         "value" => "",
         "description" => __("Number of portfolio", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Domain Contact", 'cloudy7'),
   "base" => "domain_contact",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(

      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Option 1', 'cloudy7' ) => 'type1',
            __( 'Option 2', 'cloudy7' ) => 'type2',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 1", 'cloudy7'),
         "param_name" => "text1",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text 2", 'cloudy7'),
         "param_name" => "text2",
         "value" => "",
         "description" => __("Input text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Contact 1 ", 'cloudy7'),
         "param_name" => "contact1",
         "value" => "",
         "description" => __("Input the first contact ", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Contact 2 ", 'cloudy7'),
         "param_name" => "contact2",
         "value" => "",
         "description" => __("Input the second contact ", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 1", 'cloudy7'),
         "param_name" => "link1",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 2", 'cloudy7'),
         "param_name" => "link2",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link 3", 'cloudy7'),
         "param_name" => "link3",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon 1", 'cloudy7'),
      "param_name" => "icon1",
      "value" => "",
      "description" => __("Input icon", 'cloudy7')
   ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon 2", 'cloudy7'),
      "param_name" => "icon2",
      "value" => "",
      "description" => __("Input icon", 'cloudy7')
   ),
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon 3", 'cloudy7'),
      "param_name" => "icon3",
      "value" => "",
      "description" => __("Input icon", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Slider", 'cloudy7'),
   "base" => "about_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'cloudy7'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Input title", 'cloudy7')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'cloudy7'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Input subtitle", 'cloudy7')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'cloudy7' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About", 'cloudy7'),
   "base" => "about",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Icon", 'cloudy7'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),

      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Team Slider", 'cloudy7'),
   "base" => "team_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Team Style 1", 'cloudy7'),
   "base" => "team_style1",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Name", 'cloudy7'),
         "param_name" => "name",
         "value" => "",
         "description" => __("Input name of member of team", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Job", 'cloudy7'),
         "param_name" => "job",
         "value" => "",
         "description" => __("Input job of each member", 'cloudy7')
   ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 1", 'cloudy7'),
         "param_name" => "icon1",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 2", 'cloudy7'),
         "param_name" => "icon2",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 3", 'cloudy7'),
         "param_name" => "icon3",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Team Style 2", 'cloudy7'),
   "base" => "team_style2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 1", 'cloudy7'),
         "param_name" => "icon1",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 2", 'cloudy7'),
         "param_name" => "icon2",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon 3", 'cloudy7'),
         "param_name" => "icon3",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Name", 'cloudy7'),
         "param_name" => "name",
         "value" => "",
         "description" => __("Input name of member of team", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Job", 'cloudy7'),
         "param_name" => "job",
         "value" => "",
         "description" => __("Input job of each member", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Description", 'cloudy7'),
         "param_name" => "description",
         "value" => "",
         "description" => __("Description", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Register Form", 'cloudy7'),
   "base" => "register_form",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
     
     
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Login Form", 'cloudy7'),
   "base" => "login_form",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
     
     
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Address Contact", 'cloudy7'),
   "base" => "contact_address",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Custom text", 'cloudy7'),
         "param_name" => "text1",
         "value" => "",
         "description" => __("Input the custom text", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Information", 'cloudy7'),
         "param_name" => "text_info",
         "value" => "",
         "description" => __("Input the information", 'cloudy7')
   ),
      )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Map Area", 'tofa'),
   "base" => "map_area",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Latitude", 'tofa'),
         "param_name" => "latitude",
         "value" => "",
         "description" => __("Latitude", 'tofa')
      ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Longitude", 'tofa'),
         "param_name" => "longitude",
         "value" => "",
         "description" => __("Longitude", 'tofa')
      ),
   array(
      'type' => 'attach_image',
      'heading' => __( 'Image', 'cloudy7' ),
      'param_name' => 'image',
      'value' => '',
      'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
  )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."SSL Slider", 'cloudy7'),
   "base" => "ssl_slider",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'cloudy7' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."SSL Service", 'cloudy7'),
   "base" => "ssl_service",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Normal Wrapper', 'cloudy7' ) => 'type1',
            __( 'Plan Badge Green Wrapper', 'cloudy7' ) => 'type2',
            __( 'Plan Badge Grey Wrapper', 'cloudy7' ) => 'type3',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Badge", 'cloudy7'),
      "param_name" => "badge",
      "value" => "",
      "description" => __("Input badge", 'cloudy7')
   ),
   array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Features Menu", 'cloudy7'),
   "base" => "ssl_features_menu",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Normal', 'cloudy7' ) => 'type1',
            __( 'Active', 'cloudy7' ) => 'type2',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ), 
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Icon", 'cloudy7'),
         "param_name" => "icon",
         "value" => "",
         "description" => __("Input icon", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Input title", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Features Info", 'cloudy7'),
   "base" => "ssl_features_info",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'orenda' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Normal', 'cloudy7' ) => 'type1',
            __( 'Active', 'cloudy7' ) => 'type2',
         ),
         'description' =>__( 'Select field do you want Order.', 'tofa' )
   ), 
      array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'cloudy7' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'cloudy7' )
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Title", 'cloudy7'),
         "param_name" => "title",
         "value" => "",
         "description" => __("Title", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Subtitle", 'cloudy7'),
         "param_name" => "subtitle",
         "value" => "",
         "description" => __("Subtitle", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Link", 'cloudy7'),
         "param_name" => "link",
         "value" => "",
         "description" => __("Click button to Link", 'cloudy7')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Text Button", 'cloudy7'),
         "param_name" => "text_btn",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
      )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."New Product", 'cloudy7'),
   "base" => "new_product",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("1", 'cloudy7'),
         "param_name" => "number",
         "value" => "",
         "description" => __("Text for button", 'cloudy7')
   ),
      )));
}
