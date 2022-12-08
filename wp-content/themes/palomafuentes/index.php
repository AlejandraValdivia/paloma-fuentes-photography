<?php get_header(); ?>
<section id="pf__bio" class="pf__bio">
        <div class="pf__bio__content">
            <?php echo get_field("biografia_parte_1", 5); ?>
        </div>
    </section>
    <section id="pf__works" class="pf__works">
        <div class="pf__works__content">
            <h2 class="pf__works__title">Works</h2>
            <div class="pf__works__slider">
                <?php
                global $post;
                $works_args = array(
                    'post_type' => 'works',
                    'post_status' => 'published',
                    'numberposts' => 12
                );
                $works_posts = get_posts($works_args);

                if(!empty($works_posts)) {
                    foreach($works_posts as $work) {
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($work->ID), 'full', false, '');
                        ?>
                        <div class="pf__works__slider__item">
                            <div class="pf__works__slider__item__content">
                                <img class="pf__works__slider__item__thumb" src="<?php echo $src[0];?>" alt="<?php echo get_the_title($work->ID);?>">
                                <div class="pf__works__slider__item__info">
                                    <h2><?php echo get_the_title($work->ID); ?></h2>
                                    <span><?php echo get_field('subtitulo', $work->ID); ?></span>
                                    <p><?php echo get_field('sinopsis', $work->ID); ?></p>
                                    <a class="pf__works__slider__item__info__btn" href="<?php echo get_permalink($work->ID);?>">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <?php }
                }
                ?>
            </div>
        </div>
        <div class="pf__works__slider__btn-next">
            →
        </div>
        <div class="pf__works__slider__btn-prev">
            ←
        </div>
    </section>
    <section id="pf__bio-aditional" class="pf__bio-aditional">
        <div class="pf__bio-aditional__content">
            <?php echo get_field('biografia_parte_2', 5); ?>
        </div>
    </section>
    <section id="pf__contact" class="pf__contact">
        <div class="pf__contact__content">
            <h2 class="pf__contact__title">Hablemos</h2>
            <?php echo get_field('hablemos', 5); ?>
        </div>
    </section>
<?php get_footer(); ?>
