<?php

namespace Client\ClientBundle;

class ClientHandler{

    private $config = array();

    function configure($server_url){
        if(substr($server_url, -1) !== '/'){
            $server_url = $server_url . '/';
        }

        $this->config['server_url'] = $server_url;
    }

    function get($x){

        $client  = new \jsonRPCClient($this->config['server_url'] . $x);
        return $client;
    }
        

}
