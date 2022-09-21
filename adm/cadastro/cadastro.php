<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="cadastro.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php"><img src="../../img/logo.png" height="50" width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../../img/logo.png" height="50" width="100"></h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../index.php">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="arquivos/emprestimos.php">
                                <h6>Emprestimos</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Fim da Navbar -->
    <br><br>
    <h1 style="text-align: center; margin-top: 5%;">Cadastro de Livro</h1>
    <br><br>
    <!-- Para entrada de dados podemos utilizar um formulário -->

    <form style="text-align: center;" action="verificaCadastro.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <input class="elemento" type="text" name="txtTitulo" placeholder="Titulo">
                </div>
                <div class="col-sm-4">
                    <input class="elemento" type="text" name="txtGenero" placeholder="Gênero">
                </div>
                <div class="col-sm-4">
                    <input class="elemento" type="text" name="txtAutor" placeholder="Autor">
                </div>
            </div>

                <br>

            <div class="row">
                <div class="col-sm-4">
                    <input class="elemento" type="text" name="txtObservacao" placeholder="Observação">
                </div>
                <div class="col-sm-4">
                </div
                
            </div>
            
            <br>

            <input class="btn btn-primary elemento" type="submit" value="Cadastrar" />

        </div>
    </form>



</body>

</html>