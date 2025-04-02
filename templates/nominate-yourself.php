<?php
/**
 * Template Name: Nominate Yourself
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
					Are you the chronically <em>hot</em><br />
					and single friend?
				</h1>

				<h3 class="text-center">
					Nominate yourself and we'll set you up.
				</h3>

				<p class="text-center">
					Sitch is an invite-only matchmaking service.<br />
					Tell us why you're a total catch and we'l set you up.
				</p>

				<div class="tally-form-embed">
					<iframe
						data-tally-src="https://tally.so/embed/np0ygJ?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=0"
						loading="lazy" width="100%" height="1080" frameborder="0" marginheight="0" marginwidth="0"
						title="Nominate Yourself">
					</iframe>
					<script>
						var d = document, w = "https://tally.so/widgets/embed.js", v = function () { "undefined" != typeof Tally ? Tally.loadEmbeds() : d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function (e) { e.src = e.dataset.tallySrc })) }; if ("undefined" != typeof Tally) v(); else if (d.querySelector('script[src="' + w + '"]') == null) { var s = d.createElement("script"); s.src = w, s.onload = v, s.onerror = v, d.body.appendChild(s); }
					</script>
				</div>
			</div>
		</section>
	</main>
<?php
get_footer();
