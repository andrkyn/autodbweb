<?php
namespace app\controllers;

use app\models\Category;
use Yii;
use yii\web\Controller;
use app\models\TestfrmForm;

class TestfrmController extends Controller {

    public function actionIndex($id =null) {
        $var1 = 'Hi test code';
        $people =['Anna', 'James', 'Johnatan'];
        //return $this->render('index', ['hello' => $var1, 'name' => $people]); //массив передаём в вид


            // обновление данных
       /* $post = TestfrmForm::findOne(3);
        $post->email = 'mailrtt34f@yrt.ty';
        $post->save();
        var_dump($post);*/

            //удаление данных одна запись
        /*$post = TestfrmForm::findOne(3);
        $post->delete();*/

            // удаление нескольких записей
        //TestfrmForm::deleteAll(['>', 'id', 5]); // удалить данные с id > 5
        TestfrmForm::deleteAll(); // удалить все данные с таблицы


        //создание объекта модели TetspgForm
        $model = new TestfrmForm();
//        $model->name ='Author';
//        $model->email ='5666hj';
//        $model->text = 'Text сообщения';
//        $model->save(); //валидация тут проходит
       //$model->save(false); //если валидация не нужна

        if($model->load(Yii::$app->request->post())) {
            //var_dump(Yii::$app->request->post()); // для проверки, проходят ли данные в модель
            //var_dump($model); // для проеврки, проходят ли данные в модель
            if ($model->save()) {
                //die; // для проеврки, проходят ли данные в модель, завершить выполнение
                Yii::$app->session->setFlash('success', 'Данные приняты'); //в случае успеха оправка данных во флешь без сохранения
                return $this->refresh(); //обновление страницы
            }else {
                Yii::$app->session->setFlash('error', 'Ошибка получения данных'); //в случае ошибки принятия данных
            }
        }

        $this->layout = 'mytheme';
        return $this->render('frmpage', compact('var1', 'people', 'id', 'model')); //массив передаём в вид
    }
}