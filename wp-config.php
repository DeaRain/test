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
define( 'DB_NAME', 'PixelWord' );

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
define( 'AUTH_KEY',         'XEx4~RsZ=;`(hE}Bm*TsO+.xe]K/}!uHaq?EZaGO>HPqw?iM(Qwedb+?q^6;FG>}' );
define( 'SECURE_AUTH_KEY',  'o63R^mB<Y2?cDr_LV%0FU,V#8S@Ion[9Wb#T$$JG8A(n!1Y.U+/anr*1<@Ooq7:n' );
define( 'LOGGED_IN_KEY',    'Yaf15SL3SJOoW<.e(,fVs}tM)fR;D-Y[C)5qt>4+xSD6VPWy(W=x_$Uvn%OK+PFU' );
define( 'NONCE_KEY',        '1vF6{[rG`35xmfV[Une?y/CV]-V=&WutJR *[ugfL)+qdED1I0*-@/yPKa):6Y8.' );
define( 'AUTH_SALT',        'C5Q-!j3YCD;iu3oY)8YV!-v_Z6`1BB8<E+q$quOgQUN*h1&Eb-+|CQ(sG_L*vS>^' );
define( 'SECURE_AUTH_SALT', '!%NtaMjp[K`SlTv 38S]Avt(Tv43oWTDd:UPP*f@4Z`uaw7E 9wMP^f7_7>VQ_}2' );
define( 'LOGGED_IN_SALT',   '~hqqv AN-;vh7.aZ.`>KIiy?)P)4+;A*RaMS>p?bQ i=J&Bw>*rO+}p#K%KlPjtd' );
define( 'NONCE_SALT',       '{C[GJLwp>sACI>jp)lH(>hkhyND_glBC@(0HvBQG*?3]X.S8VezZ=I?m^pE}wfk0' );

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
