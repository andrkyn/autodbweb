<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Каталог автомобилей';
?>

  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 left_banner_menu">
    Меню каталог навигация

  </div>


<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 catalog">

    <div class="row content">

      <?php foreach ($category as $category):?>
        <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12 catalog_category">
            <a href="<?=Url::toRoute(['page/listauto', 'id' => $category['id']]);?>"><img src="/images/<?php echo $category['img'];?>"></a>
            <a href="<?=Url::toRoute(['page/listauto', 'id' => $category['id']]);?>"><?php echo $category['name'];?></a>
        </div>
      <?php endforeach;?>
    </div>
</div>

