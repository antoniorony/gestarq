<?php session_start();
ini_set('display_errors', 0 );
error_reporting(0);
?>
<?php if (!$_SESSION['login']) {
            // echo "<script>alert('Não Posui Permissão!');</script>";
             echo '<script> window.location.href = "index.php";</script>';

} ?>
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
            <a name="" id="" class="btn btn-primary" href="destSession.php" role="button">Sair</a>
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
                                EMPRESAS
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
                                    $sql_a = 'select*from pasta';
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
        <i class="fa fa-align-center" aria-hidden="true"><a href="http://tecinova.tech/" class="badge badge-primary">Antonio Rony - tecinova © 2019</a></i><i class = "fa fa-align-center"> Uma Homenagem a J.A.M. (João, Mayara, Avyla)</i>
        
    </footer>
    <script src="js/jsp.js"></script>
</body>

</html>