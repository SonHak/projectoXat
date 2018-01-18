<!DOCTYPE html>
<html>
    <head>
        <!-- All the files that are required -->
        <title>Iniciar Sesion</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style-login.css">
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    </head>


    <!-- Where all the magic happens -->
    <!-- LOGIN FORM -->
    <body>
        <?php
        include('login.php'); // Includes Login Script

        if(isset($_SESSION['login_user'])){

            if($user == 'admin'){
                header('location: principal.php');
            }else{
                header("location: principal.php");
            }
        }
        ?>
        <div class="text-center" style="padding:50px 0">
            <div class="logo">
                <img src="img/logo.jpg" alt="" width="175" style="border-radius: 10px; margin: 0 0 20px 0"><br>
                Iniciar Sesion
            </div>
            <!-- Main Form -->
            <div class="login-form-1">
                <form id="login-form" class="text-left" action="login.php" method="post" >
                    <div class="login-form-main-message"></div>
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <input type="text" class="form-control" id="lg_username" name="username" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="lg_password" name="password" placeholder="Contraseña">
                            </div>
                            <div class="form-group login-group-checkbox">
                                <input type="checkbox" id="lg_remember" name="lg_remember">
                                <label for="lg_remember">Recordar</label>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                    </div>
                    <span><?php echo $error; ?></span>
                    <div class="etc-login-form">
                        <p>¿No tienes cuenta? <a href="registro.php">Crear cuenta</a></p>
                    </div>
                </form>
            </div>
            <!-- end:Main Form -->
        </div>
    </body>
</html>
