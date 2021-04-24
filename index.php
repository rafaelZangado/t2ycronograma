<?php
  ini_set('display_errors', 'off');

  require_once 'conn.php';
  require_once 'criar_cronograma.php'; 
 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cronograma</title>
  </head>
  <body>
  
  <?php 
    
    echo '<h3>Buscar pelo calendario :</h3>';
    include 'buscarCalendario.php'; 
    
    echo '<h3>Buscar por caracter :</h3>';
    require_once 'buscaPeloTotal.php';     
  ?>

  <hr>
  <h3>Criar cronograma </h3>
  <?php
    //criar um novo cronograma
    print  criar_cronograma();
  ?>
  <br>
  <hr>
  <table>
      <tr>
          <th>Data</th>
          <th>Veiculo</th>  
          <th>Motorista</th> 
          <th>Nota fiscal</th>
          <th>Destino</th> 
          <th>Valor da Nota R$</th>
          <th>Nº de Viagem</th>
          <th>Ação</th>           
      </tr> 
      <?php                           
          while ($result = mysqli_fetch_assoc ($sqlquery)){  
            ?> 
              <tr>    
              <td><?=$result['date'];?></td>
              <td><?=$result['veiculo'];?></td>
              <td><?=$result['motorista'];?></td>
              <td><?=$result['nota_fiscal'];?></td>
              <td><?=$result['destino'];?></td>
              
              <td><?=$result['valor_da_nota'];?></td>  
              <td><?=$result['numero_da_viagem'];?></td> 
   
              <td>
                <?php print "<a href='editar.php?idCronograma=".$result['idCronograma']." '> Editar.</a>" ?> |
                <?php print "<a href='deletar.php?idCronograma=".$result['idCronograma']." '> Deletar.</a>" ?>
              </td>
            </tr>
          <?php  
        }
      ?>
      <?php                           
          while ($result = mysqli_fetch_assoc ($ss)){  
            ?> 
              <tr>    
              <td><?=$result['date'];?></td>
              <td><?=$result['veiculo'];?></td>
              <td><?=$result['motorista'];?></td>
              <td><?=$result['nota_fiscal'];?></td>
              <td><?=$result['destino'];?></td>
              <td><?=$result['valor_da_nota'];?></td> 
              <td><?=$result['numero_da_viagem'];?></td>

              <td>
              <?php print "<a href='editar.php?idCronograma=".$result['idCronograma']." '> Editar.</a>" ?> |
                <?php print "<a href='deletar.php?idCronograma=".$result['idCronograma']." class='delete' '> Deletar.</a>" ?>
              </td>
            </tr>
          <?php  
        }
      ?>
  </table>


  </body>
</html>
