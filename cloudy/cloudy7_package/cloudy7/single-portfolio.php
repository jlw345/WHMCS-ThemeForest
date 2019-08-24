<?php
   $cloudy7_redux_demo = get_option('redux_demo');
   get_header(); 
?>
<?php 
                            while (have_posts()): the_post();
                                
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

<!-- page title start -->
    <div class="page-title-area" data-overlay="5" style="background-image:url(<?php echo esc_url($cloudy7_redux_demo['blog_image']['url']);?>)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title z-index text-center">
                        <h1><?php if(isset($cloudy7_redux_demo['portfolio_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($cloudy7_redux_demo['portfolio_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Portfolio Details', 'cloudy7' );
                                    }
                                    ?></h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item">
                                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php if(isset($cloudy7_redux_demo['item1'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($cloudy7_redux_demo['item1']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Home', 'cloudy7' );
                                    }
                                    ?></a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#"><?php if(isset($cloudy7_redux_demo['item2'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($cloudy7_redux_demo['item2']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Libarary', 'cloudy7' );
                                    }
                                    ?></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php if(isset($cloudy7_redux_demo['item_active'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($cloudy7_redux_demo['item_active']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'New Details', 'cloudy7' );
                                    }
                                    ?></li>
                                </ol>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area gray-bg pt-120 pb-105">
            <div class="container">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>
        </div>
    <?php  endwhile;?>
<!-- page title end -->
<?php
    get_footer();
?>