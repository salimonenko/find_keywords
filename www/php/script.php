function DO_keywords_links(word) {

if(word.length > 30 || word.length < 3){
alert('Допускается не менее 3 и более 30 символов');
return;
}


var reg = <?php echo mb_convert_encoding($reg_meta_wrong, Encoding_rus_letters); ?>;

//    if(/[^абвгдеёжзийклмнопрстуфхцчшщъыьэюяqwertyuiopasdfghjklzxcvbnm\,\s_0-9\-\+]/.test((word)))
if(reg.test(word)){
alert(' Допускаются только цифры, пробелы, русские, латинские буквы и символы _ , - +');
return;
}

var result = confirm('Найти статьи по выбранным вами ключевым словам?');
if (result) {
word = encodeURIComponent(word);

autoriz('flag_ED=DO_keywords_links&word='+word, '/comments/comments_man_autor.php?'+'r='+Math.random(), 'error1', false); // Запускаем создание файла ключевых слов для html-страниц сайта
} else {

}
}