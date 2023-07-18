<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>TEST MAIL PHP</title>
    
</head>

<body>
    <div class="alert danger">
        <span>Surgió un problema</span>
    </div>
    <div class="alert success">
        <span>Email enviado con exito</span>
    </div>

    <form action="./">
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
            <button type="submit">Enviar</button>
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