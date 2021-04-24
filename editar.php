<?php
  require_once 'conn.php';
  $idCronograma = filter_input (INPUT_GET, 'idCronograma', FILTER_SANITIZE_NUMBER_INT);
  $sqlEditar = "SELECT * FROM cronograma WHERE idCronograma = '$idCronograma'";
  $sql_query = mysqli_query ($conn, $sqlEditar);
  $dados = mysqli_fetch_assoc($sql_query);

 
    
  $_POST['date'].'<br>';
  $data = date('D', strtotime($_POST['date']));  
  $calendario_ano = date('Y', strtotime($_POST['date']));
  $calendario_mes = date('m', strtotime($_POST['date']));
  
  if ($data == 'Sun') {
        $data_sema='Domingo'; 
  }
  if ($data == 'Mon') {
      $data_sema='Segunda'; 
  }

  if ($data == 'Tue') {
    $data_sema='Terça'; 
  }

  if ($data == 'Wed') {
    $data_sema='Quarta'; 
  }

  if ($data == 'Thu') {
    $data_sema='Quinta'; 
  }

  if ($data == 'Fri') {
    $data_sema='Sexta'; 
  }
  if ($data == 'Sat') {
      $data_sema='Sabado'; 
  }

        
    $date= $_POST['date'];    
    $veiculo= $_POST['veiculo'];
    $motorista= $_POST['motorista'];
    $nota_fiscal= $_POST['nota_fiscal'];
    $valor_da_nota= $_POST['valor_da_nota'];
    $destino= $_POST['destino'];
    $semana = $data_sema;

    $sqlRegistro = "UPDATE cronograma 
    SET  date='$date' , veiculo='$veiculo', motorista='$motorista', nota_fiscal='$nota_fiscal', valor_da_nota='$valor_da_nota', destino='$destino', semana='$semana', calendario_mes='$calendario_mes', calendario_ano='$calendario_ano', modified=NOW() WHERE idCronograma='$idCronograma'";
    $sqlQueri = mysqli_query($conn, $sqlRegistro);

    if(mysqli_affected_rows($sqlQueri)){
        header('Location: index.php');	
    } else {
        header('Location: editar.php');	

    }


?>


<form method="POST" action="editar.php">
    <label>Data: </label>
    <input type="date" name="date" valeu="<?php echo $dados['date'];?>" placeholder="<?php echo $dados['date'];?>" >
    
    <label>veiculo: </label>
    <input type="text" name="veiculo" valeu="<?php echo $dados['veiculo'];?>" placeholder="<?php echo $dados['veiculo'];?>" >
    <label>motorista: </label>
    <input type="text" name="motorista" valeu="<?php echo $dados['motorista'];?>" placeholder="<?php echo $dados['motorista'];?>" >
    <label>Nota fiscal: </label>
    <input type="text" name="nota_fiscal" valeu="<?php echo $dados['nota_fiscal'];?>" placeholder="<?php echo $dados['nota_fiscal'];?>" >
    <label>destino: </label>
    <input type="text" name="destino" valeu="<?php echo $dados['destino'];?>" placeholder="<?php echo $dados['destino'];?>" >
    
    <label>valor da nota: </label>
    <input type="text" name="valor_da_nota" valeu="<?php echo $dados['valor_da_nota'];?>" placeholder="<?php echo $dados['valor_da_nota'];?>" >
  
    <input type="submit" value="Bsucar" class="btn btn-primary">
 
</form> 
