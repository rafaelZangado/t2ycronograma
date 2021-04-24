<?php
    ini_set('display_errors', 'off');
    require_once 'conn.php';
   
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
            'jan',
            'fer',
            'mar',
            'abril',
            'mai',
            'jun',
            'jul',
            'agos',
            'out',
            'nov',
            'dez'
        ]            
    ];

    $total=0;
    $date = $_GET['date'];    
    $veiculo = $_GET['veiculo'];
    $motorista = $_GET['motorista']; 
    //$semana = $_GET['semana'];    

    $sqlBuscar="SELECT * FROM cronograma WHERE date = '$date' || veiculo = '$veiculo' || motorista = '$motorista'";
    $sqlquery= mysqli_query($conn, $sqlBuscar);
   // $result = mysqli_fetch_assoc($sqlQuery);

    
    class generate {
       
        function gridform($array) {
            if ($array) {
                foreach ($array as $input) {
                    echo $this->input($input);
                }
            }
        }

        function input($inputArray) {
            return '<input type="'.$inputArray['type'].'" name="'.$inputArray['name'].'"  placeholder="'.$inputArray['placeholder'].'">';
        }
    }
?>

<form method="GET" action="index.php">   
    <?php
        require 'buscaPeloTotal.form.php';
        $generate->gridform($params);
    ?>
  <!-- 
    <select name="mes" id="cars"> 
        <?php   
            foreach ( $calendario['mes'] as $chave => $valor) {
                echo "<option value='$valor'>$valor</option>";
            }
        ?>
    </select>      

    <select name="semana" id="cars">
        <?php
            foreach ( $calendario['diaSemana'] as $chave => $valor) {
                echo "<option value='$valor'>$valor</option>";
            }
        ?>
    </select>   
    -->
    <input type="submit" value="Bsucar" class="btn btn-primary">
</form>
