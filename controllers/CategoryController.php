<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 16.03.18
 * Time: 15:06
 */

namespace app\controllers;
use Yii;
use app\models\Category;
use app\models\Modelcar;
use yii\data\Pagination;
use yii\web\HttpException;


class CategoryController extends AppController {

    public function actionIndex() {
        $categorys = Category::find()->all();
        //debug($hits);
        return $this->render('index', compact('categorys'));
    }

    // вывод марки авто
    public function actionView($id) {
        $id = Yii::$app->request->get('id');
        //debug($id);
        $modelcar = Modelcar::find()->where(['category' =>$id])->all();
        //$catt = Modelcar::find()->where(['category' =>$id])->limit(1)->one();
        //$catt = Category::find()->where(['id' => $_GET['id']])->asArray()->one();
        $catt = Category::findOne($id);

        if(empty($catt)) //если массив категории пуст
            throw new \yii\web\HttpException(404, 'Такой нет категории'); // выдать исключение
        return $this->render('view', compact('modelcar', 'catt'));

    }

    //для поиска
    public function actionSearch() {
        $srch = Yii::$app->request->get('srch');
        $query = Modelcar::find()->where(['like', 'name', $srch]);
        /*$pages = new Pagination(['totalCount'=> $query->count(), 'pageSize' =>3,
               'forcePageParam' => false, 'pageSizeParam' => false]);*/
        //$modelcar = $query->offset($pages->offset)->limit($pages->limit)->all();
        $modelcar = $query->all();

        //return $this->render('search', compact('modelcar', 'pages', 'srch'));
        return $this->render('search', compact('modelcar', 'srch'));
    }
}