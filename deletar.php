<?php 
    require_once 'conn.php';
    
    if ()
    $sqlDelet = "DELETE FROM cronograma  WHERE idCronograma = '".$_GET['idCronograma']."'";
    $sqlQuery= mysqli_query($conn, $sqlDelet);
    header('Location: index.php');

    echo "
           
    <script type=\"text/javascript\">
        alert(\"APAGADO COM SUCESSO..\");
    </script>

";