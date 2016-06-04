<?php
use kartik\helpers\Html;
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

/*[2] GRID VIEW HEAD 1 */
	$actionClass='btn btn-info btn-xs';
	$actionLabel='View';
	$attDinamikDataWarga =[];
	$headColomnDataWarga=[
		['ID' =>0, 'ATTR' =>['FIELD'=>'KK_NM','SIZE' => '10px','label'=>'NAMA KK','align'=>'left','warna'=>'249, 215, 100, 1','GRP'=>false,'FORMAT'=>'html','filter'=>true,'filterType'=>false,'filterwarna'=>'249, 215, 100, 1','value'=>function($models){ return $models['KK_NM'];}]],
		['ID' =>1, 'ATTR' =>['FIELD'=>'RUMAH_BLOCK','SIZE' => '10px','label'=>'BLOCK','align'=>'center','warna'=>'249, 215, 100, 1','GRP'=>false,'FORMAT'=>'html','filter'=>true,'filterType'=>false,'filterwarna'=>'249, 215, 100, 1','value'=>function($models){ return $models['RUMAH_BLOCK'];}]],
		['ID' =>2, 'ATTR' =>['FIELD'=>'RUMAH_NO','SIZE' => '10px','label'=>'NO','align'=>'center','warna'=>'249, 215, 100, 1','GRP'=>false,'FORMAT'=>'html','filter'=>true,'filterType'=>false,'filterwarna'=>'249, 215, 100, 1','value'=>function($models){ return $models['RUMAH_NO'];}]],
		['ID' =>3, 'ATTR' =>['FIELD'=>'Sttnm','SIZE' => '10px','label'=>'STATUS','align'=>'left','warna'=>'249, 215, 100, 1','GRP'=>false,'FORMAT'=>'html','filter'=>true,'filterType'=>false,'filterwarna'=>'249, 215, 100, 1','value'=>function($models){ return $models['Sttnm'];}]],
	];
	$gvHeadColomnDataWarga = ArrayHelper::map($headColomnDataWarga, 'ID', 'ATTR');
	$attDinamikDataWarga[] =[
		'class'=>'kartik\grid\SerialColumn',
		//'contentOptions'=>['class'=>'kartik-sheet-style'],
		'width'=>'10px',
		'header'=>'No.',
		'headerOptions'=>[
			'style'=>[
				'text-align'=>'center',
				'width'=>'10px',
				'font-family'=>'verdana, arial, sans-serif',
				'font-size'=>'9pt',
				'background-color'=>'rgba(249,215,100,1)',
			]
		],
		'contentOptions'=>[
			'style'=>[
				'text-align'=>'center',
				'width'=>'10px',
				'font-family'=>'tahoma, arial, sans-serif',
				'font-size'=>'9pt',
			]
		],
	];			
	/*GRIDVIEW ARRAY ROWS*/
	foreach($gvHeadColomnDataWarga as $key =>$value[]){
		$attDinamikDataWarga[]=[
			'attribute'=>$value[$key]['FIELD'],
			'value'=>$value[$key]['value'],
			'label'=>$value[$key]['label'],
			'filterType'=>$value[$key]['filterType'],
			'filter'=>$value[$key]['filter'],
			'filterOptions'=>['style'=>'background-color:rgba('.$value[$key]['filterwarna'].'); align:center'],
			'hAlign'=>'right',
			'vAlign'=>'middle',
			//'mergeHeader'=>true,
			'noWrap'=>true,
			'group'=>$value[$key]['GRP'],
			'format'=>$value[$key]['FORMAT'],						
			'headerOptions'=>[
					'style'=>[
					'text-align'=>'center',
					'width'=>$value[$key]['FIELD'],
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'8pt',
					//'background-color'=>'rgba(74, 206, 231, 1)',
					//'background-color'=>'rgba('.$value[$key]['warna'].')',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>$value[$key]['align'],
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'8pt',
					//'background-color'=>'rgba(13, 127, 3, 0.1)',
				]
			],
		];
	};
	
	$gvRptDataWarga= GridView::widget([
		'id'=>'rpt-data-warga',
		'export' => false,
		//'panel' => false,
		'dataProvider' => $dpDataProvider,
		//'filterModel' => $searchModel,					
		//'filterRowOptions'=>['style'=>'background-color:rgba(74, 206, 231, 1); align:center'],
		'columns' => $attDinamikDataWarga,
		'toolbar'=>false,
		'panel'=>false,
		'summary'=>false,
		/* 'toolbar' => [
			'',
		],
		'panel' => [
			'heading'=>'<div class="panel-title" style="font-family:tahoma, arial, sans-serif;font-size:9pt;"><b>LIST DATA WARGA, '.$idData.'</b></div>',
			'type'=>'info',
			'footer'=>false,
		], */
	]);	
?>
	<?=$gvRptDataWarga?>