<!DOCTYPE html>
<html>
<head>
    <title>Mail formulario</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
<form action="correo.php" method="POST">
<input type= "text" placeholder="name" name="name">

<input type= "text" placeholder="email" name="email">

<input type= "text" placeholder="asunto" name="asunto">
<textarea placeholder="mensaje" name="msg"></textarea>
<input type="submit" name="enviar" value="Enviar">
<form>

<?php
include("correo.php");

?>

</body>
</html>