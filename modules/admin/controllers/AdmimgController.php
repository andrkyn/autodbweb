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
            $model->file = UploadedFile::getInstance($model, 'file');

            if ($model->file && $model->validate()) {
                $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
            }
        }

        return $this->render('upload', ['model' => $model]);
    }
}


