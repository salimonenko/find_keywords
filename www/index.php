<?php

header('Content-Type: text/html; charset=utf-8');

/* Установка внутренней кодировки этого скрипта в UTF-8 */
mb_internal_encoding("UTF-8");
//$internal_enc = mb_internal_encoding();
mb_regex_encoding("utf-8");

define('perform', '123');


$reg_meta_wrong = '';
$port = 80; // Для начала (потом порт будет уточнен в параметрах)

$path_keywords_parameters = "/php/keywords_parameters.php";
    @(include_once $_SERVER['DOCUMENT_ROOT'].$path_keywords_parameters) or die('Отсутствует подключаемый файл '. $path_keywords_parameters);

    if(!$reg_meta_wrong){ // Проверка на всякий случай
        die('Файл '. $path_keywords_parameters. ' подключен неправильно. ');
    }


?>

<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
    <meta http-equiv="Cache-Control" content="no-cache" />

    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <link href="/css/finding_words.css" rel="stylesheet" type="text/css" media="all" />

<style>


</style>


</head>


<body>

<table width=100% height=20px>
<tr><td align=center>
<h2 align=center>Поиск по ключевым словам на сайте</h2>
</td></tr>
</table>


 <div style="">

<!--   КНОПКА ДЛЯ СОЗДАНИЯ ФАЙЛА КЛЮЧЕВЫХ СЛОВ (там строки вида   URL; keyword1, keyword2,...   -->
 <div id="DO_quick_tags"  title="Создать файл ключевых слов - на основе файлов html-страниц, URL которых содержатся в Sitemap.xml и в которых есть раздел <head>...</head>" class="finding_words">
        <div onclick="DO_URL_keywords(<?php echo $port; ?>)" class="finding_words-border-radius-8px string_find" style="position: relative; ">

            <div class="" ><div>Создать файл ключевых слов на основе <span style="margin-top: 0px; display: inline; line-height: 50%;">Sitemap.xml</span></div></div></div>
    </div>

        <textarea id="keywords_data" placeholder="Введите ключевые слова...  например: газета машина амортизатор" style="width: 220px; height: 66px;  overflow-wrap: normal; word-wrap: normal; word-break: break-all; line-break: auto;  display: inline-block; vertical-align: top;"   ></textarea>
<!--   КНОПКА ДЛЯ ФОРМИРОВАНИЯ И ВЫВОДА НА ЭКРАН ССЫЛОК НА СТАТЬИ, НАЙДЕННЫЕ ПО КЛЮЧЕВЫМ СЛОВАМ   -->
<div id="SHOW_keywords_links"  title="Найти релевантные статьи по ключевым словам" class="finding_words ">
        <div onclick="SHOW_keywords_links(this.parentNode.parentNode.getElementsByTagName('textarea')[0].value, <?php echo $reg_meta_wrong; ?>, <?php echo $port; ?>)" class="finding_words-border-radius-8px string_find" >

            <div class="" ><div>Найти статьи по ключевым словам <span style="margin-top: 0; display: inline; line-height: 50%;"></span></div></div></div>
    </div>

    </div>


<div id="response" style="border: solid 2px blue; background-color: #f1f1f1; line-height: 120%; width: 500px; display: inline-block; margin: 2px 0 0 50px; height: 400px"> </div>


<?php



$script = file_get_contents($_SERVER['DOCUMENT_ROOT']. '/js/script.js');
echo '<script>'. $script. '</script>';


?>

<!--
<script type="text/javascript" src="/js/script.js"></script>

-->
</body></html>