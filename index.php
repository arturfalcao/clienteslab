

<!doctype html>
<?php
    session_start();

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

    <div class="top-border"></div>

    <section id="hero">

      <header class="row">
        <div class="small-8 columns">
          <a href="#" class="logo">
            <img src="images/logo.png" alt="pimenta do vale" />
          </a>
        </div>
        <div class="small-8 columns login-dropdown">
          <ul class="menu">

          <?php 

			if(!isset($_SESSION['user_email'])) {
			?>
			<li>
              <a class="dropdown-button" href="#">Login</a>
              <ul class="login-form">
                <li>
                  <form action="login.php" method="post">
                    <input type="text" name="username" value="" placeholder="Username">
                    <input type="password" name="password" value="" placeholder="Password">
                    <input type="submit" name="login" value="Login">
                  </form>
                  <hr>
                  <p class="pass-reset text-center">
                    <a href="#">Esqueceu a sua password?</a>
                  </p>
                </li>
              </ul>
            </li>	
			

			<?php 
			}else{
				?>
			<li class="logout"><a href="logout.php">Logout</a></li>
			<?php 

			}
          ?>
            

            


          </ul>
        </div>
      </header>

      <article class="cta row">
        <div class="large-16 columns">
          <h1>As suas amostras <br> à distância de um click</h1>
          <p class="text-center">Aceda aos resultados das suas amostras online, de forma prática, simples e gratuita.</p>
        </div>
        <!-- <div class="small-16 medium-8 columns">
          <a href="#" class="button">Login</a>
        </div>
        <div class="small-16 medium-8 columns">
          <a href="#" class="button hollow">Saber Mais</a>
        </div> -->
      </article>

      <div class="arrow bounce"></div>

    </section>

    <div class="wrapper">

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
                <li><a href="#como-funciona">Como Funciona</a></li>
                <li><a href="#testemunhos">Testemunhos</a></li>
                <li><a href="#contactos">Contactos</a></li>
              </ul>
              <ul id="mobile-menu"></ul>
            </nav>
          </div>
        </div>
      </header>

      <div class="row" id="highlights">
        <div class="large-16 columns">
          <h4 class="text-center" id="como-funciona">Como Funciona</h4>
        </div>
        <div class="small-16 large-9 columns illustration" data-sr="enter bottom, hustle 20px">
          <img src="images/illustrations/h-1.png" alt="" />
        </div>
        <div class="small-16 large-6 columns illustration-helper text-center large-text-left" data-sr="enter bottom, hustle 20px">
          <h2>Login</h2>
          <hr>
          <p>
            Para ter acesso a todos os resultados das suas amostras apenas terá de fazer <a href="#">LOGIN</a> no site com o seu username e password.
          </p>
        </div>
        <div class="small-16 columns sep">
          <hr>
        </div>
        <div class="small-16 large-9 large-push-6 columns illustration" data-sr="enter bottom, hustle 20px">
          <img src="images/illustrations/h-2.png" alt="" />
        </div>
        <div class="small-16 large-6 large-pull-9 columns illustration-helper text-center large-text-left" data-sr="enter bottom, hustle 20px">
          <h2>Resultados</h2>
          <hr>
          <p>
            Terá acesso a uma lista com todos os resultados, quer finais, quer parciais e respectivos relatórios (PDF) online para poder acompanhar à distância o estado das suas amostras.
            <br><br>Simples, prático e rápido!
          </p>
        </div>
        <div class="small-16 columns sep-last">
          <hr>
        </div>
      </div>

      <div class="testimonials-wrap" id="testemunhos">
        <div class="row" id="testimonials">
          <div class="large-16 columns">
            <h4 class="text-center">Testemunhos</h4>
          </div>
          <div class="small-16 columns">

            <div class="tabs-content text-center" data-tabs-content="testimonials-tabs">
              <div class="tabs-panel is-active" id="panel1">
                <p class="testimonials-text">
                  A plataforma ajudou-nos dramaticamente.
                  <br>A qualquer momento posso ver exatamente o estado e o resultado de cada uma das amostras enviadas para o laboratório. Muito simples e prático.
                </p>
                <p class="testimonials-signature">
                  Maria Rita Albuquerque
                  <small>Laboratório Renascimento</small>
                </p>
              </div>
              <div class="tabs-panel" id="panel2">
                <p class="testimonials-text">
                  Vivamus hendrerit arcu sed erat molestie vehicula.
                  <br>Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.
                </p>
                <p class="testimonials-signature">
                  Random Person
                  <small>Laboratório Re-Renascimento</small>
                </p>
              </div>
              <div class="tabs-panel" id="panel3">
                <p class="testimonials-text">
                  Ut in nulla enim. <br>Phasellus molestie magna non est bibendum non venenatis nisl tempor.
                </p>
                <p class="testimonials-signature">
                  Random Person #2
                  <small>Laboratório 3º Dia</small>
                </p>
              </div>
            </div>

            <ul class="testimonial-faces" data-tabs id="testimonials-tabs">
              <li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><img src="images/faces-1.png" alt="" /></a></li>
              <li class="tabs-title"><a href="#panel2"><img src="images/faces-2.png" alt="" /></a></li>
              <li class="tabs-title"><a href="#panel3"><img src="images/faces-3.png" alt="" /></a></li>
            </ul>

          </div>
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

    </div><!--wrapper-->

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
