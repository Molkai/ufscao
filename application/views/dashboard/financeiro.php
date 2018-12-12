<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nome do Custo</th>
          <th scope="col">Custo</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
          $count = 0; $c = 0;
          foreach($financeiro as $f){ 
            $c++; $count += $f['custo_fin']; ?>
            <tr>
                <td><?php echo $f['nome_fin']; ?></td>
                <td><?php echo "R$".$f['custo_fin']; ?></td>
                <td><div data-toggle="tooltip" data-placement="right" title="Pago!"><button data-href="<?php echo site_url('dashboard/financeiro_del/'.$f['id_fin']); ?>" class="btn btn-link text-success" id="<?php echo $f['id_fin']; ?>" data-toggle="modal" data-target="#modal"><i class="fas fa-check"></i></button></div></td>
            </tr>
        <?php } ?>
        <?php if($c != 0){ ?>
              <tr>
                <td>Total Gasto</td>
                <td><?="R$".$count?></td>
                <td></td>
            </tr>
        <?php } else { ?>
            <tr>
                <td>Sem Gasto! :D</td>
                <td></td>
                <td></td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
      
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <a type="button" class="btn btn-success" id="del">SIM!</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        $('#modal').on('show.bs.modal', function(e) {
            $(this).find('#del').attr('href', $(e.relatedTarget).data('href'));
        });
    </script>
  </body>
</html>