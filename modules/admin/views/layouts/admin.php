<?php


use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody()?>
    <div class="wrap">
        <div class="container">

            <ul class="nav nav-pills">
                <li role="presentation" class="active"><?= Html::a('Главная','/site/') ?></li>
                <li role="presentation"><?= Html::a('Каталог','/page/catalog/') ?></li>
                <li role="presentation"><?= Html::a('gii','/gii/') ?></li>
                <li role="presentation"><a href="#">Login</a></li>
                <li role="presentation"><?= Html::a('categories','/admin/categories/') ?></li>
                <li role="presentation"><?= Html::a('cars','/admin/cars/') ?></li>
            </ul>
            <?= $content ?>
        </div>
    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>