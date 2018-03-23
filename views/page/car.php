<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Автомобиль';
?>


<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 left_banner_menu">
    <h3>описние марки</h3>

</div>


<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="short_description">
        <img src="/images/<?php echo $product->categories['img'];?>">
        <div>
            <h2><?php echo $product['name']; ?></h2>
            <p><?php //echo $product['description']; ?></p>
        </div>
    </div>

    <div class="row content">
        <a href="<?= Url::to(['category/view', 'id'=>$product->categories->id])?>" class="product_title"><?= $product->categories->name ?></a>-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 view_list">
            <div class="product">
                <?php //debug($product) ?>
                <?php //debug($product->categories) ?>

                <?= Html::img("@web/images/{$product->img}", ['alt' => $product->name]) ?>
                <div class="desc">
                    <!--<a href="" class="product_title"><?= $product->name ?></a>-->
                    <div class="product_price">
                        <span class="price"><?= $product->price ?> тыс.$</span>

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


    </div>
</div>
