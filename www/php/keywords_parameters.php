<?php
// Основные параметры для поиска файлов по ключевым словам

/* Установка внутренней кодировки этого скрипта в UTF-8 */
mb_internal_encoding("UTF-8");
//$internal_enc = mb_internal_encoding();
mb_regex_encoding("utf-8");
$internal_enc = mb_internal_encoding();

if(!defined('perform') || (perform !== '123')) {die((mb_convert_encoding('Error 2: Эту программу нельзя запускать непосредственно. Access forbidden.', $internal_enc, $internal_enc)));}

$port = 8000; // Порт, на который будут направляться AJAX-запросы (например, 8000)

$max_search_len = 30;
$max_keywords_count = 1000;
$max_links_count = 10;
$max_num_keyWords = 10; // Максимальное число ключевых слов в тексте каждой ссылки
$metaphone_len = 5; // Максимальное число символов (параметр) для функции  metaphone


$path0 =  '/../secret/';
$path0_abs = $_SERVER['DOCUMENT_ROOT'].$path0;
$path_php = '/php/';
$path_php5_3 = '/php/functions_PHP5_3/';

$path =  'URL_keywords.csv';
$path1 = 'URL_absent.csv';
$path2 = 'URL_with_error_keywords.csv';

$reg_meta_wrong = '/[^абвгдеёжзийклмнопрстуфхцчшщъыьэюяqwertyuiopasdfghjklzxcvbnm\,\s_0-9\-\+]/';


$max_len_Arr = array($max_search_len, $max_keywords_count, $max_links_count, $max_num_keyWords, $metaphone_len);


