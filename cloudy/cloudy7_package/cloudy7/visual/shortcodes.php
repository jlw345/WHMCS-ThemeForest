<?php 
$textdoimain = 'cloudy7';
$cloudy7_redux_demo = get_option('redux_demo');

global $pre_text;
$pre_text = 'VG ';


add_shortcode('text_slider_1', 'text_slider_1_func');
function text_slider_1_func($atts, $content = null){
    extract(shortcode_atts(array( 
     'type'=>'type1',
     'image'=>'',
     'title'=>'',
     'subtitle'=>'',
     'green_sub'=>'',
     'link'=>'',
     'text_btn'=>'',
     'text1'=>'',
     'text2'=>'',
     'text3'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>

    <?php if($type == 'type1') { ?>
    <div class="full overlay-skew item1 h-100" style="     
    background-image: url(<?php echo (esc_url($images[0]));?>);
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;" >
        <div class="vc-parent">
          <div class="vc-child">
            <div class="top-banner modern">
              <div class="container">
                <div class="banner-wrap">
                  <h1 class="heading"><?php echo esc_attr($title)?><span class="text-change"> </span>
                    <script type="text/javascript">

    document.addEventListener('DOMContentLoaded', function() {
    "use strict";
    
    textchange();
});
      /*----------------------*/
      function textchange(){
          var str = [" <?php echo $text1;?>     ",
            " <?php echo $text2;?>     ",
            " <?php echo $text3;?>               "];
            var pos = 0, a = 0;
            var html = "";
            function displayText() {
              if (pos > 2) pos = 0;
              if (a < str[pos].length) {
                html += str[pos].charAt(a);
                $(".text-change").html(html);
                a++;
            } else {
                a = 0;
                pos++;
                html = "";
            }
        }
        setTimeout(setInterval(displayText, 150), 200000000);
      }
      /*----------------------*/
    </script>
                  </h1>
                  <h3 class="subheading left"><?php echo esc_attr($subtitle)?>
                    <span class="c-green"><?php echo esc_attr($green_sub)?></span></h3>
                </div>
                <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    <?php } else {?>
    <div class="full overlay item2 h-100" style="     
    background-image: url(<?php echo (esc_url($images[0]));?>);
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;">
        <div class="vc-parent">
          <div class="vc-child">
            <div class="top-banner modern">
              <div class="container">
                <div class="banner-wrap">
                  <h1 class="heading"><?php echo esc_attr($title)?></h1>
                  <h3 class="subheading left"><?php echo esc_attr($subtitle)?></h3>
                </div>
                <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
              </div>
            </div>
          </div>
        </div>  
    </div>


    <?php } ?>
    
<?php  return ob_get_clean();
}

add_shortcode('pricing', 'pricing_func');
function pricing_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'image'=>'',
      'title'=>'',
      'from'=>'',
      'currency'=>'',
      'price'=>'',
      'period'=>'',
      'info1'=>'',
      'info2'=>'',
      'info3'=>'',
      'info4'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>
    <?php if($type == 'type1') { ?>
      <div class="col-md-4 col-lg-4">
          <div class="wrapper first">
            <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" >
            <div class="title"><?php echo esc_attr($title)?></div>
            <div class="fromer"><?php echo esc_attr($from)?></div>
            <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
            <ul class="list-info">
              <li><?php echo esc_attr($info1)?></li>
              <li><?php echo esc_attr($info2)?></li>
              <li><?php echo esc_attr($info3)?></li>
              <li><?php echo esc_attr($info4)?></li>
            </ul>
            <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
          </div>
      </div>
    <?php } elseif($type == 'type2') { ?>
      <div class="col-md-4 col-lg-4">
          <div class="wrapper">
            <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div>
            <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" >
            <div class="title"><?php echo esc_attr($title)?></div>
            <div class="fromer"><?php echo esc_attr($from)?></div>
            <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
            <ul class="list-info">
              <li><?php echo esc_attr($info1)?></li>
              <li><?php echo esc_attr($info2)?></li>
              <li><?php echo esc_attr($info3)?></li>
              <li><?php echo esc_attr($info4)?></li>
            </ul>
            <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
          </div>
      </div>
    <?php } else { ?>
      <div class="col-md-4 col-lg-4">
            <div class="wrapper third">
              <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" >
              <div class="title"><?php echo esc_attr($title)?></div>
              <div class="fromer"><?php echo esc_attr($from)?></div>
              <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
              <ul class="list-info">
                <li><?php echo esc_attr($info1)?></li>
                <li><?php echo esc_attr($info2)?></li>
                <li><?php echo esc_attr($info3)?></li>
                <li><?php echo esc_attr($info4)?></li>
              </ul>
              <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
            </div>
        </div>
      <?php } ?>
<?php  return ob_get_clean();
}


add_shortcode('service', 'service_func');
function service_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'icon'=>'',
      'title'=>'',
      'subtitle'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    ?>
    <?php if($type == 'type1') { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section">
          <i class="<?php echo esc_attr($icon)?>"></i>
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?> 
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php }elseif($type == 'type2') { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section">
          <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div> 
          <i class="<?php echo esc_attr($icon)?>"></i>
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?>
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php }else { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section">
          <div class="plans badge feat bg-grey"><?php echo esc_attr($badge)?></div> 
          <i class="<?php echo esc_attr($icon)?>"></i>
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?>
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
}


add_shortcode('best_services', 'best_services_func');
function best_services_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'icon'=>'',
      'title'=>'',
      'subtitle'=>'',
    ), $atts));
    ob_start();
    ?>
    <?php if($type == 'type1') { ?>
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="wrap-service">
          <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div> 
          <i class="<?php echo esc_attr($icon)?>"></i>
          <div class="heading"><?php echo esc_attr($title)?></div>
          <div class="text-info">
            <?php echo esc_attr($subtitle)?>
          </div>
        </div>
    </div>
    <?php } elseif($type == 'type2') { ?>
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="wrap-service">
          <div class="plans badge feat bg-grey"><?php echo esc_attr($badge)?></div> 
          <i class="<?php echo esc_attr($icon)?>"></i>
          <div class="heading"><?php echo esc_attr($title)?></div>
          <div class="text-info">
            <?php echo esc_attr($subtitle)?>
          </div>
        </div>
    </div>
    <?php }else {?>
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="wrap-service">
          <i class="<?php echo esc_attr($icon)?>"></i>
          <div class="heading"><?php echo esc_attr($title)?></div>
          <div class="text-info">
            <?php echo esc_attr($subtitle)?>
          </div>
        </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
}


