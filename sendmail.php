<?php 
 if (!empty($_GET["name"])&&!empty($_GET["email"])) {
     $name = $_GET["name"];
     $email = $_GET["email"];
     $pack = $_GET["package"];
     $msg = $_GET["msg"];
 }


$to  = "vaheta@tardis3d.ru" ; 

$subject = "New Customer Interested"; 

$message = ' 
<html> 
    <head> 
        <title>New Customer Interested!!!</title> 
    </head> 
    <body> 
        <p>name = '.$name.' </p> 
        <p>email = '.$email.' </p>
        <p>package = '.$pack.' </p>
        <p>message = '.$msg.' </p>
    </body> 
</html>'; 

$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: Pre Order <welcome@tardis3d.ru>\r\n"; 

mail($to, $subject, $message, $headers); 
?>