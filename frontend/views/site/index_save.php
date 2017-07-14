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

        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['data/show']) ?>">Получить данные</a></p>
        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['data/pages']) ?>">Получить данные PAGES</a></p>


    </div>

    <div class="container">
        <div class="row">

            <?php if(isset($a)): ?>
                <table class="table table-striped">
                    <tr>
                        <th>Film ID</th>
                        <th>Film Titile</th>
                        <th>Category</th>
                        <th>Last Update</th>
                    </tr>
                    <?php foreach($a as $film): ?>
                        <tr>
                            <td><?= $film['filmId'] ?></td>
                            <td><?= $film['title'] ?></td>
                            <td><?= $film['name'] ?></td>
                            <td><?= $film['last_update'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <?php
                // display pagination
                echo \yii\widgets\LinkPager::widget([
                    'pagination' => $a,
                ]);
                ?>
            <?php endif; ?>

            <?php
            /*
                          if(isset($a)) {
                              funcShowDump($a);
                              // echo count($a->film2);
                              // funcShowDump($a);
                              foreach($a as $film){
                                  echo "<p>" .$film->id ." | " . $film->title . " | " . $film->film3[0]->name . " | " . $film->film3[0]->last_update . "</p>";
                              }
                          }
            */
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
