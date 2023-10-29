<!DOCTYPE html>
<html lang="en">
<head>
    <title>Env&iacute;o de datos por GET y POST</title>
    <meta charset="UTF-8">
</head>
<body>
    <hgroup>
        <h1>Formulario enviado por el m&eacute;todo GET</h1>
    </hgroup>
    <form name="envia-get_frm" action="envia-datos.php" method="get" enctype="application/x-www-form-urlencoded">
        <label for="">Ingresa tu Nombre:</label>
        <input type="text" name="nombre_txt">
    <br> <br>
        <label for="">Ingresa tu Password:</label>
        <input type="password" name="password_txt">
        <br> <br>
    <input type="submit" name="enviar_btn" value="Envia-GET">
    </form>

    <hgroup>
        <h1>Formulario enviado por el m&eacute;todo POST</h1>
    </hgroup>
    <form name="envia-get_frm" action="envia-datos.php" method="post" enctype="application/x-www-form-urlencoded">
        <label for="">Ingresa tu Nombre:</label>
        <input type="text" name="nombre_txt">
    <br> <br>
        <label for="">Ingresa tu Password:</label>
        <input type="password" name="password_txt">
        <br> <br>
    <input type="submit" name="enviar_btn" value="Envia-POST">
    </form>
</body>
</html>