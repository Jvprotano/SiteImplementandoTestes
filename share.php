<?php include_once("connect.php");

?>
<!DOCTYPE html>

<html>

<title>Promoção! Ganhe R$50,00 preenchendo o formulário.</title>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootsnip.css">
  <link rel="shortcut icon" href="imgs/favicon1.ico" />
  <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <header id="cabecalho"></header>
  <script data-ad-client="ca-pub-9663448972519581" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body onload="share()">
<div class="container-fluid bg-info">
<iframe src="//rcm-na.amazon-adsystem.com/e/cm?o=1&p=11&l=ez&f=ifr&linkID=c6836e0502c77cb210ab50ce28311fa4&t=7770b5d-20&tracking_id=7770b5d-20" width="120" height="600" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h3><span class="label label-warning" id="-"></span>Preencha o formulário e receba R$50,00</h3>
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

          <div id='ModalWhats' class="modal" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Quase lá!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p><a>        Para concluir, aguarde </a><a id='regressiva'></a><a> segundos e compartilhe esta promoção com 3 contatos na página que será aberta automaticamente.
                      </a>
                    </p>
                    <br>
                    <p>As instruções para sacar seu prêmio serão enviadas em seu e-mail!</p>
                    <p id="popup">Caso nenhuma tela abra, confira se o seu navegador não bloqueou o pop up.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary"data-dismiss="modal" aria-label="Close" >
                      Corrigir Informações
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

          
          <div class="quiz" id="quiz" data-toggle="buttons">
               
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" >Nome</span>
              </div>
              <input type="text" name="nome" class="form-control" placeholder="Luís Inácio" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">E-mail</span>
              </div>
              <input type="text" name="email" class="form-control" placeholder="exemplo@gmail.com" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Data de nascimento</span>
              </div>
              <div class="col-15">
                <input type="date" name="nascimento" class="form-control">
              </div>
            </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Sexo</label>
                </div>
                <div class="col-5"> 
                <select name="sexo" class="custom-select" id="inputGroupSelect01">
                  <option selected>Selecione...</option>
                  <option value="1">Masculino</option>
                  <option value="2">Feminino</option>
                  <option value="3">Outro</option>
                </select>
                </div>
              </div>        
          </div>
          <button type="submit" class="btn btn-primary btn-lg" id="Enviar1" value="Enviar1">Enviar</button>
           
          
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

<footer class="footer navbar-fixed-bottom">
<img id="Certificado" src="imgs/siteseguro.png" alt="Certificado de segurança"></img>
</footer>
</html>