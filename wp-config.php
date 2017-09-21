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
define('DB_NAME', 'white_hostel');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Z&dgCjeSROjQ~g7_GXd?+)c(?2.MNyI4?/|H(Q;)7VPRlA0ui#b1-^|RCcI(BwEu');
define('SECURE_AUTH_KEY',  '$sUHE)u~:7h]F,W4HnDk(%zzzcq]HFv)V3j/3u5}FfuIF-4Q3l^EEdTEjA(45f)<');
define('LOGGED_IN_KEY',    'eb%VZo3b%8U$&rqzYzm_ygBzh)51w ^^WME)pZe8%cTZgkQr8%}@{LR:)]Lc4x#d');
define('NONCE_KEY',        '3R_8S8AhAjU_+5aN=|U<~KnvYdhJ@/)SPGmwF>.Ac-,G!.r7(CdkJQ=Iw1b~]6|x');
define('AUTH_SALT',        'v8;7$`$wk-aS,|R&B,hPFskBO$lov$WiUP<,1*6%;sL:;C<?w;MP(?xw8X?pLP%W');
define('SECURE_AUTH_SALT', '?N2m]8ZTAJ_#$q&$JwCPN#8Ic*}J,J~q{}t<xCl[g6|@OAErdcb^n07`v#5S%3T{');
define('LOGGED_IN_SALT',   'D>e?GOdSVkz+(+wd?sJ{Q]d_:@y+p9A+yJ|3Y53Wr(P/L9_}!,2bwi?cte^f@P:n');
define('NONCE_SALT',       'Sy@L_Ww_e{=vLYD$dk+=rlmYep82E.&5)rNL&t) FTAdQ5Qi83|*&nhBN93o|X=V');

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
