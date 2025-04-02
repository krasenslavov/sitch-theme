<?php
/**
 * Template Name: Nominate Your Single Friend
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
					Nominate your hot and single <em>friend</em>
				</h1>

				<h3 class="text-center">
					Know someone who is a total catch?<br />
					Help them out! Tell us a bit about your friend and we'll set up them up.
				</h3>

				<p class="text-center">
					Sitch is an invite-only matchmaking service. You can let them know you vouched for them up (or not!). They can
					thank you after we find them the one.
				</p>

				<div class="tally-form-embed">
					<iframe
						data-tally-src="https://tally.so/embed/nGBqrQ?alignLeft=1&hideTitle=1&transparentBackground=1&dynamicHeight=0"
						loading="lazy" width="100%" height="1140" frameborder="0" marginheight="0" marginwidth="0"
						title="Nominate your Single Friend"></iframe>
					<script>
						var d = document, w = "https://tally.so/widgets/embed.js", v = function () { "undefined" != typeof Tally ? Tally.loadEmbeds() : d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function (e) { e.src = e.dataset.tallySrc })) }; if ("undefined" != typeof Tally) v(); else if (d.querySelector('script[src="' + w + '"]') == null) { var s = d.createElement("script"); s.src = w, s.onload = v, s.onerror = v, d.body.appendChild(s); }
					</script>
				</div>
			</div>
		</section>
	</main>
<?php
get_footer();
