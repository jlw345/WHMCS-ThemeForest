<?php
/*
 * Template Name: Home 2
 * Description: A Page Template with a Page Builder design.
 */
$cloudy7_redux_demo = get_option('redux_demo');
get_header('home2'); ?>
<main>
<?php if (have_posts()){ ?>
  <?php while (have_posts()) : the_post()?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php }else {
    echo esc_html__( 'Page Canvas For Page Builder', 'cloudy7' );
  }?>
</main>
    <?php
get_footer();
?>