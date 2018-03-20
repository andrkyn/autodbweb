<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\TestpgForm;


class TestpgController extends Controller {

    public function actionIndex($id =null) {
        $var1 = 'Hi test code';
        $people =['Anna', 'James', 'Johnatan'];
        //return $this->render('index', ['hello' => $var1, 'name' => $people]); //массив передаём в вид

        //создание объекта модели TetspgForm
        $model = new TestpgForm();

        // Для принятия данных из формы
        // если данные успешно загружены, то далее проверяе на валидацию данных
        if($model->load(Yii::$app->request->post())) {
            //var_dump(Yii::$app->request->post()); // для проеврки, проходят ли данные в модель
            //var_dump($model); // для проеврки, проходят ли данные в модель
            if ($model->validate()) {
            //die; // для проеврки, проходят ли данные в модель, завершить выполнение
                Yii::$app->session->setFlash('success', 'Данные приняты'); //в случае успеха оправка данных во флешь без сохранения
                return $this->refresh(); //обновление страницы
            }else {
                Yii::$app->session->setFlash('error', 'Ошибка получения данных'); //в случае ошибки принятия данных
            }
        }

        $this->layout = 'mytheme';

        return $this->render('testpage', compact('var1', 'people', 'id', 'model')); //массив передаём в вид
    }
}