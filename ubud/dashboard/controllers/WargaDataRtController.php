<?php

namespace ubud\dashboard\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\web\Response;

use ubud\dashboard\models\Rt;
use ubud\dashboard\models\RtSearch;
use ubud\dashboard\models\Warga_data;
use ubud\dashboard\models\Warga_dataSearch;
/**
 * WargaDataController implements the CRUD actions for Warga_data model.
 */
class WargaDataRtController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Warga_data models.
     * @return mixed
     */
    public function actionIndex()
    {
		if (!Yii::$app->user->isGuest){
			$searchModel = new Warga_dataSearch([
				'RT'=>Yii::$app->user->identity->warga
			]); 
			//$searchModel = new Warga_dataSearch();
			$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
			
			return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
			]);
		}
    }
	
    /**
     * Displays a single Warga_data model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Warga_data model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Warga_data();

       // if ($model->load(Yii::$app->request->post()) && $model->save()) {
       //     return $this->redirect(['view', 'id' => $model->ID]);
       // } else {
            return $this->renderAjax('_form', [
                'model' => $model,
            ]);
       // }
    }
	
	public function actionSimpan()
    {
		if (!Yii::$app->user->isGuest){
			$model = new Warga_data();
			if($model->load(Yii::$app->request->post())){                  
						$model->CREATED_BY = Yii::$app->user->identity->username;
						$model->CREATED_AT = date('Y-m-d H:i:s');
						$model->save();                    
	
				return $this->redirect(['index']);						
			}else{
				return ActiveForm::validate($model);
			}	
		}
	}
	
	
    /**
     * Updates an existing Warga_data model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionEdit($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           return $this->redirect(['index']);
        } else {
            return $this->renderAjax('edit', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Warga_data model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
		if (!Yii::$app->user->isGuest){
			$model = Warga_data::find()->where(['ID'=>$id])->one();
			$model->STATUS = 3;
			$model->UPDATED_BY = Yii::$app->user->identity->username;
			$model->save();  
			
			 return $this->redirect(['index']);
		}
    }

    /**
     * Finds the Warga_data model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Warga_data the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Warga_data::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
