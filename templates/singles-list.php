<?php
/**
 * Template Name: The Singles List
 * Template Post Type: page
 *
 * Description: A custom template for displaying pages with a unique layout.
 *
 * @package SITCH
 */

get_header();
?>
	<main>
		<div class="singles-list">
			<section class="how-it-works">
				<div class="container">
					<h2 class="text-center m-0 mb-2">
						STICH presents
					</h2>

					<h1 class="text-center text-uppercase display-1 m-0">
						The Singles List
					</h1>

					<h2 class="text-center mt-0 mb-5">
						<em>February 2024</em>
					</h2>

					<h3 class="text-center">
						Is your friend a total catch?<br />
						Nominate them for the ultimate honor!
					</h3>

					<p class="text-center">
						We think New York dating is actually pretty great, when you're dating the right person. We're making the
						ultimate singles list of the 20 most eligible men and women in New York.
						<br /><br />
						So help us find them!
					</p>

					<div class="tally-form-embed">
						<iframe
							data-tally-src="https://tally.so/embed/3NMzjp?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=0"
							loading="lazy" width="100%" height="960" frameborder="0" marginheight="0" marginwidth="0"
							title="Eligible Singles Application"></iframe>
						<script>
							var d = document, w = "https://tally.so/widgets/embed.js", v = function () { "undefined" != typeof Tally ? Tally.loadEmbeds() : d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function (e) { e.src = e.dataset.tallySrc })) }; if ("undefined" != typeof Tally) v(); else if (d.querySelector('script[src="' + w + '"]') == null) { var s = d.createElement("script"); s.src = w, s.onload = v, s.onerror = v, d.body.appendChild(s); }
						</script>
					</div>

					<p class="text-center mt-4">
						Submissions are anonymous but we will reach out to people who are selected<br />
						to confirm they are up for it.
					</p>
				</div>
			</section>
		</div>
	</main>
<?php
get_footer();
