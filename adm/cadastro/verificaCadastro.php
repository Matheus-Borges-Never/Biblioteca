<?php
session_start();

    //Conexão com banco de dados
    //Criar o objeto de conexão
    $databaseInstance1 = mysqli_connect('149.62.37.204', 'u596538548_root',
        '@NEVER_ebd123', 'u596538548_biblioteca');

    $con = $databaseInstance1;

    $titulo       = $_POST['txtTitulo'];
    $genero      = $_POST['txtGenero'];
    $autor       = $_POST['txtAutor'];
    $observacao      = $_POST['txtObservacao'];
    

    if ( $con->connect_error){
        echo "Erro ao conectar com a base de dados";
    }else{

        $sql = "insert into livro (titulo, genero, autor, observacao) values ('$titulo','$genero','$autor','$observacao')";
        $ret = $con -> query($sql);

        if($ret == true){
            echo 'Parabéns Livro Cadastrado!!
            <a href="cadastro.php">Voltar</a>';

            
        }


        $con -> Close();
    }


?>