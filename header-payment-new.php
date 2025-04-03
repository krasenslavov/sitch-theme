<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Tell us what you are really looking for, get a curated introductions from your matchmaker. Invite only, apply now." />
		<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" />
		<?php wp_head(); ?>
		<script>
			window.onscroll = function (e) {
				((window.innerHeight + Math.round(window.scrollY)) >= document.body.offsetHeight - document.querySelector('footer').offsetHeight)
					? document.querySelector('.activate-fixed-container').classList.add('activate-end')
					: document.querySelector('.activate-fixed-container').classList.remove('activate-end');
			};
		</script>
	</head>
	<body <?php body_class( get_post_meta( get_the_ID(), 'body_class', true ) ); ?>>
	<header class="payment-new">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-md">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand navbar-brand-sitch mx-auto">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sitch-logo.png" alt="Sitch logo" />
				</a>
			</nav>

			<br />

			<div class="hero hero-payment">
				<div class="container">
					<h4 class="text-center">
						This is <strong>NOT</strong> a monthly subscription.
					</h4>
					<h4 class="text-center">
						We want you to &nbsp;<em>actually</em>go on dates.
					</h4>
					<h3 class="text-center">
						It only counts as a setup<br />
						if you both say yes.
					</h3>

					<ul class="payment-nav">
						<li>
							<svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 8.7498L9 23.7498L3.5 16.8748L4.91 15.1123L9 20.2123L19.59 6.9873L21 8.7498Z" fill="white">
								</path>
							</svg>
							<span>
								You can say no as many times as you like, when we offer to introduce someone.
							</span>
						</li>
						<li>
							<svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 8.7498L9 23.7498L3.5 16.8748L4.91 15.1123L9 20.2123L19.59 6.9873L21 8.7498Z" fill="white">
								</path>
							</svg>
							<span>
								Your setups never expire.
							</span>
						</li>
					</ul>

					<div class="payment-membership-tier-new">
						<form id="membership-tier" name="membership-tier" method="get" action="">
							<div class="membership-tier-body">
								<div class="membership-tier">
									<input type="radio" id="membership-tier-regular" name="membership-tier"
										value="membership-tier-regular" />
									<label for="membership-tier-regular" class="membership-tier-inner">
										<h4>
											3&nbsp;setups
											<span>
												<strong>$89.99/mo</strong><br />
												$29.99/Setup
											</span>
										</h4>
									</label>
								</div>
								<div class="membership-tier membership-tier-popular">
									<input type="radio" id="membership-tier-popular" name="membership-tier"
										value="membership-tier-popular" checked />
									<label for="membership-tier-popular" class="membership-tier-inner">
										<h4>
											<em>
												<em class="membership-type custom-text-new">MOST POPULAR</em><br />
												5&nbsp;setups
											</em>
											<span>
												<strong>$124.99/mo</strong><br />
												$24.99/Setup
											</span>
										</h4>
									</label>
								</div>
								<div class="membership-tier">
									<input type="radio" id="membership-tier-plus" name="membership-tier" value="membership-tier-plus" />
									<label for="membership-tier-plus" class="membership-tier-inner">
										<h4>
											8&nbsp;setups
											<span>
												<strong>$159.99/mo</strong><br />
												$19.99/Setup
											</span>
										</h4>
									</label>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>
