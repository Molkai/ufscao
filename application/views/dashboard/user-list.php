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
    <title>Usuários</title>

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
                        <li class="has-sub">
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
                        <li class="active has-sub">
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
                            <div class="logo d-flex justify-content-center d-lg-none">
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
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
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
                <div class="menu-sidebar2__content js-scrollbar1">
                    <div class="account2">
                        <h4 class="name"><?=$this->session->userdata('nome_login')?></h4>
                        <a href="<?=base_url("index.php/dashboard/logout")?>">Logout</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="has-sub">
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
                            <li class="active has-sub">
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
            
            <section class="col-12">
                <div class="col-12 table-responsive" style="padding-top:100px;">
                    <table class="table">
                        <thead class="dft-dark rounded-top text-white">
                            <tr>
                                <th scope="col">Usuário</th>
                                <th scope="col">Resetar</th>
                                <th scope="col">Deletar</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($login as $l){ if($l['nv_login'] != "1"){?>
                            <tr class="bg-light">
                                <td><p style="word-wrap: break-word;"><?php echo $l['user_login']; ?></p></td>
                                <td><div data-href="<?=base_url("index.php/dashboard/user_reset_passwd/".$l['id_login'])?>" class="btn btn-link text-success" id="<?php echo $l['id_login']; ?>" data-toggle="modal" data-target="#modalReset"><i class="fas fa-key"  data-toggle="tooltip" data-placement="top" title="Resetar senha"></i></div></td>
                                <td><div data-href="<?=base_url("index.php/dashboard/user_del/".$l['id_login'])?>" class="btn btn-link text-danger" id="<?php echo $l['id_login']; ?>" data-toggle="modal" data-target="#modalDelete"><i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Deletar usuário"></i></div></td>
                                <td><a href="<?=base_url("index.php/dashboard/user_form_edit/".$l['id_login'])?>" class="btn btn-link text-primary"><span class="fas fa-pen" data-toggle="tooltip" data-placement="top" title="Editar usuário"></span></a></td>
                            </tr>
                            <?php }} ?>
                        </tbody>
                    </table>
                </div>
            </section>
            
            <a href="<?=base_url("index.php/dashboard/user_form_add/")?>" class="btn-lg btn-add border-0 rounded-circle" style="position: fixed; bottom: 3vmin; right: 3vmin; z-index:1; padding: 8px 15px;" data-toggle="tooltip" data-placement="top" title="Novo usuário"><i class="fa fa-plus"></i></a>

        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modalReset" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-2 d-flex flex-row justify-content-between">
                    <h5 class="modal-title" id="modalLabel">Resetar Senha</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Esta é uma mudança irreversível. Deseja realmente resetar a senha deste usuário?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a type="button" class="btn btn-add" id="del">Sim</a>
                </div>
            </div>
        </div>
    </div>
        
    <!-- Modal -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-2 d-flex flex-row justify-content-between">
                    <h5 class="modal-title" id="modalLabel">Deletar Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Esta é uma mudança irreversível. Deseja realmente deletar este usuário?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a type="button" class="btn btn-danger" id="del">Sim</a>
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
        $('#modalReset').on('show.bs.modal', function(e) {
            $(this).find('#del').attr('href', $(e.relatedTarget).data('href'));
        });
            
        $('#modalDelete').on('show.bs.modal', function(e) {
            $(this).find('#del').attr('href', $(e.relatedTarget).data('href'));
        });
        </script>
</body>

</html>
<!-- end document-->