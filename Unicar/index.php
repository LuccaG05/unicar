<?php 
    session_start(); 
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: indexLogin.php');
    }
    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="profile">
            <a href="index.php">
                <img src="imagens/logo.png" alt="">
            </a>
        </div>

        <input class="headerInput" type="text" name="" id="" placeholder="Faça sua pesquisa">

        <div class="config">
            <img src="https://github.com/lkthegit.png" alt="">
            <a href="sair.php"><button><span>Sair</span></button></a>
        </div>
    </header>
    
    <section class="form">
    <h1>Facilitando sua ida à faculdade</h1>
        <div class="agendar">
            <p>Agende sua viagem</p>
        </div>
        <form action="">
            <div>
                <label class="partida" for="partida" id="partida"></label>
                <input type="text" name="partida" placeholder="Saindo de...">
                
                <label for="chegada"></label>
                <input type="text" name="chegada" placeholder="Indo para...">
                
                <input type="date" name="calendario" id="calendario">
                
                <input type="number" name="qnt-passageiro" id="qnt-passageiro" min="1" max="8" placeholder="Passageiro">
            </div>
        </form>
    </section>
        
    <section class="cards">
        <div class="itens">
            <div class="item1">
                <h2>Economize mais</h2>
                <p>Uma grande vantagem de  usar o Unicar é poder pagar mais barato e aliviar o seu bolso. O uso do aplicativo é gratuito e o valor pago pela carona será entre  comum acordo entre o passageiro e o motorista.</p>
            </div>
            
            <div class="item2">
                <h2>Viagens mais seguras</h2>
                <p>Você terá maior segurança para ir para a faculdade, uma vez que o Unicar é de uso exclusivo de alunos e funcionários da própria universidade. Além disso, nosso sistema conta com um mecanismo para as mulheres, caso queira poderem pegar carona ou oferecer, apenas para outras mulheres.</p>
            </div>
            
            <div class="item3">
                <h2>O meio ambiente agradece</h2>
                <p>O compartilhando de carona, além de ser benéfico pra você, economizando, sendo mais seguro e melhorando o fluxo de carros, também é benéfico para o meio ambiente, evitando assim a emissão de poluentes. </p>
            </div>
        </div>
    </section>
        
    <section class="oferecer-carona">
        <div class="text">
            <h3>Quero oferecer caronas</h3>
            <p>Descubra as pessoas da sua universidade que precisam de carona. Economize dinheiro, conecte-se com novas pessoas, ajude o meio ambiente.</p>

            <a href="páginas/pagina-oferecer-carona/index02.html" >
                <button class="offering-ride-btn">Oferecer carona</button>
            </a>
        </div>

                <image>
                    <img src="imagens/oferecendo-carona.svg" alt="oferecendo carona" id="offering-ride">
                </image>

    </section>

    <section class="solicitando-carona">
        <img src="imagens/pedindo-carona.svg" alt="solicitando carona" id="requesting-ride">
        <div class="text2">
            <h3>Estou precisando de carona</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius illo qui reiciendis voluptatem, nisi ut fuga sed mollitia cupiditate veritatis. Beatae, enim? Laboriosam, ut exercitationem necessitatibus dicta incidunt pariatur laudantium!</p>
            
            <a href="páginas/pagina-pedir-carona/index03.html">
                <button class="requesting-ride-btn">Solicitar carona</button>
            </a>
        </div>
    </section>
        
    <footer>
            <div class="help">
                <h3>Ajuda</h3>
                
                <p>Encontrou algum problema?</p>
                <p>Denúncia</p>               
                <p>(14)-99999-8888</p>
                <p>unicarapp@gmail.com</p>
                
            </div>
            <div class="sobre">
                <h3>Sobre nós</h3>
                <p>Onde começamos</p>
                <p>Conheça nossa história</p>
            </div>
                <div class="partner">
                    <h3>Seja um parceiro</h3>
                    <p>Cadastre sua faculdade</p>
                    <p>Apoiadores</p>
                </div>

            <div class="social-media">
                <h3>Redes sociais</h3>
                <p>Instagram</p>
                <p>Facebook</p>
                <p>Twitter</p>
                <p>Youtube</p>
                <p>Tiktok</p>
            </div>
    </footer>
</body>
</html>