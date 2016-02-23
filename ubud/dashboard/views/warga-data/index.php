<?php

use kartik\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use app\models\hrd\Dept;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use kartik\builder\Form;


use ubud\dashboard\models\Warga_data;
use ubud\dashboard\models\Warga_dataSearch;

	/*
	 * COLUMN DATA RT
	 * @author ptrnov  [piter@lukison.com]
	 * @since 1.2
	*/
	$clmRt=[
		[
			'class'=>'kartik\grid\ExpandRowColumn',
			'width'=>'20px',
			/* 'pluginOption'=>[
				'options'=>['id'=>'gv-index-id',]
			], */
			//'options'=>['id'=>'gvxs'],		
			'value'=>function ($model, $key, $index, $column) {
				return GridView::ROW_COLLAPSED;
				//return GridView::ROW_NONE;
			},
			'detail'=>function ($model, $key, $index, $column){
					 $searchModelWarga = new Warga_dataSearch();
					 $dataProviderWarga = $searchModelWarga->searchGroup(Yii::$app->request->queryParams,$model->id_rt);
					 
				return Yii::$app->controller->renderPartial('data-warga',[
					'searchModelWarga'=>$searchModelWarga,
					'dataProviderWarga'=>$dataProviderWarga,
				]); 
			},
			'detailOptions'=>[
                'id'=>'gvxs'
            ],

			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'200px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'200px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
			'hiddenFromExport' => false,
			//'hidden' => true,
			//'expandOneOnly'=>true
		
		],
		[  	//col-1
			//Nomor RT
			'attribute' =>'id_rt',
			'value'=>function(){
				return 'RUKUN WARGA';
			},
			'label'=>'Rukun Tetangga',
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'50px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'50px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
		[  	//col-2
			//Nama RT
			'attribute' => 'ket_rt',						
			'label'=>'Nama',
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'150px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'left',
					'width'=>'150px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],		
	];

	$dataRt=GridView::widget([
		'id'=>'gv-rt-warga',
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
		//'filterRowOptions'=>['style'=>'background-color:rgba(0, 95, 218, 0.3); align:center'],
		'showPageSummary' => true,
		'columns' =>$clmRt,
		'pjax'=>true,
		'pjaxSettings'=>[
		'options'=>[
			'enablePushState'=>false,
			'id'=>'gv-rt-warga',
		   ],
		],
		'panel' => [
					'heading'=>'<h3 class="panel-title">DATA WARGA</h3>',
					'type'=>'warning',
					'before'=> Html::a('<i class="glyphicon glyphicon-plus"></i> '.Yii::t('app', 'Add KK',
							['modelClass' => 'Kategori',]),'/dashboard/data-warga/create',[
								'data-toggle'=>"modal",
									'data-target'=>"#modal-create",
										'class' => 'btn btn-success'
													]), 
					'showFooter'=>false,
		],
		'toolbar'=> [
			//'{items}',
		], 
		'hover'=>true, //cursor select
		'responsive'=>true,
		'responsiveWrap'=>true,
		'bordered'=>true,
		'striped'=>'4px',
		'autoXlFormat'=>true,
		'export' => false,		
	]);

?>
<div class="body-content">
    <div class="row" style="padding-left: 5px; padding-right: 5px">
        <div class="col-sm-12 col-md-2 col-lg-12" style="padding-left:15px; padding-right:15px">
            <?php            		
				echo $dataRt;
            ?>
        </div>
    </div>
</div>












<?php
