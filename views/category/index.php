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
        <?php if (!empty($categorys)): ?>
            <?php foreach ($categorys as $category): ?>
                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12 catalog_category">
                    <!--<a href="#"><img src="/images/<?php //$category['img']; ?>"></a> -->
                    <?= Html::img("@web/images/{$category->img}", ['alt'=>$category->name]) ?>
                       <a href="<?= Url::to(['category/view', 'id'=>$category->id]) ?>" class="product_title"><?= $category->name ?></a>
               </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>




