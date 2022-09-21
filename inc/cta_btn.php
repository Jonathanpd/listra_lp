<a
    class="cta-btn cta-btn__btn-link"
    href="<?php the_field('link__url_cta_botao', 'option'); ?>"
>
    <div class="cta-btn__btn-img">
        <img
            src="<?php the_field('icone_cta_botao', 'option'); ?>"
            alt="icone do whatsapp"
        >
    </div>
    <span class="cta-btn__btn-txt">
        <?php the_field('texto_cta_botao', 'option'); ?>
    </span>
</a>