<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>

<body>
    <?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    if ($_GET["error"] == 'si') {
        echo "<span style=\"color:#f00; font-size:2em;\">Verifica tus DATOS</span>";
    }
    ?>

    <hgroup>
        <h1>Formulario de Datos GET</h1>
    </hgroup>
    <form name="valida_datos_get_frm" action="validarDatos.php" method="get" enctype="application/x-www-form-urlencoded">
        <label>Ingresa Tu nombre</label> <br>
        <input type="text" name="nombre_txt"><br><br>
        <label>Ingresa tu Password:</label><br>
        <input type="password" name="password_txt"> <br><br>
        <input type="radio" name="sexo_rdo" value="M">
        <span style="color: blue">Masculino</span>
        <input type="radio" name="sexo_rdo" value="F">
        <span style="color: pink">Femenino</span> <br><br>
        <input type="hidden" name="enviar_hdn" value="get">
        <input type="button" name="enviar_btn" value="Enviar por GET" id="enviar-get">
    </form>

    <hgroup>
        <h1>Formulario de Datos POST</h1>
    </hgroup>
    <form name="valida_datos_post_frm" action="validarDatos.php" method="post" enctype="application/x-www-form-urlencoded">
        <label>Ingresa Tu nombre</label> <br>
        <input type="text" name="nombre_txt"><br><br>
        <label>Ingresa tu Password:</label><br>
        <input type="password" name="password_txt"> <br><br>
        <input type="radio" name="sexo_rdo" value="M">
        <span style="color: blue">Masculino</span>
        <input type="radio" name="sexo_rdo" value="F">
        <span style="color: pink">Femenino</span> <br><br>
        <input type="hidden" name="enviar_hdn" value="post">
        <input type="button" name="enviar_btn" value="Enviar por POST" id="enviar-post">
    </form>

    <script>
        function validarDatosPOST() {
            let verificar = true;

            if (!document.valida_datos_post_frm.nombre_txt.value) {
                alert('campo nombre no es valido');
                document.valida_datos_post_frm.nombre_txt.focus();
                verificar = false;
            } else if (!document.valida_datos_post_frm.password_txt.value) {
                alert('campo password requerido');
                document.valida_datos_post_frm.password_txt.focus();
                verificar = false;
            } else if (!document.valida_datos_post_frm.sexo_rdo[0].checked &&
                !document.valida_datos_post_frm.sexo_rdo[1].checked) {
                alert('el campo sexo es requerido!')
                document.valida_datos_post_frm.sexo_rdo.focus();
                verificar = false
            }
            if (verificar) {
                document.valida_datos_post_frm.submit()
            }
        }

        function validarDatosGET() {
            let verificar = true;

            if (!document.valida_datos_get_frm.nombre_txt.value) {
                alert('campo nombre no es valido');
                document.valida_datos_get_frm.nombre_txt.focus();
                verificar = false;
            } else if (!document.valida_datos_get_frm.password_txt.value) {
                alert('campo password requerido');
                document.valida_datos_get_frm.password_txt.focus();
                verificar = false;
            } else if (!document.valida_datos_get_frm.sexo_rdo[0].checked &&
                !document.valida_datos_get_frm.sexo_rdo[1].checked) {
                alert('el campo sexo es requerido!')
                document.valida_datos_get_frm.sexo_rdo.focus();
                verificar = false
            }
            if (verificar) {
                document.valida_datos_get_frm.submit()
            }
        }

        window.onload = function() {
            document.getElementById('enviar-get').onclick = validarDatosGET;
            document.getElementById('enviar-post').onclick = validarDatosPOST;
        }
    </script>
</body>

</html>