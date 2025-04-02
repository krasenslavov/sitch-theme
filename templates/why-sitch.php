<?php
/**
 * Template Name: Why Sitch
 * Template Post Type: page
 *
 * Description: A custom template for displaying pages with a unique layout.
 *
 * @package SITCH
 */

get_header();
?>
<main>
		<section class="why-sitch">
			<div class="container">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/why-sitch-cover.webp" alt="Why Sitch"
					class="img-fluid why-sitch-cover-desktop" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/why-sitch-cover-mobile.webp" alt="Why Sitch"
					class="img-fluid why-sitch-cover-mobile" />

				<div class="stat-group">
					<div class="ws-stat">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.59 2.99998L7.08 8.50998L3.41 4.82998L2 6.23998L7.08 11.33L14 4.40998L12.59 2.99998Z"
								fill="#080808" />
						</svg>
						98% fit for Alya on values + goals
					</div>
					<div class="ws-stat">
						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.59 2.99998L7.08 8.50998L3.41 4.82998L2 6.23998L7.08 11.33L14 4.40998L12.59 2.99998Z"
								fill="#080808" />
						</svg>
						84% fit for Alya on interests
					</div>
				</div>

				<p class="text-center">Dini, one of the co-founders, has set up 250+ first dates (and 3 weddings so far!). She
					has a secret formula that uses 75+ attributes that have different importance levels, and are attractors +
					repellers to see if two people would be a good match. We use AI to map your answers against these attributes,
					and look for hidden patterns that a human might miss.</p>

				<p class="text-center">But then we make sure that our team of real humans actually reviews the matches. All our
					matchmakers have been trained by Dini, and are people you would want to be friends with in IRL (so you can
					trust them!)</p>

				<div class="image-group">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/why-sitch-thumb-1.webp" alt="" />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/why-sitch-thumb-2.webp" alt="" />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/why-sitch-thumb-3.webp" alt="" />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/why-sitch-thumb-4.webp" alt="" />
				</div>

				<h2 class="text-center">
					Who is <em>behind</em> Sitch?
				</h2>

				<div class="card-group">
					<div class="ws-card">
						<p>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/why-sitch-thumb-1.webp" alt="" />
						</p>
						<p>
							<a href="https://www.linkedin.com/in/nandini-mullaji/" target="_blank" class="custom-text">Dini
								Mullaji</a> is the the fun, Stanford MBA version of Sima Aunty from Indian Matchmaking. She loves love -
							she has set up 100s of people (and 3 marriages) and has popular substack on dating <a
								href="https://gurunandinisays.substack.com/" target="_blank" class="custom-text">Guru Nandini Says</a>.
							She has previously built two profitable consumer apps in dating and education, and has a passion for
							prompt engineering.
						</p>
					</div>
					<div class="ws-card">
						<p>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/why-sitch-thumb-5.webp" alt="" />
						</p>
						<p>
							<a href="https://www.linkedin.com/in/depue/" target="_blank" class="custom-text">Chad DePue</a> worked at
							Snapchat, Whisper, Uniswap and Microsoft and loves building social apps. He built a startup in South
							America and sold it once. He just moved to NYC and actually met his fiancée on a dating app.
						</p>
					</div>
				</div>

				<h3>
					Chad and Dini got set up by a mutual friend who thought they were the right team to make dating suck less.
					(<em>Big shoutout to Annabel!</em>)
				</h3>
			</div>
		</section>
	</main>
<?php
get_footer();
