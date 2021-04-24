<?php
    
   require_once 'conn.php';


    
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

  //fazer consulta de viagem +1 
  
  
  $date= $_POST['date'];    
  $veiculo= $_POST['veiculo'];
  $motorista= $_POST['motorista'];
  $nota_fiscal= $_POST['nota_fiscal'];
  $valor_da_nota= $_POST['valor_da_nota'];
  $destino= $_POST['destino'];
  $semana = $data_sema;
  $viagem = 1;

  
  $buscaViagem = "SELECT * FROM cronograma";
  $sql = mysqli_query ($conn, $buscaViagem);
  $viagem = mysqli_fetch_assoc($sql);

  if (isset($viagem['veiculo'])){
    $viagem =  +1;
  }

  $sqlRegistro = "INSERT INTO cronograma ( date, veiculo, motorista, nota_fiscal, valor_da_nota, destino, semana, viagem, calendario_mes,  calendario_ano ) 
  VALUE ('$date', '$veiculo', '$motorista', '$nota_fiscal', '$valor_da_nota', '$destino' , '$semana', '$viagem', '$calendario_mes',  '$calendario_ano')";
  $sqlQueri = mysqli_query($conn, $sqlRegistro);

  if (mysqli_affected_rows($conn) != 0) {
      echo "
          <script type=\"text/javascript\">
              alert(\"REGISTRADO  COM SUCESSO.\");
          </script>

      ";
      header('Location: index.php');	
  } else {
      echo "
          <script type=\"text/javascript\">
              alert(\"Erro ao cadastrar.\");
          </script>
      ";
      header('Location: index.php');	
  }