<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Автомобиль';
?>

<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 left_banner_menu">
    Меню баннероное
</div>


<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 catalog">
   <div class="row content">
        Всё про автомобиль





       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 view_list">
           <div class="product">
               <a href="#" class="product_img">
                   <span>-10%</span>
                   <img src="images/<?=$car_array['img'];?>">
               </a>
               <div class="desc">
                   <a href="<?=Url::toRoute(['page/car', 'id' => $car_array['id']]);?>" class="product_title"><?=$car_array['name'];?></a>
                   <div class="product_price">
                       <span class="price"><?=$car_array['price'];?> тыс.$</span>
                       <?php if($car_array['price_old'] !=""):?>
                           <span class="price_old"><?=$car_array['price_old'];?> тыс.$</span>
                       <?php endif;?>
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
                       <a href="<?=Url::toRoute(['page/cart', 'id' => $car_array['id']]);?>" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                       <a href="<?=Url::toRoute(['page/listorder', 'id' => $car_array['id']]);?>" class="mylist">Список желаний</a>
                   </div>
               </div>
           </div>
       </div>







   </div>
</div>

