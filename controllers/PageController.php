<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Categories; // Подключил категорию
use app\models\Autoitems; // Подключил модель

/* Controller for pages site */
class PageController extends Controller
{
    /**
        Для страницы списка автомобилей
     */

    public function actionListauto() //контроллер списка авто
    {
        /*
        Суть условия: если нет параметра id, то вывести конкретный лист продуктов не получится
        Условие с фильтром:
        если существует переменная GET[id]
        и переменная GET[id] не равна пустоте
        и если то что мы передали - является числом */
        if(isset($_GET['id']) && $_GET['id'] != "" && filter_var($_GET['id'], FILTER_VALIDATE_INT))
        {
            $categories = Categories::find()->where(['id' => $_GET['id']])->asArray()->one();

            if(count($categories)>0)  //если существует категория
            {
                $cars_array = Autoitems::find()->where(['category' => $_GET['id']])->asArray()->all();
                return $this->render('listauto', compact('categories', 'cars_array'));
            }

        }
            //echo "Here redirect";
            return $this->redirect(['page/catalog']);

    }

    public function actionCatalog() //контроллер каталог
    {
        $categories = Categories::find()->asArray()->all(); //выборка
        return $this->render('catalog', compact('categories'));
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
