<?php
namespace frontend\controllers;
use frontend\models\sakila\FilmCategory;
use frontend\models\sakila\Films;
use yii\data\Pagination;

class DataController extends AppController{

    public function actionShow(){
        $a = [1,2,2,3,4,5,6,7];
        // return $this->showDump($a);

         // $a = Films::find()->all(); // work
         // $a = Films::find()->with('film3')->all(); // work

        $a = Films::getFilmData();

        // $a = FilmCategory::find()->all();

        // для каждого контроллера должен быть и каталог вида
        // т.е. для контроллера Data должна быть директория views/data и там файл index.php
        // для обращения к виду другого когтроллера надо использовать формат пути
        //    "//[имя_контроллера]/[имя_вида]"
        return $this->render('//site/index', compact('a'));
    }

    public function actionPages(){
        $p = Films::getFilmDataPage();
        $countQuery = clone $p;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);

        $a = $p->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('//site/index', compact('a'));
    }


    public function actionShow1(){

        $a = Films::find()
            ->joinWith(['film2' => function($q){
                $q->onCondition(['film.id' => 'film_id']);
            }])
            ->joinWith(['category' => function($q1){$q1->onCondition(['category.id' => 'film_category.category_id']);}])
            // ->orWhere(['=', AdData_goodsCars::tableName().'.idTypeGoods', 1])
            // ->orWhere(['=', AdData_goodsDetail::tableName().'.idTypeGoods', 1])
            // ->andWhere(['idCategory' => AdData_goodsCars::ID_MAIN, ])
            // ->andWhere(['<', 'state', ListAd::STATE_ARHIV]);
            ->all();
            return $this->render('//site/index', compact('a'));

/*
        joinWith([
            'orders' => function ($query) {
                $query->onCondition(['order.status' => Order::STATUS_ACTIVE]);
            },
        ])

        SELECT f.id AS filmId
  , f.title
  , c.name
  , fc.last_update
  FROM film f
  INNER JOIN film_category fc ON f.id = fc.film_id
  INNER JOIN category c ON fc.category_id = c.id
*/
    }
}