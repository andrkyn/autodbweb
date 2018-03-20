<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Show data base';
//print_r(Yii::app()->db->getStats());

?>

<!-- Tets code [-->
<!-- ] END test code -->

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 catalog">
    <div class="row content">

        <h1>show autoDB</h1>

        <?php //foreach ($cats as $cat)
            {
            //echo $cat->name . '<br>'; // вывод имени категорий
            }
        ?>

        <?php //echo '<pre>';
              //print_r($cats);
              //echo '</pre>';
              //echo var_dump($cats) ?>

        <?php //echo count($cats->modelcars); //отложенная загрузка ?>
        <?php //echo count($cats[0]->modelcars); //жадная загрузка массив?>
        <?php //echo '<pre>';
              //print_r($cats);
              //echo '</pre>';
              //echo var_dump($cats) ?>

        <?php
            foreach ($cats as $cat) {
                echo '<ul>';
                    echo '<li>' . $cat->name . '</li>';
                    $modelcars = $cat->modelcars;
                    foreach ($modelcars as $product) {
                        echo '<ul>';
                            echo '<li>' . $product->name . '</li>';
                        echo '</ul>';
                    }
                echo '</ul>';
            }
        ?>


    </div>
</div>