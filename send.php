<?php 

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $info = $_POST['info'];

    // Mail Header
    $mailTo = "contacto@lacasadelasflores.rule.com.mx";
    $subject = "New concact from la casa de las flores"; 
    $txt = "You have recieve a email from ". $name . "\n\n" . $info;
    $from = "From: ". $email;
 
    mail($mailTo, $subject, $txt, $from);
}


?>