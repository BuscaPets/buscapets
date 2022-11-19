<?php
session_start();

include "db_connect.php";
if (isset($_POST['nome']) && isset($_POST['senha'] ) && isset($_POST['email'] ) && isset($_POST['confirm_senha'] ) && isset($_POST['cpf'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
    $nome_sanitize = $_POST['nome'];
    $nome = filter_var($nome_sanitize, FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS);

    $cpf_sanitize = $_POST['cpf'];
    $cpf = filter_var($cpf_sanitize, FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS);

    $senha_sanitize = password_hash($_POST["senha"], PASSWORD_BCRYPT);
    $senha = filter_var($senha_sanitize,FILTER_SANITIZE_SPECIAL_CHARS);

    $confirm_senha_sanitize = $_POST['confirm_senha'];
    $confirm_senha = filter_var($confirm_senha_sanitize, FILTER_SANITIZE_SPECIAL_CHARS);

    $image_url = 'Nenhuma';

    $email_sanitize = $_POST['email'];
    $email = filter_var($email_sanitize, FILTER_SANITIZE_EMAIL, FILTER_SANITIZE_SPECIAL_CHARS);
    $acesso = 'Comum';

    $user_data = 'nome='.$nome.'senha='.$senha.'confirm_senha='.$confirm_senha.'email='.$email;

        if (empty($email) || (empty($senha)) || (empty($confirm_senha)) || (empty($email)) ) {
        header("Location: cadastrar_cliente.php?error=Todos os campos devem ser preenchidos&$user_data");
        exit();
    }
    else if ($_POST["senha"] <> $confirm_senha){
        header("Location: cadastrar_cliente.php?error=As senhas não coincidem&$user_data");
        exit();

    }
    else {

        $sql = "SELECT * FROM clientes WHERE email ='$email'";
        $resultado = mysqli_query($conn, $sql);

       if(mysqli_num_rows($resultado) > 0) {
        header("Location: cadastrar_cliente.php?error=Email já cadastrado&$user_data");
        exit();
       } else {
           $sql2 = "INSERT INTO clientes(nome,cpf,email,image_url,senha,acesso) VALUES('$nome','$cpf','$email','$senha','$image_url', '$acesso')";
           $resultado2 = mysqli_query($conn, $sql2);
           if ($resultado2){
            header("Location: cadastrar_cliente.php?sucesso=Sua conta foi criada com sucesso&$user_data");
           } else {
            header("Location: cadastrar_cliente.php?error=Erro desconhecido&$user_data");
           }
       }
    }
    
}else {
    header("Location: cadastrar_cliente.php");
    exit();
}
