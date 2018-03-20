<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 16.03.18
 * Time: 15:15
 */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Каталог автомобилей';
?>


<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 left_banner_menu">
    Меню поиска

</div>


<!--<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 catalog"> -->
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">


       <div class="row content">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header_list_prod">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <h3>Поисковый запрос: <?= $srch ?></h3>

                </div>

            </div>
        </div>


        <?php //var_dump($catt['name'])?>


        <?php if (!empty($modelcar)): ?>
            <?php foreach ($modelcar as $modelcar): ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 view_list">
                    <div class="product">
                        <a href="<?= Url::to(['page/car', 'id' =>$modelcar->id])?>" class="product_img">
                            <?= Html::img("@web/images/{$modelcar->img}", ['alt' => $modelcar->name]) ?>
                        </a>
                        <div class="desc">
                            <a href="" class="product_title"><?= $modelcar->name ?></a>
                            <div class="product_price">
                                <span class="price"><?= $modelcar->price ?> тыс.$</span>

                            </div>

                            <div class="product_btn">
                                <a href="#" class="cart"><i
                                        class="glyphicon glyphicon-shopping-cart"></i>btn</a>
                                <a href="#"
                                   class="mylist">Список желаний</a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php endforeach; ?>
            <?php else: ?>
            <h2>Ничего не найдено....</h2>
        <?php endif; ?>
    </div>
</div>