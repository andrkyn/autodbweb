<?php

/* @var $this yii\web\View */
// это вид
use yii\helpers\Url;

$this->title = 'Каталог автомобилей';
?>

        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 filter">
            <h3>Фильтры</h3>
            <form>
                <label>Цена / $</label>
                <div class="filter_price">
                    <input type="text" value="0">
                    -
                    <input type="text" value="10000">
                </div>
                <label>Объем / л</label>
                <div class="filter_check">
                    <p><input type="checkbox"/>10</p>
                    <p><input type="checkbox"/>20</p>
                    <p><input type="checkbox"/>30</p>
                </div>

                <button type="submit">Подобрать</button>
            </form>
        </div>

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="short_description">
            <img src="images/<?php echo $categories['img'];?>">
        <div>
            <h2><?php echo $categories['name'];?></h2>
            <p><?php echo $categories['description'];?></p>
        </div>
    </div>
 <div class="row content">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header_list_prod">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h1>Марка авто</h1>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 value_prod">
                <p>В наличии: <?=$count_car; ?></p>
            </div>
        </div>
    </div>

    <?php var_dump($view); ?>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 sortirovka_and_number_prod">
                <form action="#">
                    <p><strong>Сортировка по:</strong>
                        <select name="sortirovka_prod">
                            <option selected="selected">--</option>
                            <option value="0">Цене, по возрастанию</option>
                            <option value="1">Цене, по убыванию</option>
                            <option value="2">Названию товара, от А до Я</option>
                            <option value="3">Названию товара, от Я до А</option>
                        </select>
                    </p>
                    <p><strong>Показать:</strong>
                        <select name="number_prod_str">
                            <option selected="selected">12</option>
                            <option value="0">24</option>
                            <option value="1">48</option>
                        </select>
                    </p>
                    <button type="submit">Go</button>
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs view_list_prod">
                <p><strong>Вид:</strong>
                    <a href="<?=Url::toRoute(['page/listauto', 'id' => $categories['id'], 'view'=>'0']);?>"><i class="glyphicon glyphicon-th"></i><span>Сетка</span></a>
                    <a href="<?=Url::toRoute(['page/listauto', 'id' => $categories['id'], 'view'=>'1']);?>"><i class="glyphicon glyphicon-th-list"></i><span>Список</span></a>
                </p>
            </div>
        </div>
    </div>
    <?php

    foreach ($cars_array as $car_array):?>
        <?php if($view=1): ?>
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
          <?php else:?>
              <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
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
                              <?php endif; ?>
                          </div>

                          <div class="product_btn">
                              <a href="<?=Url::toRoute(['page/cart', 'id' => $car_array['id']]);?>" class="cart"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                              <a href="<?=Url::toRoute(['page/listorder', 'id' => $car_array['id']]);?>" class="mylist">Список желаний</a>
                          </div>
                      </div>
                  </div>
              </div>
           <?php endif; ?>
       <?php endforeach; ?>
    </div>
</div>


