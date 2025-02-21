<?php

/*
Template Name: materials
*/

?>

<?php get_header(); ?>

<main class="main">

    <?php $materials = get_field_object("materials")["value"] ?>
    <section class="materials-page">
        <div class="container">

            <h2 class="materials-page__title title">Материалы</h2>
            <div class="materials-page__top-inner">
                <p class="materials-page__top-text">
                    <?php the_field('materials-top_text_1') ?>
                </p>
                <p class="materials-page__top-text">
                    <?php the_field('materials-top_text_2') ?>
                </p>
                <img class="materials-page__top-image" src="<?php the_field('materials-top_image') ?>" alt="">
            </div>

            <div class="materials-page__wrapper">
                <div class="materials-page__inner">
                    <div class="materials-page__box">
                        <h4 class="materials-page__subtitle"><?php echo $materials['material-title_1'] ?></h4>
                        <p class="materials-page__inner-text">
                            <?php echo $materials['material-comment_1'] ?>
                        </p>
                        <ul class="materials-page__inner-list">
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_1_1'] ?>
                            </li>
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_1_2'] ?>
                            </li>
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_1_3'] ?>
                            </li>
                        </ul>
                    </div>
                    <h4 class="materials-page__subtitle materials-page__subtitle--media">Пластизолевые краски</h4>
                    <div class="materials-page__inner-img plast">
                        <img class="materials-page__inner-image" src="<?php echo $materials['material-image_1'] ?>" alt="image material">
                    </div>
                </div>

                <div class="materials-page__inner">
                    <h4 class="materials-page__subtitle materials-page__subtitle--media">Краски на водной основе
                    </h4>
                    <div class="materials-page__inner-img aquatic">
                        <img class="materials-page__inner-image" src="<?php echo $materials['material-image_2'] ?>" alt="image material">
                    </div>
                    <div class="materials-page__box">
                        <h4 class="materials-page__subtitle"><?php echo $materials['material-title_2'] ?></h4>
                        <p class="materials-page__inner-text">
                            <?php echo $materials['material-comment_2'] ?>
                        </p>
                        <ul class="materials-page__inner-list">
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_2_1'] ?>
                            </li>
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_2_2'] ?>
                            </li>
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_2_3'] ?>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="materials-page__inner">
                    <div class="materials-page__box">
                        <h4 class="materials-page__subtitle"><?php echo $materials['material-title_3'] ?></h4>
                        <p class="materials-page__inner-text">
                            <?php echo $materials['material-comment_3'] ?>
                        </p>
                        <ul class="materials-page__inner-list">
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_3_1'] ?>
                            </li>
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_3_2'] ?>
                            </li>
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_3_3'] ?>
                            </li>
                        </ul>
                    </div>
                    <h4 class="materials-page__subtitle materials-page__subtitle--media">Кроющие водные краски </h4>
                    <div class="materials-page__inner-img cover cover">
                        <img class="materials-page__inner-image" src="<?php echo $materials['material-image_3'] ?>" alt="image material">
                    </div>
                </div>

                <div class="materials-page__inner">
                    <h4 class="materials-page__subtitle materials-page__subtitle--media">Вытравные краски
                    </h4>
                    <div class="materials-page__inner-img etching">
                        <img class="materials-page__inner-image" src="<?php echo $materials['material-image_4'] ?>" alt="image material">
                    </div>
                    <div class="materials-page__box">
                        <h4 class="materials-page__subtitle"><?php echo $materials['material-title_4'] ?></h4>
                        <p class="materials-page__inner-text">
                            <?php echo $materials['material-comment_4'] ?>
                        </p>
                        <ul class="materials-page__inner-list">
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_4_1'] ?>
                            </li>
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_4_2'] ?>
                            </li>
                            <li class="materials-page__inner-item">
                                <?php echo $materials['material-peculiarity_4_3'] ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>