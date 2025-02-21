<?php

/*
Template Name: home
*/

?>

<?php get_header(); ?>

<main class="main">
    <div class="popup" id="popup">
        <div class="popup__box">
            <div class="popup__content">
                <a class="popup__close close-popup" href="#header">X</a>
                <div class="popup__form">
                    <form class="connection__form" method="post">
                        <?php echo do_shortcode('[contact-form-7 id="24" title="Контактная форма"]') ?>
                    </form>
                    <p class="connection__politics">
                        Нажимая кнопку «Отправить» Вы соглашаетесь на обработку предоставленных Вами персональных
                        данных.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="top-header">
        <div class="container">
            <div class="top-header__wrapper">

                <div class="top-header__item">
                    <h1 class="top-header__title"><?php the_field('main-title') ?></h1>
                    <a class="top-header__link popup__link" href="#popup">Заказать</a>
                </div>
                <div class="slider">
                    <div class="top-slider">

                        <?php
                        global $post;

                        $myposts = get_posts([
                            'numberposts' => -1,
                            'category_name' => 'slider',
                        ]);

                        if ($myposts) {
                            foreach ($myposts as $post) {
                                setup_postdata($post);
                        ?>
                                <div class="top-slider__inner">
                                    <div class="top-slider__item">
                                        <?php the_post_thumbnail($class = 'slider-image top-slider__images'); ?>
                                        <div class="top-slider__content">
                                            <span class="top-slider__numbr"><?php the_title(); ?></span>
                                            <p class="top-slider__text">
                                                <?php the_content(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        } else {
                            // Постов не найдено
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                        ?>

                    </div>
                </div>

            </div>

            <div class="top-header__social">
                <ul class="top-header__social-list">
                    <li class="top-header__social-item">
                        <a class="top-header__social-link" href="<?php the_field('facebook-link'); ?>">
                            <svg class="top-header__social-img" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.9688 5.9775H28.3885V0.2535C27.7985 0.1755 25.7695 0 23.4064 0C18.4758 0 15.0982 2.9805 15.0982 8.4585V13.5H9.65723V19.899H15.0982V36H21.7691V19.9005H26.99L27.8188 13.5015H21.7676V9.093C21.7691 7.2435 22.2873 5.9775 24.9688 5.9775V5.9775Z" fill="#363636" />
                            </svg>
                        </a>
                    </li>
                    <li class="top-header__social-item">
                        <a class="top-header__social-link" href="<?php the_field('instagram-link'); ?>">
                            <svg class="top-header__social-img" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.0239 0H11.9766C5.51249 0 0.270508 5.03775 0.270508 11.25V24.75C0.270508 30.9622 5.51249 36 11.9766 36H26.0239C32.488 36 37.73 30.9622 37.73 24.75V11.25C37.73 5.03775 32.488 0 26.0239 0ZM34.2181 24.75C34.2181 29.0925 30.5424 32.625 26.0239 32.625H11.9766C7.45804 32.625 3.78233 29.0925 3.78233 24.75V11.25C3.78233 6.9075 7.45804 3.375 11.9766 3.375H26.0239C30.5424 3.375 34.2181 6.9075 34.2181 11.25V24.75Z" fill="#363636" />
                                <path d="M19.0006 9C13.8289 9 9.63574 13.0297 9.63574 18C9.63574 22.9703 13.8289 27 19.0006 27C24.1724 27 28.3655 22.9703 28.3655 18C28.3655 13.0297 24.1724 9 19.0006 9ZM19.0006 23.625C15.7744 23.625 13.1476 21.1005 13.1476 18C13.1476 14.8973 15.7744 12.375 19.0006 12.375C22.2268 12.375 24.8536 14.8973 24.8536 18C24.8536 21.1005 22.2268 23.625 19.0006 23.625Z" fill="#363636" />
                                <path d="M29.0672 9.52422C29.7564 9.52422 30.3151 8.9873 30.3151 8.32498C30.3151 7.66265 29.7564 7.12573 29.0672 7.12573C28.378 7.12573 27.8193 7.66265 27.8193 8.32498C27.8193 8.9873 28.378 9.52422 29.0672 9.52422Z" fill="#363636" />
                            </svg>
                        </a>
                    </li>
                    <li class="top-header__social-item">
                        <a class="top-header__social-link" href="<?php the_field('gmail-link'); ?>">
                            <svg class="top-header__social-img--email" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.79995 4.74212L19.9666 17.9643M18.0371 17.9609L32.5418 4.52006M9.08333 7.66667V33.1667M28.9167 7.66667V33.1667M12.3889 34.1111H27.0278C32.2438 34.1111 36 31.7716 36 26.5556V11.4444C36 6.22842 31.7716 2 26.5556 2H11.4444C6.22842 2 2 6.22842 2 11.4444V26.5556C2 31.7716 7.17287 34.1111 12.3889 34.1111Z" stroke="#363636" stroke-width="3" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 class="title services__title">Наши услуги</h2>
            <div class="services__items">

                <?php
                $block = [get_field('rastr-group'), get_field('speceffects-group'), get_field('termotrans-group')];
                foreach ($block as $ellement)
                    if ($ellement) : ?>
                    <div class="services__item">
                        <div class="services__wrapper-img">
                            <img class="services__wrapper-image" src="<?php echo $ellement['services-image']; ?>" alt="print">
                        </div>
                        <div class="services__wrapper">
                            <h3 class="services__subtitle"><?php echo $ellement['services-subtitle']; ?></h3>
                            <p class="services__text">
                                <?php echo $ellement['services-text']; ?>
                            </p>
                            <div class="services__bottom">
                                <a class="services__link" href="<?php echo $ellement['services-link']; ?>">
                                    <p class="services__link-text">Подробнее</p>
                                    <svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 12L36 12M36 12L22.5 23M36 12L22.5 1" stroke="#DC6E36" stroke-width="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section class="printing">
        <div class="container">
            <h2 class="printing__title title">На чем мы печатаем?</h2>
            <div class="printing__wrapper">

                <div class="printing__wrapper-inner">
                    <div class="printing__wrapper-box">
                        <h3 class="printing__wrapper-subtitle">
                            <span><?php echo get_field('printing-block_1')['printing-block_1-number'] ?></span>
                            <?php echo get_field('printing-block_1')['printing-block_1-title'] ?>
                        </h3>
                        <p class="printing__wrapper-text">
                            <?php echo get_field('printing-block_1')['printing-block_1-text'] ?>
                        </p>
                    </div>
                    <div class="printing-img__inner">
                        <img class="printing__image" src="<?php echo get_field('printing-block_1')['printing-block_1-image'] ?>" alt="iamge">
                    </div>
                </div>
                <div class="printing__wrapper-inner">
                    <div class="printing-img__inner">
                        <img class="printing__image" src="<?php echo get_field('printing-block_2')['printing-block_2-image'] ?>" alt="iamge">
                    </div>
                    <div class="printing__wrapper-box">
                        <h3 class="printing__wrapper-subtitle">
                            <span><?php echo get_field('printing-block_2')['printing-block_2-number'] ?></span>
                            <?php echo get_field('printing-block_2')['printing-block_2-title'] ?>
                        </h3>
                        <p class="printing__wrapper-text">
                            <?php echo get_field('printing-block_2')['printing-block_2-text'] ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about">
        <h2 class="title about__title">О нас</h2>
        <div class="about__inner">
            <div class="about__left">
                <img class="about__background-image" src="<?php the_field('about-image') ?>" alt="about image">
            </div>
            <div class="about__info">
                <h2 class="title about__subtitle"><?php the_field('about-title') ?></h2>
                <p class="about__text">
                    <?php the_field('about-text') ?>
                </p>
                <span class="materials-page__inner-coment">
                    <?php the_field('about-text2') ?>
                </span>

                <a class="about__link" href="#">
                    <p class="about__link-text">Подробнее</p>
                    <svg width="38" height="140" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 12L36 12M36 12L22.5 23M36 12L22.5 1" stroke="#FFFAF5" stroke-width="2" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="benefits">
        <div class="container">
            <h2 class="title benefits__title">Наши преимущества</h2>
            <div class="benefits__inner">

                <?php
                $block = [get_field('benefits-block1'), get_field('benefits-block2'), get_field('benefits-block3'), get_field('benefits-block4'), get_field('benefits-block5'), get_field('benefits-block6')];
                foreach ($block as $ellement)
                    if ($ellement) : ?>
                    <div class="benefits__items">
                        <img class="benefits__image" src="<?php echo $ellement['benefits-svg']; ?>" alt="benefits icon">
                        <h4 class="benefits__subtitle"><?php echo $ellement['benefits-title']; ?></h4>
                        <p class="benefits__text">
                            <?php echo $ellement['benefits-text']; ?>
                        </p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <section class="materials">
        <h2 class="title materials__title">Материалы</h2>
        <div class="materials__wrapper">

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => -1,
                'category_name' => 'materials',
            ]);

            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
            ?>
                    <div class="materials__inner">
                        <div class="materials__inner-box">
                            <div class="materials__inner-item">
                                <span class="materials__numbr"><?php the_content(); ?></span>
                                <span class="materials__row">
                                    <svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 12L36 12M36 12L22.5 23M36 12L22.5 1" stroke="#DC6E36" stroke-width="2" />
                                    </svg>
                                </span>
                                <a class="materials__text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php the_post_thumbnail($class = 'image materials__img-plast materials-images'); ?>
                            </div>
                            <a class="materials__link" href="<?php the_permalink(); ?>">
                                <p class="materials__link-text">Подробнее</p>
                                <svg width="38" height="24" viewBox="0 0 38 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 12L36 12M36 12L22.5 23M36 12L22.5 1" stroke="#DC6E36" stroke-width="2" />
                                </svg>
                            </a>
                        </div>
                    </div>
            <?php
                }
            } else {
                // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

        </div>
    </section>

    <section class="work">
        <div class="container">
            <h2 class="work__title title">Этапы работы</h2>
            <div class="work__wrapper">
                <div class="work__wrapper-one">
                    <div class="work__inner">
                        <div class="work__item">
                            <h4 class="work__subtitle"><?php echo get_field('word-stage_1')['title-stage'] ?></h4>
                            <span class="work__numbr">/01</span>
                        </div>
                        <p class="work__text">
                            <?php echo get_field('word-stage_1')['stage-text'] ?>
                        </p>
                    </div>
                    <div class="work__inner">
                        <div class="work__item">
                            <h4 class="work__subtitle"><?php echo get_field('word-stage_2')['title-stage'] ?></h4>
                            <span class="work__numbr">/02</span>
                        </div>
                        <p class="work__text">
                            <?php echo get_field('word-stage_2')['stage-text'] ?>
                        </p>
                    </div>
                    <div class="work__inner">
                        <div class="work__item">
                            <h4 class="work__subtitle"><?php echo get_field('word-stage_3')['title-stage'] ?></h4>
                            <span class="work__numbr">/03</span>
                        </div>
                        <p class="work__text">
                            <?php echo get_field('word-stage_3')['stage-text'] ?>
                        </p>
                    </div>
                    <div class="work__inner">
                        <div class="work__item">
                            <h4 class="work__subtitle"><?php echo get_field('word-stage_4')['title-stage'] ?></h4>
                            <span class="work__numbr">/04</span>
                        </div>
                        <p class="work__text">
                            <?php echo get_field('word-stage_4')['stage-text'] ?>
                        </p>
                    </div>
                </div>
                <div class="work__wrapper-two">
                    <div class="work__inner work__inner-image">
                    </div>
                    <div class="work__inner">
                        <div class="work__item">
                            <h4 class="work__subtitle"><?php echo get_field('word-stage_5')['title-stage'] ?></h4>
                            <span class="work__numbr">/05</span>
                        </div>
                        <p class="work__text">
                            <?php echo get_field('word-stage_5')['stage-text'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="connection">
        <div class="container">
            <div class="connection__wrapper">
                <h2 class="title connection__title">Свяжитесь с нами</h2>
                <p class="connection__text">
                    Оставьте Ваши контактные данные для уточнения деталей
                </p>
                <form class="connection__form" method="post">
                    <?php echo do_shortcode('[contact-form-7 id="24" title="Контактная форма"]') ?>
                </form>
                <p class="connection__politics">
                    Нажимая кнопку «Отправить» Вы соглашаетесь на обработку предоставленных Вами персональных
                    данных.
                </p>
            </div>
        </div>
    </section>

    <section class="questions">
        <div class="container">
            <h2 class="title questions__title">FAQ</h2>
            <div class="questions__wrapper">

                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => -1,
                    'category_name' => 'FAQ',
                ]);

                if ($myposts) {
                    
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                ?>      
                        <?php if ($myposts[0] == $post) { ?>
                            <div class="questions__items questions__items--active">
                            <h4 class="questions__item-title"><?php the_title(); ?></h4>
                            <div class="block block--active" style="height: 0;">
                                <p class="questions__item-text questions__item-text--active">
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                        <?php } else { ?>
                            <div class="questions__items questions__items--offset">
                            <h4 class="questions__item-title"><?php the_title(); ?></h4>
                            <div class="block block--offset" style="height: 0;">
                                <p class="questions__item-text questions__item-text--offset">
                                    <?php the_content(); ?>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                <?php
                    }
                } else {
                    // Постов не найдено
                }

                wp_reset_postdata(); // Сбрасываем $post
                ?>

            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>
<!-- <div>
    <pre>
        <?php var_dump(get_page_link(7)) ?>
    </pre>
</div> -->