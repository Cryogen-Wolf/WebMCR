<?php

if(!defined("MCR")){ exit("Hacking Attempt!"); }

$lng = array(
	// Ошибки
	"e_msg" => "Ошибка!",
	"e_sql_connect" => "Ошибка соединения с базой",
	"e_sql_charset" => "Ошибка установки кодировки баз дынных",
	"e_sql_critical" => "Критическая ошибка баз данных. Обратитесь к администрации.",
	"e_critical" => "Обратитесь к администрации",
	"e_warn" => "Обнаружена ошибка!",
	"e_attention" => "Внимание!",
	"e_success" => "Поздравляем!",
	"e_403" => "Доступ запрещен",
	"e_404" => "Страница не найдена",
	"e_captcha" => "Неверно введена каптча",
	"e_hack" => "Hacking Attempt!",
	"e_install" => "Необходима установка",
	"e_module" => "Модуль недоступен",
	"403" => "403",
	"404" => "404",
	"e_mode_found" => "Страница не найдена",
	"e_mode_class" => "Объект module не найден",
	"e_mode_method" => "Метод content в классе module не найден",
	"e_advice_found" => "Советов нет",

	"target_blank" => "Ссылка откроется в новой вкладке",

	// debug
	'deb_name' => 'Отладка',
	'deb_php_ver' => 'Версия PHP',
	'deb_php_err' => 'Ошибки PHP',
	'deb_plt' => 'Время загрузки страницы',
	'deb_num_q' => 'Запросов к базе',
	'deb_db_err' => 'Ошибки базы',
	'deb_memory' => 'Использовано памяти',
	'deb_script' => 'Адрес скрипта',
	'deb_protocol' => 'Протокол',
	'deb_method' => 'Метод',
	'deb_os' => 'Операционная система',
	'deb_kb' => 'кб',
	'deb_sec' => 'сек.',

	// engine/skin.class.php
	"skin_e_folder_perm" => "Отсутствуют права на запись папки uploads/skins",
	"skin_e_intf_perm" => "Отсутствуют права на запись папки uploads/interface",
	"skin_e_size" => "Привышен максимально допустимый размер файла",
	"skin_e" => "Ошибка загрузки скина!",
	"skin_e_undefined" => "Неизвестная ошибка",
	"skin_e_temp" => "Отсутствует временная папка",
	"skin_e_perm" => "Отсутствуют права на запись",
	"skin_e_tempfile" => "Отсутствует временный файл",
	"skin_e_png" => "Разрешено загружать только png",
	"skin_e_format" => "Вам недоступен данный формат",
	"skin_e_save" => "Ошибка сохранения скина",

	// engine/cloak.class.php
	"cloak_e_folder_perm" => "Отсутствуют права на запись папки uploads/cloaks",
	"cloak_e_intf_perm" => "Отсутствуют права на запись папки uploads/interface",
	"cloak_e_size" => "Привышен максимально допустимый размер файла",
	"cloak_e" => "Ошибка загрузки скина!",
	"cloak_e_undefined" => "Неизвестная ошибка",
	"cloak_e_temp" => "Отсутствует временная папка",
	"cloak_e_perm" => "Отсутствуют права на запись",
	"cloak_e_tempfile" => "Отсутствует временный файл",
	"cloak_e_png" => "Разрешено загружать только png",
	"cloak_e_format" => "Вам недоступен данный формат",
	"cloak_e_save" => "Ошибка сохранения плаща",

	// engine/user.class.php
	"u_group_def" => "Гость",
	"u_group_desc_def" => "Группа неавторизованных пользователей",
	// "u_" => "",

	// Названия страниц
	"t_main" => "Главная",
	"t_403" => "Доступ запрещен",
	"t_404" => "Страница не найдена",
	// "t_" => "",

	// Названия блоков
	"b_404" => "Страница не найдена",
	"b_403" => "Доступ запрещен",
	// "b_" => "",

	// Пользовательские поля
	"login" => "Логин",
	"ip" => "IP",
	"email" => "E-Mail",
	"pass" => "Пароль",
	"group" => "Группа",
	"firstname" => "Имя",
	"lastname" => "Фамилия",
	"date_reg" => "Дата регистрации",
	"last_activity" => "Последнее действие",
	"gender" => "Пол",
	"gender_m" => "Мужской",
	"gender_w" => "Женский",
	"birthday" => "Дата рождения",
	"money" => "Игровой баланс",
	"realmoney" => "Реальный баланс",

	// Placeholder формы поиска
	"ph_search" => "Введите запрос",

	// Разное
	"load_client" => "СКАЧАТЬ КЛИЕНТ",
	"copy_pre" => "Полное или частичное копирование сайта",
	"copy_app" => "запрещено.",
	//"" => "",

	'yes' => 'Да',
	'no' => 'Нет',
	'save' => 'Сохранить',
	'add' => 'Добавить',
	'edit' => 'Редактировать',
	'delete' => 'Удалить',
	'search' => 'Поиск',
	'filemanager' => 'Файловый менеджер',
	'filemanager_ph' => 'Выберите файлы или перенесите их сюда',

	'bb_c_remove' => 'Удалить все теги',
	'bb_c_strong' => 'Жирный',
	'bb_c_italic' => 'Курсив',
	'bb_c_strike' => 'Зачеркнутый',
	'bb_c_underl' => 'Подчеркнутый',
	'bb_c_left' => 'Выравнивание по левому краю',
	'bb_c_center' => 'Выравнивание по центру',
	'bb_c_right' => 'Выравнивание по правому краю',
	'bb_c_font_size' => 'Размер шрифта [1-7]',
	'bb_c_font' => 'Шрифт [Arial|Arial Black|Comic Sans MS|Courier New|Georgia|Impact|Tahoma|Times New Roman|Trebuchet MS|Verdana]',
	'bb_c_color' => 'Цвет текста',
	'bb_c_bgcolor' => 'Цвет фона',
	'bb_c_reverse' => 'Текст в обратном порядке',
	'bb_c_link' => 'Ссылка [URL]',
	'bb_c_email' => 'E-Mail',
	'bb_c_list' => 'Список [markers|numbers]',
	'bb_c_line' => 'Горизонтальная линия',
	'bb_c_code' => 'Код [php|html|css|javascript]',
	'bb_c_quote' => 'Цитата [Логин | 00.00.00 - 00:00:00]',
	'bb_c_spoiler' => 'Спойлер [Название]',
	'bb_c_offtop' => 'Оффтоп',
	'bb_c_img' => 'Изображение',
	'bb_c_video' => 'Видео [youtube|vine|vk|vimeo|coub|twitch]',
	'bb_c_smiles' => 'Смайлики',
);

?>