<?php

namespace App\ServerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class InitServerCommand extends Command{

    protected function configure(){
        parent::configure();

        $this
            ->setName("server:init")
            ;
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        require_once __DIR__ . '/../../../vendor/json-rpc-php/jsonRPCServer.php';
        

        

    }
}
