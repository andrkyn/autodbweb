<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
//use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Cars */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category',
            'name',
            'parent',
            'price',
            'motor',
            'color',
            //'img',
            [
                'attribute'=>'img',
                'format' => 'html',
                //'value' =>Html::img("@web/images/{$model->img}", ['alt' => $model->name]),
                'value'=> function($data){
                    return Html::img('/../../../images/' . $data['img']);

                //function($data) {
                    //return Html::img(Yii::getAlias('@web').'/images/'. $data['img'], ['width' => '70px']);
                },
            ],
            'description:ntext',
        ],
    ]) ?>
</div>
