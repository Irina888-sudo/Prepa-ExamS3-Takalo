<?php

namespace app\controllers;

use flight\Engine;
use app\repositories\ObjectExchangeRepository;

class ObjectExchangeController
{
    protected Engine $app;
    protected ObjectExchangeRepository $objectExchangeRepository;

    public function __construct(Engine $app, ObjectExchangeRepository $objectExchangeRepository){
        $this->app = $app;
        $this->objectExchangeRepository = $objectExchangeRepository;
    }

    public function showAllObj(){
        $objectsExchange = $this->objectExchangeRepository->findAllObj();

        $this->app->render('model.php', [
            'objectsExchange' => $objectsExchange,
            'errors'  => [],
            'page' => 'list-objets.php'
        ]);
    }
   
}
