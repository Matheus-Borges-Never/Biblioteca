<?php
    //Conexão com banco de dados
    //Criar o objeto de conexão
    $databaseInstance1 = mysqli_connect('149.62.37.204', 'u596538548_root',
        '@NEVER_ebd123', 'u596538548_biblioteca');

    $con = $databaseInstance1;

    $email      = $_POST['txtEmail'];
    $novaSenha       = $_POST['txtSenha'];

    if ( $con->connect_error){
        echo "Erro ao conectar com a base de dados";
    }else{

        $sql = "update usuario set senha = '$novaSenha' where email = '$email'";
        $ret = $con -> query($sql);

        if($ret == true){
            echo '
            <div class="alert alert-primary" style="text-align: center;" role="alert">
                <b>Senha Alterada!!</b>
                    <a href="../../index.php" class="alert-link">Voltar</a>
                </div>
                ';

            
        }


        $con -> Close();
    }


?>