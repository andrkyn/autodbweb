<?php

namespace app\controllers;

use app\models\Modelcar;
use Codeception\PHPUnit\Constraint\Page;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Category; // Подключил категорию
use app\models\Autoitems; // Подключил модель

/* Controller for pages site */
class PageController extends AppController
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
            $category = Category::find()->where(['id' => $_GET['id']])->asArray()->one();

            if(count($category)>0)  //если существует категория
            {
                $cars_array = Autoitems::find()->where(['category' => $_GET['id']])->asArray()->all();
                $count_car = count($cars_array);
                  //проверка на существование переменной view (listauto.php, rung77) [
                 if(isset($_GET['view']) && ($_GET['view']==1))
                   $view=1;
                  else
                  // ]
                   $view=0;
                //$this->render('listauto',array('view'=>$view));
                var_dump($view);
                return $this->render('listauto', compact('category', 'cars_array', 'count_car', 'view')); //передача массивов в вид listauto
            }

        }
            //echo "Here redirect";
            return $this->redirect(['page/catalog']);
    }

    public function actionCatalog() //контроллер каталог
    {
        $category = Category::find()->asArray()->all(); //выборка
        return $this->render('catalog', compact('category'));
    }

     // для blank1
    public function actionBlank1() //контроллер списка авто
    {
        $this->layout = 'mytheme';
        return $this->render('blank1');
        //return 'Hello test code!';
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


    // для корзины
    public function actionCart()
    {
        return $this->render('cart');
    }

    //для страницы лист желаний
    public function actionListorder()
    {
        return $this->render('listorder');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionShowdb() {

        $this->layout = 'mytheme';

        //$cats = Category::find()->all(); //здесь фактически написан SQL запрос, выводятся все записи
        //$cats = Category::find()->orderBy(['id' => SORT_DESC])->all(); // sort
        //$cats = Category::find()->asArray()->all(); // massiv
        //$cats = Category::find()->where('id=3')->asArray()->all(); // вывод поля с определённым значением
        //$cats = Category::find()->where(['id' => 3])->asArray()->all(); // вывод поля с определённым значением массивом
        //$cats = Category::find()->where(['like', 'img', '_logo.png'])->asArray()->all(); // вывод поля c определенным фрагментом строки
        //$cats = Category::find()->where(['<=', 'id', 2])->asArray()->all(); //поля попадающие в диапазон меньше или равно
        //$cats = Category::find()->where('id=3')->asArray()->one(); // получить одну запись
        //$cats = Category::find()->where('id=3')->limit(1)->asArray()->all(); // получить одну запись
        //$cats = Category::find()->asArray()->count(); // получить весь массив записей
        //$cats = Category::findOne(['id' => 3]); //получим одну запись
        //$cats = Category::findAll(['id' => 3]); // получим все записи

        // запрос через query ver.1
        /* $query = "SELECT * FROM categories WHERE img LIKE '%logo%'"; // по сути это одинаковый запрос, как и выше
        $cats = Category::findBySql($query)->all(); */

        // запрос через query ver.2 - более правильный и безопасен
        /* $query = "SELECT * FROM categories WHERE img LIKE :search"; // по сути это одинаковый запрос, как и выше
        $cats = Category::findBySql($query, [':search' => '%_logo.png%'])->all(); */

        //$cats = Category::findOne(2); //метод получения данных отложенная загрузка
        //$cats = Category::find()->with('modelcars')->where('id=2')->all(); //метод получения данных жадная загрузка

            //тут необходимо определить, какую загрузку выбрать для данной задачи
        $cats = Category::find()->all(); //метод получения данных отложенная (ленивая) загрузка
        //$cats = Category::find()->with('modelcars')->all(); //метод получения данных жадная загрузка

        return $this->render('showdb', compact('cats'));
    }


    // для выбора конкретного автомобиля
    public function actionCar($id) {

        //$catt = Category::find()->where(['id' => $_GET['id']])->asArray()->one();
        $id =Yii::$app->request->get('id');
        $product = Modelcar::findOne($id);
        if(empty($product)) //если массив категории пуст
            throw new \yii\web\HttpException(404, 'Такой марки автомобиля нет'); // выдать исключение

        //$modelcar = Modelcar::find()->with('category')->where(['id' =>$id])->limit(1)-one; //жадная загрузка
        return $this->render('car', compact('product'));
    }


}