add_shortcode('case_study', 'case_study_func');
function case_study_func($atts, $content = null){
    extract(shortcode_atts(array(
      'author'=>'',
      'content1'=>'',
      'content2'=>'',
      'italic'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    ?>
    <div class="swiper-slide">
        <h3 class="author"><?php echo esc_attr($author)?></h3>
        <div class="content-info">
          <p><?php echo esc_attr($content1)?></p>
          <div><?php echo esc_attr($content2)?></div>
          <em> <?php echo esc_attr($italic)?></em>
        </div>
        <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill ml-4"><?php echo esc_attr($text_btn)?></a>
    </div>

<?php  return ob_get_clean();
}


add_shortcode('text_slider_2', 'text_slider_2_func');
function text_slider_2_func($atts, $content = null){
    extract(shortcode_atts(array(
      'domain'=>'',
      'unit'=>'',
      'price'=>'',
    ), $atts));
    ob_start();
    ?>
    <li><?php echo esc_attr($domain)?> <div class="price"><sup><?php echo esc_attr($unit)?></sup><?php echo esc_attr($price)?></div></li>
<?php  return ob_get_clean();
}



add_shortcode('menu_domain_pricing', 'menu_domain_pricing_func');
function menu_domain_pricing_func($atts, $content = null){
    extract(shortcode_atts(array(
      'title1'=>'',
      'title2'=>'',
      'title3'=>'',
      'title4'=>'',
      'title5'=>'',
    ), $atts));
    ob_start();
    ?>
      <thead>
          <tr>
            <td class="bb-green title"><?php echo esc_attr($title1)?></td>
            <td class="bb-green title"><?php echo esc_attr($title2)?></td>
            <td class="bb-green title"><?php echo esc_attr($title3)?></td>
            <td class="bb-green title"><?php echo esc_attr($title4)?></td>
            <td class="bb-green title"><?php echo esc_attr($title5)?></td>
          </tr>
      </thead>
<?php  return ob_get_clean();
}

add_shortcode('domain_pricing', 'domain_pricing_func');
function domain_pricing_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'info'=>'',
      'unit1'=>'',
      'unit2'=>'',
      'unit3'=>'',
      'promotion'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    ?>
    <?php if($type == 'type1') { ?>
      <tr>
          <td><div class="badge bg-green mr-1"><?php echo esc_attr($badge)?></div><?php echo esc_attr($info)?></td>
          <td><?php echo esc_attr($unit1)?></td>
          <td><?php echo esc_attr($unit2)?></td>
          <td><span class="ltgh"><?php echo esc_attr($unit3)?></span>  <b class="c-green"><?php echo esc_attr($promotion)?></b></td>
          <td><a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a></td>
      </tr>
    <?php } elseif($type == 'type2') { ?>
      <tr>
          <td><div class="badge bg-green mr-1"><?php echo esc_attr($badge)?></div><?php echo esc_attr($info)?></td>
          <td><?php echo esc_attr($unit1)?></td>
          <td><?php echo esc_attr($unit2)?></td>
          <td><?php echo esc_attr($unit3)?></td>
          <td><a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a></td>
      </tr>
    <?php } elseif($type == 'type3') { ?>                
      <tr>
          <td><div class="badge bg-green mr-1"><?php echo esc_attr($badge)?></div><?php echo esc_attr($info)?></td>
          <td><?php echo esc_attr($unit1)?></td>
          <td><?php echo esc_attr($unit2)?></td>
          <td><i class="fas fa-times"></i></td>
          <td><a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a></td>
      </tr>
    <?php } elseif($type == 'type4') { ?>
      <tr>
          <td><div class="badge bg-green mr-1"><?php echo esc_attr($badge)?></div><?php echo esc_attr($info)?></td>
          <td><?php echo esc_attr($unit1)?></td>
          <td><?php echo esc_attr($unit2)?></td>
          <td><span class="ltgh"><?php echo esc_attr($unit3)?></span>  <b class="c-green"><?php echo esc_attr($promotion)?></b></td>
          <td><a href="<?php echo esc_url($link)?>" class="btn btn-default-fill disabled"><?php echo esc_attr($text_btn)?></a></td>
      </tr>
    <?php } else { ?>                
      <tr>
          <td class="border-0"><?php echo esc_attr($info)?></td>
          <td class="border-0">$<?php echo esc_attr($unit1)?></td>
          <td class="border-0"><i class="fas fa-times"></i></td>
          <td class="border-0"><i class="fas fa-times"></i></td>
          <td class="border-0"><a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a></td>
      </tr>
    <?php } ?>                                            
<?php  return ob_get_clean();
}



add_shortcode('email_pricing', 'email_pricing_func');
function email_pricing_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'title'=>'',
      'operating_system'=>'',
      'currency'=>'',
      'price'=>'',
      'period'=>'',
      'info1'=>'',
      'info2'=>'',
      'info3'=>'',
      'info4'=>'',
      'info5'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    ?>
    <?php if($type == 'type1') { ?>
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="wrapper first">
          <div class="title"><?php echo esc_attr($title)?></div>
          <div class="period"><?php echo esc_attr($operating_system)?></div>
          <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?><span class="period"><?php echo esc_attr($period)?></span></div>
          <ul class="list-info">
            <li><?php echo esc_attr($info1)?></li>
            <li><?php echo esc_attr($info2)?></li>
            <li><?php echo esc_attr($info3)?></li>
            <li><?php echo esc_attr($info4)?></li>
            <li><?php echo esc_attr($info5)?></li>
          </ul>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
  <?php } elseif($type == 'type2') { ?>
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="wrapper active">
          <div class="title"><?php echo esc_attr($title)?></div>
          <div class="period"><?php echo esc_attr($operating_system)?></div>
          <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?><span class="period"><?php echo esc_attr($period)?></span></div>
          <ul class="list-info">
            <li><?php echo esc_attr($info1)?></li>
            <li><?php echo esc_attr($info2)?></li>
            <li><?php echo esc_attr($info3)?></li>
            <li><?php echo esc_attr($info4)?></li>
            <li><?php echo esc_attr($info5)?></li>
          </ul>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
  <?php } else { ?>
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="wrapper third">
          <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div>
          <div class="title"><?php echo esc_attr($title)?></div>
          <div class="period"><?php echo esc_attr($operating_system)?></div>
          <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?><span class="period"><?php echo esc_attr($period)?></span></div>
          <ul class="list-info">
            <li><?php echo esc_attr($info1)?></li>
            <li><?php echo esc_attr($info2)?></li>
            <li><?php echo esc_attr($info3)?></li>
            <li><?php echo esc_attr($info4)?></li>
            <li><?php echo esc_attr($info5)?></li>
          </ul>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
  <?php } ?>          
<?php  return ob_get_clean();
}


add_shortcode('statistics', 'statistics_func');
function statistics_func($atts, $content = null){
    extract(shortcode_atts(array(
      'number'=>'',
      'title'=>'',
      'percent'=>'',
      'color'=>'',
      'subtitle'=>'',
    ), $atts));
    ob_start();
    ?>
    <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="skill-section">
          <div class="circle-wrapper">
            <div class="circle-entry clearfix">
              <div class="circle center-block color-dark-2" data-startdegree="0" data-dimension="180" data-text="<strong class='number'><?php echo esc_attr($number)?></strong><div class='title-round'><?php echo esc_attr($title)?></div>" data-width="5" data-fontsize="17" data-percent="<?php echo esc_attr($percent)?>" data-fgcolor="<?php echo esc_attr($color)?>" data-bgcolor="transparent" data-bordersize="3"> </div>
            </div>
            <p><?php echo esc_attr($subtitle)?></p>
          </div>
        </div>
    </div>

<?php  return ob_get_clean();
}


add_shortcode('partner', 'partner_func');
function partner_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>
    <div class="col-6 col-sm-6 col-md-3 pt-5">
        <img src="<?php echo esc_url($images[0]);?>" alt="<?php echo esc_attr__( 'Image', 'cloudy7' );?>">
    </div>
<?php  return ob_get_clean();
}


add_shortcode('trial', 'trial_func');
function trial_func($atts, $content = null){
    extract(shortcode_atts(array(
      'title'=>'',
      'subtitle'=>'',
    ), $atts));
    ob_start();
    ?>
    <div class="col-lg-7">
        <div class="column-support-txt">
          <div class="column-support-title"><?php echo esc_attr($title)?></div> 
          <div class="column-support-subtitle"><?php echo esc_attr($subtitle)?></div>
        </div>
    </div>
<?php  return ob_get_clean();
}


