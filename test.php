<?php

 require 'vendor/json-rpc-php/jsonRPCClient.php';

  $client  = new jsonRPCClient('http://servpro/app_dev.php/server/thumbnail');
    try {
             var_dump($client->getName()); 
    }catch(Exception $e) {
        echo$e->getMessage(); 
    }



