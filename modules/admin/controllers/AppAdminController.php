<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 20.03.18
 * Time: 11:12
 */

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class AppAdminController extends Controller
{

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                    'allow' => true, // разрешаем все действия для данного контроллера
                    'roles' => ['@'] // только для пользователя с ролью авториз. пользователь

                    ]
                ]
            ]
        ];
    }
}