add_shortcode('text_slider_3', 'text_slider_3_func');
function text_slider_3_func($atts, $content = null){
    extract(shortcode_atts(array(
      'title'=>'',
      'image'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>
    <div class="col-sm-3 col-md-3 col-lg-3">
          <img src="<?php echo esc_url($images[0]);?>" height="42">
          <p><?php echo esc_attr($title)?></p>
    </div>
<?php  return ob_get_clean();
}


add_shortcode('features', 'features_func');
function features_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>
    <div class="col-xs-12 col-md-12 col-lg-6">
        <div class="wrappper">
          <img src="<?php echo esc_url($images[0]);?>" alt="<?php echo esc_attr__( 'Image', 'cloudy7' );?>">
          <h4 class="title">
            <?php echo esc_attr($title)?>
          </h4>
          <div class="desc">
            <?php echo esc_attr($subtitle)?>
          </div>
        </div>
    </div>
<?php  return ob_get_clean();
}


add_shortcode('plan_details', 'plan_details_func');
function plan_details_func($atts, $content = null){
    extract(shortcode_atts(array(
      'icon'=>'',
      'info'=>'',
    ), $atts));
    ob_start();
    ?>
      <div class="col-sm-12 col-md-6 col-lg-3 pt-2">
          <i class="<?php echo esc_attr($icon)?>"></i>
          <span class="number"><?php echo esc_attr($info)?></span>
      </div>
<?php  return ob_get_clean();
}


add_shortcode('plan_info', 'plan_info_func');
function plan_info_func($atts, $content = null){
    extract(shortcode_atts(array(
      'text1'=>'',
      'currency1'=>'',
      'price1'=>'',
      'period1'=>'',
      'text2'=>'',
      'currency2'=>'',
      'price2'=>'',
      'period2'=>'',
      'title'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    ?>
    <div class="col-md-12 col-lg-3">
        <div class="h-plans-info sec-bg3">
          <div class="header-wrap">
            <h6><?php echo esc_attr($text1)?><span class="ltgh"><sup><?php echo esc_attr($currency1)?></sup><?php echo esc_attr($price1)?><span class="period"><?php echo esc_attr($period1)?></span></span></h6>
            <div class="price"><?php echo esc_attr($text2)?><sup><?php echo esc_attr($currency2)?></sup><?php echo esc_attr($price2)?><span class="period"><?php echo esc_attr($period2)?></span></div> 
            <div class="heading"><?php echo wp_specialchars_decode(esc_attr($title) ,ENT_QUOTES);?></div>
            <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
          </div>
        </div>
    </div>
<?php  return ob_get_clean();
}


add_shortcode('pricing_home3', 'pricing_home3_func');
function pricing_home3_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'image'=>'',
      'title'=>'',
      'from'=>'',
      'currency'=>'',
      'price'=>'',
      'period'=>'',
      'info1'=>'',
      'info2'=>'',
      'info3'=>'',
      'info4'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>
    <?php if($type == 'type1') { ?>
      <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="wrapper border-0 first">
            <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" alt="">
            <div class="title"><?php echo esc_attr($title)?></div>
            <div class="fromer"><?php echo esc_attr($from)?></div>
            <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
            <ul class="list-info">
              <li><?php echo esc_attr($info1)?></li>
              <li><?php echo esc_attr($info2)?></li>
              <li><?php echo esc_attr($info3)?></li>
              <li><?php echo esc_attr($info4)?></li>
            </ul>
            <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
          </div>
      </div>
    <?php } else { ?>
      <div class="col-sm-12 col-md-4 col-lg-4">
          <div class="wrapper active">
            <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div>
            <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" alt="">
            <div class="title"><?php echo esc_attr($title)?></div>
            <div class="fromer"><?php echo esc_attr($from)?></div>
            <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
            <ul class="list-info">
              <li><?php echo esc_attr($info1)?></li>
              <li><?php echo esc_attr($info2)?></li>
              <li><?php echo esc_attr($info3)?></li>
              <li><?php echo esc_attr($info4)?></li>
            </ul>
            <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
          </div>
      </div>
    <?php } ?>  
<?php  return ob_get_clean();
}



add_shortcode('team', 'team_func');
function team_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'link1'=>'',
      'icon1'=>'',
      'link2'=>'',
      'icon2'=>'',
      'link3'=>'',
      'icon3'=>'',
      'link4'=>'',
      'icon4'=>'',
      'name'=>'',
      'job'=>'',
      'description'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>
      <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="wrapper">
            <div class="img-section">
              <img src="<?php echo (esc_url($images[0]));?>" alt="team" class="img-responsive">
              <div class="soc-icons-wrap">
                <div class="icons">
                  <a href="<?php echo esc_url($link1)?>"><i class="<?php echo esc_attr($icon1)?>"></i></a>
                  <a href="<?php echo esc_url($link2)?>"><i class="<?php echo esc_attr($icon2)?>"></i></a>
                  <a href="<?php echo esc_url($link3)?>"><i class="<?php echo esc_attr($icon3)?>"></i></a> 
                  <a href="<?php echo esc_url($link4)?>"><i class="<?php echo esc_attr($icon4)?>"></i></a>
                </div>
              </div>
            </div>
            <div class="team-info">
              <h3 class="heading"><?php echo esc_attr($name)?></h3>
              <div class="subheading"><?php echo esc_attr($job)?></div>
              <div class="desc">
                <?php echo esc_attr($description)?> 
              </div>
            </div>
          </div>
      </div>
<?php  return ob_get_clean();
}


add_shortcode('text_slider_4', 'text_slider_4_func');
function text_slider_4_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
      'link1'=>'',
      'text_btn1'=>'',
      'link2'=>'',
      'text_btn2'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>
      <div id="owl-demo" class="owl-carousel">
        <div class="full overlay item4 h-100" style="background-image: url(<?php echo (esc_url($images[0]));?>);
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;">
          <div class="vc-parent">
            <div class="vc-child">
              <div class="top-banner modern">
                <div class="container">
                  <div class="banner-wrap">
                    <h1 class="heading"><?php echo esc_attr($title)?></h1>
                    <h3 class="subheading left">
                      <span><?php echo esc_attr($subtitle)?></span>
                    </h3>
                  </div>
                  <a href="<?php echo esc_url($link1)?>" class="btn btn-default-green-fill mr-4"><?php echo esc_attr($text_btn1)?></a>
                  <a href="<?php echo esc_url($link2)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn2)?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php  return ob_get_clean();
}


add_shortcode('features_4', 'features_4_func');
function features_4_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>
      <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="wrap-service">
            <img src="<?php echo (esc_url($images[0]));?>" height="65" >
            <div class="heading"><?php echo esc_attr($title)?></div>
            <div class="text-info">
              <?php echo esc_attr($subtitle)?>
            </div>
          </div>
      </div>
<?php  return ob_get_clean();
}


add_shortcode('package_menu', 'package_menu_func');
function package_menu_func($atts, $content = null){
    extract(shortcode_atts(array(
      'title'=>'',
      'currency'=>'',
      'price'=>'',
      'period'=>'',
      'badge'=>'',
      'subtitle'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    ?>
      <td>
          <div class="title"><?php echo esc_attr($title)?></div>
          <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?><span class="period"><?php echo esc_attr($period)?></span></div>
          <div class="plans badge bg-grey"><?php echo esc_attr($badge)?></div>
          <div class="info"><?php echo esc_attr($subtitle)?></div>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a><br>
      </td>
<?php  return ob_get_clean();
}


add_shortcode('package_details', 'package_details_func');
function package_details_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'original_title'=>'',
      'title'=>'',
      'icon1'=>'',
      'icon2'=>'',
      'icon3'=>'',
      'text1'=>'',
      'text2'=>'',
      'text3'=>'',
      'link1'=>'',
      'text_btn1'=>'',
      'link2'=>'',
      'text_btn2'=>'',
      'link3'=>'',
      'text_btn3'=>'',
    ), $atts));
    ob_start();
    ?>
    <?php if($type == 'type1') { ?>
      <tr>
          <td>
            <div class="title-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo esc_attr($original_title)?>"><?php echo esc_attr($title)?>
            </div>
          </td>
          <td><i class="<?php echo esc_attr($icon1)?>"></i></td>
          <td><i class="<?php echo esc_attr($icon2)?>"></i></td>
          <td><i class="<?php echo esc_attr($icon3)?>"></i></td>
      </tr>
    <?php } elseif($type == 'type2') { ?>
      <tr>
          <td>
            <div id="element" class="title-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo esc_attr($original_title)?>"><?php echo esc_attr($title)?>
            </div>
          </td>
          <td><i class="<?php echo esc_attr($icon1)?>"></i></td>
          <td><i class="<?php echo esc_attr($icon2)?>"></i></td>
          <td><i class="<?php echo esc_attr($icon3)?>"></i></td>
      </tr>
    <?php } elseif($type == 'type3') { ?>
      <tr>
          <td class="title-table"><?php echo esc_attr($title)?></td>
          <td><i class="<?php echo esc_attr($icon1)?>"></i></td>
          <td><i class="<?php echo esc_attr($icon2)?>"></i></td>
          <td><i class="<?php echo esc_attr($icon3)?>"></i></td>
      </tr>
    <?php } elseif($type == 'type4') { ?>
      <tr>
          <td class="title-table"><?php echo esc_attr($title)?></td>
          <td><?php echo esc_attr($text1)?></td>
          <td><?php echo esc_attr($text2)?></td>
          <td><?php echo esc_attr($text3)?></td>
      </tr>
    <?php } else { ?>
      <tr>
          <td class="border-0"></td>
          <td><a href="<?php echo esc_url($link1)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn1)?></a></td>
          <td><a href="<?php echo esc_url($link1)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn2)?></a></td>
          <td><a href="<?php echo esc_url($link1)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn3)?></a></td>
      </tr>
    <?php } ?>
<?php  return ob_get_clean();
}


