<?php
$output = $el_class = $width = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'width' => '1/1',
    'wap_class' => '',
	'column_id' => '',
	'title' =>'',
  'title2' =>'',
  'title3' =>'',
	'subtitle' =>'',
	'type' => '',
    'image' => '',
    'description'=>'',
    'first_text'=>'',
    'icon'=>'',
    'delay'=>'',
), $atts));

if($type == 'column'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="'.$css_class.'  '.$wap_class.'" id="'.$column_id.'" >';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";



}elseif($type == 'domain_prices'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="domain-prices">
                    <ul>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</ul></div>'.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'form_trial'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-lg-5">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>'.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'plan_details'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-md-12 col-lg-9">
                        <div class="p-5">
                          <div class="heading">'.$title.'</div>
                          <div class="desc">
                            '.$subtitle.'
                          </div>
                          <hr>
                          <div class="plans-detail">
                            <div class="row">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div></div></div></div>'.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'package'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<thead>
                      <tr>
                        <td></td>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</tr>
                    </thead>'.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'contact'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-md-12 col-lg-8 sec-bg1">
                      <div class="form-contact">
                        <div class="subtitle">'.$title.'</div>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div></div>'.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'countdown'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-md-12 col-lg-8 sec-bg1">
                      <div class="form-contact">
                        <h1 class="subtitle mb-1">'.$title.'</h1>
                        <p>'.$subtitle.'</p>
                        <div class="">
                          <div class="countdown">
                            <div class="wrapper">
                              <div class="clock" id="clock"></div>
                            </div>
                          </div>
                        </div>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div></div>'.$this->endBlockComment($el_class) . "\n";

}elseif($type == 'ssl_features_menu'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="tabs-header mb-5">
                    <ul>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</ul></div>'.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'ssl_features_info'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="tabs-content text-left">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>'.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'menu_order'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<table class="table compare">
                    <thead>
                      <tr>
                        <td class="bb-green title">'.$title.'</td>
                        <td class="bb-green title">'.$title2.'</td>
                        <td class="bb-green title">'.$title3.'</td>
                      </tr>
                    </thead>
                    <tbody>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</tbody></table>'.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'price_order_checkout'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="row">
                    <div class="col-md-12 ">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div></div>'.$this->endBlockComment($el_class) . "\n";


}else{
	$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);


$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

}
echo wp_specialchars_decode(esc_attr($output),ENT_QUOTES);