<?php


    function criar_cronograma () {
        print ' 
            <form method="POST" action="a.php">
            <input type="date" name="date"  placeholder="">
            <input type="text" name="veiculo"  placeholder="Placa do carro">
            <input type="text" name="motorista"  placeholder="Motorista">
            <input type="text" name="nota_fiscal"  placeholder="N° da nota fiscal">
            <input type="text" name="valor_da_nota" onkeydown="FormataMoeda(this,10,event)"  id="" placeholder="R$: Valor da nota">
            <input type="text" name="destino"  placeholder="Destino">
            <input type="text" name="valor_previsto" onkeydown="FormataMoeda(this,10,event)"  id="" placeholder="R$:Valor Previsto">
            <input type="submit" value="Criar" class="btn btn-primary">
            </form> 
        ';    
    };