add_shortcode('pricing_home4', 'pricing_home4_func');
function pricing_home4_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'image'=>'',
      'title'=>'',
      'from'=>'',
      'currency'=>'',
      'price'=>'',
      'period'=>'',
      'info1'=>'',
      'info2'=>'',
      'info3'=>'',
      'info4'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>
    <?php if($type == 'type1') { ?>
      <div class="plan-container">
          <div class="wrapper">
            <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div> 
            <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" >
            <div class="title"><?php echo esc_attr($title)?></div>
            <div class="fromer"><?php echo esc_attr($from)?></div>
            <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
            <ul class="list-info">
              <li><?php echo esc_attr($info1)?></li>
              <li><?php echo esc_attr($info2)?></li>
              <li><?php echo esc_attr($info3)?></li>
              <li><?php echo esc_attr($info4)?></li>
            </ul>
            <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
          </div>
      </div>
    <?php } else { ?>
      <div class="plan-container">
          <div class="wrapper">
            <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" >
            <div class="title"><?php echo esc_attr($title)?></div>
            <div class="fromer"><?php echo esc_attr($from)?></div>
            <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
            <ul class="list-info">
              <li><?php echo esc_attr($info1)?></li>
              <li><?php echo esc_attr($info2)?></li>
              <li><?php echo esc_attr($info3)?></li>
              <li><?php echo esc_attr($info4)?></li>
            </ul>
            <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
          </div>
      </div>
    <?php } ?>
<?php  return ob_get_clean();
}


add_shortcode('question', 'question_func');
function question_func($atts, $content = null){
    extract(shortcode_atts(array(
      'question'=>'',
      'answer1'=>'',
      'answer2'=>'',
    ), $atts));
    ob_start();
    ?>
      <div class="panel-wrap">
          <div class="panel-title">
            <span><?php echo esc_attr($question)?></span>
            <div class="float-right">
              <i class="fa fa-plus"></i>
              <i class="fa fa-minus"></i>
            </div>
          </div>
          <div class="panel-collapse">
            <div class="wrapper-collapse">
              <div class="info">
                <ul class="list">
                  <li>
                    <p><?php echo esc_attr($answer1)?></p>
                    <p><?php echo esc_attr($answer2)?></p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
<?php  return ob_get_clean();
}


add_shortcode('services_slider', 'services_slider_func');
function services_slider_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'title'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="">
        <img src="<?php echo (esc_url($images[0]));?>" height="42" >
        <p><?php echo esc_attr($title)?></p>
    </div>
<?php  return ob_get_clean();
} 


add_shortcode('hosting_pricing', 'hosting_pricing_func');
function hosting_pricing_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'original_title'=>'',
      'title'=>'',
      'icon1'=>'',
      'icon2'=>'',
      'icon3'=>'',
      'text1'=>'',
      'text2'=>'',
      'text3'=>'',
      'link1'=>'',
      'text_btn1'=>'',
      'link2'=>'',
      'text_btn2'=>'',
      'link3'=>'',
      'text_btn3'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?>
    <?php if($type == 'type1') { ?>
    <tr>
        <td>
            <div class="title-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo esc_attr($original_title)?>"><?php echo esc_attr($title)?>
            </div>
        </td>
        <td><?php echo esc_attr($text1)?></td>
        <td><?php echo esc_attr($text2)?></td>
        <td><?php echo esc_attr($text3)?></td>
    </tr>
    <?php } elseif($type == 'type2') { ?>
    <tr>
        <td>
            <div id="element" class="title-table" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo esc_attr($original_title)?>"><?php echo esc_attr($title)?>
            </div>
        </td>
        <td><?php echo esc_attr($text1)?></td>
        <td><?php echo esc_attr($text2)?></td>
        <td><?php echo esc_attr($text3)?></td>
    </tr>
    <?php } elseif($type == 'type3') { ?>
    <tr>
          <td class="title-table"><?php echo esc_attr($title)?></td>
          <td><?php echo esc_attr($text1)?></td>
          <td><?php echo esc_attr($text2)?></td>
          <td><?php echo esc_attr($text3)?></td>
    </tr>
    <?php } elseif($type == 'type4') { ?>                      
    <tr>
          <td class="title-table"><?php echo esc_attr($title)?></td>
          <td><i class="<?php echo esc_attr($icon1)?>"></i></td>
          <td><i class="<?php echo esc_attr($icon2)?>"></i></td>
          <td><i class="<?php echo esc_attr($icon3)?>"></i></td>
    </tr>
    <?php } else { ?>                  
    <tr>
          <td class="border-0"></td>
          <td><a href="<?php echo esc_url($link1)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn1)?></a></td>
          <td><a href="<?php echo esc_url($link1)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn2)?></a></td>
          <td><a href="<?php echo esc_url($link1)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn3)?></a></td>
    </tr>
    <?php } ?>                                                      
<?php  return ob_get_clean();
}  


add_shortcode('hosting_service', 'hosting_service_func');
function hosting_service_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'icon'=>'',
      'title'=>'',
      'subtitle'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type == 'type1') { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section sec-grad-grey">
          <i class="<?php echo esc_attr($icon)?>"></i>
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?> 
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } elseif($type == 'type2') { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section sec-grad-grey">
          <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div> 
          <i class="<?php echo esc_attr($icon)?>"></i>
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?> 
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } else { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section sec-grad-grey">
          <div class="plans badge feat bg-grey"><?php echo esc_attr($badge)?></div> 
          <i class="<?php echo esc_attr($icon)?>"></i>
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?> 
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
  <?php } ?>
<?php  return ob_get_clean();
}    


