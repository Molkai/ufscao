<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Ufscão - Sorocaba</title>

        <link rel="shortcut icon" href="<?= base_url('assets/home/img/Logo-Pequeno.png') ?>" />

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url('assets/home/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="<?= base_url('assets/home/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css"> 
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="<?= base_url('assets/home/css/agency.min.css') ?>" rel="stylesheet">

        <link href="<?= base_url('assets/home/css/MyCSS.css') ?>" rel="stylesheet">

        <!-- Plugin JavaScript -->
        <script src="<?= base_url('assets/home/vendor/jquery/jquery.min.js') ?>"></script>

    </head>

    <body id="page-top" style="background-image: url(<?= base_url('assets/images/bkg-login2.png')?>">
      
    <header class="masthead" id="headEventos">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <div align="left">
                        <a href="<?=base_url()?>">
                            <i class="fas fa-arrow-circle-left fa-3x"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="introtxtEventos">
                        <h1>Eventos em que a Ufscão ira participar</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
      
      <section class="bg-light" id="eventos">
          <div class="container">

              <?php $i = 0; foreach($eventos as $e){ $i+=1;?>
                  <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <img class="eventImg img-fluid" src="<?= base_url('imgs/eventos/'.$e['id_evt'].'.png') ?>" alt="">
                              <h4 text-center><?php echo $e['titulo_evt']; ?></h4>
                              <p text-center><?php echo $e['data_hora_evt']; ?></p>
                              <p style="margin-left: 3%; margin-right: 3%;" text-center><?php echo $e['desc_evt']; ?></p>
                          </div>
                      </div>
                  </div>
                  <br>
              <?php } ?>

              <?php if($i == 0){?>
                  <h2 text-center>Não existem eventos a serem exibidos!</h1>
              <?php }?>
          </div>
      </section>
        
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?=base_url("index.php/home/more_events/".(intval($offset) - 1))?>" <?php if($offset=="0"){echo 'tabindex="-1" aria-disabled="true"';}?> class="btn btn-primary btn-lg <?php if($offset=="0"){echo 'disabled';}else{echo 'active';}?>" role="button" aria-pressed="true">Anterior</a>
                <a href="<?=base_url("index.php/home/more_events/0".(intval($offset) + 1))?>" <?php if($i<10){echo 'tabindex="-1" aria-disabled="true"';}?> class="btn btn-primary btn-lg <?php if($i<10){echo 'disabled';}else{echo 'active';}?>" role="button" aria-pressed="true">Próxima</a>
            </div>
        </div>
        <br>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/ufscaosorocaba/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/ufscao.sorocaba/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
      
    </body>

</html>