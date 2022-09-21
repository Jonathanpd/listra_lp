<div class="form-lp">
    <div class="form-lp__content">
        <h3 class="form-lp__title">Você precisa desse serviço?</h3>
        <p class="form-lp__txt">Preencha o formulário e entraremos em contato</p>

        <form action="/" method="post">
            <div class="form-lp__input form-lp__input--name">
                <label for="fname">Nome*</label>
                <input type="text" id="fname" name="fname">
            </div>

            <div class="form-lp__input form-lp__input--email">
                <label for="femail">Email*</label>
                <input type="email" id="femail" name="femail" placeholder="nome@email.com">
            </div>

            <div class="form-lp__input form-lp__input--phone">
                <label for="fphone">Telefone*</label>
                <input type="tel" id="fphone" name="fphone" placeholder="(00) 0 0000 0000">
            </div>
            
            <span class="form-lp__submit">
                <input type="submit" value="Solicitar um orçamento">
            </span>

            <a class="form-lp__cta-btn" href="<?php the_field('link__url_cta_botao', 'option'); ?>">
                <div class="form-lp__btn-img">
                    <img
                        src="<?php the_field('icone_cta_botao', 'option'); ?>"
                        alt="icone do whatsapp"
                    >
                </div>
                <span class="form-lp__btn-txt">
                    <?php the_field('texto_cta_botao', 'option'); ?>
                </span>
            </a>
        </form>
    </div>
</div>