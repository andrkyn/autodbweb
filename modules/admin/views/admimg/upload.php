<?php

use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'image')->fileInput() ?>

    <button>Отправить</button>

<?php ActiveForm::end() ?>

<?php if($model->image): ?>

    <img src="/uploads/<?= $model->image ?>" alt="">

<?php endif; ?>
