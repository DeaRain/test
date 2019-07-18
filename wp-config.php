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
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' C(A?!rq(jl,m3.Mi_}G53xVBnEX#{K9(L.S[U6&b3/3w&+J#k!+ytA]ONyXXH6k' );
define( 'SECURE_AUTH_KEY',  'VOi45<bVw2z %P6Hv?TB[vFhdL-azZC7h@^}:o:>W?Ao_1)Km u)_%RYB<)b(n?]' );
define( 'LOGGED_IN_KEY',    '</k*0&b~Uqbxjd8A.kceOs?zkMY9HPQd|k]*i(pxUj jqn($y07v[sx7<hb%?(d ' );
define( 'NONCE_KEY',        'vS>16>0|@h?g[hf0uF3s1RlMNrGc}mq`TX8djEo`wI#Ol2_{V)N:oB4CmjQkk7HG' );
define( 'AUTH_SALT',        '52kB6,l0p{~id*DmY*O9QGn[*ZX)6gngRk9Qk1N#=:X%gqbW80GqxM{K.5w.:eF&' );
define( 'SECURE_AUTH_SALT', '8apv24,^$]@xD09j8mv/[pGas4-n67fimMc+8Qv%n|sN`%7_3_:@`V4QI[RuT?@5' );
define( 'LOGGED_IN_SALT',   '3G)Ns! T0v-(VDwse!NbU@(p25R49 bqgBl[)a`9>SIs3FnIF5Zo*:bnO#B=# :H' );
define( 'NONCE_SALT',       'h:v`IL$70nWX<o7w#X(5<``+d=icLj}C0u^%J hVPB<I%vO(l.qI<( ~h97Z2y7!' );

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
