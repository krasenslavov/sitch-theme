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
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand navbar-brand-sitch mx-auto">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sitch-logo.png" alt="Sitch logo" />
				</a>
			</nav>
			<div class="hero hero-landing">
				<div class="container">
					<h1 class="text-center text-uppercase mt-5 pt-5">
						SITCH SETS YOU UP
					</h1>

					<h2 class="text-center mb-0 pb-0">
						Just <em>in time</em> for<br />
						cuffing season.
					</h2>

					<p class="brand-download-button text-center py-4 my-5">
						<a href="https://apps.apple.com/us/app/sitch-nyc-dating/id6478976426" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/app-store-download-button.webp" alt="Download Sitch" />
						</a>
					</p>

					<h3 class="text-center">
						<em>The dating concierge for New York's elite</em>
					</h3>

					<p class="invite-code text-center text-uppercase">
						YOUR INVITE CODE: <span class="text-decoration-underline">CUFFING</span>
					</p>

					<div class="landing-steps">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-steps.webp" alt="Sitch steps"
							class="img-fluid landing-steps-desktop" />
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-steps-mobile.webp" alt="Sitch steps"
							class="img-fluid landing-steps-mobile" />
					</div>

					<div class="text-center">
						<a href="https://download.joinsitch.com/cuffingseason" class="apply-now-button" target="_balnk">
							Apply Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>