add_shortcode('hosting_specification', 'hosting_specification_func');
function hosting_specification_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'original_title'=>'',
      'text1'=>'',
      'badge1'=>'',
      'text2'=>'',
      'badge2'=>'',
      'text3'=>'',
      'badge3'=>'',
      'text4'=>'',
      'badge4'=>'',
      'link1'=>'',
      'text_btn1'=>'',
      'link2'=>'',
      'text_btn2'=>'',
      'link3'=>'',
      'text_btn3'=>'',
      'link4'=>'',
      'text_btn4'=>'',
    ), $atts));
    ob_start();
    ?> 
    <?php if($type == 'type1') { ?>
    <tr>
        <td>
          <span class="title"><?php echo esc_attr($text1)?></span> <span class="badge bg-green"><?php echo esc_attr($badge1)?></span>
        </td>
        <td>
          <span class="title"><?php echo esc_attr($text2)?></span> <span class="badge bg-green"><?php echo esc_attr($badge2)?></span>
        </td>
        <td>
          <span class="title"><?php echo esc_attr($text3)?></span> <span class="badge bg-green"><?php echo esc_attr($badge3)?></span>
        </td>
        <td>
          <span class="title"><?php echo esc_attr($text4)?></span> <span class="badge bg-green"><?php echo esc_attr($badge4)?></span>
        </td>
    </tr>
    <?php } elseif($type == 'type2') { ?>
    <tr>
        <td>
          <div class="title-table" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<?php echo esc_attr($original_title)?>"><?php echo esc_attr($text1)?>
          </div>
        </td>
        <td><?php echo esc_attr($text2)?></td>
        <td><?php echo esc_attr($text3)?></td>
        <td><?php echo esc_attr($text4)?></td>
    </tr>
    <?php } elseif($type == 'type3') { ?>
    <tr>
        <td class="title-table"><?php echo esc_attr($text1)?></td>
        <td><?php echo esc_attr($text2)?></td>
        <td><?php echo esc_attr($text3)?></td>
        <td><?php echo esc_attr($text4)?></td>
    </tr>
    <?php } else { ?>                 
    <tr>
        <td class="border-0"><a href="<?php echo esc_url($link1)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn1)?></a></td>
        <td class="border-0"><a href="<?php echo esc_url($link2)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn2)?></a></td>
        <td class="border-0"><a href="<?php echo esc_url($link3)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn3)?></a></td>
        <td class="border-0"><a href="<?php echo esc_url($link4)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn4)?></a></td>
    </tr>
    <?php } ?>                                                
<?php  return ob_get_clean();
}   


add_shortcode('reseller_service', 'reseller_service_func');
function reseller_service_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type == 'type1') { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section">
          <img src="<?php echo (esc_url($images[0]));?>" height="60" >
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?> 
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } elseif($type == 'type2') { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section">
          <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div> 
          <img src="<?php echo (esc_url($images[0]));?>" height="60" >
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?> 
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } else { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section">
          <div class="plans badge feat bg-grey"><?php echo esc_attr($badge)?></div> 
          <img src="<?php echo (esc_url($images[0]));?>" height="60" >
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?> 
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
}  


add_shortcode('dedicated_slider', 'dedicated_slider_func');
function dedicated_slider_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="top-header item5 overlay" style="background-image: url(<?php echo (esc_url($images[0]));?>);">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-7 col-lg-8">
            <div class="wrapper">
              <div class="heading"><?php echo esc_attr($title)?></div>
              <div class="subheding">
                <?php echo esc_attr($subtitle)?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('dedicated_pricing', 'dedicated_pricing_func');
function dedicated_pricing_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'image'=>'',
      'title'=>'',
      'from'=>'',
      'currency'=>'',
      'price'=>'',
      'period'=>'',
      'info1'=>'',
      'info2'=>'',
      'info3'=>'',
      'info4'=>'',
      'info5'=>'',
      'green_text'=>'',
      'info6'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type == 'type1') { ?>
    <div class="col-md-4 col-lg-4">
        <div class="wrapper">
          <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" >
          <div class="title"><?php echo esc_attr($title)?></div>
            <div class="fromer"><?php echo esc_attr($from)?></div>
            <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
            <ul class="list-info">
              <li><?php echo esc_attr($info1)?></li>
              <li><?php echo esc_attr($info2)?></li>
              <li><?php echo esc_attr($info3)?></li>
              <li><?php echo esc_attr($info4)?></li>
              <li><?php echo esc_attr($info5)?></li>
            <li><div class="plans badge bg-green"><?php echo esc_attr($green_text)?></div><?php echo esc_attr($info6)?></li>
          </ul>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } else { ?>
    <div class="col-md-4 col-lg-4">
        <div class="wrapper">
          <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div>
          <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" >
          <div class="title"><?php echo esc_attr($title)?></div>
            <div class="fromer"><?php echo esc_attr($from)?></div>
            <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
            <ul class="list-info">
              <li><?php echo esc_attr($info1)?></li>
              <li><?php echo esc_attr($info2)?></li>
              <li><?php echo esc_attr($info3)?></li>
              <li><?php echo esc_attr($info4)?></li>
              <li><?php echo esc_attr($info5)?></li>
            <li><div class="plans badge bg-green"><?php echo esc_attr($green_text)?></div><?php echo esc_attr($info6)?></li>
          </ul>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
}


add_shortcode('video', 'video_func');
function video_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'video'=>'',
      'text_btn'=>'',
      'title'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <section class="services classic overlay item3" style="background-image: url(<?php echo (esc_url($images[0]));?>);">
      <div class="container">
        <div class="sec-main shadow-none">
          <div class="service-wrap">
            <div class="row">
              <div class="col-sm-12 text-center">
                <a href="#" class="btn btn-default-green-fill" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php echo esc_url($video)?>"><?php echo esc_attr($text_btn)?></a><br><br>
                <h2 class="section-heading text-white"><?php echo esc_attr($title)?></h2>
                <div id="videoModal" class="modal bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <button type="button" class="close rebutton" data-dismiss="modal" aria-hidden="true">&#x2715;</button>
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content border-0">
                        <div>
                            <iframe class="border-0 movie"></iframe>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php  return ob_get_clean();
}    

add_shortcode('dedicated_section', 'dedicated_section_func');
function dedicated_section_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
      'link'=>'',
      'text_btn'=>'',

    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type == 'type1') { ?>
    <div class="col-sm-12 col-md-12 col-lg-6">
      <div class="wrap-service">
        <i class="icon-indicateleft pasl opacity-3"></i>
        <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65">
        <div class="heading"><?php echo esc_attr($title)?></div>
        <div class="text-info"><?php echo esc_attr($subtitle)?></div>
        <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
      </div>
    </div>
    <?php } else { ?>
    <div class="col-sm-12 col-md-12 col-lg-6">
      <div class="wrap-service">
        <i class="icon-indicateright pasr opacity-3"></i>
        <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65">
        <div class="heading"><?php echo esc_attr($title)?></div>
        <div class="text-info"><?php echo esc_attr($subtitle)?></div>
        <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
      </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
}  


add_shortcode('wordpress_contact', 'wordpress_contact_func');
function wordpress_contact_func($atts, $content = null){
    extract(shortcode_atts(array(
      'icon'=>'',
      'title'=>'',
      'subtitle'=>'',
      'link_phone'=>'',
      'phone_number'=>'',
      'link_mail'=>'',
      'email'=>'',
    ), $atts));
    ob_start();
    ?> 
    <div class="col-md-12 col-lg-4 sec-bg4">
        <div class="form-contact">
          <i class="<?php echo esc_attr($icon)?>"></i>
          <h3 class="subtitle"><?php echo esc_attr($title)?></h3>
          <p><?php echo esc_attr($subtitle)?></p>
          <div class="info">
            <a href="<?php echo esc_url($link_phone)?>"><?php echo esc_attr($phone_number)?></a><br>
            <a href="<?php echo esc_url($link_mail)?>"><?php echo esc_attr($email)?></a>
          </div>
        </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('vps_slider', 'vps_slider_func');
function vps_slider_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div id="scroll" class="top-header item2 overlay" style="background-image: url(<?php echo (esc_url($images[0]));?>);">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-7 col-lg-8">
            <div class="wrapper">
              <div class="heading"><?php echo esc_attr($title)?></div>
              <div class="subheding">
                <?php echo esc_attr($subtitle)?>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
<?php  return ob_get_clean();
} 

