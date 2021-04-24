<?php 
    require_once 'conn.php';
    $params = [
        [
            'type' => 'date',
            'name' => 'date',
            'placeholder' => ''
        ],
        [
            'type' => 'text',
            'name' => 'veiculo',
            'placeholder' => 'Placa do carro'
        ],
        [
            'type' => 'text',
            'name' => 'motorista',
            'placeholder' => 'motorista'
        ],

    ];

    $form = new form;
    $bancoDedados = new bancoDedados;
    class form {
        function formulario() {      
            echo '
                <input type="text" name="nome">
                <input type="text" name="fone">
                <input type="submit">
                    
            ';
        }
    }

    class bancoDedados {
        function cronograma(){
            $sql="SELECT * FROM cronograma ";
            $sqlQuery= mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($sqlQuery);

        }
    }

/*
$generate = new generate;


$variavel = "ola mundo";
$meuObjeto = new meuObjeto;

class meuObjeto {
    function funcao ($obj) {
        echo $this->soma($soma);
        print $obj;
    }
    function soma ($soma) {
        $soma = 1+2;
        print $soma;
    }
}




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
*/
?>
