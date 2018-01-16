
<!DOCTYPE html>
<html>
    <head>
        <title>Registrarse</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style-login.css">
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    </head>
    <body>
        <?php
        include('conexionBD.php');
        $error=''; // Variable To Store Error Message
        if (isset($_POST['submit'])) {
            $usuario = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $sexo = $_POST['sexo'];
            $nombre = $_POST['name'];
            $apellido = $_POST['lastname'];
            $passw = SHA1($password);
            $query = $pdo->prepare("INSERT INTO usuarios (id_usuario, nombre, apellido, nick, password, email, sexo)VALUES(NULL, '$nombre', '$apellido', '$usuario', '$passw', '$email', '$sexo')");
            $row = $query->execute();
            header("location: index.php");
        }
        unset($_POST['username']);
        unset($_POST['password']);
        unset($_POST['password2']);
        unset($_POST['name']);
        unset($_POST['lastname']);
        unset($_POST['email']);
        unset($_POST['sexo']);
        ?>
        <!-- REGISTRATION FORM -->
        <div class="text-center" style="padding:50px 0">
            <div class="logo">
                <img src="img/logo.jpg" alt="" width="175" style="border-radius: 10px; margin: 0 0 20px 0"><br>
                Crear cuenta
            </div>
            <!-- Main Form -->
            <div class="login-form-1">
                <form id="register-form" class="text-left" action="" method="post" >
                    <div class="login-form-main-message"></div>
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <label for="reg_username" class="sr-only">Usuario</label>
                                <input type="text" class="form-control" id="reg_username" name="username" placeholder="Usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="reg_password" class="sr-only">Contraseña</label>
                                <input type="password" class="form-control" id="reg_password" name="password" placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <label for="reg_password_confirm" class="sr-only">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="reg_password_confirm" name="password2" placeholder="Confirmar contraseña" required>
                            </div>

                            <div class="form-group">
                                <label for="reg_email" class="sr-only">Email</label>
                                <input type="text" class="form-control" id="reg_email" name="email" placeholder="Direccion de correo" required>
                            </div>
                            <div class="form-group">
                                <label for="reg_fullname" class="sr-only">Nombre</label>
                                <input type="text" class="form-control" id="reg_fullname" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="reg_fullname" class="sr-only">Apellido</label>
                                <input type="text" class="form-control" id="reg_fullname" name="lastname" placeholder="Apellido" required>
                            </div>

                            <div class="form-group login-group-checkbox">
                                <input type="radio" class="" name="sexo" id="male" placeholder="hombre">
                                <label for="male">Hombre</label>

                                <input type="radio" class="" name="sexo" id="female" placeholder="mujer">
                                <label for="female">Mujer</label>
                            </div>

                            <div class="form-group login-group-checkbox">
                                <input type="checkbox" class="" id="reg_agree" name="reg_agree" required>
                                <label for="reg_agree">Acepto los <a href="#">terminos</a></label>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <div class="etc-login-form">
                        <p>¿Ya tienes una cuenta? <a href="index.php">Entrar</a></p>
                    </div>
                </form>
            </div>
            <!-- end:Main Form -->
        </div>
    </body>
</html>