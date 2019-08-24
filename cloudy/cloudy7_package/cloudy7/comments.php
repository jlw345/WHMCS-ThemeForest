<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<?php if ( have_comments() ) : ?>
     <div class="row">
        <div class="col-md-12 col-lg-12 ">
          <div class="comments sec-bg1 b-solid">
               <div class="heading comment"><a href=""><?php comments_number( esc_html__('0 Comments', 'cloudy7'), esc_html__('1 Comment', 'cloudy7'), esc_html__('% Comments', 'cloudy7') ); ?></a></div>
               <div class="line"></div>
                    <?php wp_list_comments('callback=cloudy7_theme_comment'); ?>
          </div>
        </div>
     </div>

     <div class="col-md-12"> 
          <!-- START PAGINATION -->
      <?php
          if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
      ?>
          <div class="pagination_area">
               <nav>
                    <ul class="pagination">
                         <li> <?php paginate_comments_links( 
                        array(
                        'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'cloudy7' ),ENT_QUOTES),
                        'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'cloudy7' ),ENT_QUOTES),
                        ));  ?>
                          </li>
                    </ul>
               </nav>
          </div>
          <?php endif; ?>
          <!-- END PAGINATION --> 
     </div>
<?php endif; ?>
<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => '',        
                'class_form' => 'comments-form pt-4',                         
                'title_reply'=> esc_html__( 'Leave a Comment', 'cloudy7' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="row"><div class="col-sm-12 col-md-12 col-lg-6">
                                    <input id="name" type="text" name="author" placeholder="'.esc_attr__('Name', 'cloudy7').'" class="input" required="required" data-error="'.esc_attr__('Name is required.', 'cloudy7').'">
                                  </div>
                                  ',
                    'email' => '<div class="col-sm-6 col-md-12 col-lg-6">
                                  <input id="email" type="email" name="email" placeholder="'.esc_attr__('E-mail', 'cloudy7').'" class="input" required="required" data-error="'.esc_attr__('Valid email is required.', 'cloudy7').'">
                                </div>
                                </div>
                                  ',
                    'subject' => '<div class="row"><div class="col-sm-12">
                                    <input type="text" name="subject" placeholder="'.esc_attr__('Subject', 'cloudy7').'" class="input" required="required" data-error="'.esc_attr__('Subject is required.', 'cloudy7').'">
                                  </div></div>
                                  ',

                ) ),   
                'comment_field' => '<div class="row"><div class="col-sm-12">
                                      <textarea name="comment" '.$aria_req.' placeholder="'.esc_attr__('Comment...', 'cloudy7').'" class="input textarea" required="required" data-error="'.esc_attr__('Please , leave us a comment.', 'cloudy7').'"></textarea>
                                    </div></div>
                                    ',                
                 'label_submit' => esc_html__( 'Submit', 'cloudy7' ),
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>

                          

<?php if ( comments_open() ) : ?>
    <?php comment_form($comment_args); ?>
<?php endif; ?> 
         