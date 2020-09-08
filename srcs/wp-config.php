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
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'admin' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
	define('AUTH_KEY',         '?:^V-$lU~9S2<&)1}fVOxi+J; C]jABsZ0FID|y5Wv,riE^OkSO;V=or2r;u{u7J');
	define('SECURE_AUTH_KEY',  '&,<A <`N+fBk1|/c+2JoLLY|[K6!D!!2=`mUr)s$~Y-h+*IYQ3-,bZQ5tSG#c:OX');
	define('LOGGED_IN_KEY',    'NaNK|=wVioo9Or<O%:gmKhAjAw~PnfqpoY&OZ&3x(>h:6r$-I4.|J0oyJ9hN}ekg');
	define('NONCE_KEY',        'zZ{lrCa;:Icu*T`x>x}jhy3tCz8t|qxcJqw#+42zn-r0`HtkhtQSN#Bd.HwNx`uw');
	define('AUTH_SALT',        '|hm8!Lua1`s3e7-DR9+42~<r&OC%!2^dJ;T,&S+,Stj~5MF5DfaT}wzF}Cze|e~%');
	define('SECURE_AUTH_SALT', 'Za-r?_sWdVBzcilu5{D`]QE-ZGs2/V@3q5Kq0G#t0kx(*k9=C<0?+RM:1cCiaY#!');
	define('LOGGED_IN_SALT',   ';|M51~j+1*wTjEH(%eNu&mSf*jT1]oB&9KhwS<o2{*$-:%PRw|ro:>+8 K)7{Y@E');
	define('NONCE_SALT',       'YZr*q3[VxSyvWqq<@gK/{_7_Dcw-UHq4Re8)F:TA-g19MM3U8zK%hH2Z>=6->MtA');

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
