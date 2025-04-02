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
	<header class="communities">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-md">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand navbar-brand-sitch">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sitch-logo.png" alt="Sitch logo" />
				</a>
				<?php get_template_part( 'partials/nav' ); ?>
			</nav>
			<div class="hero hero-home">
				<div class="container-fluid">
					<h3 class="text-center">
						Tired of dating apps & the endless swiping?&nbsp;Conversations that go nowhere?<br />
						&nbsp;Meeting randos at bars?&nbsp;Maybe you need your very own matchmaker.
					</h3>

					<h1 class="text-center text-uppercase">
						SITCH SETS YOU UP
					</h1>

					<p class="download-button text-center pt-4">
						<a href="https://apps.apple.com/us/app/sitch-nyc-dating/id6478976426" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/app-store-download-button.webp" alt="Download Sitch" />
						</a>
					</p>

					<p class="text-center pt-4">
						<a href="https://www.instagram.com/sitch.nyc/" target="_blank" class="text-white">
							Sitch is invite only<br>
							Don't have an invite code? DM us
						</a>
					</p>

					<div class="featured-in">
						<h4 class="text-uppercase">Featured In:</h4>
						<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/new-york-times-logo.webp" alt="" class="img-fluid" /></div>
						<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/business-insider-logo.webp" alt="" class="img-fluid" /></div>
						<div><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cosmopolitan-logo.webp" alt="" class="img-fluid" /></div>
					</div>
				</div>
			</div>
		</div>
	</header>
