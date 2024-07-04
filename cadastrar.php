<?php

    require_once './classes/usuarios.php';
    $u = new Usuario;

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
        <h1>Cadastro</h1>
        <h2>Coloque as informações para fazer seu cadastro</h2>
    <form method="POST">
        <input type="name" name="nome" placeholder="Nome de usuario" maxlength="30">
        <input type="email" name="email" placeholder="Email" maxlength="40">
        <input type="password" name="senha" placeholder="Senha" maxlength="16">
        <input type="password" name="conf_senha" placeholder="Confirmar senha">
        <input type="submit" value="Cadastrar">
        <p>Já tem uma conta?<a href="./index.php"><strong> Entrar em uma conta</strong></a></p>
    </form>
    </div>
    <?php

        if(isset($_POST['nome']))
        {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $confirmarSenha = addslashes($_POST['conf_senha']);

            if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
            {
                $u->conectar("personal_site","localhost","root","");
                if($u->msgErro == "")
                {
                    if($senha == $confirmarSenha)
                    {
                        if($u->cadastrar($nome,$email,$senha))
                        {
                            ?>
                            <div id=msg-sucesso>
                                Cadastrado com sucesso!
                            </div>
                            <?php
                        }
                        else
                        {
                            ?>
                            <div id=msg-erro>
                                Email ja cadastrado!
                            </div>
                            <?php
                            
                        }
                    }
                    else{
                        ?>
                            <div id=msg-erro>
                                As senhas precisam ser iguais!
                            </div>
                        <?php
                    }
                    $u->cadastrar($nome,$email,$senha);
                }
                else
                {
                    ?>
                        <div class=msg-erro>
                            <?php echo "erro: ".$u->msgErro; ?>
                        </div>
                    <?php
                }
                
            }
            else
            {
                ?>
                    <div id=msg-erro>
                        Preencha todos os campos!
                    </div>
                <?php
            }
        }

    ?>  
</body>
    
</html>