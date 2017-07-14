<?php


namespace frontend\models\sakila;
use yii\db\ActiveRecord;


class FilmCategory extends ActiveRecord{

    public static function tableName(){
        return 'film_category';
    }

    public function getFilm(){
        return $this->hasOne(Films::className(), ['film_id' => 'film_id']);
    }

}