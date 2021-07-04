<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'right-sidebar' ) ) : ?>

	<div class="left-sidebar">
		<?php dynamic_sidebar( 'right-sidebar' ); ?>
	</div><!-- .widget-area -->

<?php endif; ?>
