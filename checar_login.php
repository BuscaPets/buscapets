<?php
session_start();

include "db_connect.php";
if (isset($_POST['email']) && isset($_POST['senha'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    
    if (empty($email) && (empty($senha)) ) {
        header("Location: logar_cliente.php?error=Todos os campos devem ser preenchidos");
        exit();
    }
    else if (empty($email)) {
        header("Location: logar_cliente.php?error=Campo email obrigatório");
        exit();
    }
    else if (empty($senha)) {
        header("Location: logar_cliente.php?error=Campo senha obrigatório");
        exit();
    }
    else {
        $sql = "SELECT * FROM clientes WHERE email ='$email'";
        $resultado = mysqli_query($conn, $sql);

        if(mysqli_num_rows($resultado) === 1) {
            $row = mysqli_fetch_assoc($resultado);
            //$verificado = password_verify($senha, $row["senha"]);
            //if ($verificado) {
                if ($row['email'] === $email){
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['cpf'] = $row['cpf'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['acesso'] = $row['acesso'];
                    header("Location: index.php");
                    exit();
                //}else{
                   // header("Location: logar_cliente.php?error=Email ou senha incorretos");
                    //exit();
                //}
        } else {
            header("Location: logar_cliente.php?error=Erro!");
        }
            
        }else{
            header("Location: logar_cliente.php?error=Email ou senha incorretos");
            exit();
        }
    }
}else {
    header("Location: logar_cliente.php");
    exit();
}