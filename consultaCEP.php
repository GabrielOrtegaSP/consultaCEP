<?php 
$CEP = (isset($_GET['CEP']) and !empty($_GET['CEP']))?$_GET['CEP']:'12236380';
$ch = curl_init('viacep.com.br/ws/'.$CEP.'/json/');    
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");   
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(     
            'Content-Type: application/json'
        );                                            
$result = curl_exec($ch);
$arrayCEP = json_decode($result);
$print_r($arrayCEP);
?>
