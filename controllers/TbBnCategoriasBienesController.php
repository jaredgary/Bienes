<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\TbBnCategoriasBienes;
use app\models\TbBnCategoriasBienesSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TbBnCategoriasBienesController implements the CRUD actions for TbBnCategoriasBienes model.
 */
class TbBnCategoriasBienesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
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
     * Lists all TbBnCategoriasBienes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TbBnCategoriasBienesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbBnCategoriasBienes model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TbBnCategoriasBienes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TbBnCategoriasBienes();

        if ($model->load(Yii::$app->request->post())) {
            $userModel = User::findOne(\Yii::$app->user->identity->getId());
            $model->FechaSistema = date('Y-m-d h:m:s');
            $model->SistemaUsuario = $userModel->username;
            $model->save();
            return $this->redirect(['view', 'id' => $model->CodigoCategoria]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TbBnCategoriasBienes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $userModel = User::findOne(\Yii::$app->user->identity->getId());
            $model->FechaSistema = date('Y-m-d h:m:s');
            $model->SistemaUsuario = $userModel->username;
            $model->save();
            return $this->redirect(['view', 'id' => $model->CodigoCategoria]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TbBnCategoriasBienes model.
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
     * Finds the TbBnCategoriasBienes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TbBnCategoriasBienes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbBnCategoriasBienes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
