
	<footer class="footer-lp">
		<div class="footer-lp__content footer-lp__content--logo">
			<div class="container_mw-1367">
				<a href="<?php echo get_home_url(); ?>">
					<img src="<?php the_field('logo', 'option'); ?>" alt="<?php the_field('logo_text_alt', 'option'); ?>">
				</a>
			</div>
		</div>
	</footer>

	<!-- Inicio Wordpress Footer -->
	<?php wp_footer(); ?>
	<!-- Final Wordpress Footer -->

	</body>
</html>

<!-- The Modal | Button Mobile -->
<div class="listra-modal__mobile">
	<div class="listra-modal__btn-mobile">
		<div class="listra-modal__whatsapp-icon">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icon-whatsapp-39px.svg" alt="icone do whatsapp">
		</div>
		<button id="listra-modal__btn" class="listra-modal__btn">SOLICITAR UM ORÇAMENTO</button>
	</div>
</div>
<!-- The Modal | content -->
<div id="listra-modal__content" class="listra-modal__content">
  <div class="listra-modal__row">
	<div class="listra-modal__form-content">
		<span class="listra-modal__close">&times;</span>
		<?php //FORM
			include(TEMPLATEPATH . "/inc/form.php");
		?>
	</div>
  </div>
</div>

<script> // modal / mobile
var listra_modal = document.getElementById("listra-modal__content");
var listra_btn = document.getElementById("listra-modal__btn");
var listra_span = document.getElementsByClassName("listra-modal__close")[0];

listra_btn.onclick = function() {
	listra_modal.style.display = "flex";
}
listra_span.onclick = function() {
	listra_modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == listra_modal) {
    listra_modal.style.display = "none";
  }
}
</script>