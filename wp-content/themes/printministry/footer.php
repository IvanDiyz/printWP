<?php $front_page = get_option('page_on_front') ?>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__inner">
                <a class="logo footer-logo" href="<?php echo get_page_link($front_page) ?>">
                    <img class="footer-logo__img" src="<?php bloginfo('template_url') ?>/assets/images/icons/logo-white.svg" alt="logo">
                </a>
                <p class="footer__inner-copy">
                    © 2023 Print Ministry
                </p>
            </div>
            <div class="footer__menu">
                <h4 class="footer__title">Меню</h4>
                <ul class="footer__menu-list">
                    <li class="footer__menu-item">
                        <a href="services" class="footer__menu-link">Услуги</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="about" class="footer__menu-link">О компании</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="contacts-page" class="footer__menu-link">Контакты</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="materials" class="footer__menu-link">Материалы</a>
                    </li>
                    <li class="footer__menu-item">
                        <a href="" class="footer__menu-link">FAQ</a>
                    </li>
                </ul>
            </div>

            <div class="footer__contacts">
                <h4 class="footer__title">Контакты</h4>
                <div class="footer__contacts-items">
                    <a class="footer__contacts-email footer__contacts-item" href="mailto:<?php the_field('email', $front_page); ?>"><?php the_field('email', $front_page); ?></a>
                    <a class="footer__contacts-tel footer__contacts-item" href="tel:<?php the_field('phone-number', $front_page) ?>"><?php the_field('phone', $front_page) ?></a>
                    <a class="footer__contacts-adress footer__contacts-item" href="https://www.google.com.ua/maps/place/49%C2%B000'38.4%22N+33%C2%B038'45.3%22E/@49.0106552,33.6451442,18z/data=!3m1!4b1!4m14!1m7!3m6!1s0x40d9ffcd5cc0be81:0x7a11652706be2492!2z0JPQvtGA0LjRiNC90LjQtSDQn9C70LDQstC90LgsINCf0L7Qu9GC0LDQstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGM!3b1!8m2!3d49.0156679!4d33.6450451!3m5!1s0x0:0xfca17aabf4806c3d!7e2!8m2!3d49.0106536!4d33.6459177?hl=ru"><?php the_field('adress', $front_page); ?></a>
                    <p class="footer__contacts-time footer__contacts-item" href=""><?php the_field('working-hours', $front_page); ?></p>
                </div>
            </div>

            <div class="footer__question">
                <h4 class="footer__question-title">Остались вопросы?</h4>
                <p class="footer__question-text">
                    Оставьте e-mail и мы свяжемся с Вами
                </p>
                <form class="footer__question-form" method="post">
                    <input type="hidden" name="project_name" value="Print Ministry">
                    <input type="hidden" name="admin_email" value="cijaydorosh@gmail.com">
                    <input type="hidden" name="form_subject" value="Form footer">

                    <input class="footer__question-input" type="email" name="email" placeholder="E-mail" required>
                    <button class="footer__question-btn" type="submit">
                    </button>
                </form>
                <ul class="footer__question-social">
                    <li class="footer__question-icon">
                        <a class="footer__question-link" href="<?php the_field('facebook-link', $front_page); ?>">
                            <svg class="footer__question-img" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.9688 5.9775H28.3885V0.2535C27.7985 0.1755 25.7695 0 23.4064 0C18.4758 0 15.0982 2.9805 15.0982 8.4585V13.5H9.65723V19.899H15.0982V36H21.7691V19.9005H26.99L27.8188 13.5015H21.7676V9.093C21.7691 7.2435 22.2873 5.9775 24.9688 5.9775V5.9775Z" fill="#FFFAF5" />
                            </svg>
                        </a>
                    </li>
                    <li class="footer__question-icon">
                        <a class="footer__question-link" href="<?php the_field('instagram-link', $front_page); ?>">
                            <svg class="footer__question-img" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.0239 0H11.9766C5.51249 0 0.270508 5.03775 0.270508 11.25V24.75C0.270508 30.9622 5.51249 36 11.9766 36H26.0239C32.488 36 37.73 30.9622 37.73 24.75V11.25C37.73 5.03775 32.488 0 26.0239 0ZM34.2181 24.75C34.2181 29.0925 30.5424 32.625 26.0239 32.625H11.9766C7.45804 32.625 3.78233 29.0925 3.78233 24.75V11.25C3.78233 6.9075 7.45804 3.375 11.9766 3.375H26.0239C30.5424 3.375 34.2181 6.9075 34.2181 11.25V24.75Z" fill="#FFFAF5" />
                                <path d="M19.0006 9C13.8289 9 9.63574 13.0297 9.63574 18C9.63574 22.9703 13.8289 27 19.0006 27C24.1724 27 28.3655 22.9703 28.3655 18C28.3655 13.0297 24.1724 9 19.0006 9ZM19.0006 23.625C15.7744 23.625 13.1476 21.1005 13.1476 18C13.1476 14.8973 15.7744 12.375 19.0006 12.375C22.2268 12.375 24.8536 14.8973 24.8536 18C24.8536 21.1005 22.2268 23.625 19.0006 23.625Z" fill="#FFFAF5" />
                                <path d="M29.0672 9.52422C29.7564 9.52422 30.3151 8.9873 30.3151 8.32498C30.3151 7.66265 29.7564 7.12573 29.0672 7.12573C28.378 7.12573 27.8193 7.66265 27.8193 8.32498C27.8193 8.9873 28.378 9.52422 29.0672 9.52422Z" fill="#FFFAF5" />
                            </svg>
                        </a>
                    </li>
                    <li class="footer__question-icon">
                        <a class="footer__question-link" href="<?php the_field('gmail-link', $front_page); ?>">
                            <svg class="footer__question-img--email" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.79995 4.74212L19.9666 17.9643M18.0371 17.9609L32.5418 4.52006M9.08333 7.66667V33.1667M28.9167 7.66667V33.1667M12.3889 34.1111H27.0278C32.2438 34.1111 36 31.7716 36 26.5556V11.4444C36 6.22842 31.7716 2 26.5556 2H11.4444C6.22842 2 2 6.22842 2 11.4444V26.5556C2 31.7716 7.17287 34.1111 12.3889 34.1111Z" stroke="#FFFAF5" stroke-width="3" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</footer>


<?php wp_footer() ?>

</body>

</html>