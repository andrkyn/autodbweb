<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody()?>

<header>
    <!-- My Button [-->
    <form action="../../config/dbcreate.php" method="POST">
        <input type="submit" value="DB page">
    </form>
    <!--] End my button-->
    <div class="container">
        <a href="<?=Url::to('/')?>">Home</a>
        <?= Html::a('About', Url::to(['/about'])) ?>
        <div class="row header_top">
            <div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="/"><img src="/images/logo.png"></a>
            </div>
            <div class="btn_top_wrap col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="btn_and_search">
                    <div class="btn_top">
                        <a href="#"><i class="glyphicon glyphicon-map-marker"></i>Обратная связь</a>
                        <!--<a href="<?php //Url::toRoute('page/kabinet')?>"><i class=""></i>Личный кабинет</a> -->


                        <?php if(Yii::$app->user->isGuest): ?>
                            <a href="<?= Url::to(['/admin']) ?>"><i class="glyphicon glyphicon-lock"></i>Войти</a>
                        <?php else: ?>
                        <a href="<?= Url::to(['/site/logout']) ?>"><i class="glyphicon glyphicon-lock"></i>Выйти (Logout)</a>
                        <?php endif; ?>

                    </div>
                    <div class="search_top">
                        <form>
                            <input placeholder="Поиск" type="text">
                            <button type="submit" name="submit_search">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="cart_top">
                    <a href="#">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        <span>0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid menu_top">
        <div class="container">
            <div class="row">
                    <?php

                    NavBar::begin([
                    //'brandLabel' => Yii::$app->name,
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                    'class' => ' ',
                    ],
                    ]);
                    echo Nav::widget([
                    'options' => ['class' => 'navbar-nav'],
                    'items' => [
                    ['label' => 'Главная', 'url' => ['/site/index']],
                    ['label' => 'Каталог автомобилей', 'url' => ['/category/']],
                    ['label' => 'blank1', 'url' => ['/page/blank1']],
                    ['label' => 'Контакты', 'url' => ['/site/contact']],
                    ['label' => 'About', 'url' => ['/page/about']],
                  /*Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                    '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>'
                    ) */
                    ],
                    ]);
                    NavBar::end();

                    ?>
            <!-- Brand and toggle get grouped for better mobile display
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Одежда</a></li>
                            <li><a href="#">Обувь</a></li>
                            <li><a href="#">Снаряжение</a></li>
                            <li><a href="#">Амуниция</a></li>
                            <li><a href="#">Сувениры</a></li>
                        </ul>
                    </div>
            -->

            </div>
        </div>
    </div>
</header>


<div class="container ban_block_wrap">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ban_block ban1">
            <div>
                <img src="/images/ban1.jpg">
                <a href="#">
                    <h2>Yiiframework</h2>
                    <p>Yii is a high-performance PHP framework best for developing Web 2.0 applications.</p>
                    <span>link blank</span>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ban_block">
            <div>
                <img src="/images/ban2.jpg">
                <a href="#">
                    <h2>PhpStorm</h2>
                    <p>JetBrains PhpStorm all versions universal Activation codes/License servers</p>
                    <span>link blank</span>
                </a>
            </div>
        </div>
    </div>
</div>

<?=$content;?>

<!--  отключаю панель рассылка
<div class="container-fluid write_email_and_sseti">
    <div class="container">
        <div class="row write_email_and_sseti_wrap">
            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 write_email">
                <p>Рассылка</p>
                <form>
                    <button type="submit">
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                    <input type="text" placeholder="Введите E-mail">
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5 hidden-xs sseti_wrap">
                <div>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-vk"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="container-fluid footer">
    <div class="container">
        <div class="row menu_footer_and_contact">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="footer_menu">
                    <h3>Категории</h3>
                    <ul>
                        <li><a href="#">Автомобильная база</a></li>
                        <li><a href="#">item1</a></li>
                        <li><a href="#">item2</a></li>
                        <li><a href="#">item3</a></li>
                        <li><a href="#">item4</a></li>

                    </ul>
                </div>
                <div class="footer_menu">
                    <h3>Учетная запись</h3>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Regiter</a></li>
                        <li><a href="#">My order</a></li>
                        <li><a href="#">Wish list</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 contacts">
                <h3>Contact</h3>
                <p><i class="glyphicon glyphicon-map-marker"></i>Addres: -----</p>
                <p><i class="glyphicon glyphicon-phone-alt"></i>Support: -----</p>
                <p><i class="glyphicon glyphicon-envelope"></i>E-mail: -----</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 copy">
                <p>© 2017 не является действующим интернет-магазином</p>
            </div>
        </div>
    </div>
</div>







    <?php
      /* NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
        */
    ?>

        <?/*= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */?>
        <?= Alert::widget() ?>
        <?//= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
