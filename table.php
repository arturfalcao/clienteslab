<!doctype html>
<?php
// Start the session
session_start();

$con = mysqli_connect("localhost","root","","inlab4");
$sql = 'SELECT t_amostras.fn_id , fd_recepcao , t_produtos.ft_descricao AS produto ,t_estados.ft_descricao AS estado FROM t_amostras INNER JOIN t_estados ON t_amostras.ft_id_estado = t_estados.fn_id INNER JOIN t_produtos ON t_amostras.fn_id_produto = t_produtos.fn_id where t_amostras.fn_id_cliente = '. $_SESSION["id"].' order by fd_recepcao';

?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pimenta do Vale - Website Clientes</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>

    <header id="main-header">
      <div class="top-border"></div>
      <div class="row">
        <div class="small-16 medium-4 large-5 columns"> 
          <a href="#bio">
            <img src="images/logo-small.png" alt="" class="logo-small"/>
          </a>
        </div>
        <div class="small-16 medium-12 large-11 columns">
          <nav>
            <ul id="main-menu" class="text-right">

      <li class="logout"><a href="logout.php">Logout</a></li>
            </ul>
            <ul id="mobile-menu"></ul>
          </nav>
        </div>
      </div>
    </header>

    <section id="welcome-section">
      <div class="row">
        <div class="large-16 columns text-center">
          <h3>Bem-Vindo</h3>
          <p>
            Estas são os resultados das suas amostras disponíveis no nosso laboratório.
          </p>
        </div>
      </div>
    </section>


    <div class="row">
      <div class="large-16 columns">
        <table class="hover">
          <thead>
            <tr>
              <th width="200">Estado</th>
              <th width="200">Código</th>
              <th width="200">Data</th>
              <th width="200">Produto</th>
              <th width="200">Acções</th>
            </tr>
          </thead>
          <tbody>
<?php 

$run_user = mysqli_query($con, $sql);

  while ($rows = $run_user->fetch_array()) {
    if($rows['estado'] == 'Em Progresso'){
      echo '<tr><td><span class="bullet-yellow"></span> '.$rows['estado'].'</td><td>'.$rows['fn_id'].'</td><td>'.$rows['fd_recepcao'].'</td><td>'.$rows['produto'].'</td><td><ul><li><a href="getrelatorio.php?id='. $rows['fn_id'] .'"><img src="images/icons/icon-save.png" alt="" /></a></li></ul></td></tr>';
    
    }
 if($rows['estado'] == 'Completo'){
      echo '<tr><td><span class="bullet-green"></span> '.$rows['estado'].'</td><td>'.$rows['fn_id'].'</td><td>'.$rows['fd_recepcao'].'</td><td>'.$rows['produto'].'</td><td><ul><li><a href="getrelatorio.php?id='. $rows['fn_id'] .'"><img src="images/icons/icon-save.png" alt="" /></a></li></ul></td></tr>';
    }
  }


?>


            


          </tbody>
        </table>
      </div>
    </div>

    <footer class="main-footer" id="contactos">
      <div class="row">
        <div class="small-16 large-8 columns">
          <h4>Contacto</h4>
          <form action="" method="post">
            <input type="text" name="" value="" placeholder="Username">
            <input type="text" name="" value="" placeholder="Empresa">
            <textarea name="" rows="8" cols="40" placeholder="Mensagem"></textarea>
            <input type="submit" name="" value="Enviar">
          </form>
        </div>
        <div class="small-16 large-8 columns">
          <h4 class="pad-bottom">Fale Connosco</h4>
          <p>
            Estamos sempre disponíveis para o ouvir, se tiver alguma dúvida, sugestão ou necessitar de informações não hesite em contactar-nos.<br>
            Envie um email para <a href="#">geral@pimentadovale.com</a> ou preencha o nosso formulário.
          </p>
          <p>
            Também estamos nas redes sociais.
          </p>
          <ul class="social">
            <li><a href="#"><img src="images/icons/social-facebook.png" alt="" /></a></li>
            <li><a href="#"><img src="images/icons/social-linkedin.png" alt="" /></a></li>
            <li><a href="#"><img src="images/icons/social-twitter.png" alt="" /></a></li>
          </ul>
        </div>
        <div class="small-16 columns">
          <hr>
        </div>
        <div class="small-16 columns text-center">
          <p class="copyright">
            All rights reserved &copy; 2015 Pimenta do Vale - Laboratórios, LDA
          </p>
        </div>
      </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/dropit.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/scrollReveal.js"></script>
    <script src="js/app.js"></script>
    <script>
      window.sr = new scrollReveal();
    </script>
  </body>
</html>
