<?php

namespace app\modules\admin\controllers;

use app\models\Modelcar;
use Yii;
use app\modules\admin\models\Cars;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\admin\models\UploadForm;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * CarsController implements the CRUD actions for Cars model.
 */
class CarsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true, // разрешаем все действия для данного контроллера
                        'roles' => ['@'] // только для пользователя с ролью авториз. пользователь

                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cars models.
     * @return mixed
     */
    /*public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider(['query' => Cars::find(),]);

        return $this->render('index', ['dataProvider' => $dataProvider,]);
    }*/


    /**
     * Displays a single Cars model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', ['model' => $this->findModel($id)]);
    }

    /**
     * Creates a new Cars model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        $model = new Cars();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', ['model' => $model,]);
        }
    }

    /**
     * Updates an existing Cars model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        // для загрузки файла [
        $model2 = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model2->image = UploadedFile::getInstance($model2, 'file');
            //debug($model2); die;
            if ($model2->image && $model2->validate()) {
                $model2->image->saveAs('uploads/' . $model2->image->baseName . '.' . $model2->image->extension);
            }
        } // END для загрузки файла ]

        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', ['model' => $model, 'model2' => $model2]);
        }
    }

    /**
     * Deletes an existing Cars model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cars model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cars the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cars::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /*    public function actionUpload()
        {
            $model = new UploadForm();

            if (Yii::$app->request->isPost) {
                $model->file = UploadedFile::getInstance($model, 'file');

                if ($model->file && $model->validate()) {
                    $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
                }
            }

            return $this->render('upload', ['model' => $model]);
        }*/

    public function actionIndex()
    {
       // для загрузки файла [
        $model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model->file = UploadedFile::getInstance($model, 'file');
            //debug($model2); die;
            if ($model->file && $model->validate()) {
                $model->file->saveAs('uploads/' . $model->file->baseName . '.' . $model->file->extension);
            }
        } // END для загрузки файла ]

        $dataProvider = new ActiveDataProvider(['query' => Cars::find(),]);
        return $this->render('index', ['dataProvider' => $dataProvider, 'model' => $model]);

    }
}

