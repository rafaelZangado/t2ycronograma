<?php
    $USER="localhost";
    $ROOT="root";
    $SENHA="";
    $BANCO="test";

    $conn= new mysqli($USER, $ROOT, $SENHA, $BANCO);
    if($conn->connect_error)
    die('FALHA'.$conn->connect_error);
    else echo('');