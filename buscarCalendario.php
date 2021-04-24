<?php
    require_once 'conn.php';
    require_once 'criar_cronograma.php'; 

    $calendario = [
        'diaSemana' => [
          'segunda',
          'terca',
          'quarta',
          'quinta',
          'sexta',
          'sabado',
        ],
        'mes' => [
          '01',
          '02',
          '03',
          '04',
          'mai',
          'jun',
          'jul',
          'agos',
          'out',
          'nov',
          'dez'
        ],  
        'ano' => [
          '2021',
          '2020',
          '2019', 
          '2018',
          '2017',
          '2016',
          '2015',
          '2014',
          '2013',
          '2012',
          '2011',
          '2010',
          '...',    
        ],          
    ];
    

    $calendario_mes = $_GET['calendario_mes'];    
    $calendario_ano = $_GET['calendario_ano'];    

    $sqlBuscar = "SELECT * FROM cronograma WHERE calendario_mes = '$calendario_mes' AND calendario_ano = '$calendario_ano' ";
    $ss = mysqli_query ($conn, $sqlBuscar);


?>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>

 <form method="GET" action="index.php">
  
      <select name='calendario_mes' >
        <?php 
          foreach ($calendario['mes'] as $chave => $valor) {
            echo "<option value='$valor'>$valor</option>";                
          }
        ?>
      </select>      
      <select name='calendario_ano' >
        <?php          
          foreach ($calendario['ano'] as $chave => $valor) {
            echo "<option value='$valor'>$valor</option>";
          }
        ?>
      </select>
    <input type="submit" value="Bsucar" class="btn btn-primary">
  </form> 
  
    <hr>
   
