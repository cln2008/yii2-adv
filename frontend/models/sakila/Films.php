<?php


namespace frontend\models\sakila;
use yii\db\ActiveRecord;
use yii\db\Query;


class Films extends ActiveRecord{

    public static function tableName(){
        return 'film';
    }

    public function getFilm2(){
        return $this->hasOne(FilmCategory::className(), ['film_id' => 'id']);
    }

    public function getFilm3(){
        return $this->hasMany(Category::className(), ['id' => 'category_id'])
            ->viaTable('film_category', ['film_id' => 'id']);
    }

    public function getCategory(){
        return Category::find();
    }

    public static function getFilmData(){
        $query = new Query();

        $query->addSelect(['f.id AS filmId', 'f.title', 'c.name', 'fc.last_update'])
            ->from ([self::tableName().' f'])
            ->innerJoin(FilmCategory::tableName().' fc', 'f.id = fc.film_id')
            ->leftJoin(Category::tableName(). ' c', 'fc.category_id = c.id');
            // ->where(['o.id'=>':id'],[':id'=>$id]);
        return $query->all();

        /*

        SELECT f.id AS filmId
  , f.title
  , c.name
  , fc.last_update
  FROM film f
  INNER JOIN film_category fc ON f.id = fc.film_id
  INNER JOIN category c ON fc.category_id = c.id
*/
    }

    public static function getFilmDataPage(){
        $query = new Query();

        $query->addSelect(['f.id AS filmId', 'f.title', 'c.name', 'fc.last_update'])
            ->from ([self::tableName().' f'])
            ->innerJoin(FilmCategory::tableName().' fc', 'f.id = fc.film_id')
            ->innerJoin(Category::tableName(). ' c', 'fc.category_id = c.id');
        return $query;

    }


}