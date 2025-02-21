<?php

/*
Template Name: about
*/

?>

<?php get_header(); ?>

<main class="main">
    <section class="about-page">
        <div class="container">
            <div class="about-page__top">
                <h2 class="about-page__title title">О нас</h2>
                <p class="about-page__text">
                    <?php echo get_field_object('group-element')['value']['subtitle'] ?>
                </p>
            </div>

            <div class="about-popup__top" style="background-image: url('<?php the_field('image-popup_1') ?>');">
                <a class="about-popup__top-link" data-fancybox href="<?php echo get_field_object('group-element')['value']['link-popup_1'] ?>">
                    <img class="about-popup__top-img" src="<?php echo get_field_object('group-element')['value']['about-play'] ?>" alt="play">
                </a>
            </div>

            <p class="about-page__comment">
                <?php the_field('about-comment') ?>
            </p>

            <div class="about-page__aside">
                <div class="about-page__aside-inner">
                    <p class="about-page__aside-text">
                        <?php the_field('block-text_1') ?>
                    </p>
                    <ul class="about-page__aside-list">
                        <li class="about-page__aside-item">
                            <?php the_field('block-list_1') ?>
                        </li>
                        <li class="about-page__aside-item">
                            <?php the_field('block-list_2') ?>
                        </li>
                        <li class="about-page__aside-item">
                            <?php the_field('block-list_3') ?>
                        </li>
                    </ul>
                </div>
                <div class="about-page__aside-inner">
                    <p class="about-page__aside-text">
                        <?php the_field('comment-block_2') ?>
                    </p>
                </div>
            </div>

            <div class="about-popup__aside" style="background-image: url('<?php the_field('image-popup_2') ?>');">
                <a class="about-popup__aside-link" data-fancybox href="<?php the_field('link-popup_2') ?>">
                    <img class="about-popup__aside-img" src="<?php echo get_field_object('group-element')['value']['about-play'] ?>" alt="play">
                </a>
            </div>

            <div class="about-page__reasons">
                <h3 class="about-page__reasons-title title">6 Причин выбрать нас</h3>
                <div class="about-page__reasons-wrapper">

                    <?php
                    $block = [get_field_object('about-reasons_1'), get_field_object('about-reasons_2'), get_field_object('about-reasons_3'), get_field_object('about-reasons_4'), get_field_object('about-reasons_5'), get_field_object('about-reasons_6')];
                    foreach ($block as $ellement)
                        if ($block[1] == $ellement) { ?>
                            <div class="about-page__reasons-inner">
                                <div class="about-page__reasons-header">
                                    <span class="about-page__reasons-numbr"><?php echo $ellement['value']['reasons-number']; ?></span>
                                    <h4 class="about-page__reasons-subtitle"><?php echo $ellement['value']['reasons-title']; ?></h4>
                                </div>
                                <p class="about-page__reasons-text">
                                    <?php echo $ellement['value']['reasons-text']; ?>
                                </p>
                            </div>
                            <img class="about-page__reasons-images" src="<?php the_field('reasons-image') ?>" alt="">
                        <?php }else { ?>
                            <div class="about-page__reasons-inner">
                                <div class="about-page__reasons-header">
                                    <span class="about-page__reasons-numbr"><?php echo $ellement['value']['reasons-number']; ?></span>
                                    <h4 class="about-page__reasons-subtitle"><?php echo $ellement['value']['reasons-title']; ?></h4>
                                </div>
                                <p class="about-page__reasons-text">
                                    <?php echo $ellement['value']['reasons-text']; ?>
                                </p>
                            </div>
                        <?php } ?>
                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </div>


    </section>

</main>

<?php get_footer(); ?>