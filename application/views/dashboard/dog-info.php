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
    <title>Cachorros</title>

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
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
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
                        <li class="active has-sub">
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
            <header class="header-desktop2 dft-color">
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
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
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
                            <li class="active has-sub">
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
            
            <!-- CONTENT -->
            <section class="mt-sm-3 mt-md-3 mt-lg-5 mt-xl-5 pt-lg-5 pt-xl-5">
                <div class="col-sm-9 col-md-7 col-lg-6 col-xl-8 border rounded shadow mx-auto p-3">
                    <div class="d-flex justify-content-around align-items-center flex-wrap mb-1">
                        <div class="">
                            <img class="rounded img-fluid" id="dog-photo" src="<?php if($id=="0"){echo base_url('assets/images/dog-head-profile.png');}else{echo base_url('imgs/dogs/'.$id.'.png');}?>" width="250px" height="250px">
                        </div>
                        <div class="col-md-12 col-lg-12 col-xl-6 mt-2">
                            <h3 class="w-100" style="word-wrap:break-word;"><b><?=$nome_cat?></b></h3>
                            <?php if($sexo_cat == "0"){?>
                            <p>Macho</p>
                            <?php }?>
                            <?php if($sexo_cat == "1"){?>
                            <p>Fêmea</p>
                            <?php }?>
                            
                            <p class="mt-2"><b>Idade: </b><?=$idade_cat?> anos</p>
                            <?php if($port_cat == "0"){?>
                            <p class="mt-2"><b>Porte: </b>Pequeno</p>
                            <?php }?>
                            <?php if($port_cat == "1"){?>
                            <p class="mt-2"><b>Porte: </b>Médio</p>
                            <?php }?>
                            <?php if($port_cat == "2"){?>
                            <p class="mt-2"><b>Porte: </b>Grande</p>
                            <?php }?>
                            
                            <?php if($castrado_cat == "1"){?>
                            <p class="mt-2"><b>É castrado? </b>Sim</p>
                            <?php }?>
                            <?php if($castrado_cat == "0"){?>
                            <p class="mt-2"><b>É castrado? </b>Não</p>
                            <?php }?>
                            
                            <?php if($vacinado_cat == "1"){?>
                            <p class="mt-2"><b>É vacinado? </b>Sim</p>
                            <?php }?>
                            <?php if($vacinado_cat == "0"){?>
                            <p class="mt-2"><b>É vacinado? </b>Não</p>
                            <?php }?>
                            
                            
                            <p class="mt-2"><b>Oservações: </b><?=$obs_cat?>.</p>
                            <a class="btn btn-sm btn-add mt-2" href="<?=base_url("index.php/dashboard/dog_form_edit/".$id)?>">Editar informações</a>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <div class="change-status" style="position:relative;">
                            <div class="col-md-3">
                                <p><b>Status</b></p>
                                <?php if($status_cat == "0"){?>
                                <p>Encontrado</p>
                                <?php }?>
                                <?php if($status_cat == "1"){?>
                                <p>Adotado</p>
                                <?php }?>
                                <?php if($status_cat == "2"){?>
                                <p>Lar Temporário</p>
                                <?php }?>
                                <?php if($status_cat == "3"){?>
                                <p>Hotel</p>
                                <?php }?>
                                
                            </div>
                            <div class="col-md-7">
                            </div>
                            <button class="btn btn-sm btn-add change-button" style="position:absolute; top:-10px; right:0px;">Alterar status</button>
                        </div>
                        
                        <form action="<?=base_url("index.php/dashboard/dog_info_edit")?>" method="POST" class="change-status" style="display:none;">
                            <input type="hidden" id="custId" name="id" value="<?=$id?>">
                        <!-- Options to change -->
                        <div class="d-flex flex-row flex-wrap">
                            <div class="col-md-5 mb-2">
                                <p><b>Status</b></p>
                                <select name="status_cat" class="custom-select" id="status-select">
                                    <option value="0" <?php if($status_cat=="0"){echo "selected";}?>>Encontrado</option>
                                    <option value="1" <?php if($status_cat=="1"){echo "selected";}?>>Adotado</option>
                                    <option value="2" <?php if($status_cat=="2"){echo "selected";}?>>Lar Temporário</option>
                                    <option value="3" <?php if($status_cat=="3"){echo "selected";}?>>Hotel</option>
                                </select>
                            </div>
                            <div class="col-md-7" id="opt-dono" style="<?php if($status_cat != "1"){echo 'display:none;';}else{echo 'display:block;';}?>">
                                <p><b>Dono</b></p>
                                <input type="text" name="status_desc_cat-0" class="form-control" value="<?=$status_desc_cat?>" placeholder="Digite o nome do dono">
                            </div>
                            <div class="col-md-7" id="opt-tmp" style="<?php if($status_cat != "2"){echo 'display:none;';}else{echo 'display:block;';}?>">
                                <p><b>Reponsável</b></p>
                                <select name="status_desc_cat-1" class="custom-select">
                                    <?php $i=0; foreach($ajudante as $a){ ?>
                                    <option value="<?php echo $a['nome_ajud']; ?>" <?php if(($status_cat=="2" && $status_desc_cat == $a['nome_ajud'])||($status_cat!="2" && $i == 0)){echo "selected";}?>><?php echo $a['nome_ajud']; ?></option>
                                    <?php $i+=1; } ?>
                                </select>
                            </div>
                            <div class="col-md-7" id="opt-hotel" style="<?php if($status_cat != "3"){echo 'display:none;';}else{echo 'display:block;';}?>">
                                <p><b>Nome do hotel</b></p>
                                <input type="text" name="status_desc_cat-2" class="form-control" placeholder="Digite o nome do hotel" value="<?php if($status_cat=="3"){echo $status_desc_cat;}?>">
                            </div>
                            <div class="d-flex col-md-12 mt-3">
                                <button class="btn btn-sm btn-secondary mr-2 change-button">Cancelar</button>
                                <button class="btn btn-sm btn-add" type="submit">Alterar</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
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
        $(".change-button").click(function(e){
            e.preventDefault();
            $(".change-status").toggle();
        });

        $("#status-select").change(function(){
            var option = $("#status-select option:selected").attr("value");
            switch(option) {
                case "0":
                    $("#opt-dono").css("display", "none");
                    $("#opt-tmp").css("display", "none");
                    $("#opt-hotel").css("display", "none");
                    break;
                case "1":
                    $("#opt-dono").css("display", "block");
                    $("#opt-tmp").css("display", "none");
                    $("#opt-hotel").css("display", "none");
                    break;
                case "2":
                    $("#opt-dono").css("display", "none");
                    $("#opt-tmp").css("display", "block");
                    $("#opt-hotel").css("display", "none");
                    break;
                case "3":
                    $("#opt-dono").css("display", "none");
                    $("#opt-tmp").css("display", "none");
                    $("#opt-hotel").css("display", "block");
                    break;
                    
            }
        });
    </script>
</body>

</html>
<!-- end document-->