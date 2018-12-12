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
    <title>Novo evento</title>

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
                        <li class="has-sub">
                            <a class="" href="<?=base_url("index.php/dashboard/dog")?>">
                                <i class="menu-icon fas fa-dog"></i>Cachorros
                            </a>
                        </li>
                        <li class="active has-sub">
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
                            <li class="has-sub">
                                <a class="" href="<?=base_url("index.php/dashboard/dog")?>">
                                    <i class="menu-icon fas fa-dog"></i>Cachorros
                                </a>
                            </li>
                            <li class="active has-sub">
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
            <section class="mt-md-3 mt-lg-5 mt-xl-5 pt-lg-5 pt-xl-5">
                <div class="container d-flex flex-wrap justify-content-center col-md-12">
                    <!-- CHANGE PARCEIROS -->
                    <div class="mt-3 col-sm-12 col-md-12 col-xl-12 d-flex flex-column justify-content-center align-items-center">
                        <label class="" data-toggle="tooltip" id="photo-div" title="Insira uma nova imagem" style="cursor: pointer;">
                            <img class="rounded img-fluid mx-auto event_image" id="photo" src="<?php if($id=="0"){echo base_url('assets/images/default-event.png');}else{echo base_url('imgs/eventos/'.$id.'.png');}?>" width="600vmax" heigth="150vmax" alt="Evento">
                            <input type="file" class="sr-only" id="photo-input" name="image" accept="image/*">
                        </label>
                        <form id="form_event" class="mt-3 mx-5 col-sm-10 col-md-9 col-lg-8" action="" method="">
                            <div class="form-group">
                                <label>Nome do evento</label>
                                <input type="text" class="form-control" name="titulo_evt" value="<?php if($titulo_evt!="0"){echo $titulo_evt;}else{echo "";}?>" placeholder="Insira o nome do evento" required>
                            </div>
                            <div class="form-group">
                                <label>Data do Evento</label>
                                <input type="text" maxlength="10" class="form-control" name="data_hora_evt" value="<?php if($data_hora_evt!="0"){echo $data_hora_evt;}else{echo "";}?>" placeholder="dd/mm/aaaa" required oninput="valid_date(this.value, event)">
                            </div>
                            <div class="form-group">
                                <label>Descrição do Evento</label>
                                <textarea type="text" class="form-control" name="desc_evt" placeholder="Insira a descrição do evento" required><?php if($desc_evt!="0"){echo $desc_evt;}else{echo "";}?></textarea>
                            </div>

                            <div class="d-flex justify-content-end mt-2">
                                <a href="<?=base_url('index.php/dashboard/eventos')?>" class="btn btn-secondary">Cancelar</a>
                                <button class="btn btn-add ml-2 text-light save" type="submit"><?=$crud?></button>
                            </div>
                        </form>
                    </div>
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

    <!-- Main JS-->
    <script src="<?= base_url('assets/js/main.js')?>"></script>
    
    <script src="<?= base_url('assets/js/saving.js')?>"></script>
    
    <!-- SCRIPTS TO CROP -->
    <script src="<?=base_url('assets/js/cropper.js')?>"></script>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            // Get the element on document
            var photo = document.getElementById('photo');
            var modal_image = document.getElementById('modal-img');
            var input = document.getElementById('photo-input');
            var $modal = $('#modal');
            var cropper;

            $('[data-toggle="tooltip"]').tooltip();

            //Function to set the new image on modal and show modal
            var done = function (url) {
                input.value = '';
                modal_image.src = url;
                $modal.modal('show');
            };
            var new_url;

            // Verify if a file was inputed
            input.addEventListener('change', function (e) {
                var files = e.target.files;

                var reader;
                var file;
                var url;

                //Apply the function created above
                if (files && files.length > 0) {
                    file = files[0];

                    if (URL) {
                        new_url = URL.createObjectURL(file);
                        done(new_url);
                    } else if (FileReader) {
                        reader = new FileReader();
                        reader.onload = function (e) {
                            new_url = reader.result;
                            done(new_url);
                        };
                        reader.readAsDataURL(file);
                    }
                }
            });

            //Button to zoom in and zoom out
            document.getElementById("zoom-in").addEventListener('click', function(){
               cropper.zoom(0.1);
            });
            document.getElementById("zoom-out").addEventListener('click', function(){
               cropper.zoom(-0.1);
            });

            //Create a cropper when modal show up, destroy cropper when modal is closed
            $modal.on('shown.bs.modal', function () {
                cropper = new Cropper(modal_image, {
                    dragMode: 'move',
                    aspectRatio: 4,
                    rotatable: false,
                    restore: false,
                    guides: false,
                    center: false,
                    highlight: false,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                });
            }).on('hidden.bs.modal', function () {
                cropper.destroy();
                cropper = null;
            });
            document.getElementById('crop').addEventListener('click', function () {
                var initial_url;
                var canvas;

                $modal.modal('hide');

                if (cropper) {
                    canvas = cropper.getCroppedCanvas({
                        width: 1000,
                        height: 250,
                    });
                    initial_url = photo.src;
                    photo.src = canvas.toDataURL();
                    $("#edit").css("display", "block");
                }
            });

            //Edit cropped image
            document.getElementById('edit').addEventListener('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                done(new_url);
            });
        });
    </script>
    <script type="text/javascript">
          var d, m, y;
          function valid_date(str, e){
              
              var date = $('input[name="data_hora_evt"]');
              var len = str.length;
            
              if($.isNumeric(str[len-1])) {
                  if (len == 2) {
                      d = str;
                  } else if(len == 4) {
                      if(str.substring(2,4) == '00') {
                         str = str.substring(0,3) + '1';
                         date.val(str);
                      } else if (str.substring(2,4) - 12 > 0) {
                         str = str.substring(0,2) + '12';
                         date.val(str);
                      }
                      m = str.substring(2,4);
                  } else if(len == 8) {
                      y = str.substring(4,8);
                      date.val(d + '/' + m + '/' + y);
                  } else if (len == 9) {
                      date.val(d + m + str.substring(6, 9));
                  }
              } else {
                  str = str.substring(0, len-1);
                  date.val(str);
              }
          }
        
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
                
                // Get the form
                var form = document.getElementById("form_event");
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
                
                // Submit Form and upload file
                if(img) {
                    saving($('.save'));
                    $("#photo").css("border", "none");
                    $("#help-text").remove();
                    
                    $.ajax({
                        url:"<?=$action_form.'/'.$id?>",
                        data: fd,// the formData function is available in almost all new browsers.
                        type:"POST",
                        contentType:false,
                        processData:false,
                        cache:false,
                        dataType:"json", // Change this according to your response from the server.
                        error:function(err){
                          console.log("err.");
                          console.error(err);
                          window.location.replace("<?=base_url('index.php/dashboard/eventos')?>");
                        },
                        success:function(data){
                          console.log("data.");
                          console.log(data);
                          window.location.replace("<?=base_url('index.php/dashboard/eventos')?>");
                        },
                        complete:function(){
                            console.log("Request finished.");
                            window.location.replace("<?=base_url('index.php/dashboard/eventos')?>");

                        }
                    });
                } else if(!img) {
                    $("#photo").css("border", "1px solid red");
                    $("#photo-div").append('<div class="text-danger" id="help-text" style="font-size: 12px">A imagem é obrigatória</div>');
                }
            }
        
            $("#form_event").submit(function(e){
                e.preventDefault();
                appendFileAndSubmit($('img.event_image').attr('src'));
            });
    </script>
</body>

</html>
<!-- end document-->