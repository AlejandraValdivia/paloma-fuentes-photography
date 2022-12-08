<?php get_header(); ?>
<section id="pf__single" class="pf__single">
        <div class="pf__single__content">
            <div class="pf__single__header">
                <a class="pf__single__header__btn-home" href="<?php echo get_home_url() ;?>">Volver al Home</a>
            </div>
            <div class="pf__single__header__thumb">
                <?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($work->ID), 'full', false, ''); 
                ?>
                <img src="<?php echo $src[0]; ?>" alt="<?php echo get_the_title(); ?>">
            </div>
        </div>
        <div class="pf__single__info">
            <h2><?php echo get_the_title(); ?></h2>
            <span><?php echo get_field("subtitulo"); ?></span>
            <?php echo get_field("descripcion"); ?>
        </div>
        <?php the_content(); ?>
        <ul class="pf__single__control-links">
            <?php 
            $prev_post = get_previous_post();
            if($prev_post) {
                echo '<li><a href="'.get_permalink($prev_post->ID).'">Anterior</a></li>';
            }
            $next_post = get_next_post();
            if($next_post) {
                echo '<li><a href="'.get_permalink($next_post->ID).'">Siguiente</a></li>';
            }
            ?>           
        </ul>
    </section>
<?php get_footer(); ?>
