<?php

namespace ubud\front\controllers;

use Yii;
use yii\web\Controller;
use ubud\dashboard\models\Warga_dataSearch;
use ubud\dashboard\models\Warga_data;


class ReportController extends Controller
{
    /* public function actionIndex($id)
    {
		if($id=='lg'){
			$corp="PT. Lukison Group";
		}elseif ($id=='sss'){
			$corp="PT. Sarana Sinar Surya";
		}elseif ($id=='esm'){
			$corp="PT. Effembi Sukses Makmur";
		}elseif ($id=='alg'){
			$corp="PT. Artha Lipat Ganda";
		}		
        return $this->render('index',[
			'corp_nm'=>$corp
		]); 	
    } */
	
	public function actionIndex($id){
		
		$searchModel = new Warga_dataSearch();
		
		if ($id==11){
			//RW
			$modelRslt = Warga_data::find()->where('STATUS<>3 AND RW='.$id)->one();		
			$model=$modelRslt!=''?$modelRslt:'0';
			$dpDataProvider = $searchModel->searchDataWargaRW(Yii::$app->request->queryParams,$id);		
		}else{
			//RT
			$modelRslt = Warga_data::find()->where('STATUS<>3 AND RT='.$id)->one();
			$model=$modelRslt!=''?$modelRslt:'0';
			$dpDataProvider = $searchModel->searchDataWargaRT(Yii::$app->request->queryParams,$id);		
		}
		
		
		if ($id==1 or $id==2 or $id==3  or $id==4 or $id==11){
			return $this->render('index', [
			'id'=>$id,
			'model'=>$model,
			//'cntkk'=>$cntkk,
			'searchModel' => $searchModel,
			'dpDataProvider' => $dpDataProvider,
			]);
		}else{
			/*NO DATA*/
			return $this->render('indexNoData');
		}
	}
}
