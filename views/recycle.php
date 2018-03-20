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
    Меню каталог навигация

</div>



<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 catalog">
    <div class="row content">
        <?php if (!empty($modelcar)): ?>
            <?php foreach ($modelcar as $modelcar): ?>


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 view_list">
                    <div class="product">
                        <a href="#" class="product_img">
                            <?= Html::img("@web/images/{$modelcar->img}", ['alt' => $modelcar->name]) ?>
                        </a>
                        <div class="desc">
                            <a href="#" class="product_title"><?= $modelcar->name ?></a>
                            <div class="product_price">
                                <span class="price"><?= $modelcar->price ?> тыс.$</span>

                            </div>
                            <div class="desc_prod">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td>Объем, л</td>
                                        <td>40</td>
                                    </tr>
                                    <td>Вес, кг</td>
                                    <td>1,2</td>
                                    </tr>
                                    <td>Длина, м</td>
                                    <td>4,2</td>
                                </table>
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
        <?php endif; ?>
    </div>
</div>