<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<h1>This testpage.php (model)</h1>

<?php if(Yii::$app->session->hasFlash('success')): //если имеется такое сообщение, то выводим сообщение  ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif; ?>

<?php if(Yii::$app->session->hasFlash('error')): //если имеется такое сообщение, то выводим сообщение  ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error'); ?>
    </div>
<?php endif; ?>


<?php $form = ActiveForm::begin(['options'=>['id' =>'testForm']])?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'email')->input('email')?>
<?= $form->field($model, 'text')->label('Текст сообщения')->textarea(['rows'=>6])?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end()?>