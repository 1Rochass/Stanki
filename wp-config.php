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
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	include( dirname( __FILE__ ) . '/wp-config-local.php' );
}
else {

	define('DB_NAME', 'a0276910_stanki');

	/** Имя пользователя MySQL */
	define('DB_USER', 'a0276910_stanki');

	/** Пароль к базе данных MySQL */
	define('DB_PASSWORD', 'zurabina10');

	/** Имя сервера MySQL */
	define('DB_HOST', 'localhost');

	/** Кодировка базы данных для создания таблиц. */
	define('DB_CHARSET', 'utf8mb4');

	/** Схема сопоставления. Не меняйте, если не уверены. */
	define('DB_COLLATE', '');

	/** Язык */
	define('WPLANG', 'ru_RU'); 
}
/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%F7&C3@*IwOK/F@n!Y+bzlRA.aA5_1C5Y^vNHlIJ9g`*`[,H3B`p{*(vXSZ39yP2');
define('SECURE_AUTH_KEY',  ')[gxn@Q^6kbimL_?vfNU`H2c64fJZrb8Ez`&06ds1$SLTS$ws0hW6K*+C^-,l,qz');
define('LOGGED_IN_KEY',    'U,L+QItafEfcK6Lk[2/{VwiO0faA7{G39Sg35$! uBHT dO32J@2J>%#XZx?S=e*');
define('NONCE_KEY',        '-aiX%M6V-SVe%D uKLsA8NdM*N2%>pi1y35@}$ZS1N^cf{AQyE vO4^5.eY1qvCc');
define('AUTH_SALT',        'r-Rs]@~?i%I| }nCu0hwtJ`8yNbb^5hp*4/0tza,0*21Qfc-f{{?Xh8Mmw#d6l39');
define('SECURE_AUTH_SALT', 'B#r_jAK:A3lylE~ gOLxoUJN fO6Q;f8:wi907#tQRFOju>$weHh7w-F: hi>Ku|');
define('LOGGED_IN_SALT',   '#?h?ikTZ04K(n;h~7$D0pq%r)Y{nYwKZfO:o-1:[-C?,LAm;(YEJ ?-.@~m`T@KF');
define('NONCE_SALT',       'T{6bq,[-z +m/iTAe`u$4wM9XJ7Oy3DvaH}sX<>/!/*?<p~.bXv:`sFiYOKs20]y');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
