<?php
$email = "dararomanova887@gmail.com";
$tema = "Заявка с сайта";
$message = "Имя: ".$_POST['name']."<br>";
$message.= "E-mail: ".$_POST['email']."<br>";
$message.= "Номер телефона: ".$_POST['phone']."<br>";
$message.= "Сообщение: ".$_POST['message']."<br>";


if (mail($email,$tema, $message))
 {     echo "Сообщение успешно отправлено";
} else {
    echo "При отправке сообщения возникли ошибки";
}
?>