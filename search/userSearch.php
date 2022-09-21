<?php
session_start();
$userName = $_SESSION['nome'];

$databaseInstance1 = mysqli_connect('149.62.37.204', 'u596538548_root',
        '@NEVER_ebd123', 'u596538548_biblioteca');

if ($_SESSION['token'] != 'validToken') {
  header("Location: ../index.php");
}
$name = $_SESSION['nome'];
$pesquisa = $_POST['txtPesquisa'];


echo '

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Elimar</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" href="../css/css.css" />
    <link rel="stylesheet" type="../text/css" href="css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</head>
<body style="background-color: #f1f8fd !important;">
<nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><img src="../img/logo.png" height="150" width="150"></a>
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
                            <a class="nav-link active" aria-current="page" href="../index.php">
                                <h5>Home</h5>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../adm/login.php">
                                <h6>Administrador</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar bg-light" style="margin-top: 85px; background-color: #f3f3f3 !important;">
  <div class="container-fluid">
    <form action="userSearch.php" method="post" id="pesquisa" class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Pesquise"  name="txtPesquisa" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
<br>
<div class="container text-center">
<p>Resultado da Pesquisa por <b>' . $pesquisa .'</b></p>
';


$retorno = $databaseInstance1->query("select * from livro where titulo like '$pesquisa%'");

if (mysqli_num_rows($retorno) > 0) {
  while ($registro = $retorno->fetch_assoc()) {
    $titulo = utf8_encode(utf8_decode($registro['titulo']));
    echo '
    <form action="../usuario/verificaEmprestimo.php" method="post">
    <div class="card"  style="width: 100%; margin-bottom: 3%;">
    <div class="card-body list-group list-group-flush">
      <h5 class="card-title list-group-item" name="txtTitulo">Título: <b>' . $titulo . '</b></h5>
      <h6 class="card-subtitle mb-2 text-muted list-group-item">Autor: ' . utf8_encode(utf8_decode($registro['autor'])) . '</h6>
      <h6 class="card-text list-group-item">Gênero: ' . utf8_encode(utf8_decode($registro['genero'])) . '</h6>
      <h6 class="card-text list-group-item">Observação: ' . utf8_encode(utf8_decode($registro['observacao'])) . '</h6>
      <h6 class="card-text ">Data da Reserva: <input type="date" name="txtData"></h6>

      <input type="hidden" name="txtTitulo" value="'. $titulo .'" />
    <input type="submit"  class="btn btn-primary" style="width: 50%; margin-left: 25%;" value="Reservar">
    </div>
  </div>
  </form>
              
        ';
  }}
else if (mysqli_num_rows($retorno) == 0) {
    $autor = $databaseInstance1->query("select * from livro where autor like '$pesquisa%'");
    while ($registro = $autor->fetch_assoc()) {
        $titulo = utf8_encode(utf8_decode($registro['titulo']));
        echo '
        <form action="../usuario/verificaEmprestimo.php" method="post">
        <div class="card"  style="width: 100%; margin-bottom: 3%;">
        <div class="card-body list-group list-group-flush">
          <h5 class="card-title list-group-item" name="txtTitulo">Título: <b>' . $titulo . '</b></h5>
          <h6 class="card-subtitle mb-2 text-muted list-group-item">Autor: ' . utf8_encode(utf8_decode($registro['autor'])) . '</h6>
          <h6 class="card-text list-group-item">Gênero: ' . utf8_encode(utf8_decode($registro['genero'])) . '</h6>
          <h6 class="card-text list-group-item">Observação: ' . utf8_encode(utf8_decode($registro['observacao'])) . '</h6>
          <h6 class="card-text ">Data da Reserva: <input type="date" name="txtData"></h6>
    
          <input type="hidden" name="txtTitulo" value="'. $titulo .'" />
        <input type="submit"  class="btn btn-primary" style="width: 50%; margin-left: 25%;" value="Reservar">
        </div>
      </div>
      </form>';
    }
}
if (mysqli_num_rows($autor) == 0){
    $genero = $databaseInstance1->query("select * from livro where genero like '$pesquisa%'");
    while ($registro = $genero->fetch_assoc()) {
        $titulo = utf8_encode(utf8_decode($registro['titulo']));
        echo '
        <form action="../usuario/verificaEmprestimo.php" method="post">
        <div class="card"  style="width: 100%; margin-bottom: 3%;">
        <div class="card-body list-group list-group-flush">
          <h5 class="card-title list-group-item" name="txtTitulo">Título: <b>' . $titulo . '</b></h5>
          <h6 class="card-subtitle mb-2 text-muted list-group-item">Autor: ' . utf8_encode(utf8_decode($registro['autor'])) . '</h6>
          <h6 class="card-text list-group-item">Gênero: ' . utf8_encode(utf8_decode($registro['genero'])) . '</h6>
          <h6 class="card-text list-group-item">Observação: ' . utf8_encode(utf8_decode($registro['observacao'])) . '</h6>
          <h6 class="card-text ">Data da Reserva: <input type="date" name="txtData"></h6>
    
          <input type="hidden" name="txtTitulo" value="'. $titulo .'" />
        <input type="submit"  class="btn btn-primary" style="width: 50%; margin-left: 25%;" value="Reservar">
        </div>
      </div>
      </form>';
    }
}
if (mysqli_num_rows($retorno) == 0 && mysqli_num_rows($autor) == 0 && mysqli_num_rows($genero) == 0){
        echo '
        <div class="card"  style="width: 100%; margin-bottom: 3%;">
        <div class="card-body list-group list-group-flush">
          <h5 class="card-title list-group-item" name="txtTitulo">Não encontramos nada com <b>'. $pesquisa .' </b></h5>
        </div>
      </div>
          ';
}

'
</div>
</body>
</html>
';
