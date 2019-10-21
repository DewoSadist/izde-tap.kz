<?php
$name = $_GET['name']; // Вытаскиваем имя в переменную
$email = $_GET['email']; // Вытаскиваем почту в переменную
$phone = $_GET['phone'];
$message = $_GET['message'];
$company = $_GET['company'];
$type = $_GET['type'];
$recepient = "gulmira@izde-tap.kz";
$sitename = "izde-tap.kz";
$pagetitle = "Новая заявка с сайта \"$sitename\"";
$headers = "Content-type: text/plain; charset=\"utf-8\"\n From: no-reply@izde-tap.kz";
$messageStr = "\r\n 
имя: \"$name\" \r\n 
email: \"$email\" \r\n 
телефон: \"$phone\" \r\n 
компания: \"$company\" \r\n 
тип участия: \"$type\" \r\n 
сообщение: \"$message\"";
if (mail($recepient, $pagetitle, $messageStr, $headers)) {
    echo "<p>Сообщение успешно отправлено</p>";
} else {
    echo "<p>Ошибка, попробуйте еще раз</p>";
}
?>
