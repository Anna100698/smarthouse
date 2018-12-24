<?php
    $msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок
    // проверяем корректность полей
    if($_GET['form_name2'] == "")    $errors[] = "Поле 'Ваше ім'я' не заповнено!";
    if($_GET['form_email2'] == "")   $errors[] = "Поле 'Ваш email' не заповнено!";
     if($_GET['form_message'] == "")   $errors[] = "Поле 'Ваше повідомлення' не заповнено!";
   
    // если форма без ошибок
    if(empty($errors)){     
        // собираем данные из формы
        $message  = "Ім'я користувача: " . $_GET['form_name2'] . "\r\n";
        $message  = "E-mail користувача: " . $_GET['form_email2'] .  "\r\n";
        $message .= "Повідомлення користувача: " . $_GET['form_message'];

        send_mail($message); // отправим письмо
        // выведем сообщение об успехе
        $msg_box = "<span style='color: green;'>Повідомлення успішно відправлене!</span>";
    }else{
        // если были ошибки, то выводим их
        $msg_box = "";
        foreach($errors as $one_error){
            $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
        }
    }
 
    // делаем ответ на клиентскую часть в формате JSON
    echo json_encode(array(
        'result' => $msg_box
    ));
     
     
    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "AnnaDemianik@gmail.com"; 
        // тема письма
        $subject = "Повідомлення з сайту";
        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: Повідомлення з сайту \r\n"; // от кого письмо
        $headers .= "Смарт Хаус \r\n"; // от кого письмо
        
        // отправляем письмо 
        mail($mail_to, $subject, $message, $headers);
    }
     
?>