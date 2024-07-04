<?php

    require_once './classes/usuarios.php';
    $u = new usuario;

?>

<html lang="pt-br"> 

<head>
    <meta charset="utf-8">
    <title>Personal Site</title>
    <link rel="stylesheet" href="./Styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.2/css/all.min.css" integrity="sha512-g0gRzvKX9GBUbjlJZ02n2GLRJVabgLm6b3oypbkF6ne1T2+ZHCucKRd8qt31a3BCGahAlBmXUDS7lu2pYuWB7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="corpo-formulario">
        <h1>Login</h1>
        <h2>acesse sua conta usando as informações abaixo</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Acessar">
        <p>Esqueceu a senha?<a href=""><Strong> Clique aqui</Strong></a></p>
        <p>Ainda não tem uma conta?<a href="./cadastrar.php"><strong> Criar uma conta</strong></a></p>
    </form>
    </div>

<?php

if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if(!empty($email) && !empty($senha))
    {

        $u->conectar("personal_site","localhost","root","");
        if($u->msgErro == "")
        {
            if($u->logar($email,$senha))
            {
                header("location: areaprivada.php");
            }
            else
            {
                echo "Email ou senha incorretos!";
            }
        }
        else
        {
            echo "ERRO: ".$u->msgErro;
        }
        
    }
    else
    {
        echo "preencha todos os campos!";
    }   
            
}

?>
</body>
</html>