<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Ministry</title>

    <?php wp_head(); ?>
    <?php $front_page = get_option('page_on_front') ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__inner">
                    <div class="logo-top">
                        <?php the_custom_logo() ?>
                    </div>
                    <div class="header__social">
                        <ul class="header__social-list">
                            <li class="header__social-item">
                                <a class="header__social-link" href="<?php the_field('facebook-link', $front_page); ?>">
                                    <svg class="header__social-img" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24.9688 5.9775H28.3885V0.2535C27.7985 0.1755 25.7695 0 23.4064 0C18.4758 0 15.0982 2.9805 15.0982 8.4585V13.5H9.65723V19.899H15.0982V36H21.7691V19.9005H26.99L27.8188 13.5015H21.7676V9.093C21.7691 7.2435 22.2873 5.9775 24.9688 5.9775V5.9775Z" fill="#363636" />
                                    </svg>
                                </a>
                            </li>
                            <li class="header__social-item">
                                <a class="header__social-link" href="<?php the_field('instagram-link', $front_page); ?>">
                                    <svg class="header__social-img" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.0239 0H11.9766C5.51249 0 0.270508 5.03775 0.270508 11.25V24.75C0.270508 30.9622 5.51249 36 11.9766 36H26.0239C32.488 36 37.73 30.9622 37.73 24.75V11.25C37.73 5.03775 32.488 0 26.0239 0ZM34.2181 24.75C34.2181 29.0925 30.5424 32.625 26.0239 32.625H11.9766C7.45804 32.625 3.78233 29.0925 3.78233 24.75V11.25C3.78233 6.9075 7.45804 3.375 11.9766 3.375H26.0239C30.5424 3.375 34.2181 6.9075 34.2181 11.25V24.75Z" fill="#363636" />
                                        <path d="M19.0006 9C13.8289 9 9.63574 13.0297 9.63574 18C9.63574 22.9703 13.8289 27 19.0006 27C24.1724 27 28.3655 22.9703 28.3655 18C28.3655 13.0297 24.1724 9 19.0006 9ZM19.0006 23.625C15.7744 23.625 13.1476 21.1005 13.1476 18C13.1476 14.8973 15.7744 12.375 19.0006 12.375C22.2268 12.375 24.8536 14.8973 24.8536 18C24.8536 21.1005 22.2268 23.625 19.0006 23.625Z" fill="#363636" />
                                        <path d="M29.0672 9.52422C29.7564 9.52422 30.3151 8.9873 30.3151 8.32498C30.3151 7.66265 29.7564 7.12573 29.0672 7.12573C28.378 7.12573 27.8193 7.66265 27.8193 8.32498C27.8193 8.9873 28.378 9.52422 29.0672 9.52422Z" fill="#363636" />
                                    </svg>
                                </a>
                            </li>
                            <li class="header__social-item">
                                <a class="header__social-link" href="<?php the_field('gmail-link', $front_page); ?>">
                                    <svg class="header__social-img--email" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.79995 4.74212L19.9666 17.9643M18.0371 17.9609L32.5418 4.52006M9.08333 7.66667V33.1667M28.9167 7.66667V33.1667M12.3889 34.1111H27.0278C32.2438 34.1111 36 31.7716 36 26.5556V11.4444C36 6.22842 31.7716 2 26.5556 2H11.4444C6.22842 2 2 6.22842 2 11.4444V26.5556C2 31.7716 7.17287 34.1111 12.3889 34.1111Z" stroke="#363636" stroke-width="3" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__list-item">
                                <a class="menu__list-link" href="services">Услуги</a>
                            </li>
                            <li class="menu__list-item">
                                <a class="menu__list-link" href="about">О нас</a>
                            </li>
                            <li class="menu__list-item">
                                <a class="menu__list-link" href="materials">Материалы</a>
                            </li>
                        </ul>
                        <ul class="menu__listWhite menu__list" style="color:<?php if (get_page_link() != get_page_link($front_page)) : ?>#363636 <?php endif ?>">
                            <li class="menu__list-item menu__listWhite-item">
                                <a class="menu__list-link menu__listWhite-link" href="#">FAQ</a>
                            </li>
                            <li class="menu__list-item menu__listWhite-item">
                                <a class="menu__list-link menu__listWhite-link" href="contacts">Контакты</a>
                            </li>
                        </ul>
                        <div class="menu__social">
                            <ul class="menu__social-list">
                                <li class="menu__social-item">
                                    <a class="menu__social-link" href="<?php the_field('facebook-link', $front_page); ?>">
                                        <svg class="menu__social-img" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.9688 5.9775H28.3885V0.2535C27.7985 0.1755 25.7695 0 23.4064 0C18.4758 0 15.0982 2.9805 15.0982 8.4585V13.5H9.65723V19.899H15.0982V36H21.7691V19.9005H26.99L27.8188 13.5015H21.7676V9.093C21.7691 7.2435 22.2873 5.9775 24.9688 5.9775V5.9775Z" fill="#363636" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="menu__social-item">
                                    <a class="menu__social-link" href="<?php the_field('instagram-link', $front_page); ?>">
                                        <svg class="menu__social-img" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.0239 0H11.9766C5.51249 0 0.270508 5.03775 0.270508 11.25V24.75C0.270508 30.9622 5.51249 36 11.9766 36H26.0239C32.488 36 37.73 30.9622 37.73 24.75V11.25C37.73 5.03775 32.488 0 26.0239 0ZM34.2181 24.75C34.2181 29.0925 30.5424 32.625 26.0239 32.625H11.9766C7.45804 32.625 3.78233 29.0925 3.78233 24.75V11.25C3.78233 6.9075 7.45804 3.375 11.9766 3.375H26.0239C30.5424 3.375 34.2181 6.9075 34.2181 11.25V24.75Z" fill="#363636" />
                                            <path d="M19.0006 9C13.8289 9 9.63574 13.0297 9.63574 18C9.63574 22.9703 13.8289 27 19.0006 27C24.1724 27 28.3655 22.9703 28.3655 18C28.3655 13.0297 24.1724 9 19.0006 9ZM19.0006 23.625C15.7744 23.625 13.1476 21.1005 13.1476 18C13.1476 14.8973 15.7744 12.375 19.0006 12.375C22.2268 12.375 24.8536 14.8973 24.8536 18C24.8536 21.1005 22.2268 23.625 19.0006 23.625Z" fill="#363636" />
                                            <path d="M29.0672 9.52422C29.7564 9.52422 30.3151 8.9873 30.3151 8.32498C30.3151 7.66265 29.7564 7.12573 29.0672 7.12573C28.378 7.12573 27.8193 7.66265 27.8193 8.32498C27.8193 8.9873 28.378 9.52422 29.0672 9.52422Z" fill="#363636" />
                                        </svg>
                                    </a>
                                </li>
                                <li class="menu__social-item">
                                    <a class="menu__social-link" href="<?php the_field('gmail-link', $front_page); ?>">
                                        <svg class="menu__social-img--email" width="38" height="36" viewBox="0 0 38 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.79995 4.74212L19.9666 17.9643M18.0371 17.9609L32.5418 4.52006M9.08333 7.66667V33.1667M28.9167 7.66667V33.1667M12.3889 34.1111H27.0278C32.2438 34.1111 36 31.7716 36 26.5556V11.4444C36 6.22842 31.7716 2 26.5556 2H11.4444C6.22842 2 2 6.22842 2 11.4444V26.5556C2 31.7716 7.17287 34.1111 12.3889 34.1111Z" stroke="#363636" stroke-width="3" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <button class="menu__btn">
                        <span class="menu__btn-line"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>