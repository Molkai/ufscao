<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
        <!-- Fontfaces CSS-->
        <link href="<?= base_url('assets/css/font-face.css') ?>" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link href="<?= base_url('vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="<?= base_url('assets/css/theme.css')?>" rel="stylesheet" media="all">
        <link href="<?= base_url('assets/css/my_style.css')?>" rel="stylesheet" media="all">
        <title>Alteração de senha</title>
  </head>
    <body class="pt-5" style="background-image: url(<?= base_url('assets/images/bkg-login2.png')?>);">
        <div class="px-3">
            <div class="mt-sm-5 mt-md-5 mt-lg-5 mt-xl-5 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3 mx-auto rounded shadow" style="background-color: rgb(255, 255, 255, 1);">
                <h5 class="mb-4 alert alert-warning">
                    Você está com a senha padrão. Altere para continuar.
                </h5>
                <form action="<?=base_url("index.php/dashboard/user_change_passwd/".$id_login)?>" method="post">
                    <input type="hidden" name="id_login" value="1">
                    <div class="form-group">
                        <label for="">Nova senha</label>
                        <input type="password" class="form-control" name="senha_login">
                    </div>

                    <div class="form-group">
                        <label for="">Confirmar nova senha</label>
                        <input type="password" class="form-control" name="senha_login2">
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-add ml-3">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>
            $(window).ready(function(){
                if($(window).width() < 500) {
                    $("body").css("background-size", "35%");
                } 
            });
        </script>
    </body>
</html>