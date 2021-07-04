<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="row">

	<div class="col-md-8">
		<?php

		if (have_posts()) {

			// Load posts loop.
			while (have_posts()) {
				the_post();

				get_template_part('template-parts/content/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt'));
			}

			// Previous/next page navigation.
			twenty_twenty_one_the_posts_navigation();
		} else {

			// If no content, include the "No posts found" template.
			get_template_part('template-parts/content/content-none');
		}



		?>
	</div>
	<div class="col-md-4 mt-5">
		<?php get_template_part('template-parts/footer/sidebar-widgets'); ?>
	</div>

</div>
<?php
get_footer();
?>