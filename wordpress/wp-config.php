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
define( 'DB_NAME', 'w90476yg_4324' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'w90476yg_4324' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'ksOj&3in' );

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
define( 'AUTH_KEY',         'Gb$#e!Yp$u3>n $$L>9a~zF6R82;_*!UDphs)7d$%*fk+kD_oqW;N-FDU/KS/Rqd' );
define( 'SECURE_AUTH_KEY',  'XQ]F8RJcYWs45mqRx//`qgT+KR,B7#{lP<}G-^N;J<6:S[QzY979J|M7Q}t<UsHq' );
define( 'LOGGED_IN_KEY',    '8Z;0mT+hSM:`Q=:{i-`-(dr8=(2bM6yv|Y9_@Q.p]#:eq|EQH!D]&O|GlEV $[nm' );
define( 'NONCE_KEY',        's7/*bhIUqM023f?|+H7b#o>Kko&r%)D V/?x5H:+.*v0K*o?,PyUw?|9|)|e-H|1' );
define( 'AUTH_SALT',        'Y11?hv RGe-(V*ALM.l$[bV1DotCV](Bn7m9z/dN.>Pe27TC9&oIJr0hvY3}bt{R' );
define( 'SECURE_AUTH_SALT', '/Df8o?7(cfa&2eu*Zsnw5*H[Q,jX#]lVf%Sv!zXkjpsbfp{;wEk~K9FwnUwb(MoQ' );
define( 'LOGGED_IN_SALT',   '=ntH`|;=![C7@l+3*92T(za]stLC=E9<CSC#d4&!wY~q>9)/9$HZ!)E@;mOdO=:R' );
define( 'NONCE_SALT',       ']k?@l40g+5/-_Z#<.8!62u]0Ka/7dXB&u,QM7]*.nvo82nTEbK5m45f< -lOt/-I' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_w90476yg_4324';

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
