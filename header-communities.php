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
			</nav>
			<div class="hero hero-communities">
				<div class="container">
					<h1 class="text-center">
						<em>Powering</em> connections<br />
						in communities
					</h1>

					<p class="text-center py-4 w-75 mx-auto">
						Everyone says that run clubs, tech mixers, supper clubs, and networking events end up being a great place
						for single people to meet IRL. BUT you don't know who is single, it's hard to talk to everyone you think is
						cute, and sometimes your soulmate just wasn't at the same event as you. We have a solution for you!
					</p>

					<p class="text-center w-75 mx-auto">
						<strong>
							At Sitch, we know how to connect people who share common interests using a seamless blend of humans and
							AI.
						</strong>
					</p>
				</div>
			</div>
		</div>
	</header>
