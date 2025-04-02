<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Tell us what you are really looking for, get a curated introductions from your matchmaker. Invite only, apply now." />
		<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class( get_post_meta( get_the_ID(), 'body_class', true ) ); ?>>
		<header>
			<div class="container-fluid">
				<nav class="navbar navbar-expand-md">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand navbar-brand-sitch">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sitch-logo.png" alt="Sitch logo" />
					</a>
					<?php get_template_part( 'partials/nav' ); ?>
				</nav>
			</div>
		</header>
