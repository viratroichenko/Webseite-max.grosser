<?php
if($_POST){
    $to = "info@max-grosser.de"; // Ваша почта
    $subject = "Neue Nachricht von der Website";
    $message = "Name: ".$_POST['name']."\nEmail: ".$_POST['email']."\nTelefon: ".$_POST['phone']."\nNachricht:\n".$_POST['message'];
    $headers = "From: ".$_POST['email'];

    if(mail($to,$subject,$message,$headers)){
        echo "<script>alert('Danke, Ihre Nachricht wurde gesendet!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Es gab ein Problem beim Senden.'); window.location.href='index.html';</script>";
    }
}
?>
