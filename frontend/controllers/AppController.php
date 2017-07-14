<?php
namespace frontend\controllers;
use yii\web\Controller;

class AppController extends Controller {

    public function getDump($data){

        return print_r($data, true);
    }

    public function showDump($data){

        echo "<pre>" . print_r($data, true) . "</pre>";
    }

}