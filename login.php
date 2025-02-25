<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="css/normalize.css" as="style">
            <link rel="stylesheet" href="css/normalize.css">
        <link rel="preconnect" href="css/styles.css" as="style">
            <link rel="stylesheet" href="css/styles.css">

        <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="login">
        <div class="login__bg">
            <aside class="hero grey-out height100">
                <h1 class="hero__titulo centrar-texto">Texto Generico Para Probar</h1>
                <p class="hero__texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
            </aside>
        </div>
        <main class="login__form">
            <div class="formulario caja">
                <h2 class="">Inicio de Sesión</h2>
                <form class="formulario-Login" action="/action_page.php">
                    <label for="usuarioLogin" class="formulario-login__label">Usuario</label>
                    <input type="text" id="usuarioLogin" name="usuarioLogin" class="formulario-login__campo">
                    <label for="contraseñaLogin" class="formulario-login__label">Contraseña</label>
                    <input type="text" id="contraseñaLogin" name="contraseñaLogin" class="formulario-login__campo">
                    <span class="boton-derecha"><input type="submit" value="Ingresar" class="formulario-login__submit"></span>
                </form>
            </div>
        </main>
    </div>
    <!--<footer class="footer">
        <div>
            <p>"Ningun plan sobrevive al contacto con el enemigo"</p>
        </div>
    </footer>-->
</body>
</html>