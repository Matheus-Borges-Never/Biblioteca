<?php
    session_start();

    $userEmail = $_POST['txtEmail'];
    $userSenha = $_POST['txtSenha'];

    $databaseInstance1 = mysqli_connect('149.62.37.204', 'u596538548_root',
        '@NEVER_ebd123', 'u596538548_biblioteca');

    $con = $databaseInstance1;

    if($con->connect_errno){
        echo "Falha ao conectar: (" .$con->connect_errno.") ".$con->connect_errno;
    }else{
    
    $retorno = $con -> query("select * from administrador where email = '$userEmail' and senha = '$userSenha'");

    if ( mysqli_num_rows($retorno) > 0 ){
        while ($registro = $retorno -> fetch_assoc()) {
            $_SESSION['token'] = 'validToken';
            $_SESSION['email'] = $registro['email'];
            $_SESSION['id'] = $registro['id'];
            $_SESSION['nome'] = $registro['nome'];
            header("Location: cadastro/cadastro.php");
          }
    } else {
        //Coloque aqui para fazer o que for necessário;
        header("Location: login.php?erro=0");
    }}




?>