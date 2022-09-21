<section class="benefits">
	<div class="benefits__container">
		<div class="benefits__row">

			<ul class="benefits__list carousel">
				<li class="carousel-cell">
					<div class="benefits__item">
						<div class="benefits__icon">
							<img
								src="<?php echo get_template_directory_uri(); ?>/img/benefits/icon-3times.svg"
								alt=""
							>
						</div>
						<div class="benefits__txt">
							<p>3x mais rápido</p>
						</div>
					</div>
				</li>
				<li class="carousel-cell">
					<div class="benefits__item">
						<div class="benefits__icon">
							<img
								src="<?php echo get_template_directory_uri(); ?>/img/benefits/icon-bestprice.svg"
								alt=""
							>
						</div>
						<div class="benefits__txt">
							<p>melhor preço</p>
						</div>
					</div>
				</li>
				<li class="carousel-cell">
					<div class="benefits__item">
						<div class="benefits__icon">
							<img
								src="<?php echo get_template_directory_uri(); ?>/img/benefits/icon-card.svg"
								alt=""
							>
						</div>
						<div class="benefits__txt">
							<p>cartão ou boleto</p>
						</div>
					</div>
				</li>
			</ul>

		</div>
	</div>
</section>

<script> // Slider | Benefits
var flkty = new Flickity('.carousel');
function listraFunction(screenListra) {
	if ( screenListra.matches ) {
		flkty = new Flickity('.carousel');
		flkty.select( 1 );
	} else {
		flkty.destroy();
	}
}
var screenListra = window.matchMedia("(max-width: 800px)")
listraFunction(screenListra)
screenListra.addListener(listraFunction)
</script>