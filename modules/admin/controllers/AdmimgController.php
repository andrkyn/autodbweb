<?php
namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\models\UploadForm;
use yii\web\UploadedFile;

class AdmimgController extends Controller
{
    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->image = UploadedFile::getInstance($model, 'image');

            if ($model->image && $model->validate()) {
                $model->image->saveAs('uploads/' . $model->image->baseName . '.' . $model->image->extension);
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
}


