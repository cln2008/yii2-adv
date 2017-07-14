<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>
        <h2>SITE/INDEX</h2>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['data/show1']) ?>">Получить данные</a></p>
        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['data/pages']) ?>">Получить данные PAGES</a></p>


    </div>

    <div class="container">
        <div class="row">

            <?php
              if(isset($a)) {
                  funcShowDump($a);
                  // echo count($a->film2);
                  // funcShowDump($a);
                  // foreach($a as $film){
                  //     echo "<p>" .$film->id ." | " . $film->title . " | " . $film->film3[0]->name . " | " . $film->film3[0]->last_update . "</p>";
                  // }
              }
            ?>


        </div>
    </div>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading 1</h2>
            </div>
            <div class="col-lg-4">
                <h2>Heading 2</h2>
            </div>
            <div class="col-lg-4">
                <h2>Heading 3</h2>
            </div>
        </div>

    </div>
</div>
