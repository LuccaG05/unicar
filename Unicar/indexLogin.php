<?php 

    if(isset($_POST['submit']))
    {
       /* print_r($_POST['email']);
        print_r($_POST['senha']);
        print_r($_POST['preferencias']);
        print_r($_POST['cep']);
        print_r($_POST['rua']);
        print_r($_POST['cidade']);
        print_r($_POST['bairro']);
        print_r($_POST['uf']); */

        include_once('config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $preferencias = $_POST['preferencias'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $uf = $_POST['uf'];

        $result = mysqli_query($conn, "INSERT INTO usuarios(email, senha, preferencias, cep, rua, cidade, bairro, estado)
        VALUES('$email', '$senha', '$preferencias', '$cep', '$rua', '$cidade', '$bairro', '$uf')");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="./styleLogin.css">
</head>
<body>
    <div class="page">
        <div class="container">
            <img src="fotoInicio.png" alt="Sua imagem" class="imagem">
        </div>
        <div class="formLogin">
            <div class="logo">
                <img src="imagens/logo.png" alt="" width="320" height="60">
            </div>
            <form action="testLogin.php" method="POST">
                <label for="email" name="email">Email:</label>
                <input type="text" id="username" name="email" title="Preencha o seu nome" required>

                <label for="senha">Senha:</label>
                <input type="password" id="password" name="senha" required>

                
                <input class="button" type="submit" value="Entrar" name="submit">

                <a href="#">
                    <p>Esqueceu a senha?</p>
                </a>
                <p><a href="registro.html">Criar uma conta</a></p>
            </form>
        </div>
    </div>

    
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
</body>
</html>
