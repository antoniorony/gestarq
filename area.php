<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GESTARQ - TECINOVA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cssp.css">
    <!---<link rel="stylesheet" href="css/style.css">-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.quicksearch.js"></script>
    <?PHP include 'conexao.php';  ?>
</head>
<body>
    <div class="container">
        <div class="">
            <img src="img/tecinova definitivo 2.png" class="logo" alt="" srcset="">
            <span class="direita"><h1 class="linha">GESTARQ </h1><p class="linha">- gestão de arquivos</p></span>
        </div>
        <div>
            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="" class="sr-only">Pesquisar</label>
                    <input type="text" class="form-control" name="busca" id="txt_consulta"  placeholder="Pesquisar">
                </div>
                <button type="submit" class="btn btn-primary mb-2">BUSCAR</button>
            </form>
        </div>
        <div>
                <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button  class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                EMPRESAS A
                              </button>
                            </h5>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              <table id="tabela" class="table table-hover">
                                <thead>
                                  <tr>
                                    <td>
                                      NOME 
                                    </td>
                                    <td>
                                      LETRA
                                    </td>
                                    <td>
                                      NUMERO
                                    </td>
                                  </tr>
                                </thead>
                                  <?php 
                                    $sql_a = 'select*from pasta where letra = "A"';
                                    $query = $mysqli->query($sql_a);
                                    if ($query) {
                                      while ($row = $query->fetch_assoc()) {
                                  
                                   ?>                                
                                <tr>
                                  <td>
                                  <a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['nome']; ?></a>
                                  </td>
                                  <td>
                                    <?php echo $row['letra']; ?>
                                  </td>
                                  <td>
                                    <?php echo $row['numero']; ?>
                                  </td></a>
                                </tr>
                                      <?php  } } ?>
                              </table>                         
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                EMPRESAS B
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                            <table id="tabela" class="table table-hover">
                                <thead>
                                  <tr>
                                    <td>
                                      NOME 
                                    </td>
                                    <td>
                                      LETRA
                                    </td>
                                    <td>
                                      NUMERO
                                    </td>
                                  </tr>
                                </thead>
                                  <?php 
                                    $sql_a = 'select*from pasta where letra = "B"';
                                    $query = $mysqli->query($sql_a);
                                    if ($query) {
                                      while ($row = $query->fetch_assoc()) {
                                  
                                   ?>                                
                                <tr>
                                  <td>
                                  <a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['nome']; ?></a>
                                  </td>
                                  <td>
                                    <?php echo $row['letra']; ?>
                                  </td>
                                  <td>
                                    <?php echo $row['numero']; ?>
                                  </td></a>
                                </tr>
                                      <?php  } } ?>
                              </table> 
                          </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                EMPRESAS C
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                            <table id="tabela" class="table table-hover">
                                <thead>
                                  <tr>
                                    <td>
                                      NOME 
                                    </td>
                                    <td>
                                      LETRA
                                    </td>
                                    <td>
                                      NUMERO
                                    </td>
                                  </tr>
                                </thead>
                                  <?php 
                                    $sql_a = 'select*from pasta where letra = "C"';
                                    $query = $mysqli->query($sql_a);
                                    if ($query) {
                                      while ($row = $query->fetch_assoc()) {
                                  
                                   ?>                                
                                <tr>
                                  <td>
                                  <a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['nome']; ?></a>
                                  </td>
                                  <td>
                                    <?php echo $row['letra']; ?>
                                  </td>
                                  <td>
                                    <?php echo $row['numero']; ?>
                                  </td></a>
                                </tr>
                                      <?php  } } ?>
                              </table>                             </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                EMPRESAS D
                              </button>
                            </h5>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                            <table id="tabela" class="table table-hover">
                                <thead>
                                  <tr>
                                    <td>
                                      NOME 
                                    </td>
                                    <td>
                                      LETRA
                                    </td>
                                    <td>
                                      NUMERO
                                    </td>
                                  </tr>
                                </thead>
                                  <?php 
                                    $sql_a = 'select*from pasta where letra = "D"';
                                    $query = $mysqli->query($sql_a);
                                    if ($query) {
                                      while ($row = $query->fetch_assoc()) {
                                  
                                   ?>                                
                                <tr>
                                  <td>
                                  <a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['nome']; ?></a>
                                  </td>
                                  <td>
                                    <?php echo $row['letra']; ?>
                                  </td>
                                  <td>
                                    <?php echo $row['numero']; ?>
                                  </td></a>
                                </tr>
                                      <?php  } } ?>
                              </table>                             
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                EMPRESAS E
                              </button>
                            </h5>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                            <table id="tabela" class="table table-hover">
                                <thead>
                                  <tr>
                                    <td>
                                      NOME 
                                    </td>
                                    <td>
                                      LETRA
                                    </td>
                                    <td>
                                      NUMERO
                                    </td>
                                  </tr>
                                </thead>
                                  <?php 
                                    $sql_a = 'select*from pasta where letra = "D"';
                                    $query = $mysqli->query($sql_a);
                                    if ($query) {
                                      while ($row = $query->fetch_assoc()) {
                                  
                                   ?>                                
                                <tr>
                                  <td>
                                  <a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['nome']; ?></a>
                                  </td>
                                  <td>
                                    <?php echo $row['letra']; ?>
                                  </td>
                                  <td>
                                    <?php echo $row['numero']; ?>
                                  </td></a>
                                </tr>
                                      <?php  } } ?>
                              </table>                             
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                EMPRESAS F
                              </button>
                            </h5>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                            <table id="tabela" class="table table-hover">
                                <thead>
                                  <tr>
                                    <td>
                                      NOME 
                                    </td>
                                    <td>
                                      LETRA
                                    </td>
                                    <td>
                                      NUMERO
                                    </td>
                                  </tr>
                                </thead>
                                  <?php 
                                    $sql_a = 'select*from pasta where letra = "D"';
                                    $query = $mysqli->query($sql_a);
                                    if ($query) {
                                      while ($row = $query->fetch_assoc()) {
                                  
                                   ?>                                
                                <tr>
                                  <td>
                                  <a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['nome']; ?></a>
                                  </td>
                                  <td>
                                    <?php echo $row['letra']; ?>
                                  </td>
                                  <td>
                                    <?php echo $row['numero']; ?>
                                  </td></a>
                                </tr>
                                      <?php  } } ?>
                              </table>                             
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                EMPRESAS G
                              </button>
                            </h5>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                            <table id="tabela" class="table table-hover">
                                <thead>
                                  <tr>
                                    <td>
                                      NOME 
                                    </td>
                                    <td>
                                      LETRA
                                    </td>
                                    <td>
                                      NUMERO
                                    </td>
                                  </tr>
                                </thead>
                                  <?php 
                                    $sql_a = 'select*from pasta where letra = "D"';
                                    $query = $mysqli->query($sql_a);
                                    if ($query) {
                                      while ($row = $query->fetch_assoc()) {
                                  
                                   ?>                                
                                <tr>
                                  <td>
                                  <a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['nome']; ?></a>
                                  </td>
                                  <td>
                                    <?php echo $row['letra']; ?>
                                  </td>
                                  <td>
                                    <?php echo $row['numero']; ?>
                                  </td></a>
                                </tr>
                                      <?php  } } ?>
                              </table>                             
                            </div>
                          </div>
                        </div>
          </div>
        </div>
    </div>
    <footer class="container">
        <i class="fa fa-align-center" aria-hidden="true"><a href="http://tecinova.tech/" class="badge badge-primary">Antonio Rony - tecinova © 2019</a></i>
        
    </footer>
    <script src="js/jsp.js"></script>
</body>

</html>