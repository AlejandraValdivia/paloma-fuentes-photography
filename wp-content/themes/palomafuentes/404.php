<?php get_header(); ?>
<section id="pf__404" class="pf__404">
        <div class="pf__404__content">
            <img src="<?php echo get_template_directory_uri(); ?>/images/gato.jpg" alt="Gatito">
            <div class="pf__404__info">
                <h2>Error 404</h2>
                <p>Lo siento la pagina que estas buscando no se encuentra
                    disponible.
                </p>
                <a href="<?php echo get_home_url();?>" class="pf__404__info__btn">Volver al Home</a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
