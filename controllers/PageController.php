<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

/* Controller for pages site */
class PageController extends Controller
{
    /**
        Для страницы списка автомобилей
     */

    public function actionListauto() //контроллер списка авто
    {
        return $this->render('listauto');
    }

    public function actionCatalog() //контроллер каталог
    {
        return $this->render('catalog');
    }



     // для blank1
    public function actionBlank1() //контроллер списка авто
    {
        return $this->render('blank1');
    }

    // для старниц Контактов
    public function actionContacts()
    {
        return $this->render('contacts');
    }

    //For login
    public function actionLogin()
    {
        return $this->render('login');
    }

    //личный кабинет
    public function actionKabinet()
    {
        return $this->render('kabinet');
    }


}
