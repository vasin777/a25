<?php
//отправка данных на email

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    if((($_POST['email'])!="") and (($_POST['phone'])!="") and (($_POST['name']))!=""){ 
    $to = $_POST['email'];
    $subject = 'A25';
    $message = "<b>Имя:</b> ".$name."<br><b>Телефон:</b> ".$phone."<br><b>E-mail:</b> ".$email; 
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
    $headers .= "From: A25 <post@a25.ru>\r\n"; 
    mail($to, $subject, $message, $headers);

    require_once("db.php"); //соединение с базой данных
    //сохранение данных в БД PDO
        $stmt = $conn->prepare("INSERT INTO contacts (name, phone, email) VALUES (:name, :phone, :email)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
    } else {
    echo 1;
    }
?>