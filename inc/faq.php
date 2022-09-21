<section class="faq">
	
		<div class="faq__row faq__row--one">
			<h2 class="faq__title">
                Dúvidas frequentes:
            </h2>

            <?php if( have_rows('faq_lista') ): ?>
                <ul class="faq__accord-list">

                <?php while( have_rows('faq_lista') ): the_row(); ?>

                    <li class="faq__accord-item">
                        <div class="faq__accord-btn">
                            <button>
                                <?php the_sub_field('titulo_botao'); ?>
                                <div class="faq__icon-btn">
                                    <?php include(TEMPLATEPATH . "/inc/arrow_svg.php"); ?>
                                </div>
                            </button> 
                        </div>

                        <div class="faq__accord-panel">
                            <p>
                                <?php the_sub_field('texto_conteudo'); ?>
                            </p>
                        </div>
                    </li>

                <?php endwhile; ?>

                </ul>
            <?php endif; ?>

		</div>        
	
</section>

<!-- Js accodion -->
<script>
var acc_listra = document.getElementsByClassName("faq__accord-btn");
var i_acc_listra;

for (i_acc_listra = 0; i_acc_listra < acc_listra.length; i_acc_listra++) {
    acc_listra[i_acc_listra].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
