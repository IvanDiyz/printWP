<?php

/*
Template Name: services
*/

?>

<?php get_header(); ?>

<main class="main">

    <section class="services-page services-media">
        <div class="container">
            <h2 class="title services__title services-page__title">Наши услуги</h2>
            <div class="services-page__aside">
                <img class="services-page__aside-image" src="<?php the_field('services-image') ?>" alt="image">
            </div>
            <div class="services-page__inner">
                <?php
                $block = [get_field_object('speceffects'), get_field_object('rast'), get_field_object('termo')];
                foreach ($block as $ellement)
                    if ($ellement) : ?>
                    <h4 class="services-page__item-subtitle services-subtitle">
                        <?php echo $ellement['value']['title_block']; ?>
                    </h4>
                    <div class="services-page__items" id="<?php echo $ellement['name']; ?>">
                        <div class="services-page__item">
                            <h4 class="services-page__item-subtitle">
                                <?php echo $ellement['value']['title_block']; ?>
                            </h4>
                            <p class="services-page__item-text">
                                <?php echo $ellement['value']['text_1']; ?>
                            </p>
                            <div class="services-page__slider slider-none">
                                <div class="services-page__slider-inner">
                                    <div class="services-page__slider-box">
                                        <img class="services-page__slider-img" src="<?php echo $ellement['value']['slider-image_1.1']; ?>" alt="print">
                                    </div>
                                    <div class="services-page__slider-box">
                                        <img class="services-page__slider-img" src="<?php echo $ellement['value']['slider-image_1.2']; ?>" alt="print">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="services-page__item services-page__item-two">
                            <div class="services-page__slider">
                                <div class="services-page__slider-inner">
                                    <div class="services-page__slider-box">
                                        <img class="services-page__slider-img" src="<?php echo $ellement['value']['slider-image_2.1']; ?>" alt="print">
                                    </div>
                                    <div class="services-page__slider-box">
                                        <img class="services-page__slider-img" src="<?php echo $ellement['value']['slider-image_2.2']; ?>" alt="print">
                                    </div>
                                </div>
                            </div>
                            <p class="services-page__item-text">
                                <?php echo $ellement['value']['text_2']; ?>
                            </p>
                        </div>
                    </div>
                <?php wp_reset_postdata(); endif; ?>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>