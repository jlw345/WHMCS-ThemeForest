<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';
extract(shortcode_atts(array(
    'el_class'        => '',
    'bg_image'        => '',
    'bg_image_repeat' => '',
    'padding'         => '',
    'margin_bottom'   => '',
    'css' => '',
    'ses_title'=>'',
    'ses_title2'=>'',
    'type_row' => '',
    'ses_subtitle' => '',
    'ses_desc' => '',
    'ses_image' => '',
    'ses_image2' => '',
    'ses_image3' => '',
    'image'=>'',
    'ses_green_text'=>'',
    'ses_link'=>'',
    'ses_text_btn'=>'',
    'ses_text_link'=>'',

), $atts));

wp_enqueue_script( 'wpb_composer_front_js' );

$el_class = $this->getExtraClass($el_class);
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);
$images = wp_get_attachment_image_src($ses_image,'');
if($type_row == 'type2'){
    $output .= wpb_js_remove_wpautop($content);
    $output .= $this->endBlockComment('row');

}elseif($type_row == 'slider_1'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="owl-carousel owl-theme">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>';

}elseif($type_row == 'pricing_special'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="pricing special sec-normal sec-bg1">
                    <div class="container">
                        <div class="row">
                          <div class="col-sm-12 text-center">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <p class="section-subheading">'.$ses_subtitle.'</p>
                          </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div></section>';


}elseif($type_row == 'service'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="services classic sec-normal item4 overlay-grad">
                  <div class="container">
                    <div class="service-wrap">
                      <div class="row">
                        <div class="col-sm-12 text-center">
                          <h2 class="section-heading text-white">'.$ses_title.'</h2>
                          <p class="section-subheading text-white">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div></div></div></section>';


}elseif($type_row == 'best_services'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="h-services sec-normal">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <h2 class="section-heading">'.$ses_title.'</h2>
                        <p class="section-subheading">'.$ses_subtitle.'</p>
                      </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div></div></section>';


}elseif($type_row == 'case_study'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="casestudy sec-normal sec-bg1">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 col-md-6 col-lg-3 study-img">
                        <img src="'.esc_url($images[0]).'" class="w-100" >
                      </div>
                      <div class="col-sm-12 col-md-6 col-lg-9">
                        <div class="slider-container slider-filter">
                          <div class="slider-wrap">
                            <div class="swiper-container main-slider" data-autoplay="4000" data-touch="1" data-mouse="0" data-slides-per-view="responsive" data-loop="1" data-speed="1200" data-mode="horizontal" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1">
                              <div class="swiper-wrapper">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
                <div class="pagination vertical-mode pagination-index"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>';


  }elseif($type_row == 'slider_2'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div id="owl-demo" class="owl-carousel">
                  <div class="full item1 h-100" style="     
    background-image: url('.esc_url($images[0]).');
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;">
                    <div class="vc-parent">
                      <div class="vc-child">
                        <div class="top-banner top-classic">
                          <div class="container">
                            <div class="box-container">
                              <h1 class="heading">'.$ses_title.'</h1>
                              <h3 class="subheading">'.$ses_subtitle.'</h3>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';


    }elseif($type_row == 'domain_pricing'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal sec-bg1">
                  <div class="best-plans pricing classic">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12">
                          <h2 class="section-heading">'.$ses_title.'</h2><br>
                        </div>
                        <div class="col-sm-12">
                          <div class="table-responsive-lg">
                            <table class="table compare mt-5">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>';


}elseif($type_row == 'email_pricing'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal overlay bg-email"
    style="background-image: url('.esc_url($images[0]).');
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
    height: auto;">
                  <div class="pricing classic tablepage">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                          <h2 class="section-heading text-white">'.$ses_title.'</h2>
                          <p class="section-subheading text-white">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div>
        </div>
      </section>';

}elseif($type_row == 'statistics'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="circle-section sec-normal sec-bg1">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <h2 class="section-heading">'.$ses_title.'</h2>
                        <p class="section-subheading">'.$ses_subtitle.'</p>
                      </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
        </div>
      </section>';


}elseif($type_row == 'partner'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal ">
                  <div class="cicrle-section">
                    <div class="container">
                      <div class="sec-main sec-bg1 sec-grad1">
                        <div class="row">
                          <div class="col-sm-12 text-center">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <p class="section-subheading">'.$ses_subtitle.'</p>
                          </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
          </div>
        </div>
      </section>';

}elseif($type_row == 'trial'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="getready">
                  <div class="container">
                    <div class="content sec-bg4">
                      <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div>
        </div>
      </section>';

}elseif($type_row == 'slider_3'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div id="owl-demo" class="owl-carousel">
                  <div class="full overlay item3 h-100" style="background-image: url('.esc_url($images[0]).');
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;">
                    <div class="vc-parent">
                      <div class="vc-child">
                        <div class="top-banner classic">
                          <div class="container text-center">
                            <h1 class="heading">'.$ses_title.'</h1>
                            <div class="subheading">
                              <span>'.$ses_subtitle.'<b class="c-green">'.$ses_green_text.'</b></span>
                              <div class="chars">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
                </div>
                <a href="'.$ses_link.'" class="btn btn-default-grad-purple-fill">'.$ses_text_btn.'</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>'; 

}elseif($type_row == 'trial_home3'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="getready">
                  <div class="container">
                    <div class="content sec-bg3">
                      <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div>
        </div>
      </section>';

}elseif($type_row == 'features'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal">
                  <div class="history-section">
                    <div class="container">
                      <div class="sec-main sec-bg1">
                        <div class="section-heading-wrap">
                          <div class="col-sm-12 col-md-12 text-center">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <p class="section-subheading">'.$ses_subtitle.'</p>
                          </div>
                        </div>
                        <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div>
        </div>
      </div>
    </section>';


}elseif($type_row == 'plan1'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="horiz-plans sec-bg1 sec-normal">
                  <div class="container">
                    <div class="wrapper-h-plans">
                      <div class="section-plans text-left">
                        <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div>
        </div>
      </div>
    </div>';  


}elseif($type_row == 'plan2'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="horiz-plans sec-normal">
                  <div class="container">
                    <div class="wrapper-h-plans">
                      <div class="section-plans text-left">
                        <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div>
        </div>
      </div>
    </div>';  

}elseif($type_row == 'pricing_home3'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="item5 overlay sec-normal" style="background-image: url('.esc_url($images[0]).');
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;">
                  <div class="pricing tablepage">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 text-center">
                          <h2 class="section-heading text-white">'.$ses_title.'</h2>
                          <p class="section-subheading text-white">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div>
        </div>
      </section>';                 


}elseif($type_row == 'team'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="pt-80">
                  <div class="team">
                    <div class="container">
                      <div class="sec-main sec-grad-purple">
                        <div class="row">
                          <div class="col-sm-12 col-md-12 text-center">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <p class="section-subheading">'.$ses_subtitle.'</p>
                          </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
          </div>
        </div>
      </section>';


}elseif($type_row == 'features_4'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-grad-grey pb-80">
                  <div class="h-services">
                    <div class="container">
                      <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div>
        </div>
      </section>';

}elseif($type_row == 'package'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal">
                  <div class="best-plans pricing classic">
                    <div class="container">
                      <div class="sec-main sec-bg1">
                        <div class="row ">
                          <div class="col-md-12 col-sm-12 text-center">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <p class="section-subheading">'.$ses_subtitle.'</p>
                          </div>
                          <div class="col-sm-12">
                            <div class="table-responsive-lg pt-5">
                              <table class="table">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>';


  }elseif($type_row == 'pricing_home4'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="slick sec-normal item5 overlay" style="background-image: url('.esc_url($images[0]).');
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;">
                  <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading text-white">'.$ses_title.'</h2>
                    <p class="section-subheading text-white">'.$ses_subtitle.'</p>
                  </div>
                  <div id="slider">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </section>';

    }elseif($type_row == 'question'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal sec-grad-green">
                  <div class="faq">
                    <div class="container">
                      <div class="sec-main sec-bg1 b-solid">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 text-center">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <p class="section-subheading">'.$ses_subtitle.'</p>
                          </div>
                          <div class="col-sm-12">
                            <div class="accordion faq pt-5">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div></div>
              </div></div>
              </div></div>
            </section>';

    }elseif($type_row == 'services_slider'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="top-header item1 overlay" style="background-image: url('.esc_url($images[0]).');">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 col-md-5 col-lg-4">
                        <div class="wrapper">
                          <div class="heading">'.$ses_title.'</div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-7 col-lg-8">
                        <div class="specs float-right">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div></div>
              </div></div>
              </div>';

    }elseif($type_row == 'hosting_pricing'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-up">
                  <div class="best-plans pricing classic">
                    <div class="container">
                      <div class="sec-main sec-bg1">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="table-responsive-lg">
                              <table class="table">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</table></div></div>
              </div></div>
            </div></div>
          </section>';                  


    }elseif($type_row == 'hosting_service'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="services classic sec-normal mt-150 sec-grad-full-green">
                  <div class="container">
                    <div class="service-wrap">
                      <div class="row">
                        <div class="col-sm-12 text-center">
                          <h2 class="section-heading text-white">'.$ses_title.'</h2>
                          <p class="section-subheading text-white">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
            </div>
          </section>';

    }elseif($type_row == 'hosting_specification'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal sec-bg1">
                  <div class="best-plans pricing classic">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12">
                          <h2 class="section-heading">'.$ses_title.'</h2>
                          <p class="section-subheading">'.$ses_subtitle.'</p>
                        </div>
                        <div class="col-sm-12">
                          <div class="table-responsive-lg">
                            <table class="table sample mt-5">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</table></div></div></div>
            </div>
            </div>
          </section>';

   }elseif($type_row == 'hosting_question'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal">
                  <div class="faq">
                    <div class="container">
                      <div class="sec-main sec-bg1">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 text-center">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <p class="section-subheading">'.$ses_subtitle.'</p>
                          </div>
                          <div class="col-sm-12">
                            <div class="accordion faq pt-5">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div></div></div>
            </div>
          </div>
        </div>
      </section>';

    }elseif($type_row == 'reseller_service'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="services classic sec-normal mt-150 overlay item3" style="background-image: url('.esc_url($images[0]).');">
                  <div class="container">
                    <div class="service-wrap">
                      <div class="row">
                        <div class="col-sm-12 text-center">
                          <h2 class="section-heading text-white">'.$ses_title.'</h2>
                          <p class="section-subheading text-white">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
            </div>
          </div>
        </section>';  

    }elseif($type_row == 'reseller_specification'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal sec-bg1 sec-grad-grey">
                  <div class="best-plans pricing classic">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12">
                          <h2 class="section-heading">'.$ses_title.'</h2>
                          <p class="section-subheading">'.$ses_subtitle.'</p>
                        </div>
                        <div class="col-sm-12">
                          <div class="table-responsive-lg">
                            <table class="table sample mt-5">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</table></div></div></div>
            </div>
            </div>
          </section>';           


    }elseif($type_row == 'dedicated_pricing'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="pricing special sec-up">
                  <div class="container">
                    <div class="sec-main sec-bg1">
                      <div class="row">
                        <div class="col-sm-12 text-center">
                          <h2 class="section-heading">'.$ses_title.'</h2>
                          <p class="section-subheading">'.$ses_subtitle.'
                            <a class="golink" href="'.$ses_link.'">'.$ses_text_link.'</a>
                          </p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
          </div>
        </section>';


    }elseif($type_row == 'dedicated_service'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="services classic sec-normal mt-150 overlay item5" style="background-image: url('.esc_url($images[0]).');">
                  <div class="container">
                    <div class="service-wrap">
                      <div class="row">
                        <div class="col-sm-12 text-center">
                          <h2 class="section-heading text-white">'.$ses_title.'</h2>
                          <p class="section-subheading text-white">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
          </div>
        </section>';

    }elseif($type_row == 'dedicated_features'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section id="scroll" class="sec-normal sec-bg1">
                  <div class="best-plans pricing classic">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12">
                          <h2 class="section-heading">'.$ses_title.'</h2><br>
                        </div>
                        <div class="col-sm-12">
                          <div class="table-responsive-lg">
                            <table class="table compare mt-5">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</table></div></div>
              </div>
            </div>
          </div>
        </section>'; 


    }elseif($type_row == 'dedicated_specification'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal">
                  <div class="best-plans pricing classic">
                    <div class="container">
                      <div class="sec-main sec-bg1 sec-grad-purple">
                        <div class="row">
                          <div class="col-sm-12">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <p class="section-subheading">'.$ses_subtitle.'</p>
                          </div>
                          <div class="col-sm-12">
                            <div class="table-responsive-lg">
                              <table class="table sample mt-5">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</table></div></div>
              </div>
            </div>
          </div></div>
        </section>';


    }elseif($type_row == 'wordpress_slider'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="top-header overlay bg-wordpress" style="background-image: url('.esc_url($images[0]).');">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 col-md-5 col-lg-4">
                        <div class="wrapper">
                          <div class="heading">'.$ses_title.'</div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-7 col-lg-8">
                        <div class="specs float-right">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
              </div>
            </div>
          </div>
        </div>';     


    }elseif($type_row == 'dedicated_section'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section>
                  <div class="h-services">
                    <div class="container">
                      <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div></div>
        </section>';


    }elseif($type_row == 'wordpress_services'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="services classic sec-normal mt-150 overlay bg-wordpress" style="background-image: url('.esc_url($images[0]).');">
                  <div class="container">
                    <div class="service-wrap">
                      <div class="row">
                        <div class="col-sm-12 text-center">
                          <h2 class="section-heading text-white">'.$ses_title.'</h2>
                          <p class="section-subheading text-white">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div></div>
        </section>'; 


    }elseif($type_row == 'wordpress_team'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal">
                  <div class="team">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 text-center">
                          <h2 class="section-heading">'.$ses_title.'</h2>
                          <p class="section-subheading">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div></div>
        </section>';

    }elseif($type_row == 'wordpress_contact'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal sec-bg1">
                  <div class="register contact-us">
                    <div class="container">
                      <div class="row b-solid m-0">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div></div>
        </section>'; 


    }elseif($type_row == 'vps_service'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="services classic sec-normal overlay item3" style="background-image: url('.esc_url($images[0]).');">
                  <div class="container">
                    <div class="service-wrap">
                      <div class="row">
                        <div class="col-sm-12 text-center">
                          <h2 class="section-heading text-white">'.$ses_title.'</h2>
                          <p class="section-subheading text-white">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
          </div></div>
        </section>'; 


    }elseif($type_row == 'vps_pricing'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="pricing special sec-normal sec-bg1 sec-grad-grey">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 col-sm-12 text-center">
                        <h2 class="section-heading">'.$ses_title.'</h2>
                        <p class="section-subheading">'.$ses_subtitle.'
                          <a class="golink" href="'.$ses_link.'">'.$ses_green_text.'</a>
                        </p>
                      </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>';                        

     }elseif($type_row == 'vps_question'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section>
                  <div class="faq">
                    <div class="container">
                      <div class="sec-main sec-bg1">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 text-center">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <p class="section-subheading">'.$ses_subtitle.'</p>
                          </div>
                          <div class="col-sm-12">
                            <div class="accordion faq pt-5">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
            </div>
            </div>
            </div>
            </div>
        </section>'; 

    }elseif($type_row == 'domain_slider'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="top-header overlay item6" style="background-image: url('.esc_url($images[0]).');">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <div class="wrapper">
                          <div class="heading">'.$ses_title.'</div>
                          <div class="subheding">'.$ses_subtitle.'</div>
                          <div class="col-md-6 offset-md-3">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
            </div>
            </div>
            </div>
            </div>';                                


    }elseif($type_row == 'domain_contact'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="small-contact sec-normal pt-60">
                  <div class="container">
                    <div class="sec-main sec-bg1">
                      <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
              </div>
            </div>
          </section>';

    }elseif($type_row == 'popup_contact'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $images2 = wp_get_attachment_image_src($ses_image2,'');
    $images3 = wp_get_attachment_image_src($ses_image3,'');
    $output .='<div id="myNav" class="fullrock bg-helpdesk overlay-full" style="background-image: url('.esc_url($images[0]).');">
                  <a onclick="closeNav()" class="closebtn">
                    <img src="'.esc_url($images2[0]).'" class="closer">
                  </a>
                  <div class="fullrock-content">
                    <section class="pb-100">
                      <div class="register contact-us">
                        <div class="container">
                          <img src="'.esc_url($images3[0]).'"   class="logo-footer">
                          <div class="row m-0 bg-opacity-green">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
          </div>
        </section>
      </div>
    </div>';

    }elseif($type_row == 'countdown'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $images2 = wp_get_attachment_image_src($ses_image2,'');
    $images3 = wp_get_attachment_image_src($ses_image3,'');
    $output .='<div class="fullrock item5 overlay-full" style="background-image: url('.esc_url($images[0]).');">
                    <a onclick="window.history.go(-1); return false;" class="closebtn">
                      <img src="'.esc_url($images2[0]).'" class="closer">
                    </a>
                    <div class="fullrock-content">
                      <section class="pb-100">
                        <div class="register contact-us">
                          <div class="container">
                            <img src="'.esc_url($images3[0]).'"   class="logo-footer">
                            <div class="row sec-bx bg-opacity-grey">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
          </div>
        </section>
      </div>
    </div>';                                         
     

    }elseif($type_row == 'about'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="h-services sec-normal sec-bg1">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <h2 class="section-heading">'.$ses_title.'</h2>
                        <p class="section-subheading">'.$ses_subtitle.'</p>
                      </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
            </div>
          </section>'; 


    }elseif($type_row == 'about_service'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="services classic sec-normal">
                  <div class="container">
                    <div class="service-wrap">
                      <div class="row">
                        <div class="col-sm-12 text-center">
                          <h2 class="section-heading">'.$ses_title.'</h2>
                          <p class="section-subheading">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div>
            </div>
          </section>';                                    


    }elseif($type_row == 'about_team'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="mt-80 pt-80 sec-grad-green">
                  <div class="team">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 text-center">
                          <h2 class="section-heading">'.$ses_title.'</h2>
                          <p class="section-subheading">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div>
            </div>
          </section>';


    }elseif($type_row == 'team_style1'){
    $output .='<section class="sec-normal sec-bg1">
                  <div class="team-about classic">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                          <h2 class="section-heading">'.$ses_title.'</h2>
                          <p class="section-subheading">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div>
            </div>
          </section>';


    }elseif($type_row == 'team_style2'){
    $output .='<section class="sec-normal">
                  <div class="team-about light modern">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 text-center">
                          <h2 class="section-heading">'.$ses_title.'</h2>
                          <p class="section-subheading">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div>
            </div>
          </section>';        

    }elseif($type_row == 'team_style3'){
    $output .='<section class="team">
                  <div class="container">
                    <div class="sec-main sec-bg1">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 text-center">
                          <h2 class="section-heading">'.$ses_title.'</h2>
                          <p class="section-subheading">'.$ses_subtitle.'</p>
                        </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div></div>
            </div>
          </section>';


    }elseif($type_row == 'sign_up'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $images2 = wp_get_attachment_image_src($ses_image2,'');
    $images3 = wp_get_attachment_image_src($ses_image3,'');
    $output .='<div class="fullrock item5 overlay-full" style="background-image: url('.esc_url($images[0]).');">
                  <a onclick="window.history.go(-1); return false;" class="closebtn">
                    <img src="'.esc_url($images2[0]).'" class="closer" >
                  </a>
                  <div class="fullrock-content">
                    <section class="section-content pb-100">
                      <div class="register contact-us">
                        <div class="container">
                          <img src="'.esc_url($images3[0]).'"   class="logo-footer">
                          <div class="row sec-bx bg-opacity-grey">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
            </div>
          </div>
        </section>
      </div>
    </div>';


    }elseif($type_row == 'log_in'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $images2 = wp_get_attachment_image_src($ses_image2,'');
    $images3 = wp_get_attachment_image_src($ses_image3,'');
    $output .='<div class="fullrock item5 overlay-full" style="background-image: url('.esc_url($images[0]).');">
                  <a onclick="window.history.go(-1); return false;" class="closebtn">
                    <img src="'.esc_url($images2[0]).'" class="closer" >
                  </a>
                  <div class="fullrock-content">
                    <section class="pb-100">
                      <div class="register contact-us">
                        <div class="container">
                          <img src="'.esc_url($images3[0]).'"   class="logo-footer">
                          <div class="row sec-bx bg-opacity-green">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
            </div>
          </div>
        </section>
      </div>
    </div>'; 


    }elseif($type_row == 'contact_slider'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<div class="top-header overlay bg-team" style="background-image: url('.esc_url($images[0]).');">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 col-md-5 col-lg-4">
                        <div class="wrapper">
                          <div class="heading">'.$ses_title.'</div>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-7 col-lg-8">
                        <div class="specs float-right">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
            </div>
          </div>
      </div>
    </div>'; 


    }elseif($type_row == 'contact_address'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-up pb-80">
                  <div class="h-services">
                    <div class="container">
                      <div class="sec-main sec-bg1">
                        <div class="row">
                          <div class="col-sm-12 text-center">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <p class="section-subheading">'.$ses_subtitle.'<b class="c-green">'.$ses_green_text.'</b></p>
                          </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
            </div>
          </div>
      </div>
    </section>'; 


    }elseif($type_row == 'contact_page'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal">
                  <div class="register contact-us">
                    <div class="container">
                      <div class="row b-solid m-0">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='
          </div>
      </div>
    </section>';

    }elseif($type_row == 'ssl_features'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="sec-normal sec-bg1">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="section-offer img-bg services">
                          <div class="row">
                            <div class="col-sm-12 text-center">
                              <h2 class="section-heading">'.$ses_title.'</h2>
                              <p class="section-subheading">'.$ses_subtitle.'</p>
                            </div>
                          </div>
                          <div class="tabs offers-tabs">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
              </div>
            </div>  
          </div>
      </div>
    </section>';

    }elseif($type_row == 'checkout_order'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .=' <section class="sec-normal">
                  <div class="best-plans pricing classic">
                    <div class="container">
                      <div class="sec-main sec-bg1">
                        <div class="row">
                          <div class="plans badge feat bg-green">'.$ses_green_text.'</div>
                          <div class="col-sm-12">
                            <h2 class="section-heading">'.$ses_title.'</h2>
                            <div class="table-responsive-lg">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
              </div>
              </div>
            </div>  
          </div>
      </div>
    </section>'; 


    }elseif($type_row == 'new_product'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .=' <section class="newproducts sec-normal overlay bg-shop" style="background-image: url('.esc_url($images[0]).');">
                    <div class="pricing classic tablepage">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 text-center">
                            <h2 class="section-heading text-white">'.$ses_title.'</h2>
                            <p class="section-subheading text-white">'.$ses_subtitle.'</p>
                          </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='
            </div>  
          </div>
      </div>
    </section>';                           
                          


}else{
    $output .= wpb_js_remove_wpautop($content);
    $output .= $this->endBlockComment('row');

}
echo wp_specialchars_decode(esc_attr($output),ENT_QUOTES);