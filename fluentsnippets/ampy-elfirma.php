<?php
/**
 * Ampy — "Din elektriker för hela hemmet" (homepage block 2)
 * FluentSnippets: PHP snippet.  Type = "PHP", run "Everywhere".
 *
 * Renders the block via a shortcode so it can be dropped into Bricks (a "Shortcode"
 * element or a Code element with [ampy_elfirma]), Gutenberg, or a widget.
 *
 * USAGE (defaults shown — override any attribute):
 *   [ampy_elfirma
 *      img_elservice="https://ampy.se/wp-content/uploads/…/elservice.webp"
 *      img_laddbox="https://ampy.se/wp-content/uploads/…/laddbox.webp"
 *      img_batteri="https://ampy.se/wp-content/uploads/…/batterilagring.webp"]
 *
 * If a photo URL is empty the card shows its on-brand aurora gradient (no broken image).
 * The CSS lives in the companion "CSS" snippet (ampy-elfirma.css). No JS required.
 */

if ( ! function_exists( 'ampy_elfirma_shortcode' ) ) {

	function ampy_elfirma_render_card( $mod, $label, $url, $img, $cta, $delay ) {
		$arrow = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14"/><path d="M13 6l6 6-6 6"/></svg>';
		$photo = $img ? ' style="--photo:url(\'' . esc_url( $img ) . '\')"' : '';

		return '
		<a class="ampy-elfirma__card is-' . esc_attr( $mod ) . ' rise ' . esc_attr( $delay ) . '" href="' . esc_url( $url ) . '" aria-label="' . esc_attr( $label . ' – ' . $cta ) . '">
			<span class="ampy-elfirma__media"' . $photo . '></span>
			<span class="ampy-elfirma__overlay"></span>
			<span class="ampy-elfirma__body">
				<span class="ampy-elfirma__cardtitle">' . esc_html( $label ) . '</span>
				<span class="ampy-elfirma__cta">' . esc_html( $cta ) . ' ' . $arrow . '</span>
			</span>
		</a>';
	}

	function ampy_elfirma_shortcode( $atts ) {
		$a = shortcode_atts( array(
			'title'         => 'Din elektriker för hela hemmet',
			'lead'          => 'Med över 3000 installationer per år hjälper vi dig med elinstallationer, laddbox och batterilagring, allt under ett och samma tak.',
			'cta'           => 'Läs mer',
			// destinations
			'url_elservice' => '/elservice/',
			'url_laddbox'   => '/laddboxar/',
			'url_batteri'   => '/batterilagring/',
			// photos (upload to the Media Library, paste the full URLs)
			'img_elservice' => '',
			'img_laddbox'   => '',
			'img_batteri'   => '',
		), $atts, 'ampy_elfirma' );

		ob_start(); ?>
		<section class="ampy-elfirma" aria-labelledby="ampy-elfirma-title">
			<div class="ampy-elfirma__wrap">
				<div class="ampy-elfirma__head">
					<h2 class="ampy-elfirma__title rise d1" id="ampy-elfirma-title"><?php echo esc_html( $a['title'] ); ?></h2>
					<p class="ampy-elfirma__lead rise d2"><?php echo esc_html( $a['lead'] ); ?></p>
				</div>
				<div class="ampy-elfirma__grid">
					<?php
					// Order is fixed: Elservice · Laddbox · Batterilagring.
					echo ampy_elfirma_render_card( 'elservice', 'Elservice',      $a['url_elservice'], $a['img_elservice'], $a['cta'], 'd3' );
					echo ampy_elfirma_render_card( 'laddbox',   'Laddbox',        $a['url_laddbox'],   $a['img_laddbox'],   $a['cta'], 'd4' );
					echo ampy_elfirma_render_card( 'batteri',   'Batterilagring', $a['url_batteri'],   $a['img_batteri'],   $a['cta'], 'd5' );
					?>
				</div>
			</div>
		</section>
		<?php
		return ob_get_clean();
	}

	add_shortcode( 'ampy_elfirma', 'ampy_elfirma_shortcode' );
}
