<?php

namespace app\controllers;

use flight\Engine;
use app\repositories\ObjectExchangeRepository;

class ObjectExchangeController
{
    protected Engine $app;
    protected ObjectExchangeRepository $objectExchangeRepository;

    public function __construct(Engine $app){
        $this->app = $app;
        $this->objectExchangeRepository = new ObjectExchangeRepository();
    }

    public function showAllObj(){
        $objectsExchange = $this->objectExchangeRepository->findAllObj();

        $this->app->render('model.php', [
            'objectsExchange' => $objectsExchange,
            'errors'  => [],
            'page' => 'list-objects.php'
        ]);
    }
   
}
