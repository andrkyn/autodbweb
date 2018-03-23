<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

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
            //'img',
            [
                'attribute'=>'img',
                'format' => 'html',
                //'value' =>Html::img("@web/images/{$model->img}", ['alt' => $model->name]),
                'value'=> function($data){
                    return Html::img('/../../../images/' . $data['img'], ['width' => '100px', 'height' => '80px']);
                //function($data) {
                    //return Html::img(Yii::getAlias('@web').'/images/'. $data['img'], ['width' => '70px']);
                },
            ],
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?php // $form->field($model, 'file')->fileInput() ?>
<!--<button>Отправить</button>-->
<?php ActiveForm::end() ?>



