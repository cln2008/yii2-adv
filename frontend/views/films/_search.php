<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\sakila\FilmsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="films-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'release_year') ?>

    <?= $form->field($model, 'language_id') ?>

    <?php // echo $form->field($model, 'original_language_id') ?>

    <?php // echo $form->field($model, 'rental_duration') ?>

    <?php // echo $form->field($model, 'rental_rate') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'replacement_cost') ?>

    <?php // echo $form->field($model, 'rating') ?>

    <?php // echo $form->field($model, 'special_features') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
