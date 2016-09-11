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
     * Before Action Index
	 * @author ptrnov  <piter@lukison.com>
	 * @since 1.1
     */
	public function beforeAction(){
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
     * Lists all Warga_data models.
     * @return mixed
     */
    public function actionIndex()
    {
		
		/* $paramCari=Yii::$app->getRequest()->getQueryParam('id');
		if ($paramCari!=''){
			$cari=['KK_NM'=>$paramCari];			
		}else{
			$cari='';			
		}; */
		
		if (!Yii::$app->user->isGuest){
			
			if (Yii::$app->request->post('hasEditable')) {
				$idx = Yii::$app->request->post('editableKey');
				Yii::$app->response->format = Response::FORMAT_JSON;
				$model = Warga_data::findOne($idx);
				$out = Json::encode(['output'=>'', 'message'=>'']);
				$post = [];
				$posted = current($_POST['Warga_data']);
				$post['Warga_data'] = $posted;
				if ($model->load($post)) {
					$output = '';
					$model->save();
						/* RUMAH_STT */
						if (isset($posted['RUMAH_STT'])) {
							$output = $model->RUMAH_STT;
						}
						/* JUMLAH_ANGOTA */
						if (isset($posted['JUMLAH_ANGOTA'])) {
							 $output = Yii::$app->formatter->asInteger($model->JUMLAH_ANGOTA);
						}
						/* HTLP_RUMAH */
						if (isset($posted['TLP_RUMAH'])) {
							$output = $model->TLP_RUMAH;
						}
						/* TLP_KANTOR */
						if (isset($posted['TLP_KANTOR'])) {
							$output = $model->TLP_KANTOR;
						}
						/* TLP_HP */
						if (isset($posted['TLP_HP'])) {
							$output = $model->TLP_HP;
						}

					$out = Json::encode(['output'=>$output, 'message'=>'']);
				}
				// return ajax json encoded response and exit
				echo $out;
				return;
			}
			
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
						$hsl = \Yii::$app->request->post();
						$kdNoInt= $hsl['Warga_data']['noInt'];
						$kdNoAlfa = $hsl['Warga_data']['noAlfa'];
						$model->CREATED_BY = Yii::$app->user->identity->username;
						$model->CREATED_AT = date('Y-m-d H:i:s');
						$model->RUMAH_NO =$kdNoInt.strtoupper($kdNoAlfa);
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

        if ($model->load(Yii::$app->request->post())) {
				$hsl = \Yii::$app->request->post();
						$kdNoInt= $hsl['Warga_data']['noInt'];
						$kdNoAlfa = $hsl['Warga_data']['noAlfa'];
						$model->CREATED_BY = Yii::$app->user->identity->username;
						$model->CREATED_AT = date('Y-m-d H:i:s');
						$model->RUMAH_NO =$kdNoInt.strtoupper($kdNoAlfa);
						$model->save();        
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
