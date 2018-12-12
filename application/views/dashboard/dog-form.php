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
    <title>Novo cachorro</title>

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

    <!-- CROPPER -->
    <link rel="stylesheet" href="<?=base_url('assets/css/cropper.css')?>">
    
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
            <section class="mt-sm-3 mt-md-5 mt-lg-5 mt-xl-5 pt-lg-5 pt-xl-5">
                <div class="col-md-8 border rounded shadow mx-auto p-3">
                    <div class="d-flex flex-column align-items-center">
                        <div class="d-flex flex-row">
                            <label>Insira uma foto</label>
                            <a type="button" href="" class="btn btn-link p-1 ml-2" style="font-size: 12px; display: none;" id="edit">Editar</a>
                        </div>
                        <label class="" id="photo-div" data-toggle="tooltip" title="Insira uma nova imagem" style="cursor: pointer;">
                            <img class="rounded img-fluid dog_image" id="photo" src="<?php if($id=="0"){echo base_url('assets/images/dog-head-profile.png');}else{echo base_url('imgs/dogs/'.$id.'.png');}?>" width="250px" height="250px" style="background-color: #CCC;">
                            <input type="file" class="sr-only" id="photo-input" value="0" name="image" accept="image/*" required>
                        </label>
                      </div>
                    <form id="form_dog" action="" method="">
                        <div class="container col-sm-12 col-md-12 mb-2">
                            <label>Nome *</label>
                            <input class="form-control" name="nome_cat" value="<?php if($nome_cat!="0"){echo $nome_cat;}else{echo "";}?>" type="text" placeholder="Digite o nome do cachorro" required oninput="letter_only(this, this.value)">
                        </div>
                        <div class="d-flex flex-row flex-wrap mb-2">
                            <div class="col-sm-7 col-md-8">
                                <label>Sexo *</label>
                                <select name="sexo_cat" class="custom-select" required>
                                    <option value="" <?php if($id=="0"){echo "selected";}?>>Escolha o sexo</option>
                                    <option value="0" <?php if($id!="0" && $sexo_cat=="0"){echo "selected";}?>>Macho</option>
                                    <option value="1" <?php if($id!="0" && $sexo_cat=="1"){echo "selected";}?>>Fêmea</option>
                                </select>
                            </div>
                            <div class="col-sm-5 col-md-4">
                                <label>Idade *</label>
                                <input class="form-control" name="idade_cat" type="text" maxlength="2" value="<?php if($idade_cat!="0"){echo $idade_cat;}else{echo "";}?>" required oninput="number_only(this, this.value)">
                            </div>
                        </div>
                        <div class="container col-sm-12 col-md-12 mb-2">
                            <label>Porte *</label>
                            <select name="port_cat" class="custom-select" required>
                                <option value=""<?php if($id=="0"){echo "selected";}?>>Escolha o porte</option>
                                <option value="0" <?php if($id!="0" && $port_cat=="0"){echo "selected";}?>>Pequeno</option>
                                <option value="1" <?php if($id!="0" && $port_cat=="1"){echo "selected";}?>>Médio</option>
                                <option value="2" <?php if($id!="0" && $port_cat=="2"){echo "selected";}?>>Grande</option>
                            </select>
                        </div>
                        <div class="form-group form-row col-sm-12 col-md-12">
                            <div class="form-check col-sm-12 col-md-6 mb-2">
                                <label>É castrado? *</label><br>
                                <input class="form-input-check" type="radio" name="castrado_cat" value="1" <?php if($id=="0" || ($id!="0" && $castrado_cat=="1")){echo "checked";}?>> Sim<br>
                                <input class="form-input-check" type="radio" name="castrado_cat" value="0" <?php if($id!="0" && $castrado_cat=="0"){echo "checked";}?>> Não
                            </div>
                            <div class="form-check col-sm-12 col-md-6">
                                <label>É vacinado? *</label><br>
                                <input class="form-input-check" type="radio" name="vacinado_cat" value="1" <?php if($id=="0" || ($id!="0" &&$vacinado_cat=="1")){echo "checked";}?>> Sim<br>
                                <input class="form-input-check" type="radio" name="vacinado_cat" value="0" <?php if($id!="0" && $vacinado_cat=="0"){echo "checked";}?>> Não
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Observações</label>
                            <textarea class="form-control" name="obs_cat" rows="3"><?php if($obs_cat!="0"){echo $obs_cat;}else{echo "";}?></textarea>
                        </div>
                        <div class="d-flex flex-row col-md-12 justify-content-end">
                            <a href="<?=base_url("index.php/dashboard/dog")?>" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-add text-light ml-3 save"><?=$crud?></button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    
    <!-- Modal to cropper -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-2 d-flex flex-row justify-content-between">
                    <h5 class="modal-title" id="modalLabel">Corte a imagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <button class="btn btn-light" id="zoom-in"><i class="fas fa-search-plus"></i></button>
                        <button class="btn btn-light" id="zoom-out"><i class="fas fa-search-minus"></i></button>
                    </div>
                    <div class="img-container">
                        <img id="modal-img" src="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-add text-light" id="crop">Cortar</button>
                </div>
            </div>
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
    
    <!-- SCRIPTS TO CROP -->
    <script src="<?=base_url('assets/js/cropper.js')?>"></script>
    <script src="<?=base_url('assets/js/img-cropper.js') ?>"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/js/main.js')?>"></script>
    
    <script src="<?= base_url('assets/js/saving.js')?>"></script>
    
    <script>            
       // Organizando elementos na tela
        if ($(window).width() < 1280) {
            $('#infos').removeClass('col-md-8');
            $('#infos').addClass('col-md-12');
        }

        //Para dispositivos maiores, configura organização dos elementos de acordo com a redução da largura
        $(window).resize(function() {
            if ($(window).width() < 1280) {
                $('#infos').removeClass('col-md-8');
                $('#infos').addClass('col-md-12');
            } else {
                $('#infos').removeClass('col-md-12');
                $('#infos').addClass('col-md-8');
            }
        });
        
        function b64toBlob(b64Data, contentType, sliceSize) {
                contentType = contentType || '';
                sliceSize = sliceSize || 512;

                var byteCharacters = atob(b64Data);
                var byteArrays = [];

                for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
                    var slice = byteCharacters.slice(offset, offset + sliceSize);

                    var byteNumbers = new Array(slice.length);
                    for (var i = 0; i < slice.length; i++) {
                        byteNumbers[i] = slice.charCodeAt(i);
                    }

                    var byteArray = new Uint8Array(byteNumbers);

                    byteArrays.push(byteArray);
                }

              var blob = new Blob(byteArrays, {type: contentType});
              return blob;
            }
        
            function appendFileAndSubmit(ImageURL){
                var img = true;
                
                var nome = $('input[name="nome_cat"]').val(),
                idade = $('input[name="idade_cat"]').val(),
                sexo = $('select[name="sexo_cat"] option:selected').attr('value'),
                porte = $('select[name="port_cat"] option:selected').attr('value');
                
                // Get the form
                var form = document.getElementById("form_dog");
                var fd = new FormData(form);
                try{
                  // Split the base64 string in data and contentType
                  var block = ImageURL.split(";");
                  // Get the content type
                  var contentType = block[0].split(":")[1];// In this case "image/gif"
                  // get the real base64 content of the file
                  var realData = block[1].split(",")[1];// In this case "iVBORw0KGg...."

                  // Convert to blob
                  var blob = b64toBlob(realData, contentType);
                  
                  fd.append("image", blob);
                } catch(e){
                    if ('<?php echo $crud; ?>' == 'Cadastrar') img=false;
                }
                
                // Validation and submit
                if(nome && idade && sexo && porte && img) {
                    saving($('.save'));
                    $("#photo").css("border", "none");
                    $("#help-text").remove();
                    
                    $.ajax({
                        url:"<?=$action_form?>",
                        data: fd,// the formData function is available in almost all new browsers.
                        type:"POST",
                        contentType:false,
                        processData:false,
                        cache:false,
                        dataType:"json", // Change this according to your response from the server.
                        error:function(err){
                          console.log("err.");
                          console.error(err);
                          window.location.replace("<?=base_url('index.php/dashboard/dog')?>");
                        },
                        success:function(data){
                          console.log("data.");
                          console.log(data);
                          window.location.replace("<?=base_url('index.php/dashboard/dog')?>");
                        },
                        complete:function(){
                            console.log("Request finished.");
                            window.location.replace("<?=base_url('index.php/dashboard/dog')?>");

                        }
                    });
                } else if(!img) {
                    $("#photo").css("border", "1px solid red");
                    $("#photo-div").append('<div class="text-danger" id="help-text" style="font-size: 12px">A imagem é obrigatória</div>');
                }
                
            }
        
            $("#form_dog").submit(function(e){
                e.preventDefault();
                appendFileAndSubmit($('img.dog_image').attr('src'));
            });
    </script>
    
    <script>
        function letter_only (elem, str) {
            var len = str.length;
            
            if($.isNumeric(str[len-1])) {
                str = str.substring(0, len-1);
                $(elem).val(str);
            }
        }
        
        function number_only (elem, str) {
            var len = str.length;
            
            if(!$.isNumeric(str[len-1])) {
                str = str.substring(0, len-1);
                $(elem).val(str);
            }
        }
    </script>
</body>

</html>
<!-- end document-->