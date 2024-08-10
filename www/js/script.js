function DO_URL_keywords(port) {
    var result = confirm('Действительно создать файл ключевых слов для ВСЕХ URL, имеющихся в Sitemap.xml и которые имеют раздел <head>...</head> ?');
    if (result) {
        sending('to_do=DO_URL_keywords', ':'+ port+'/php/getter.php?'+'random='+Math.random(), 'response', false); // Запускаем создание файла ключевых слов для html-страниц сайта
    } else {

    }
}


function SHOW_keywords_links(word, reg, port) {
    word = word.toLowerCase();

    if(word.length > 30 || word.length < 3){
        alert('Можно ввести не менее 3 и не более 30 символов в ключевых словах');
        return;
    }

//    if(/[^абвгдеёжзийклмнопрстуфхцчшщъыьэюяqwertyuiopasdfghjklzxcvbnm\,\s_0-9\-\+]/.test((word)))
    if(reg.test(word)){
        alert(' Разрешается ввести только следующие символы: цифры, пробелы, русские, латинские буквы и символы _ , - +');
        return;
    }

    var result = confirm('Найти статьи по выбранным вами ключевым словам?');
    if (result) {
        word = encodeURIComponent(word);

        sending('to_do=find_links&word='+word, ':'+ port+'/php/getter.php?'+'random='+Math.random(), 'response', false); // Запускаем создание файла ключевых слов для html-страниц сайта
    } else {

    }
}


function sending(body, prog_PHP, DIV_id, flag_do_something) {
//            document.getElementById('response').className=''; // Предварительно очищаем класс
            var docum_location = window.location.protocol+"//"+document.location.hostname;
            var xhr = new XMLHttpRequest();

            xhr.open("POST", docum_location+prog_PHP, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function xhr_state() { // (3)
                if (xhr.readyState != 4) return;

                var xhr_status = xhr.status;
                if (xhr_status == 200 || xhr_status === 201) {
                    if(xhr.responseText != 1){
                        var ankor = '/*do_something*/';
                        if(xhr.responseText.substr(0, ankor.length) != ankor){
                            if(flag_do_something == true){ // Добавлять содержимое в блок или переписывать его заново
                            document.getElementById(DIV_id).innerHTML += xhr.responseText;
                            }else{
                                document.getElementById(DIV_id).innerHTML = xhr.responseText;
                            }
                        }else{
                        var y = document.createElement('script'); // новый тег SCRIPT
                        y.defer = true; //Даём разрешение на исполнение скрипта после его "приживления" на странице
                        y.text = xhr.responseText; //Записываем полученный от сервера "набор символов" как JS-код
                        document.body.appendChild(y);
                        }
//                        After_xhr(body, DIV_id, xhr.responseText); // После получения сообщения выполняем другие действия

                    }else{
                        alert('Ошибка загрузки ...');  //location.reload();
                    }
                } else {
                    if(xhr_status == 400 || xhr_status == 500){
                        document.getElementById(DIV_id).innerHTML = xhr.responseText;
                    }

                    alert('xhr error '+xhr.statusText);
                }
            };
            xhr.send(body);
            return false;
        }

