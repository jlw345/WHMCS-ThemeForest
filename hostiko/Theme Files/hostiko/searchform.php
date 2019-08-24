<?php
/**
 * Template for displaying search forms in hostiko
 *
 * @package WordPress
 * @subpackage hostiko
 * @since 1.0
 * @version 1.0
 */
?>
<?php $unique_id =  uniqid( 'search-form-' ); ?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr($unique_id); ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'hostiko' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'hostiko' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'hostiko' ); ?></span></button>
</form>
