<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
	<style>
		li {
			/* styles all li elements*/
			list-style-type: none !important;

		}

		ul,
		ol {
			font-family: var(--list--font-family) !important;
			margin: 0 !important;
			padding-left: calc(0 * var(--global--spacing-horizontal)) !important;
		}
	</style>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="container-fluid">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'twentytwentyone'); ?></a>

		<?php get_template_part('template-parts/header/site-header'); ?>

		<div id="content" class="container-fluid">
			<div id="primary" class="content-area">
				<main id="main" class="container-fluid" role="main">