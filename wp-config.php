<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'printministry_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Mzf[La9xRU7ST[LpH<aGsurL_Up ro]=a%[FJC-1NAy|5H=xR>ol3;0*TO__Kj+L' );
define( 'SECURE_AUTH_KEY',  '5eS ~<,q^+H{_*B1GY3!e9jG@,/~`zfyabDAaM-H{KViY@9EFeAKgONa52IgT!lh' );
define( 'LOGGED_IN_KEY',    '= ?RY(EVgGHSF`?wC*~rD ffN6:`S74t ;9}dKO0%E[b{Jc66pMVp]{W.VVyYpA2' );
define( 'NONCE_KEY',        '+}:[r?uS3Cosk`l}mMTW81]yY5RXLrj^s[c`ih_nwa#9ZSn3o94JQl->oHL;/hN2' );
define( 'AUTH_SALT',        '<nwY^cMb4O%:9*&U67sES|NyX7+#huV*GKoUr55TXZWTQI|%A&,D3;L{cAudq=:?' );
define( 'SECURE_AUTH_SALT', 'Sm-=NS%)2u3QUF8Pvb!IJBAi6Den1N+,xXY3jF?@DBxx*#Hs+^.2v70d=LZ2[h1h' );
define( 'LOGGED_IN_SALT',   '<g7Zxy<cRd9AU3pYW8rMQFdT>pbH1JB@_~27{yly0<N3*FMe]o/HGfOU;~|aH 6/' );
define( 'NONCE_SALT',       '36*J^`,ux4xdv-TK% mySQ#ss>Lhl^mHzA9<^F|no*8)vN>a_T|8=Gns=nB.SjNb' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
