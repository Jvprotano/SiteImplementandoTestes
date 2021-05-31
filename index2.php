<?php include_once("connect.php");
include("gerarQuestao.php");

?>
<!DOCTYPE html>

<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootsnip.css">
  <link rel="shortcut icon" href="imgs/favicon.ico" />
  <header id="cabecalho"></header>
</head>

<body onload="iniciar(), nextlevel()">

  <div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <?php while ($pergunta = $con->fetch_array()) { ?>
            <?php $posicao = 1; ?>
            <h3><span class="label label-warning" id="qid"></span><?php echo $pergunta["pergunta"] ?></h3>
        </div>
        <div class="modal-body">
          <div class="col-xs-3 col-xs-offset-5">
            <div id="loadbar" style="display: none;">
              <div class="blockG" id="rotateG_01"></div>
              <div class="blockG" id="rotateG_02"></div>
              <div class="blockG" id="rotateG_03"></div>
              <div class="blockG" id="rotateG_04"></div>
              <div class="blockG" id="rotateG_05"></div>
              <div class="blockG" id="rotateG_06"></div>
              <div class="blockG" id="rotateG_07"></div>
              <div class="blockG" id="rotateG_08"></div>
            </div>
          </div>

          <div class="quiz" id="quiz" data-toggle="buttons">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Nome</span>
              </div>
              <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>

            <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1"><?php echo $pergunta["resposta1"] ?></label>
            <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2"> <?php echo $pergunta["resposta2"] ?></label>
            <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="3"> <?php echo $pergunta["resposta3"] ?></label>
            <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="4"> <?php echo $pergunta["resposta4"] ?></label>
            <div id="resp_corre" value="<?php $pergunta["resp_correta"] ?>"></div>

            <!-- MODAL AZUL-->
            <button type="button" id="azul" class="btn btn-info btn-circle btn-lg" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-ok">?</i></button>

            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog modal-sm">

                <!-- Conteudo do Modal-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">AJUDA</h4>
                  </div>
                  <div class="modal-body">
                    <p>Selecione a opção correta e clique em "Confirmar" para verificar a resposta.</p>
                  </div>
                  <div class="modal-footer">
                    <button id="btn-ajuda" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>


          </div>
          <button type="button" class="btn btn-primary btn-lg" id="Enviar">Confirmar</button>
        </div>

      <?php } ?>
      <script>
      </script>

      <div class="acertou" id="acertou">
        <img src="https://2497.cdn.simplo7.net/static/2497/sku/tecido-tricoline-100-algodao-lisa-tricoline-100-algodao-lisa-verde-bandeira-1486055482386.jpg" alt="acertou">
      </div>
      <div class="modal-footer text-muted">
        <span id="answer"></span>
      </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="bootsnip.js"></script>
  <script src="script.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>

</html>