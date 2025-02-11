<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Iniciar Sesion</title>
</head>
<body class="login">
    <aside class="login-bg">
        
    </aside>
    <main class="login-login">
        <div class="caja">
            <h1>Inicio de Sesión</h1>
            <form class="formulario-Login" action="/action_page.php">
                <label for="usuarioLogin">Usuario</label>
                <input type="text" id="usuarioLogin" name="usuarioLogin">
                <label for="contraseñaLogin">Contraseña</label>
                <input type="text" id="contraseñaLogin" name="contraseñaLogin">
                <input type="submit" value="ingresar">
            </form>
        </div>
    </main>
</body>
</html>