<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</head>

<body class="bg-light">
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" height="50" width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../img/logo.png" height="50" width="100"></h5>
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
                            <a class="nav-link active" aria-current="page" href="login.php">
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

    <form action="bancoDados.php" method="post">
        <div class="container">
            <br><br>
            <h1 style="text-align: center; color: #000;">Login</h1>
            <br><br>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control-plaintext" name="txtEmail" placeholder="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" placeholder="Senha" name="txtSenha" id="inputPassword">
                </div>
            </div>
            <div class="col-sm-12" style="margin-left: 0%; margin-top: 2vh;">
                <input class="btn btn-primary" type="submit" value="Enviar" />
            </div>
        </div>
    </form>

    <!-- <div class="container">
        <div class="align-self-center">

            <div class="card position-relative" style="width: 33.3%; align-items: center; margin-left: 35%;margin-top: 7%; background-color: #b5aaaab8;">

                <div class="card-body">

                    <form action="bancoDados.php" method="post">
                        <div class="container">
                            <div class="align-self-center" style="margin-top: 5%;">
                                <div class="col-12" style="margin-left: 0%;">
                                    <input type="text" class="form-control" placeholder="Email" name="txtEmail" aria-label="Name" />
                                </div>
                                <br>
                                <div class="col-12" style="margin-left: 0%;">
                                    <input type="password" class="form-control" placeholder="Senha" name="txtSenha" aria-label="Senha" />
                                </div>
                                <br>
                                <div class="col-12" style="margin-left: 0%; margin-top: 2vh;">
                                    <input class="btn btn-primary" type="submit" value="Enviar" />
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div> -->

</body>

</html>


<?php

if (isset($_GET['erro'])) {
    echo '
        <div class="alert alert-danger d-flex align-items-center" role="alert" style="width: 27.7%;margin-left: 37.5%;margin-top: 1%;">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
            Usuario ou Senha incorretos
          </div>
        </div>';
}
?>