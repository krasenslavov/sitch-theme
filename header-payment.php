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
	<header class="payment">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-md">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand navbar-brand-sitch mx-auto">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sitch-logo.png" alt="Sitch logo" />
				</a>
			</nav>

			<div class="hero hero-payment">
				<div class="container">
					<h3 class="text-center">
						How this works:
					</h3>

					<ul class="payment-nav">
						<li>
							<svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 8.7498L9 23.7498L3.5 16.8748L4.91 15.1123L9 20.2123L19.59 6.9873L21 8.7498Z" fill="white">
								</path>
							</svg>
							<span>
								Both of you need to say yes for it to count as a setup. Only then do we introduce you via group chat.
							</span>
						</li>
						<li>
							<svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 8.7498L9 23.7498L3.5 16.8748L4.91 15.1123L9 20.2123L19.59 6.9873L21 8.7498Z" fill="white">
								</path>
							</svg>
							<span>
								Every person is vetted and selected by our team of expert matchmakers for you.
							</span>
						</li>
						<li>
							<svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 8.7498L9 23.7498L3.5 16.8748L4.91 15.1123L9 20.2123L19.59 6.9873L21 8.7498Z" fill="white">
								</path>
							</svg>
							<span>
								Post date feedback so we keep improving who we set you up with.
							</span>
						</li>
						<li>
							<svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21 8.7498L9 23.7498L3.5 16.8748L4.91 15.1123L9 20.2123L19.59 6.9873L21 8.7498Z" fill="white">
								</path>
							</svg>
							<span>
								Unlimited access to our dating coach to help reply to texts, and navigate dating.
							</span>
						</li>
					</ul>

					<div class="payment-membership-tier">
						<form id="membership-tier" name="membership-tier" method="get" action="">
							<div class="membership-tier-body">
								<div class="membership-tier membership-tier-plus">
									<input type="radio" id="membership-tier-plus" name="membership-tier" value="membership-tier-plus"
										checked />
									<label for="membership-tier-plus" class="membership-tier-inner">
										<p class="membership-type">
											<span>✨ <span class="custom-text">Founding member</span></span>
										</p>

										<h4 class="custom-text">
											5 Setups
											<span>
												<strong>
													$124.99/mo<br />
													$24.99/Setup
												</strong>
											</span>
										</h4>
									</label>
								</div>
								<div class="membership-tier">
									<input type="radio" id="membership-tier-regular" name="membership-tier"
										value="membership-tier-regular" />
									<label for="membership-tier-regular" class="membership-tier-inner">
										<p class="membership-type">
											<span>&nbsp;</span>
										</p>

										<h4 class="custom-text">
											3 Setups
											<span>
												<strong>
													$89.99/mo<br />
													$29.99/Setup
												</strong>
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

		<div style="display: flex; gap: 10px; justify-content: space-between; align-items: flex-start; padding: 20px; border-top-right-radius: 20px; border-bottom-right-radius: 20px; background-color: #16212a; position: absolute; bottom: 30px; left: 0px; width: 360px;">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/why-sitch-thumb-1.webp" alt="" style="height: 48px !important;" />
			<p style="font-size: 80%; margin-bottom: 0;">
				"Lock in founding members pricing FOR LIFE. It's usually $50/Setup!"<br />
				<small>— Dini, matchmaker & co-founder of Sitch</small>
			</p>
		</div>
	</header>

	<script>
		function getQueryParam(param) {
			const urlParams = new URLSearchParams(window.location.search);
			return urlParams.get(param);
		}

		const env = getQueryParam('env');
		const isVip = (getQueryParam('vip') === 'true'); // Check if 'vip' parameter is set to 'true'

		console.log("Environment:", env);
		console.log("Is VIP:", isVip);

		let plusTierValue, regularTierValue;

		if (env === 'beta') {
			plusTierValue = 'SITCH_SETUP_05_BETA';
			regularTierValue = 'SITCH_SETUP_03_BETA';
		} else {
			plusTierValue = 'SITCH_SETUP_05';
			regularTierValue = 'SITCH_SETUP_03';
		}

		const plusTierInput = document.getElementById('membership-tier-plus');
		const regularTierInput = document.getElementById('membership-tier-regular');
		const vipBadges = document.querySelectorAll('.membership-pills .custom-badge');

		if (plusTierInput && regularTierInput) {
			plusTierInput.value = plusTierValue;
			regularTierInput.value = regularTierValue;

			console.log("Membership Tier Plus Value Set To:", plusTierInput.value);
			console.log("Membership Tier Regular Value Set To:", regularTierInput.value);

			vipBadges.forEach(badge => {
				badge.style.display = isVip ? 'inline' : 'none'; // Show or hide each badge
			});
		} else {
			console.error("Membership tier elements not found.");
		}
	</script>
