<?php

session_start();



    //Conexão com banco de dados
    //Criar o objeto de conexão
    $databaseInstance1 = mysqli_connect('149.62.37.204', 'u596538548_root',
        '@NEVER_ebd123', 'u596538548_biblioteca');    

    $con = $databaseInstance1;

    
    $titulo      = $_POST['txtTitulo'];
    $usuario      = $_POST['txtUsuario'];

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
<body style="background-color: #f1f8fd !important;">';
     
    

    if ( $con->connect_error){
        echo "Erro ao conectar com a base de dados";
    }else{
        $retorno = $databaseInstance1 -> query("DELETE FROM emprestimo WHERE usuario='$usuario';");

        if ( mysqli_num_rows($retorno) > 0 ){
            echo ' 

                <div class="alert alert-danger" style="text-align: center;" role="alert">
                    Livro Devolvido!!
                    <a href="emprestimo.php"  class="alert-link">Voltar</a>
                </div>';
    }
}


        $con -> Close();

        '
        </div>
        </body>
        </html>
        ';
?>