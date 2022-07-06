<?php
$res = session_start();
var_dump($res);
$_SESSION['lol'] = 123;
var_dump($_SESSION);


if(isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['descr']) && isset($_POST['token'])){
    if($_POST['token'] === $_SESSION['token']){
        $token = "5261462940:AAHLyYK7EmJYS28YUrLzohRwi-kKVsxiEEA";
        $data = [
            'text' => 'Заявка с сайта '. $_SERVER['SERVER_NAME'] .':
            Имя: '. $_POST['name'] .'
            Телефон: '. $_POST['tel'] .'
            E-mail: '. $_POST['email'] .'
            О компании: '. $_POST['descr'],
            'chat_id' => '70600805'
        ];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
    }
}else{
    echo "Проверьте заполненность полей" . $_POST['name'] . $_POST['tel'] . $_POST['email'] . $_POST['token'];
}