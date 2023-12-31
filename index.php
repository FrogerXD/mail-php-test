<?php
require "mail.php";
function vali($name,$email,$subject,$message,$form){
    return  !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}
$status="";
if (isset($_POST["form"])) {
    if (vali(...$_POST)){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $subject=$_POST["subject"];
        $message=$_POST["message"];
        $body="$name <$email> te envia el mensaje : <br><br> $message";
        sendmail($subject,$body,$email,$name,TRUE);
        $status="success";
    }else{
        $status="danger";
    };
}else{
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>TEST MAIL PHP</title>
    
</head>

<body>
    <?php if($status=="danger"): ?>
        <div class="alert danger">
            <span>Surgió un problema</span>
       </div>
    <?php endif;?>
    <?php if($status=="success"): ?>
       <div class="alert success">
           <span>Email enviado con exito</span>
      </div>
    <?php endif;?>
    <form action="./" method="post">
        <h1>¡Envia un correo!</h1>
        <div class="div_input">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" placeholder="Ingresa tu nombre">
        </div>
        <div class="div_input">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Ingresa tu email">
        </div>
        <div class="div_input">
            <label for="subject">Asunto:</label>
            <input type="text" name="subject" id="subject" placeholder="Ingresa un asunto">
        </div>
        <div class="div_input">
            <label for="message">Contenido:</label>
            <textarea name="message" id="message" placeholder="Ingresa tu mensaje"></textarea>
        </div>
        <div class="div_button">
            <button name="form" type="submit">Enviar</button>
        </div>
        <div class ="div_con">
            <span>Contactame</span>
            <div class="div_contact">
                
                <div class="info">
                    <a href="https://github.com/FrogerXD">
                        <i class="fa-brands fa-github fa-2x" ></i>
                    </a>
                    <span>FrogerXD</span>
                </div>
                <div class="info">
                    <a href="https://www.instagram.com/dsarias82/">
                        <i class="fa-brands fa-instagram fa-2x"></i>
                    </a>
                    <span>@dsarias82</span>
                </div>
            </div>
        </div>
    </form>
</body>

<script src="https://kit.fontawesome.com/4f0b969e6c.js" crossorigin="anonymous"></script>
</html>