<?php

$username= isset($_POST['username']) ? $_POST['username'] : '';
$usermail= isset($_POST['usermail']) ? $_POST['usermail'] : '';
$usermail= isset($_POST['usermail']) ? $_POST['usermail'] : '';
$usermessage= isset($_POST['usermessage']) ? $_POST['usermessage'] : '';
$contenido = 
    '
    <html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>Haz recibido un mensaje através de la pagina</h2>
        <p>
        '.$username.' Te ha enviado el siguiente mensaje  
        </p>
        <p>
        '.$usermessage.' <br><br> Puedes ponerte en contacto con la persona al email: '$usermail.'   
        </p>
        <hr>
        </body>
        </html>';

        '

// Enviar correo
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";



?>