<?php

if(!defined('perform') || (perform !== '123')) {die("<span style='font-weight:bold'>Error: Access forbidden.</span>");}

function array_column($array,$column_name){  // � ���5.3 (Denwer) ��� ������� array_column, ������� ��������� ��

    return array_map(function($element) use($column_name){
		return 	isset($element[$column_name])? $element[$column_name] : null; }, $array);
}
				
 