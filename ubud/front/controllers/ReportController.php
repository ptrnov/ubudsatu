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
		$dpDataProvider = $searchModel->searchDataWarga(Yii::$app->request->queryParams,$id);		
		$model = Warga_data::find()->where('STATUS<>3 AND RT='.$id)->one();
		//$cntkk1 = Warga_data::find()->where('STATUS<>3 AND RT='.$id)->count();
		//$cntSttRumah = Warga_data::find()->where('STATUS<>3 AND RT='.$id.' AND RUMAH_STT=1')->count();
		//$cntkk = array_merge(['cntkk1'=>$cntkk1],['cntRumah'=>$cntSttRumah]);
		//$cntkk=new $cntkk12;//array_merge(['cntkk1'=>$cntkk1],['cntRumah'=>$cntSttRumah]);
		return $this->render('index', [
		'id'=>$id,
		'model'=>$model,
		//'cntkk'=>$cntkk,
		'searchModel' => $searchModel,
		'dpDataProvider' => $dpDataProvider,
		]);
	}
	
}
