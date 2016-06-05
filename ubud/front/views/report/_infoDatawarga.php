<?php
use kartik\helpers\Html;
use kartik\detail\DetailView;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;
use kartik\tabs\TabsX;
use yii\helpers\Json;
use yii\web\Response;
use yii\helpers\ArrayHelper;
use yii\web\Request;
use kartik\daterange\DateRangePicker;
use yii\db\ActiveRecord;
use yii\data\ArrayDataProvider;

use ubud\dashboard\models\Warga_data;

	//print_r($dpDataProvider);
	//$model=$dpDataProvider->getModels();
	//$modelDW=$model!=''?$model[0]:false;
	//print_r($cntkk);
	
	/*COUNT DATA WARGA*/
	if ($model!='0'){
		$attKK = [
			[
				'group'=>true,
				'label'=>'SUMMARY DATA WARGA',
				'rowOptions'=>['class'=>'info'],
				//'groupOptions'=>['class'=>'text-center']
			],
			[
				'attribute'  => $id==1?'Rt1_Cntkk':($id==2?'Rt2_Cntkk':($id==3?'Rt3_Cntkk':($id==4?'Rt4_Cntkk':($id==11?'Rw_Cntkk':'0')))),
				'label'  => 'Jumlah.KK',
				'labelColOptions' => ['style' => 'text-align:right;width: 40%'],
				'options'=>[
					'readonly'=>true,
				 ],
			],
			[
				//'attribute'  => $id==1?'Rt1_Cntkk':($id==2?'Rt2_Cntkk':($id==3?'Rt3_Cntkk':'Rt4_Cntkk')),
				'label' => 'Total Warga',
				'value' =>'0',
				'labelColOptions' => ['style' => 'text-align:right;width: 40%'],
				'options'=>[
					'readonly'=>true,
				 ],
			],
		];	
		$dtInfoKK=DetailView::widget([
			'model' => $model,
			'attributes'=>$attKK ,	
		]);	
	}else{
		$dtInfoKK='No Data';
	}
		
	
	/*COUNT PROPERTY*/
	if ($model!='0'){
		$attPeroperty = [
			[
				'group'=>true,
				'label'=>'SUMMARY DATA RUMAH',
				'rowOptions'=>['class'=>'info'],
				//'groupOptions'=>['class'=>'text-center']
			],
			[
				'attribute'  => $id==1?'Rt1_Cntrumah_milik':($id==2?'Rt2_Cntrumah_milik':($id==3?'Rt3_Cntrumah_milik':($id==4?'Rt4_Cntrumah_milik':($id==11?'Rw_Cntrumah_milik':'0')))),
				'label'  => 'MILIK SENDIRI',
				'labelColOptions' => ['style' => 'text-align:right;width: 40%'],
				'options'=>[
					'readonly'=>true,
				 ],
			],
			[
				'attribute'  => $id==1?'Rt1_Cntrumah_kontrak':($id==2?'Rt2_Cntrumah_kontrak':($id==3?'Rt3_Cntrumah_kontrak':($id==4?'Rt4_Cntrumah_kontrak':($id==11?'Rw_Cntrumah_kontrak':'0')))),
				'label'  => 'KONTRAK',
				'labelColOptions' => ['style' => 'text-align:right;width: 40%'],
				'options'=>[
					'readonly'=>true,
				 ],
			],
			[
				'attribute'  => $id==1?'Rt1_Cntrumah_kosong':($id==2?'Rt2_Cntrumah_kosong':($id==3?'Rt3_Cntrumah_kosong':($id==4?'Rt4_Cntrumah_kosong':($id==11?'Rw_Cntrumah_kosong':'0')))),
				'label'  => 'ROSONG',
				'labelColOptions' => ['style' => 'text-align:right;width: 40%'],
				'options'=>[
					'readonly'=>true,
				 ],
			],
		];	
		$dtInfoPeroperty=DetailView::widget([
			'model' => $model,
			'attributes'=>$attPeroperty ,	
		]); 
	}else{
		$dtInfoPeroperty='No Data';
	}
?>
	<div class="row">
		<div class="col-lg-6">
			<?=$dtInfoKK?>
		</div>
		<div class="col-lg-6">
			<?=$dtInfoPeroperty?>
		</div>
	</div>
	<?php //=$gvRptDataWarga?>