<?php 
    header('Content-Type: text/html; charset=utf-8');
    include 'connection/crudClass.php';
    $response = new crudClass();
    $rsp = $response->selectFunction(); 
?>