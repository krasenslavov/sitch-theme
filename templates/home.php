<?php
/**
 * Template Name: Home
 * Template Post Type: page
 *
 * Description: A custom template for displaying pages with a unique layout.
 *
 * @package SITCH
 */

get_header( 'home' );
?>
	<main>
		<section class="home">
			<div class="home-steps-outer">
				<div class="container">
					<h2>
						A personalized matchmaker, powered by humans + AI
						<span><em>(so you can stop wasting time on dating apps lol)</em></span>
					</h2>

					<div class="home-steps">
						<div class="home-step home-step-1">
							<h3>
								<span>1</span>
								<strong>
									Talk to us about who & what<br />
									you <em>really</em> want
								</strong>
							</h3>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-step-one.webp" alt="" class="img-fluid" />
						</div>
						<div class="home-step home-step-2">
							<h3>
								<span>2</span>
								<strong>
									We send you a <em>curated</em> match<br />
									from members
								</strong>

							</h3>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-step-two.webp" alt="" class="img-fluid" />
						</div>
						<div class="home-step home-step-3">
							<h3>
								<span>3</span>
								<strong>
									If you say yes, we <em>introduce</em><br />
									you via group chat
								</strong>
							</h3>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/home-step-three.webp" alt="" class="img-fluid" />
						</div>
						<div class="home-step home-step-4">
							<h3>
								<span>4</span>
								<strong>
									Go have fun<br />
									on your <em>date</em>!
								</strong>
							</h3>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="home">
			<h2>
				Our members are the most ambitious, fun,<br />
				<em>and busy New Yorkers, you know!</em>
			</h2>
			<div class="logos">
				<div class="logos-inner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos-strip.webp" alt="" />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos-strip.webp" alt="" />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos-strip.webp" alt="" />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos-strip.webp" alt="" />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos-strip.webp" alt="" />
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos-strip.webp" alt="" />
				</div>
			</div>
		</section>

		<section class="home">
			<h2>
				Our team reviews EVERY SINGLE APPLICATION.
				<span><em>We only accept 5% of people who apply.</em></span>
			</h2>

			<div class="testimonials">
				<blockquote class="testimony">
					<h4>
						"Finally stopped wasting hours of my life swiping on guys that I'm never actually going to meet. Much
						rather
						have Sitch curate it!"
					</h4>
					<p>
						Alya, 29
						<span>New York</span>
					</p>
				</blockquote>
				<blockquote class="testimony">
					<h4>
						"I met my boyfriend as my 4th setup on SITCH. I'm soooo happy I signed up.”
					</h4>
					<p>
						Natalie, 32
						<span>New York</span>
					</p>
				</blockquote>
				<blockquote class="testimony">
					<h4>
						"Absolutely love the app. Have recommended it to all my single friends, to save time and money!”
					</h4>
					<p>
						Mark, 35
						<span>New York</span>
					</p>
				</blockquote>
				<blockquote class="testimony">
					<h4>
						"Sitch is all about quality matches - haven't seen most of these people on other dating apps.”
					</h4>
					<p>
						Daniel, 36
						<span>New York</span>
					</p>
				</blockquote>
			</div>
		</section>
	</main>
<?php
get_footer();
