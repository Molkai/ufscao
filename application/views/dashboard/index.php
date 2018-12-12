<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Resumo</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/css/font-face.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="<?= base_url('vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Vendor CSS-->
    <link href="<?= base_url('vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/wow/animate.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url("vendor/css-hamburgers/hamburgers.min.css") ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/slick/slick.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/vector-map/jqvmap.min.css')?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/css/theme.css')?>" rel="stylesheet" media="all">
  
    <link href="<?= base_url('assets/css/my_style.css')?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR - sidebar when large-->
        <aside class="menu-sidebar2">
            <div class="logo dft-dark d-flex justify-content-center">
                <a href="#">
                    <img class="" width="100px" src="<?= base_url('assets/images/icon/logo-white.png')?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <h4 class="name"><?=$this->session->userdata('nome_login')?></h4>
                    <a href="<?=base_url("index.php/dashboard/logout")?>">Logout</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard")?>">
                                <i class="fas fa-tachometer-alt"></i>Resumo
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/ajudantes")?>">
                                <i class="fas fa-user-friends"></i>Ajudantes
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/adote")?>">
                                <i class="fas fa-heart"></i>Solicitações
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/dog")?>">
                                <i class="menu-icon fas fa-dog"></i>Cachorros
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/eventos")?>">
                                <i class="fas fa-calendar"></i>Eventos
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/parceiros")?>">
                                <i class="fas fa-handshake"></i>Parceiros
                            </a>
                        </li>
                        <?php if($this->session->userdata('nv_login')=="1"){?>
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/user_list/")?>">
                                <i class="zmdi zmdi-account"></i>Usuários
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2 dft-color" style="position: fixed; top: 0px;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-lg-none d-flex justify-content-center">
                                <a href="#">
                                    <img width="100px" src="<?= base_url('assets/images/icon/logo-white.png')?>" alt="CoolAdmin" />
                                </a>
                            </div>
                            
                            <!-- BARS -->
                            <div class="header-button2">
                                <!-- OPTIONS - clicked bars when large -->
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="fa fa-bars"></i>
                                </div>
                            </div>
                            <!-- END OF BARS -->
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- HIDDEN SIDEBAR - sidebar when small -->
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none" style="position:fixed;">
                <div class="logo d-flex justify-content-center">
                    <a href="#">
                        <img width="100px" src="<?= base_url('assets/images/icon/logo-white.png')?>" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <h4 class="name"><?=$this->session->userdata('nome_login')?></h4>
                        <a href="<?=base_url("index.php/dashboard/logout")?>">Logout</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard")?>">
                                    <i class="fas fa-tachometer-alt"></i>Resumo
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/ajudantes")?>">
                                    <i class="fas fa-user-friends"></i>Ajudantes
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/adote")?>">
                                    <i class="fas fa-heart"></i>Solicitações
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/dog")?>">
                                    <i class="menu-icon fas fa-dog"></i>Cachorros
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/eventos")?>">
                                    <i class="fas fa-calendar"></i>Eventos
                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/parceiros")?>">
                                    <i class="fas fa-handshake"></i>Parceiros
                                </a>
                            </li>
                            <?php if($this->session->userdata('nv_login')=="1"){?>
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/user_list/")?>">
                                    <i class="zmdi zmdi-account"></i>Usuários
                                </a>
                            </li>
                            <?php }?>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- STATISTIC-->
            <section class="statistic mt-5">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item my-statistic__item">
                                    <h2 class="number"><?=$count_ajud['count_ajud']?></h2>
                                    <span class="desc">ajudantes</span>
                                    <div class="icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item my-statistic__item">
                                    <h2 class="number"><?=$dog_count['dog_count']?></h2>
                                    <span class="desc">cachorros</span>
                                    <div class="icon">
                                        <i class="fas fa-dog"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item my-statistic__item">
                                    <h2 class="number"><?=$dog_adot['dog_adot']?></h2>
                                    <span class="desc">cachorros adotados</span>
                                    <div class="icon">
                                        <i class="fas fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item my-statistic__item">
                                    <h2 class="number"><?=$dog_hosp['dog_hosp']?></h2>
                                    <span class="desc">hospedados</span>
                                    <div class="icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
            
            <section class="col-12 px-2">
                <div class="col-12">
                    <div class="au-card au-card--no-shadow au-card--no-pad m-b-40 au-card--border">
                        <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                            <div class="bg-overlay dft-dark"></div>
                            <h2><i class="fas fa-hand-holding-usd"></i> Gastos</h2>
                            <button class="au-btn-plus" data-toggle="modal" data-target="#modal">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
                        </div>
                        <div class="au-task js-list-load au-task--border">
                            <div class="au-task-list js-scrollbar3">
                                <?php
                                    $count = 0; $c = 0;
                                    foreach($financeiro as $f){ 
                                    $c++; $count += $f['custo_fin']; ?>
                                    <div class="au-task__item au-task__item--danger">
                                        <div class="au-task__item-inner d-flex justify-content-between">
                                            <div>
                                                <h5 class="task">
                                                    <?php echo $f['nome_fin']; ?>
                                                </h5>
                                                <span class=""><?php echo "R$ ".$f['custo_fin']; ?></span>
                                            </div>
                                            <div data-toggle="tooltip" data-placement="right" title="Pago"><button data-href="<?php echo site_url('dashboard/financeiro_del/'.$f['id_fin']); ?>" class="btn btn-link text-success" id="<?php echo $f['id_fin']; ?>" data-toggle="modal" data-target="#modal_pag"><i class="fas fa-check"></i></button></div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if($c != 0){ ?>
                                    <div class="au-task__item au-task__item--primary">
                                        <div class="au-task__item-inner">
                                            <h5 class="task mr-3">
                                                Total de gastos
                                            </h5>
                                            <span class=""><?php echo "R$ ".$count ?></span>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="au-task__item-inner">
                                        <h5 class="task mr-3">
                                            Não há gastos :D
                                        </h5>
                                    </div>
                                <?php } ?> 
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-2 d-flex flex-row justify-content-between">
                    <h5 class="modal-title" id="modalLabel">Novo gasto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url('index.php/dashboard/financeiro_add')?>" method="post" >
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do gasto</label>
                            <input type="text" class="form-control" name="nome_fin" placeholder="Ração">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Custo</label>
                            <input type="text" class="form-control" name="custo_fin" placeholder="129.156">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-add">Adicionar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal_pag -->
    <div class="modal fade" id="modal_pag" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-2 d-flex flex-row justify-content-between">
                    <h5 class="modal-title" id="modalLabel">Conta paga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Oba, foi realmente pago?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a type="button" class="btn btn-success" id="del">SIM</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url("vendor/jquery-3.2.1.min.js") ?>"> </script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url("vendor/bootstrap-4.1/popper.min.js") ?>"></script>
    <script src="<?= base_url("vendor/bootstrap-4.1/bootstrap.min.js") ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url('vendor/slick/slick.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/wow/wow.min.js')?>"></script>
    <script src="<?= base_url('vendor/animsition/animsition.min.js')?>"></script>
    <script src="<?= base_url('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?= base_url('vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
    <script src="<?= base_url('vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?= base_url('vendor/select2/select2.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.js')?>"></script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.min.js')?>"></script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.sampledata.js')?>"></script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.world.js')?>"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/js/main.js')?>"></script>
        
    <script>
        $('#modal_pag').on('show.bs.modal', function(e) {
            $(this).find('#del').attr('href', $(e.relatedTarget).data('href'));
        });
    </script>
</body>

</html>
<!-- end document-->