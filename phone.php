<?php
    $msg_box1 = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($_GET['form_name'] == "")    $errors[] = "Поле 'Ваше ім'я' не заповнено!";
    if($_GET['form_phone'] == "")   $errors[] = "Поле 'Ваш phone' не заповнено!";
    
    // если форма без ошибок
    if(empty($errors)){     
        // собираем данные из формы
        $message  = "Ім'я користувача: " . $_GET['form_name'] . "\r\n";
        $message .= "Телефон користувача: " . $_GET['form_phone'];
        send_mail($message); // отправим письмо
        // выведем сообщение об успехе
        $msg_box1 = "<span style='color: green;'>Заявка на дзвінок прийнята!</span>";
    }else{
        // если были ошибки, то выводим их
        $msg_box1 = "";
        foreach($errors as $one_error){
            $msg_box1 .= "<span style='color: red;'>$one_error</span><br/>";
        }
    }
 
    // делаем ответ на клиентскую часть в формате JSON
    echo json_encode(array(
        'result' => $msg_box1
    ));
     
     
    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "AnnaDemianik@gmail.com"; 
        // тема письма
        $subject = "Передзвоніть мені";
         
        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: Передзвоніть мені \r\n"; // от кого письмо
        $headers .= "Смарт Хаус \r\n"; // от кого письмо
        
        // отправляем письмо 
        mail($mail_to, $subject, $message, $headers);
    }
     
?>