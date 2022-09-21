<?php
session_start();

$databaseInstance1 = mysqli_connect('149.62.37.204', 'u596538548_root',
        '@NEVER_ebd123', 'u596538548_biblioteca');
 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</head>

<body class="bg-light">
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" height="150" width="150"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" height="150" width="150"></h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="adm/login.php">
                                <h6>Administrador</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <hr />

    <!-- Para entrada de dados podemos utilizar um formulário -->

    <section class="hero is-fullheight" style="background-color: #e6e6e6;">
        <div class="hero-body">
            <div class="container has-text-centered" style="margin-bottom: 10vh;">
                <div class="column is-4 is-offset-4">
                    <img src="img/logo.png" height="250" width="250">
                    <br><br><br><br>
                    <?php

                    if (isset($_GET['erro'])) {
                        echo '
                            <div class="alert alert-danger d-flex align-items-center" role="alert" >
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Usuario ou Senha incorretos
                                </div>
                        </div>';
                    }
                    ?>
                    <div class="login-box">
                        <?php
                        echo '
                                <form action="verificaLogin.php" method="post">
                                <div class="field user-box">
                                    <div class="control">
                                        <input placeholder="  Email" name="txtEmail" name="text" class="input is-large" autofocus="">
                                    </div>
                                </div>
    
                                <div class="field user-box">
                                    <div class="control">
                                        <input placeholder="  Senha" name="txtSenha" class="input is-large" type="password">
                                    </div>
                                </div>

                                

                                <input type="submit"  class="button botao is-block is-large is-fullwidth" style="color: #fff;" value="Entrar">
    
                                <hr>
                                </form>
                                <div class="field user-box">
                                    <a href="usuario/cadastro/cadastro.php" style="text-decoration: none !important;"><button type="button" class="button botao is-block is-large is-fullwidth" style="background-color: red !important; color: #fff;">Cadastrar</button>
                                    </a>
                                </div>
                                <div class="field user-box">
                                    <a href="usuario/esqueci/esqueci.php" style="text-decoration: none !important;"><button type="button" class="button botao is-block is-large is-fullwidth" style="background-color: #919100 !important; color: #fff;">Esqueci a Senha</button>
                                    </a>
                                </div>
                            '; ?>

                    </div>
                </div>
            </div>
        </div>



</body>

</html>