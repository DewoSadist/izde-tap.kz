<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["tel"]);
$website = htmlspecialchars($_POST["company"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "kazakh_stan@mail.ru";
$sub = "Сообщение с сайта ХХХ";

/* Формат письма */
$mes = "Сообщение с сайта ХХХ.\n
Имя отправителя: $name
Электронный адрес отправителя: $email
Телефон отправителя: $tel
Сайт отправителя: $website
Текст сообщения:
$message";


if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
    header('Refresh: 5; URL=https://biznessystem.ru');
    echo '

    Письмо отправлено, через 5 секунд вы вернетесь на страницу XXX%MINIFYHTML957ccaa915c72968a108b93da06f704510%';}
else {
    header('Refresh: 5; URL=https://biznessystem.ru');
    echo '

    Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>
