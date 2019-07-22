<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'dearain' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'allhimik' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wFfoeG=u63Iv?Y4bv3TLOtTj3!1?u}!bktb1k+kpz5,MY8#dY=`|oN5Z#I(?Z:U9' );
define( 'SECURE_AUTH_KEY',  '!+JjAYWzg%u@>mQhGCUZ]gS);yhJ1NNK$%T7g.C<I>b$*R3^X]UvAS*PKp/?|Im.' );
define( 'LOGGED_IN_KEY',    ',@y/#d}_bOaiTIA@x;w#ns,n}s%?5u3*)KpTPX%_OxT0{255f5X4+=OB9x!!Y$bz' );
define( 'NONCE_KEY',        ' dAM%su4,0z0wN6hB1`4G>zhsl{{{_jln^&`u!1{ue#o#FonwnNyH_L1WKM^O*Z=' );
define( 'AUTH_SALT',        '4q&/,h%Bgs%Zy~VO1#,K4fKG3}-JZ?H{VV;l(%`OH+xfwF,DnAc=UkM@HTdLfHkb' );
define( 'SECURE_AUTH_SALT', 'jI@ZB::d&i!4AJ~#`4cj5TA44G,vHV!3@mf)b/d|AB4i~$P_.e>_faS?][kAY072' );
define( 'LOGGED_IN_SALT',   'mu,,:qv5n9J:NOP.Ct{Rqu7vr,t{YK.BwmU2[w2n;#R6~~H)]QJhE,51q7?>.LXu' );
define( 'NONCE_SALT',       'Ga0$UN+Vp!3C8{`b1E6#EhMHNBdujbm|y3DIf#Gk_qBg#^ro~d(GegRbCFEf&yfM' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
