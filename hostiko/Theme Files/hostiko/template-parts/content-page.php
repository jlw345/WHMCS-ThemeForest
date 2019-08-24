<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hostiko
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
	
	<?php if (has_post_thumbnail()) : ?>
      <div class="entry-media page-thumbnail">
          <div class="hostiko-thumbnail">

              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail('full'); ?>
              </a>

          </div>
      </div>
	<?php endif; ?>

    <div class="entry-content">
			<?php
			the_content();
			
			wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hostiko' ),
					'after'  => '</div>',
			) );
			?>
    </div><!-- .entry-content -->
	
	<?php if ( get_edit_post_link() ) : ?>
      <footer class="entry-footer">
				<?php
				edit_post_link(
						sprintf(
								wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Edit <span class="screen-reader-text">%s</span>', 'hostiko' ),
										array(
												'span' => array(
														'class' => array(),
												),
										)
								),
								get_the_title()
						),
						'<span class="edit-link">',
						'</span>'
				);
				?>
      </footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
