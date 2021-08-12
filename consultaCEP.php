<?php 
$CEP = (isset($_GET['CEP']) and !empty($_GET['CEP']))?$_GET['CEP']:'12236380';
$ch = curl_init('viacep.com.br/ws/'.$CEP.'/json/');    
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");   
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(     
            'Content-Type: application/json',         
            'Content-Length: ' . strlen($data_string))  
        );                                            
        $result = curl_exec($ch);
        echo $result;

?>