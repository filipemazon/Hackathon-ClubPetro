
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->

  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>TCC</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="./public/css/linearicons.css">
    <link rel="stylesheet" href="./public/css/font-awesome.min.css">
    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <link rel="stylesheet" href="./public/css/magnific-popup.css">
    <link rel="stylesheet" href="./public/css/nice-select.css">
    <link rel="stylesheet" href="./public/css/animate.min.css">
    <link rel="stylesheet" href="./public/css/owl.carousel.css">
    <link rel="stylesheet" href="./public/css/main.css">
  </head>
  <body>

      <header id="header" id="home">
        <div class="container">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="index.html"><img src="public/img/tcc.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="http://localhost:8000/">Pagina Inicial</a></li>
                <li><a href="router.php?op=1">TCC's Gerais</a></li>
                <li class="menu-has-children"><a href="router.php?op=2">Login</a>
                </li>
              </ul>
            </nav><!-- #nav-menu-container -->
          </div>
        </div>
      </header><!-- #header -->



      <!-- start banner Area -->
      <section class="align-items-center">
        <div class="container">
          <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-8">

                <div class="bg-1">
                      <div class="alert alert-success">
                      <strong>Atenção!</strong> Dados Exibidos com sucesso.
                    </div>

              <h3>
                <br>TCC's Gerais
              </h3>

              <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover table-condensed">
                    <tr>
                      <th>Id</th>
                      <th>nome</th>
                      <th>CPF</th>
                      <th>Telefone</th>
                    </tr>

                  <?php foreach( $lista as $linha ): ?>

                      <tr>
                        <td><?= $linha['id'] ?> </td>
                        <td><?= $linha['nome'] ?> </td>
                        <td><?= $linha['cpf'] ?></td>
                        <td><?= $linha['telefone']?></td>
                    </tr>

                      <?php endforeach ?>

                  </table>
              </div>



            </div>
          </div>
        </div>
      </section>
      <!-- End banner Area -->

    <script src="./public/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./public/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="./public/js/easing.min.js"></script>
    <script src="./public/js/hoverIntent.js"></script>
    <script src="./public/js/superfish.min.js"></script>
    <script src="./public/js/jquery.ajaxchimp.min.js"></script>
    <script src="./public/js/jquery.magnific-popup.min.js"></script>
    <script src="./public/js/owl.carousel.min.js"></script>
    <script src="./public/js/jquery.sticky.js"></script>
    <script src="./public/js/jquery.nice-select.min.js"></script>
    <script src="./public/js/parallax.min.js"></script>
    <script src="./public/js/mail-script.js"></script>
    <script src="./public/js/main.js"></script>
  </body>
</html>
