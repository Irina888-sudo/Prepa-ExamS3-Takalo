<?php

namespace app\controllers;

use flight\Engine;
use app\models\InfoRide;

class InfoRideController
{
    protected Engine $app;
    protected InfoRide $infoRide;

    public function __construct(Engine $app){
        $this->app = $app;
        $this->infoRide = new InfoRide();
    }

    public function showFormRide(){
        $drivers = $this->infoRide->getAllDrivers();
        $motos   = $this->infoRide->getAllMotos();

        $this->app->render('model.php', [
            'drivers' => $drivers,
            'motos'   => $motos,
            'errors'  => [],
            'page' => 'Form-ride.php'
        ]);
    }
   
}
