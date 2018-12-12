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
        <script src="<?=base_url('assets/js/notify.js')?>"></script>

        <script>
            function modalFunction(){
                $("#exampleModalLong").modal('show');

                $("#closeBtn").click(function(){
                    $(".modal").hide();
                });
            }

            function modalAdoteFunction(idx){
                $("#modalAdoteLong"+idx).modal('show');

                $("#closeAdote").click(function(){
                    $(".modal").hide();
                });
            }
            $( document ).ready(function() {
                txt = '<?php if(isset($status)){echo $status;}?>';
                if(txt !== '')
                    $.notify(txt, "success");
            })
            

        </script>

    </head>

    <body id="page-top" style="background-image: url(<?= base_url('assets/images/bkg-login2.png')?>">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top" id="txtLogo">
                    Ufscão
                    <img src="<?= base_url('assets/home/img/Logo-Pequeno.png') ?>" width="50" height="50" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#quemSomos">Quem Somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#adocao">Adoção</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#ajude">Nos ajude</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#eventos">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#apoio">Apoio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class='notifications top-left'></div>
        <!-- Header -->
        <header class="masthead">
            <div class="container">
                <div class="intro-img">
                    <img src="<?= base_url('assets/home/img/Logo-Pequeno.png') ?>" id="imgHome">
                </div>
            </div>
        </header>

        <!-- Quem Somos -->
        <section id="quemSomos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Quem Somos?</h2>
                        <h3 class="section-subheading text-muted" align="justify">O UFSCão é um movimento estudantil, realizado no campus Sorocaba da Universidade Federal de São Carlos. O grupo é composto por estudantes de diversos cursos da UFSCar Sorocaba. O projeto visa o tratamento, incluindo a castração de cães abandonados no campus, para uma futura adoção consciente. Nosso objetivo principal é a castração de todos os animais que são abandonados no campus, como uma forma de controle populacional, pois com a castração facilita-se a futura adoção, diminuindo a população próximo ao Restaurante Universitário.</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-paw fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Encontramos Cães</h4>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-briefcase-medical fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Cuidamos deles</h4>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-home fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Encontramos algum lar temporario</h4>
                    </div>
                    <div class="col-md-3">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-hand-holding-heart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Encontramos alguem para adotar</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Adoção -->
        <section class="bg-light" id="adocao">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Adote</h2>
                        <h3 class="section-subheading text-muted">Veja os cachorrinhos que esperam por um lar.</h3>
                    </div>
                </div>
                <?php if(count($catioro) != 0) {?>
                <div class = "row">
                    <div class="col-md-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" align="center">
                                <?php $i = 0; foreach($catioro as $c){ if($c['status_cat']!="1"){?>
                                <div class="carousel-item <?php if($i == 0){echo "active";}?>">
                                    <div class="col-xs-4">
                                        <div class="card adoteCard">
                                            <img class="card-img-top" src="<?= base_url('imgs/dogs/'.$c['id_cat'].'.png') ?>" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title"><?=$c['nome_cat']?></h5>
                                                <a href="#adocao" class="btn btn-primary" id="<?=$c['id_cat']?>" onclick="modalAdoteFunction(this.id)">Adote</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i+=1;} }?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } else {?>
                    <div class="alert alert-secondary" role="alert">
                      Estamos com todos os doguinhos adotados! ^-^
                    </div>
                <?php }?>
            </div>
        </section>

        <!-- Ajude -->
        <section id="ajude">
            <div class="container">
                <div class="row" vertical-align="center">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Como posso ajudar?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p id="ajudeTxt" align="justify">Por não ser financiado por nenhuma organização e não possuir nenhum fim lucrativo, o UFSCão depende da arrecadação de custos através de doações, parcerias e voluntários.O trabalho efetuado em redes sociais, divulgação e a condução dos animais até feiras de adoção ou veterinários, é realizado por voluntários e caronas com disponibilidade de horário, pois também não temos transporte próprio. Os cães que permanecem no campus correm riscos por conta da rodovia altamente perigosa, buscamos por lares temporários pois o UFSCão não possui abrigo. Abaixo você pode deixar o seu contato e de que modo você pode nos ajudar.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12"></div>
                        <div class="col-sm-12 text-center" id="ajudeBtnDiv">
                            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" id="ajudeBtn" href="#ajude" onclick="modalFunction()">Deixe seu contato</a>
                        </div>
                </div>
            </div>
        </section>

        <!-- Eventos -->
        <?php if(count($eventos) != 0){?>
        <section class="bg-light" id="eventos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Eventos</h2>
                        <h3 class="section-subheading text-muted">Veja os eventos que participamos.</h3>
                    </div>
                </div>
                
                <?php $i = 0; foreach($eventos as $e){ if($i == 3){break;} $i+=1;?>
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
                
                <div class="row">
                    <div class="col-lg-12"></div>
                        <div class="col-sm-12 text-center" id="maisEventos">
                            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" id="eventosBtn" href="<?=base_url("index.php/home/more_events/0")?>">Mais Eventos</a>
                        </div>
                </div>
            </div>
        </section>
        <?php } ?>
        <?php if(count($parceiros) != 0){ ?>
        <!-- Apoio -->
        <section id="apoio">
            <div class="container">
              <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Apoio</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <?php foreach($parceiros as $p){ ?>
                    <div class="col-md-3 mx-auto">
                        <img class="rounded-circle img-fluid mx-auto" src="<?=base_url('imgs/parceiros/'.$p['id_parc'].'.png')?>" alt="Parceiro">
                        <a href="<?=$p['url_parc']?>"><h4 class="service-heading"><?=$p['nome_parc']?></h4></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <?php } ?>
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class=col-md-4>
                    </div>
                    <div class="col-md-4">
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
                <div class="col-md-4">
                    <a style="color: white;" href="<?=site_url('dashboard/login')?>">Dashboard</a>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="<?= base_url('assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

        <script src="<?= base_url('assets/home/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

        <!-- Contact form JavaScript -->
        <script src="<?= base_url('assets/home/js/jqBootstrapValidation.js') ?>"></script>
        <script src="<?= base_url('assets/home/js/contact_me.js') ?>"></script>

        <!-- Custom scripts for this template -->
        <script src="<?= base_url('assets/home/js/agency.min.js') ?>"></script>

        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="modalId">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Deixe seu contato</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeBtn">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="id_logindiv">
                            <form class="form-horizontal" id="formLogin" action="<?=base_url("index.php/home/helpers_add")?>" method="post">
                                <div class="form-group">
                                    <label class="control-label col-xs-2 col-sm-2" for="nome">Nome</label>
                                    <div class="col-xs-12 col-sm-12 form-control-static">
                                        <input type="text" name="nome_ajud" class="form-control" id="nome" placeholder="Insira seu nome aqui" maxlength="100" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-2 col-sm-2" for="contato">Contato</label>
                                    <div class="col-xs-12 col-sm-12 form-control-static">
                                        <input type="text" name="contato_ajud" class="form-control" id="contato" placeholder="Email, telefone, etc..." maxlength="100" required>
                                    </div>
                                </div>
                                <label class="control-label col-xs-12 col-sm-12">Como pode ajudar?</label>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12 form-control-static">
                                        <input class="form-check-input-lg" type="checkbox" name="carona_ajud" id="ajudaCarona" value="1">
                                        <label class="form-check-label" for="ajudaCarona">Carona</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 form-control-static">
                                        <input class="form-check-input-lg" type="checkbox" name="doacao_ajud" id="ajudaDoar" value="1">
                                        <label class="form-check-label" for="ajudaDoar">Doação</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 form-control-static">
                                        <input class="form-check-input-lg" type="checkbox" name="lar_temp_ajud" id="ajudaLar" value="1">
                                        <label class="form-check-label" for="ajudaLar">Lar temporário</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 form-control-static">
                                        <input class="form-check-input-lg" type="checkbox" name="divulg_ajud" id="ajudaDivulgar" value="1">
                                        <label class="form-check-label" for="ajudaDivulgar">Divulgação</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-6 col-sm-6" for="tipoAjuda">Outra forma de ajudar?</label>
                                    <div class="col-xs-12 col-sm-12 form-control-static">
                                        <input type="text" name="outro_ajud" class="form-control" id="tipoAjuda" placeholder="Alguma outra forma de ajuda" maxlength="200">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-2 col-sm-2" for="observacoes">Observações</label>
                                    <div class="col-xs-12 col-sm-12 form-control-static">
                                        <input type="text" name="obs_ajud" class="form-control" id="observacoes" placeholder="O que pode oferecer em doação, preço de carona, condições para colaborar, descrição de outras formas de colaboração..." maxlength="400">
                                    </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default greenBtn" id="enviar">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <!-- Modais... Sorry -->
        <?php foreach($catioro as $c){ ?>
        <div class="modal fade" id="modalAdoteLong<?=$c['id_cat']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="modalAdoteId">
                    <div class="modal-header">
                        <h5 class="modal-title">Adote</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeAdote">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="card-img-top img-fluid" src="<?= base_url('imgs/dogs/'.$c['id_cat'].'.png') ?>" alt="Card image cap">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p><b>Nome: </b><?=$c['nome_cat']?></p>
                                <p><b>Idade: </b><?=$c['idade_cat']?> Anos</p>
                            </div>
                            <div class="col-md-8">
                                <p><b>Vacinado: </b><?php if($c['vacinado_cat']=="1"){echo 'Sim';}else{echo 'Não';}?></p>                            
                                <p><b>Castrado: </b><?php if($c['castrado_cat']=="1"){echo 'Sim';}else{echo 'Não';}?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" align="justify">
                                <p><b>Observações: </b><?=$c['obs_cat']?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p><b>Quer adotar?</b></p>
                            </div>
                        </div>
                        <form method="POST" action="<?=site_url('home/adote')?>">
                          <div class="form-row">
                            <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                              <input name="nome_adote" type="text" class="form-control" placeholder="Digite seu nome">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                              <input name="contato_adote" type="text" class="form-control" placeholder="Digite seu contato">
                            </div>
                          </div>
                          <input type="hidden" name="id_cat" value="<?=$c['id_cat']?>">
                          <br>
                          <button type="submit" class="btn btn-success btn-lg btn-block greenBtn">Adotar!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

    </body>

</html>
