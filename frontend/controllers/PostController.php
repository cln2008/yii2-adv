<?php

namespace frontend\controllers;

use Yii;
use frontend\models\sakila\Films;
use frontend\models\sakila\FilmsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class PostController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = "POST PAGE";
        return $this->render('index');
    }
}