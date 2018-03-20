<?php

namespace app\controllers\admin;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex() {
        $var=3000;
        return $this->render('index', compact('var'));
    }

    public function actionBlogPost(){
        return 'Blog and Post ....text';
    }

}