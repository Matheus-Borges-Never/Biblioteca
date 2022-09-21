<?php
session_start();
$userName = $_SESSION['nome'];

$databaseInstance1 = mysqli_connect('149.62.37.204', 'u596538548_root',
        '@NEVER_ebd123', 'u596538548_biblioteca');

if ($_SESSION['token'] != 'validToken') {
  header("Location: ../index.php");
}
$name = $_SESSION['nome'];

echo '

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Elimar</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/bulma.min.css" />
    <link rel="stylesheet" href="../../../css/css.css" />
    <link rel="stylesheet" type="text/css" href="../../../css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</head>
<body style="background-color: #f1f8fd !important;">
<nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../../index.php"><img src="../../../img/logo.png" height="150" width="150"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../img/logo.png" height="150" width="150"></h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../../index.php">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../cadastro.php">
                                <h6>Cadastrar Livros</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<br><br><br>
<br><br><br>
';


$retorno = $databaseInstance1->query("select * from emprestimo");

if (mysqli_num_rows($retorno) > 0) {
  while ($registro = $retorno->fetch_assoc()) {
    $usuario = utf8_encode(utf8_decode($registro['usuario']));
    $titulo = utf8_encode(utf8_decode($registro['titulo']));
    $entrega = utf8_encode(utf8_decode($registro['entrega']));
    echo '
    <form action="verificaEmprestimo.php" method="post">
    <div class="card"  style="width: 100%; margin-bottom: 3%;">
    <div class="card-body list-group list-group-flush">
      <h5 class="card-title list-group-item" name="txtTitulo">Título: <b>' . $titulo . '</b></h5>
      <h5 class="card-title list-group-item" name="txtUsuario">Usuário: <b>' . $usuario . '</b></h5>
      <h5 class="card-title list-group-item" name="txtEntrega">Entrega: <b>' . $entrega . '</b></h5>

      <input type="hidden" name="txtUsuario" value="'. $usuario .'" />
    <input type="submit"  class="btn btn-primary" style="width: 50%; margin-left: 25%;" value="Entregue">
    </div>
  </div>
  </form>
              
        ';
  }
}

'
</div>
</body>
</html>
';
