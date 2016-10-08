<?php

namespace ubud\dashboard\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Request;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\widgets\Pjax;
use ptrnov\postman4excel\Cronjob;
use ubud\dashboard\models\Pembukuan;
use ubud\dashboard\models\PembukuanSearch;
use ubud\dashboard\models\Pembukuan_child;

/**
 * PembukuanController implements the CRUD actions for Pembukuan model.
 */
class PembukuanHarianController extends Controller
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
     * Before Action Index
	 * @author ptrnov  <piter@lukison.com>
	 * @since 1.1
     */
	public function beforeAction($action){
			if (Yii::$app->user->isGuest)  {
				 Yii::$app->user->logout();
                   $this->redirect(array('/site/login'));  //
			}
            // Check only when the user is logged in
            if (!Yii::$app->user->isGuest)  {
               if (Yii::$app->session['userSessionTimeout']< time() ) {
                   // timeout
                   Yii::$app->user->logout();
                   $this->redirect(array('/site/login'));  //
               } else {
                   //Yii::$app->user->setState('userSessionTimeout', time() + Yii::app()->params['sessionTimeoutSeconds']) ;
				   Yii::$app->session->set('userSessionTimeout', time() + Yii::$app->params['sessionTimeoutSeconds']);
                   return true;
               }
            } else {
                return true;
            }
    }
	
    /**
     * Lists all Pembukuan models.
     * @return mixed
     */
    public function actionIndex()
    {
		echo \ptrnov\postman4excel\Cronjob::world();
		if (!Yii::$app->user->isGuest)  {
			$searchModel = new PembukuanSearch([
				'SRC'=>Yii::$app->user->identity->warga
			]);
			$dataProvider = $searchModel->searchHarian(Yii::$app->request->queryParams);

			return $this->render('index', [
				'searchModel' => $searchModel,
				'dataProvider' => $dataProvider,
			]);
		}
    }

    /**
     * Displays a single Pembukuan model.
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
     * Creates a new Pembukuan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pembukuan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

	public function actionSimpan()
    {
		if (!Yii::$app->user->isGuest){
			$model = new Pembukuan();
			$nw = Yii::$app->esmcode->kode_ref();
			//print_r($nw);
			//die();
			if($model->load(Yii::$app->request->post())){    
						$model->SRC_DSC_REF =$nw;	
						$model->SRC = Yii::$app->user->identity->warga;					
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
     * Updates an existing Pembukuan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionEdit($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->ID]);
            return $this->redirect(['index']);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
		
    }

    /**
     * Deletes an existing Pembukuan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

	
	/**
     * DepDrop |  TYPE - KAT - 
     * @author ptrnov  <piter@lukison.com>
     * @since 1.1
     */
	public function actionKtgType() {
		if (!Yii::$app->user->isGuest){
			$idWarga=Yii::$app->user->identity->warga!=''?Yii::$app->user->identity->warga:'rw11';
		}
		$out = [];
		if (isset($_POST['depdrop_parents'])) {
			$parents = $_POST['depdrop_parents'];
			if ($parents != '') {
				
				$prn_id = $parents[0];
				//$corp_id = $parents[1];
				//$model = Pembukuan_child::find()->asArray()->where("SRC=".$idWarga." AND TYPE_ID='".$prn_id."'")->all();
				$model = Pembukuan_child::find()->asArray()->where(['SRC'=>$idWarga,'TYPE_ID'=>$prn_id])->all();
				foreach ($model as $key => $value) {
					   $out[] = ['id'=>$value['CHILD_ID'],'name'=> $value['CHILD_NM']];
				   }
	 
				   echo json_encode(['output'=>$out, 'selected'=>'']);
				   return;
			   }
		   }
		   echo Json::encode(['output'=>'', 'selected'=>'']);
	}	
	
    /**
     * Finds the Pembukuan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Pembukuan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pembukuan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