add_shortcode('vps_portfolio', 'vps_portfolio_func');
function vps_portfolio_func($atts, $content = null){
    extract(shortcode_atts(array(
      'number'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <main class="cd-main-content">
      <div class="cd-tab-filter-wrapper">
        <div class="cd-tab-filter">
          <ul class="cd-filters">
            <li class="placeholder"> 
              <a data-type="all" href="#0"><?php echo esc_html__( 'All Servers', 'cloudy7' ); ?></a>
            </li> 
            <li class="filter"><a class="selected" href="#0" data-type="all"><?php echo esc_html__( 'All Servers', 'cloudy7' ); ?></a></li>
                    <?php 
                    $categories = get_terms('type');   
                     foreach( (array)$categories as $categorie){
                        $cat_name = $categorie->name;
                        $cat_slug = $categorie->slug;
                    ?>
                            <li class="filter" data-filter=".<?php echo esc_attr($cat_slug);?>"><a href="#0" data-type="<?php echo esc_attr($cat_slug);?>"><?php echo esc_attr($cat_name);?></a></li>
                    <?php } ?>
          </ul>
        </div>
      </div>
      <section class="cd-gallery">
        <div class="container">
          <ul class="p-0">
                    <?php 
                        $args = array(   
                                    'post_type' => 'Vps',   
                                    'paged' => $paged,
                                    'posts_per_page' => $number,
                                    'order' => $orderpost,
                                    'orderby' => $orderby, 
                                );  
                                $wp_query = new WP_Query($args);
                                $i = 1;
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                $i++;
                                $cates = get_the_terms(get_the_ID(),'type');
                                $cate_name ='';
                                $cate_slug = '';
                                      foreach((array)$cates as $cate){
                            if(count($cates)>0){
                                $cate_name .= $cate->name.'  ' ;
                                $cate_slug .= $cate->slug .' ';     
                                } 
                                } 
                    ?>
                    <?php $text_badge = get_post_meta(get_the_ID(),'_cmb_text_badge', true);?>
                    <?php $vps_image = get_post_meta(get_the_ID(),'_cmb_vps_image', true);?>
                    <?php $vps_title = get_post_meta(get_the_ID(),'_cmb_vps_title', true);?>
                    <?php $text_small = get_post_meta(get_the_ID(),'_cmb_text_small', true);?>
                    <?php $vps_currency = get_post_meta(get_the_ID(),'_cmb_vps_currency', true);?>
                    <?php $vps_price = get_post_meta(get_the_ID(),'_cmb_vps_price', true);?>
                    <?php $vps_period = get_post_meta(get_the_ID(),'_cmb_vps_period', true);?>
                    <?php $vps_info1 = get_post_meta(get_the_ID(),'_cmb_vps_info1', true);?>
                    <?php $vps_info2 = get_post_meta(get_the_ID(),'_cmb_vps_info2', true);?>
                    <?php $vps_info3 = get_post_meta(get_the_ID(),'_cmb_vps_info3', true);?>
                    <?php $vps_info4 = get_post_meta(get_the_ID(),'_cmb_vps_info4', true);?>
                    <?php $vps_info5 = get_post_meta(get_the_ID(),'_cmb_vps_info5', true);?>
                    <?php $vps_link = get_post_meta(get_the_ID(),'_cmb_vps_link', true);?>
                    <?php $text_btn = get_post_meta(get_the_ID(),'_cmb_text_btn', true);?>
            <li class="mix <?php echo esc_attr($cate_slug);?>">
              <div class="refine">
                <div class="wrapper bg-white">
                  <div class="plans badge feat bg-green"><?php echo htmlspecialchars_decode(esc_attr($text_badge));?></div> 
                  <img class="mb-3" src="<?php echo esc_url($vps_image);?>" height="65">
                  <div class="title"><?php echo htmlspecialchars_decode(esc_attr($vps_title));?></div>
                  <div class="fromer"><?php echo htmlspecialchars_decode(esc_attr($text_small));?></div>
                  <div class="price"><sup><?php echo htmlspecialchars_decode(esc_attr($vps_currency));?></sup><?php echo htmlspecialchars_decode(esc_attr($vps_price));?><span class="period"><?php echo htmlspecialchars_decode(esc_attr($vps_period));?></span></div>
                  <div class="list-info">
                    <div><?php echo htmlspecialchars_decode(esc_attr($vps_info1));?></div>
                    <div><?php echo htmlspecialchars_decode(esc_attr($vps_info2));?></div>
                    <div><?php echo htmlspecialchars_decode(esc_attr($vps_info3));?></div> 
                    <div><?php echo htmlspecialchars_decode(esc_attr($vps_info4));?></div>
                    <div><?php echo htmlspecialchars_decode(esc_attr($vps_info5));?></div>
                  </div>
                  <a href="<?php echo htmlspecialchars_decode(esc_attr($vps_link));?>" class="btn btn-default-green-fill"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                </div>
              </div>
            </li>
            <?php  endwhile;?>
            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
          </ul>
        </div>
      </section>
    </main>
<?php  return ob_get_clean();
} 


add_shortcode('vps_pricing', 'vps_pricing_func');
function vps_pricing_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'image'=>'',
      'title'=>'',
      'from'=>'',
      'currency'=>'',
      'price'=>'',
      'period'=>'',
      'info1'=>'',
      'info2'=>'',
      'info3'=>'',
      'info4'=>'',
      'info5'=>'',
      'green_text'=>'',
      'info6'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type == 'type1') { ?>
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="wrapper">
          <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" >
          <div class="title"><?php echo esc_attr($title)?></div>
            <div class="fromer"><?php echo esc_attr($from)?></div>
            <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
            <ul class="list-info">
              <li><?php echo esc_attr($info1)?></li>
              <li><?php echo esc_attr($info2)?></li>
              <li><?php echo esc_attr($info3)?></li>
              <li><?php echo esc_attr($info4)?></li>
              <li><?php echo esc_attr($info5)?></li>
          </ul>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } else { ?>
    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="wrapper">
          <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div>
          <img class="mb-3" src="<?php echo (esc_url($images[0]));?>" height="65" >
          <div class="title"><?php echo esc_attr($title)?></div>
            <div class="fromer"><?php echo esc_attr($from)?></div>
            <div class="price"><sup><?php echo esc_attr($currency)?></sup><?php echo esc_attr($price)?> <span class="period"><?php echo esc_attr($period)?></span></div>
            <ul class="list-info">
              <li><?php echo esc_attr($info1)?></li>
              <li><?php echo esc_attr($info2)?></li>
              <li><?php echo esc_attr($info3)?></li>
              <li><?php echo esc_attr($info4)?></li>
              <li><?php echo esc_attr($info5)?></li>
          </ul>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
}


add_shortcode('vps_video', 'vps_video_func');
function vps_video_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'video'=>'',
      'text_btn'=>'',
      'title'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <section class="services classic overlay item3 mb-80" style="background-image: url(<?php echo (esc_url($images[0]));?>);">
      <div class="container">
        <div class="sec-main m-0 shadow-none">
          <div class="service-wrap">
            <div class="row">
              <div class="col-sm-12 text-center">
                <a href="#" class="btn btn-default-green-fill" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php echo esc_url($video)?>"><?php echo esc_attr($text_btn)?></a><br><br>
                <h2 class="section-heading text-white"><?php echo esc_attr($title)?></h2>
                <div id="videoModal" class="modal bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <button type="button" class="close rebutton" data-dismiss="modal" aria-hidden="true">&#x2715;</button>
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content border-0">
                        <div>
                            <iframe class="border-0 movie"></iframe>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php  return ob_get_clean();
}

add_shortcode('domain_portfolio', 'domain_portfolio_func');
function domain_portfolio_func($atts, $content = null){
    extract(shortcode_atts(array(
      'number'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <main class="cd-main-content">
      <div class="cd-tab-filter-wrapper">
        <div class="cd-tab-filter">
          <ul class="cd-filters">
            <li class="placeholder"> 
              <a data-type="all" href="#0"><?php echo esc_html__( 'All Servers', 'cloudy7' ); ?></a>
            </li> 
            <li class="filter"><a class="selected" href="#0" data-type="all"><?php echo esc_html__( 'All Domains', 'cloudy7' ); ?></a></li>
                    <?php 
                    $categories = get_terms('type1');   
                     foreach( (array)$categories as $categorie){
                        $cat_name = $categorie->name;
                        $cat_slug = $categorie->slug;
                    ?>
                            <li class="filter" data-filter=".<?php echo esc_attr($cat_slug);?>"><a href="#0" data-type="<?php echo esc_attr($cat_slug);?>"><?php echo esc_attr($cat_name);?></a></li>
                    <?php } ?>
          </ul>
        </div>
      </div>
      <section class="cd-gallery">
        <div class="container">
          <ul class="p-0">
                    <?php 
                        $args = array(   
                                    'post_type' => 'Domain',   
                                    'paged' => $paged,
                                    'posts_per_page' => $number,
                                    'order' => $orderpost,
                                    'orderby' => $orderby, 
                                );  
                                $wp_query = new WP_Query($args);
                                $i = 1;
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                                $i++;
                                $cates = get_the_terms(get_the_ID(),'type1');
                                $cate_name ='';
                                $cate_slug = '';
                                      foreach((array)$cates as $cate){
                            if(count($cates)>0){
                                $cate_name .= $cate->name.'  ' ;
                                $cate_slug .= $cate->slug .' ';     
                                } 
                                } 
                    ?>
                    <?php $select = get_post_meta(get_the_ID(),'_cmb_select', true);?>
                    <?php $text_badge = get_post_meta(get_the_ID(),'_cmb_text_badge', true);?>
                    <?php $title = get_post_meta(get_the_ID(),'_cmb_title', true);?>
                    <?php $text_small = get_post_meta(get_the_ID(),'_cmb_text_small', true);?>
                    <?php $currency = get_post_meta(get_the_ID(),'_cmb_currency', true);?>
                    <?php $price = get_post_meta(get_the_ID(),'_cmb_price', true);?>
                    <?php $period = get_post_meta(get_the_ID(),'_cmb_period', true);?>
                    <?php $text_promo = get_post_meta(get_the_ID(),'_cmb_text_promo', true);?>
                    <?php $currency2 = get_post_meta(get_the_ID(),'_cmb_currency2', true);?>
                    <?php $price_promotion = get_post_meta(get_the_ID(),'_cmb_price_promotion', true);?>
                    <?php $period2 = get_post_meta(get_the_ID(),'_cmb_period2', true);?>
                    <?php $link = get_post_meta(get_the_ID(),'_cmb_link', true);?>
                    <?php $text_btn = get_post_meta(get_the_ID(),'_cmb_text_btn', true);?>
            <?php if($select == '1') { ?>
            <li class="mix <?php echo esc_attr($cate_slug);?>">
              <div class="refine">
                <div class="wrapper bg-white"> 
                  <h3 class="title os-light"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                  <p class="fromer"><?php echo htmlspecialchars_decode(esc_attr($text_small));?></p>
                  <div class="price"><sup><?php echo htmlspecialchars_decode(esc_attr($currency));?></sup><?php echo htmlspecialchars_decode(esc_attr($price));?> <span class="period"><?php echo htmlspecialchars_decode(esc_attr($period));?></span></div><br>
                  <p></p>
                  <a href="<?php echo htmlspecialchars_decode(esc_attr($link));?>" class="btn btn-default-green-fill"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                </div>
              </div>
            </li>
            <?php } else if($select == '2') { ?>
            <li class="mix <?php echo esc_attr($cate_slug);?>">
              <div class="refine">
                <div class="wrapper bg-white">
                  <div class="plans badge feat bg-green"><?php echo htmlspecialchars_decode(esc_attr($text_badge));?></div> 
                  <h3 class="title os-light"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                  <p class="fromer"><?php echo htmlspecialchars_decode(esc_attr($text_small));?></p>
                  <div class="price"><sup><?php echo htmlspecialchars_decode(esc_attr($currency));?></sup><?php echo htmlspecialchars_decode(esc_attr($price));?><span class="period"><?php echo htmlspecialchars_decode(esc_attr($period));?></span></div>
                  <p><?php echo htmlspecialchars_decode(esc_attr($text_promo));?><span class="ltgh"><sup><?php echo htmlspecialchars_decode(esc_attr($currency2));?></sup><?php echo htmlspecialchars_decode(esc_attr($price_promotion));?><span class="period"><?php echo htmlspecialchars_decode(esc_attr($period2));?></span></span></p>
                  <a href="<?php echo htmlspecialchars_decode(esc_attr($link));?>" class="btn btn-default-green-fill"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                </div>
              </div>
            </li>
            <?php } else { ?>
            <li class="mix <?php echo esc_attr($cate_slug);?>">
              <div class="refine">
                <div class="wrapper bg-white">
                  <div class="plans badge feat bg-grey"><?php echo htmlspecialchars_decode(esc_attr($text_badge));?></div> 
                  <h3 class="title os-light"><?php echo htmlspecialchars_decode(esc_attr($title));?></h3>
                  <p class="fromer"><?php echo htmlspecialchars_decode(esc_attr($text_small));?></p>
                  <div class="price"><sup><?php echo htmlspecialchars_decode(esc_attr($currency));?></sup><?php echo htmlspecialchars_decode(esc_attr($price));?><span class="period"><?php echo htmlspecialchars_decode(esc_attr($period));?></span></div><br>
                  <p></p>
                  <a href="<?php echo htmlspecialchars_decode(esc_attr($link));?>" class="btn btn-default-green-fill"><?php echo htmlspecialchars_decode(esc_attr($text_btn));?></a>
                </div>
              </div>
            </li>
            <?php } ?>
            <?php  endwhile;?>
            <li class="gap"></li>
            <li class="gap"></li>
            <li class="gap"></li>
          </ul>
        </div>
      </section>
    </main>
<?php  return ob_get_clean();
} 


add_shortcode('domain_contact', 'domain_contact_func');
function domain_contact_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'title'=>'',
      'text1'=>'',
      'text2'=>'',
      'contact1'=>'',
      'contact2'=>'',
      'link1'=>'',
      'link2'=>'',
      'link3'=>'',
      'text_btn'=>'',
      'icon1'=>'',
      'icon2'=>'',
      'icon3'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type == 'type1') { ?>
    <div class="col-md-4">
        <h4 class="subtitle"><?php echo esc_attr($title)?></h4>
        <p><?php echo esc_attr($text1)?><br><?php echo esc_attr($text2)?></p>
        <a class="golink text-dark" href="<?php echo esc_url($link1)?>"><?php echo esc_attr($contact1)?></a><br>
        <a class="golink text-dark" href="<?php echo esc_url($link2)?>"><?php echo esc_attr($contact2)?></a>
    </div>
    <?php } else { ?>
    <div class="col-md-4 social">
          <div onclick="openNav()" class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></div>
          <p><?php echo esc_attr($title)?></p>
          <a href="<?php echo esc_url($link1)?>" target="_blank"><i class="<?php echo esc_attr($icon1)?>"></i></a>
          <a href="<?php echo esc_url($link2)?>" target="_blank"><i class="<?php echo esc_attr($icon2)?>"></i></a>
          <a href="<?php echo esc_url($link3)?>" target="_blank"><i class="<?php echo esc_attr($icon3)?>"></i></a>
        </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
}  


add_shortcode('about_slider', 'about_slider_func');
function about_slider_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="top-header overlay item5" style="background-image: url(<?php echo (esc_url($images[0]));?>);">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-7 col-lg-8">
            <div class="wrapper">
              <div class="heading"><?php echo esc_attr($title)?></div>
              <div class="subheding">
                <?php echo esc_attr($subtitle)?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
}


add_shortcode('about', 'about_func');
function about_func($atts, $content = null){
    extract(shortcode_atts(array(
      'icon'=>'',
      'title'=>'',
      'subtitle'=>'',
    ), $atts));
    ob_start();
    ?> 
    <div class="col-md-6 col-lg-4">
        <div class="wrap-service">
          <i class="<?php echo esc_attr($icon)?>"></i>
          <div class="heading"><?php echo esc_attr($title)?></div>
          <div class="text-info">
            <?php echo esc_attr($subtitle)?>
          </div>
        </div>
    </div>
<?php  return ob_get_clean();
}


add_shortcode('team_slider', 'team_slider_func');
function team_slider_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'title'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="top-header overlay bg-team" style="background-image: url(<?php echo (esc_url($images[0]));?>);">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="wrapper">
              <div class="heading"><?php echo esc_attr($title)?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
}


add_shortcode('team_style1', 'team_style1_func');
function team_style1_func($atts, $content = null){
    extract(shortcode_atts(array(
      'name'=>'',
      'job'=>'',
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
      'icon1'=>'',
      'icon2'=>'',
      'icon3'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="col-sm-12 col-md-6 col-lg-4 pt-5">
        <h3 class="heading"><?php echo esc_attr($name)?></h3>
        <div class="subheading"><?php echo esc_attr($job)?></div>
        <div class="wrapper">
          <img src="<?php echo (esc_url($images[0]));?>" alt="team" class="img-responsive">
          <div class="more-info">
            <h5><?php echo esc_attr($title)?></h5>
            <p><?php echo esc_attr($subtitle)?></p>
            <div class="soc-icons">
              <i class="<?php echo esc_attr($icon1)?>"></i>
              <i class="<?php echo esc_attr($icon2)?>"></i>
              <i class="<?php echo esc_attr($icon3)?>"></i>
            </div>
            <div onclick="openNav()" class="btn btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></div>
          </div>
        </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('team_style2', 'team_style2_func');
function team_style2_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'icon1'=>'',
      'icon2'=>'',
      'icon3'=>'',
      'name'=>'',
      'job'=>'',
      'description'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="wrapper">
          <img src="<?php echo (esc_url($images[0]));?>" alt="team" class="img-responsive">
          <div class="soc-icons">
            <i class="<?php echo esc_attr($icon1)?>"></i>
            <i class="<?php echo esc_attr($icon2)?>"></i>
            <i class="<?php echo esc_attr($icon3)?>"></i>
          </div>
        </div>
        <div class="info">
          <h3 class="heading"><?php echo esc_attr($name)?></h3>
          <div class="subheading"><?php echo esc_attr($job)?></div>
          <div class="desc"><?php echo esc_attr($description)?></div>
          <div onclick="openNav()"  class="btn btn-default-green-fill"><?php echo esc_attr($text_btn)?></div>
        </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('register_form', 'register_form_func');
function register_form_func($atts, $content = null){
    extract(shortcode_atts(array( 
     

    ), $atts));
    ob_start();
    ?>
    <?php echo do_shortcode("[wpcrl_register_form]"); ?>

<?php  return ob_get_clean();
}

add_shortcode('login_form', 'login_form_func');
function login_form_func($atts, $content = null){
    extract(shortcode_atts(array( 
     

    ), $atts));
    ob_start();
    ?>
    <?php echo do_shortcode("[wpcrl_login_form]"); ?>

<?php  return ob_get_clean();
}

add_shortcode('contact_address', 'contact_address_func');
function contact_address_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'title'=>'',
      'text1'=>'',
      'text_info'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="col-md-12 col-lg-4">
        <div class="wrap-service">
          <img src="<?php echo (esc_url($images[0]));?>" alt="team" class="img-responsive">
          <div class="heading"><?php echo esc_attr($title)?></div>
          <p><small><?php echo esc_attr($text1)?></small></p>
          <div class="text-info"><?php echo esc_attr($text_info)?></div>
        </div>
    </div>
<?php  return ob_get_clean();
}


add_shortcode('map_area', 'map_area_func');
function map_area_func($atts, $content = null){
    extract(shortcode_atts(array(
      'latitude'=>'',
      'longitude'=>'',
      'image'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="google-maps">
      <div 
        class="map" 
        data-lat="<?php echo esc_attr($latitude)?>" 
        data-lng="<?php echo esc_attr($longitude)?>"  
        data-marker="<?php echo (esc_url($images[0]));?>"
        data-zoom="10" 
        data-style="style-1"
        ></div>
    </div>
<?php  return ob_get_clean();
}


add_shortcode('ssl_slider', 'ssl_slider_func');
function ssl_slider_func($atts, $content = null){
    extract(shortcode_atts(array(
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <div class="top-header overlay item4" style="background-image: url(<?php echo (esc_url($images[0]));?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="wrapper">
              <div class="heading"><?php echo esc_attr($title)?></div>
              <div class="subheding">
                <?php echo esc_attr($subtitle)?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php  return ob_get_clean();
}

add_shortcode('ssl_service', 'ssl_service_func');
function ssl_service_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'badge'=>'',
      'title'=>'',
      'subtitle'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type == 'type1') { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section">
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?> 
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } elseif($type == 'type2') { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section">
          <div class="plans badge feat bg-green"><?php echo esc_attr($badge)?></div> 
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?>
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } else { ?>
    <div class="col-sm-12 col-md-4">
        <div class="service-section">
          <div class="plans badge feat bg-grey"><?php echo esc_attr($badge)?></div> 
          <div class="title"><?php echo esc_attr($title)?></div>
          <p class="subtitle">
            <?php echo esc_attr($subtitle)?>
          </p>
          <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>
        </div>
    </div>
    <?php } ?>                
<?php  return ob_get_clean();
}


add_shortcode('ssl_features_menu', 'ssl_features_menu_func');
function ssl_features_menu_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'icon'=>'',
      'title'=>'',
    ), $atts));
    ob_start();
    ?>
    <?php if($type == 'type1') { ?>
    <li class=""> <i class="<?php echo esc_attr($icon)?>"></i> <div><?php echo esc_attr($title)?></div></li>
    <?php } else { ?>
    <li class="active"><i class="<?php echo esc_attr($icon)?>"></i>  <div><?php echo esc_attr($title)?></div></li>
    <?php } ?> 
<?php  return ob_get_clean();
}

add_shortcode('ssl_features_info', 'ssl_features_info_func');
function ssl_features_info_func($atts, $content = null){
    extract(shortcode_atts(array(
      'type'=>'type1',
      'image'=>'',
      'title'=>'',
      'subtitle'=>'',
      'link'=>'',
      'text_btn'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php if($type == 'type1') { ?>
    <div class="tabs-item">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <img src="<?php echo (esc_url($images[0]));?>" alt="offers" class="img-responsive w-100">
          </div>
          <div class="col-md-6 col-lg-7">
            <div class="heading">
              <?php echo esc_attr($title)?>
            </div>
            <div class="info">
              <?php echo esc_attr($subtitle)?>
            </div>
            <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>  
          </div>
        </div>
    </div>
    <?php } else { ?>
    <div class="tabs-item active">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <img src="<?php echo (esc_url($images[0]));?>" alt="offers" class="img-responsive w-100">
          </div>
          <div class="col-md-6 col-lg-7">
            <div class="heading">
              <?php echo esc_attr($title)?>
            </div>
            <div class="info">
              <?php echo esc_attr($subtitle)?>
            </div>
            <a href="<?php echo esc_url($link)?>" class="btn btn-default-green"><?php echo esc_attr($text_btn)?></a>  
          </div>
        </div>
    </div>
    <?php } ?>
<?php  return ob_get_clean();
}



add_shortcode('new_product', 'new_product_func');
function new_product_func($atts, $content = null){
    extract(shortcode_atts(array(
      'number'=>'',
    ), $atts));
    ob_start();
    $images = wp_get_attachment_image_src($image,'');
    ?> 
    <?php 
                        $args = array(   
                                    'post_type' => 'product',  
                                    'posts_per_page' => 3,
                                );  
                                $wp_query = new WP_Query($args);
                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
                    ?>
<?php the_title();?>
                  <?php endwhile;?>
<?php  return ob_get_clean();
}

