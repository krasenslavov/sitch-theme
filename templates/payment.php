<?php
/**
 * Template Name: Payment
 * Template Post Type: page
 *
 * Description: A custom template for displaying pages with a unique layout.
 *
 * @package SITCH
 */

get_header( 'payment' );
?>
	<main>
		<section id="why-sitch" class="why-sitch">
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

		<section id="how-it-works" class="how-it-works">
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
		</section>

		<section id="faqs" class="faqs">
			<h1 class="text-center">
				Questions we know you have
			</h1>

			<div id="faqs-accordion" class="accordion">
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
							aria-expanded="true" aria-controls="collapseOne">
							1. Why does Sitch work?
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								Your trainer tells you how to get in shape, your dietician tells you what to eat, your therapist tells
								you how to sort through your emotions. But when it comes to love, the hardest and most important thing
								of all, you are supposed to do it all yourself!? Sitch is your dating concierge who helps you figure out
								what you want, introduces you to people that you would vibe with, and gives you advice along the way.
								You can't just leave love to chance!
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
							aria-expanded="true" aria-controls="collapseTwo">
							2. How is Sitch different from other apps?
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								Other apps make you do all the work yourself - swiping on people, figuring out if you would vibe with
								them through their limited profiles, coming up with good opening lines - and hopefully maybe you will
								get a date out of this that doesn't suck. Sitch does the work for you - we are your own personal dating
								concierge. We screen candidates, we check compatibility through values, goals and personality traits, we
								write the opening group chat message. All you have to do is go on the date! (And tell us how it went so
								we can use that to introduce you to even better people!)
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
							aria-expanded="true" aria-controls="collapseThree">
							3. Who is on Sitch?
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								Think of the hottest person you know, the most interesting person you know, and the most ambitious
								person you know. Assuming that they are all single, they are probably on Sitch. Our members value their
								time - and don't want to waste it - on endless swiping, texting, or going on bad dates. They want meet
								people IRL who they actually vibe with, and actually have FUN dating
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
							aria-expanded="true" aria-controls="collapseFour">
							4. How do we keep Sitch safe?
						</button>
					</h2>
					<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								We're invite-only. We want to make sure that the people you are getting set up with are people we would
								want to get set up with too! So you need to be invited to the app to use it, and then our team (of real
								humans) reviews each app to make sure you have the right vibe and background. We also check the
								verification selfie so we know you're not catfishing (or using Facetune too much)
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
							aria-expanded="true" aria-controls="collapseFive">
							5. What if I don't live in New York?
						</button>
					</h2>
					<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								We're only matchmaking in New York for now, but will be expanding to other cities in January 2025. If
								you don't live here but visit frequently, you can definitely sign up to get set up when you are in town.
								There's a ton of our members who live between NYC and Miami / SF/ Austin and LA.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
							aria-expanded="true" aria-controls="collapseSix">
							6. Is there a free version?
						</button>
					</h2>
					<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								Nope, our tech + team takes $$ to run! But more importantly finding love is the most important journey
								that we go on, and we believe that paying for Sitch shows that you are serious and committed to actually
								meeting people IRL and not just swiping when you are bored.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
							aria-expanded="true" aria-controls="collapseSeven">
							7. Why is Sitch more expensive than other dating apps?
						</button>
					</h2>
					<div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								Our regular tier is priced the same as other premium dating apps. Our founding membership is more
								expensive since there is an actual human who is reviewing all of your matches before you are introduced
								to them, to make sure they are actually someone you would vibe with.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
							aria-expanded="true" aria-controls="collapseEight">
							8. Can I cancel my membership?
						</button>
					</h2>
					<div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								Yes, you can cancel membership anytime. You get charged every month on the same day, and as long as you
								cancel before that date, you will not be charged going forward. See our terms of use for specifics for
								your state.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine"
							aria-expanded="true" aria-controls="collapseNine">
							9. What do you do with my data?
						</button>
					</h2>
					<div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								We do not sell your data. We do not give your data to advertisers. We do not train AI models on your
								personally identifiable information.
							</p>
							<p>
								We do use a few select partners, like Amazon Web Services, and third party AI partners, like OpenAI. We
								have Data Protection Agreements in place which protect how our partners use your data - they also will
								not reuse or train on your data!
							</p>
							<p>
								(For a lot more specifics, see our <a href="https://content.sitch.net/privacy-policy/"
									target="_blank">Privacy Policy</a>.)
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen"
							aria-expanded="true" aria-controls="collapseTen">
							10. How do I contact you?
						</button>
					</h2>
					<div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								You can email us at <a href="mailto:support@unusual.inc">support@unusual.inc</a>. For legal or security
								issues, you can email us at <a href="mailto:legal@unusual.inc">legal@unusual.inc</a> or <a
									href="mailto:security@unusual.inc">security@unusual.inc</a>.
							</p>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven"
							aria-expanded="true" aria-controls="collapseEleven">
							11. Where are your Terms Privacy Policy?
						</button>
					</h2>
					<div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
						<div class="accordion-body">
							<p>
								Here are links to our <a href="https://content.sitch.net/terms-of-use/" target="_blank">Terms of
									Use</a>, <a href="https://content.sitch.net/privacy-policy/" target="_blank">Privacy Policy</a>, and
								Acceptable Use Policy, and Community Guidelines.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="activate-fixed-container">
			<a href="#" target="_blank" class="activate-button">
				Activate your membership
			</a>
		</div>
	</main>
<?php
get_footer();
