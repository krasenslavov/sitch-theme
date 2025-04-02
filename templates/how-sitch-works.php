<?php
/**
 * Template Name: How SITCH Works
 * Template Post Type: page
 *
 * Description: A custom template for displaying pages with a unique layout.
 *
 * @package SITCH
 */

get_header();
?>
	<main>
		<section class="how-it-works">
			<div class="container">
				<h1 class="text-center">
					A personalized matchmaker, powered by humans + AI
				</h1>

				<h1 class="text-center">
					How&nbsp;Sitch <em>works</em>
				</h1>

				<div class="how-it-works-step">
					<h2>
						<span>1</span>
						<strong class="custom-text">Talking about what you want</strong> >> Writing random prompts
					</h2>
					<p>
						You don't need try to be funny in your prompts like other apps (which is so annoying tbh). Instead, we ask
						you questions to really get to know you (the real you).
					</p>
					<p class="text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/how-it-works-1.webp" alt="" />
					</p>
				</div>

				<div class="how-it-works-step">
					<h2>
						<span>2</span>
						<strong class="custom-text">Curated profiles</strong> >> Endless swiping
					</h2>
					<p>
						Instead of constantly swiping, your matchmaker uses your answers to send you curated profiles. If someone
						doesn't match your values, vibes and personality - we don't show you that person at all.
					</p>
					<p class="text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/how-it-works-2.webp" alt="" />
					</p>
				</div>

				<div class="how-it-works-step">
					<h2>
						<span>3</span>
						<strong class="custom-text">Group chat introductions</strong> >> Opening lines
					</h2>
					<p>
						We're tired of trying to come up with good opening lines, or waiting for someone to text after you have
						matched. With Sitch, if you say yes, and the other person says yes, we create a group chat and introduces
						you, just like a friend would.
					</p>
					<p class="text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/how-it-works-3.webp" alt="" />
					</p>
				</div>
			</div>
		</section>
	</main>
<?php
get_footer();
