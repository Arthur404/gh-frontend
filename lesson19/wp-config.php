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
define('DB_NAME', 'wp_base');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '^A(>7<XgXu}]CuUin(W0nv$ <#A{TiH?OYoV6,P.a<e/j;d#>RmN5dEKc<mBwNt-');
define('SECURE_AUTH_KEY',  'w&E.5dT>d.De9+VCIa<sq1PlKT;*`gS-96pE;D%-0_uPJQ#V$lj+L`;]ntn}qjX1');
define('LOGGED_IN_KEY',    '-t`D!-eO/u-P< }IRydhm>FVXZ9lZr+IZd9qi#i7FK]e*t+5=<~3|p<0=Gyl=@Q9');
define('NONCE_KEY',        '1J+9=aT671!9D#VOz||YJ;3W9|^St;+_u_I=ST{j8Kz<:I-RhEZic9L>VDxO%_`B');
define('AUTH_SALT',        'XJ]c%=^Y&.{,C%gN1[~lrbps~^TO&4*_{8ZF*Q.iCZ&vcJ-w4#3[-Rbq0yM~GI--');
define('SECURE_AUTH_SALT', '_|o;.!H}UT_;`Bnc1t-r2D+5-&Y8S,jW/ulkc~m-KIS#+(tvWO=)(fr4j/;(HTH/');
define('LOGGED_IN_SALT',   ';^{HgeF*h)c]^d7_1`dS6.)Gn<KL%Y:?*eGx7jiEE-_Ahc4VD466pTR:JY<Ra_e/');
define('NONCE_SALT',       '`3<Zj8S)qQpA(6(,22JKj*nvR6*8#57`gcW-Z-7h7~N JF/%Nsq,ypa]$.`nxm}6');

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
