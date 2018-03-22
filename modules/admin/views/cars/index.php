<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cars', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            //'category',
            [
              'attribute' =>'category',
              'value' => function($data) {
                return $data->categories->name;
              }
            ],
            'name',
            //'parent',
            'price',
            'motor',
            //'color',
            [
                'attribute' =>'color',
                'value' => function($data) {
                    return $data->color ? '<span class="text-danger">Red</span>' : '<span class="text-success">Green</span>';
                },
                'format' => 'html',
            ],
            'img',
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
