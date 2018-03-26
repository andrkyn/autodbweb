<?php

use yii\widgets\ActiveForm;
//use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'image')->fileInput() ?>

    <button>Отправить</button>

<?php ActiveForm::end() ?>

<?php if($model->image): ?>

    <?=  debug($model->image) ?>
    <!--<img src="/uploads/<?= $model->image ?>" alt="">-->

<?php endif; ?>
<img src="/images/<?= $model->image ?>" >
<!--<img src="/images/uploads/3-0_thumb.jpg" >-->
<!--<img src="/images/prod1.jpg">-->

