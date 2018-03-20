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


<!--<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 catalog"> -->
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">


    <div class="short_description">
        <?= Html::img("@web/images/{$catt->img}", ['alt' => $catt->name]) ?>
        <div>
            <h2><?php echo $catt['name'];?></h2>
            <p><?php echo $catt['description'];?></p>
        </div>
    </div>
    <div class="row content">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header_list_prod">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h2>Logo</h2>
            </div>

        </div>
    </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 sortirovka_and_number_prod">
                    <form action="#">
                        <p><strong>Сортировка по:</strong>
                            <select name="sortirovka_prod">
                                <option selected="selected">--</option>
                                <option value="0">Цене, по возрастанию</option>
                                <option value="1">Цене, по убыванию</option>
                                <option value="2">Названию товара, от А до Я</option>
                                <option value="3">Названию товара, от Я до А</option>
                            </select>
                        </p>
                        <p><strong>Показать:</strong>
                            <select name="number_prod_str">
                                <option selected="selected">12</option>
                                <option value="0">24</option>
                                <option value="1">48</option>
                            </select>
                        </p>
                        <button type="submit">Go</button>
                    </form>
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
        <?php else: ?>
            <h2>Автомобилей данной марки нет....</h2>
        <?php endif; ?>
    </div>
</div>