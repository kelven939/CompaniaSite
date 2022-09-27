<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Cadastro php</title>
   <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <?php
       // echo "hello world";
       // $nome1 = $_GET["primeironome"];
       // $nome2 = $_GET["segundonome"];
       // $senha = $_GET["senha"];
       // echo "Dados submetidos:<br>$nome1;<br>$nome2;<br>$senha<br>";

        // conexao com o banco de dados(Mysql):
       /* $host = "localhost";
        $senha = "";
        $userDb = "root";
        $banco = "cadastro";
        $conexao = mysqli_connect($host, $userDb, $senha);
        mysqli_select_db($conexao, $banco);
        $com = "insert into usuarios(nome, apelido, senha) values ('$nome1', '$nome2', '$senha')";
        $comando = mysqli_query($conexao, $com);
        $actualizar = mysqli_affected_rows($conexao);
        echo "$actualizar";
       /* if (mysqli_query($conexao, $com)) {
            echo "Usuario cadastrado com sucesso!";
        }else{
           echo "Erro".mysqli_connect_error($conexao);
        } */
       /* $dados = mysqli_query($conexao, "select * from usuarios");
        $reg = mysqli_fetch_row($dados);
        while ($reg = mysqli_fetch_row($dados)) {
            $id = $reg[0];
            $nome = $reg[1];
            $apelido = $reg[2];
            $senha = $reg[3]; */

           // echo "<br>Id:$id<br>Nome:$nome<br>Apelido:$apelido<br>Senha:$senha<br>===================================================";
         // }
       // mysqli_close($conexao);
    ?>

<link rel="stylesheet" href="stilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>


  <div id="seccao2">
    <div id="cabecalho">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)"
            class="closebtn"
            onclick="closeNav()">&times;</a>
            <a href="Sobrenos">Sobre nos</a>
            <a href="#Informacao">Infomacao geral</a>
            <a href="#Contacto">Contacto</a>
        </div>
        <span style="font-size: 30px;cursor:pointer"onclick="openNav()">MENU</span>
            <h1 id="informa">Prestacao de Servicos</h1>
    </div>
   <div id="area">
       <p>Seja bem-vindo a nossa pagina Web, esta e uma pagina da companhia KB que 
            fornece varios bens e servicos aos nossos clientes. Produzimos os nossos
            servicos a pensar em si, aqui voce ira encontrar todos bens e servico.<br>Entre em
            Contacto com nossa companhia, disponibilizamos cursos de programacao, de iniciante ao
            avacado.<br>As linguagens me ministramos sao de PARADIGMA DE PROGRAMACAO, estas curioso,
            entao de o que estas a espera, veja ja fazer parte desta magnifica famila.
        </p>
       <form method="post" action="# https://formsubmit.co/kelvenbrunocarloslopesb@gmail.com" 
        name="form1">
        </form>
</div>
</div>

  <section class="main">
    <div>
      <h2><span>TOTAL SERVICE COMPANY</span></h2>
      <h3>I build life changing courses</h3>
      <h4>visit my social media个</h4>
      <div class="social-icon">
        <a href="https://www.facebook.com/profile.php?id=100020174318941"><i class="fa-brands fa-facebook-square"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#tiktok.com/@xx_ahmed_atef_xx"><i class="fa-brands fa-tiktok"></i></a>
      </div>
    </div>
  </section>

  <section class="cards" id="services">
    <h2 class="title">Serviços</h2>
    <div class="content">
      <div class="card">
        <div class="icon">
          <i class="fa-solid fa-pen-to-square"></i>
        </div>

        <div class="info">
          <h3>Venda de serviços</h3>
          <p>Lançamos os seus serviços ao mundo e muito mais...</p>
        </div>

      </div>

      <div class="card">
        <div class="icon">
          <i class="fa-solid fa-code"></i>
        </div>

        <div class="info">
          <h3>Desenvolvimento</h3>
          <p>Desenvolvemos os seus negócios e mais...</p>
        </div>
      </div>

    </div>
    <div class="card">
      <div class="icon">
        <i class="fa-solid fa-photo-film"></i>
      </div>

      <div class="info">
        <h3>Prestação de serviços</h3>
        <p>Prestamos varios tipos de serviços e muito mais...</p>
      </div>
    </div>
    </div>
  </section>

<!--  <section class="projects" id="projects">
    <h2 class="title">Projects</h2>
    <div class="content">
      <div class="project-card">
        <div class="ptoject-image">
          <img src="as.jpg" alt="">
        </div>
        <div class="project-info">
          <p class="project-category">my brother</p>
          <strong class="project-title">
            <span>best friend</span>
          </strong>
        </div>
      </div>

      <div class="project-card">
        <div class="ptoject-image">
          <img src="mh.jpg" alt="">
        </div>
        <div class="project-info">
          <p class="project-category">me</p>
          <strong class="project-title">
            <span>webdeveloper</span>
          </strong>
        </div>
      </div>

      <div class="project-card">
        <div class="ptoject-image">
          <img src="ab.jpg" alt="">
        </div>
        <div class="project-info">
          <p class="project-category">My Brother</p>
          <strong class="project-title">
            <span>My brother and ten years old </span>
          </strong>
        </div>
      </div>
    </div>
  </section> -->

  <footer class="footer">
    <p class="footer-title">Copyrights@<span>Total Service</span></p>
    <div class="social-icon">
      <a href="https://www.facebook.com/profile.php?id=100020174318941"><i class="fa-brands fa-facebook-square"></i></a>
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
      <a href="#tiktok.com/@xx_ahmed_atef_xx"><i class="fa-brands fa-tiktok"></i></a>
    </div>
  </footer>
  <script src="cadastro.js"></script>
  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script>
</body>
</html>