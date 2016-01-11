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
define('DB_NAME', 'logoped');

/** Имя пользователя MySQL */
define('DB_USER', 'logopedpl');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         '*OL5e},;Nf]8^%+|(df2uzz_LLm?ijhUYRhoorzeyseHm+hS)BFj9l|(V&d+}Ji1');
define('SECURE_AUTH_KEY',  '$~:%nw6|b@^)x9YK;?Ew-uC4@-`%4 ][|v5h/%Yy[=P[TYu:5+|e,mgoN,|d1i/|');
define('LOGGED_IN_KEY',    'p|-HBP|YQ}og+C,G%6$Hdf)20`y+:C9M$/FQdfE0yfK6dG>cJ{.f-c|hOn13[kD*');
define('NONCE_KEY',        '>7K7YBd<I.WBe1*i!JRxwSJCBLY<_$D-XnwH--l ]o;|.[S[rv[#>}CM#HcAr(#d');
define('AUTH_SALT',        'pH]]21_p05D-8[+VQ|/SaeGKp)=r8%+C;idQfGNHgzK.[qzn>u_q#<$=J{V@|ScE');
define('SECURE_AUTH_SALT', 'PHbrP_O-]H-{qW+{_(2-v+m8yZ*XaS,ljlRTIAj.LXv4Jt?E=s/yB@}.k+k:ee$|');
define('LOGGED_IN_SALT',   '|Rgxgu,Zg|EqdU$j8j1XmbS72.nPIdA!P^.,k8<:Djk>-#&TEdI<$rnnD|Y!|FND');
define('NONCE_SALT',       '!&,|)uzV{6x][VIi|9S/wbwz>4-7^9ini9G;*Nu1KD33>$nhM*J %TE|c8oB[[&,');

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
