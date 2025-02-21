<?php
$first_name = $_POST['first_name'];
$email = $_POST['email'];

$first_name = htmlspecialchars($first_name);
$email = htmlspecialchars($email);

$first_name = urldecode($first_name);
$email = urldecode($email);

$first_name = trim($first_name);
$email = trim($email);

echo $first_name;
echo "<br>";
echo $email;

mail("cijaydorosh@gmail.com", "Заявка с сайта", "ФИО:".$first_name.". E-mail: ".$email ,"From: example2@mail.ru \r\n");

if (mail("cijaydorosh@gmail.com", "Заявка с сайта", "ФИО:".$first_name.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
