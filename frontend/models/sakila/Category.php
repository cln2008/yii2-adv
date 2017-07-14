<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.07.2017
 * Time: 11:59
 */

namespace frontend\models\sakila;
use yii\db\ActiveRecord;


class Category extends ActiveRecord{

    public static function tableName(){
        return "Category";
    }

}