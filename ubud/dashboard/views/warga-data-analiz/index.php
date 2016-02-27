<?php

use kartik\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use kartik\builder\Form;
use yii\helpers\Url;

use ubud\dashboard\models\Warga_data;
use ubud\dashboard\models\Warga_dataSearch;


	/* function tmb_create($rt){
		$title = Yii::t('app', 'create');
		$options = ['id'=>'barang-prodak',
					//'data-toggle'=>"modal",
					'data-target'=>"#check-barang-prodak",
					'class' => 'btn btn-default btn-sm'
		];
		$icon = '<span class="glyphicon glyphicon-search"></span>';
		$label = $icon . ' ' . $title;
		$url = Url::toRoute(['/dashboard/warga-data/cari','rt'=>$rt]);
		$content = Html::a($label,$url, $options);
		return $content;	 
	} */

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
		[
			'class'=>'kartik\grid\ActionColumn',
			'dropdown' => true,
			'template' => '{data_rt}{laporan_rt}{edit}{price}{lihat}',
			'dropdownOptions'=>['class'=>'pull-left dropdown'],
			'buttons' => [
					'data_rt' =>function($url, $model, $key){
							return  '<li>' .Html::a('<span class="fa fa-eye fa-dm"></span>'.Yii::t('app', 'Data Warga '.$model->ket_rt),
														['/master/barang/view','rt'=>$model->id_rt],[
														//'data-toggle'=>"modal",
														//'data-target'=>"#modal-view",
														'data-title'=> $model->id_rt,
														]). '</li>' . PHP_EOL;
					},
					'laporan_rt' =>function($url, $model, $key){
							return  '<li>' . Html::a('<span class="fa fa-edit fa-dm"></span>'.Yii::t('app', 'Review Warga'),
														['update','id'=>$model->id_rt],[
														'data-toggle'=>"modal",
														'data-target'=>"#modal-create",
														'data-title'=> $model->id_rt,
														]). '</li>' . PHP_EOL;					
					}
			],
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
					'height'=>'10px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],

		],
		[  	//col-1
			//Nomor RT
			'attribute' =>'id_rt',
			'value'=>function($model){
				return 'RT.0' .$model->id_rt ;
			},
			'label'=>'RUKUN WARGA',
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
					'text-align'=>'center',
					'width'=>'150px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
		[  	//col-2
			//Nama RT
			'attribute' => 'ket_rt',						
			'label'=>'Keterangan',
			'value'=>function($model){
				return 'RUKUN TETANGGA ' .$model->ket_rt ;
			},
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'350px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'left',
					'width'=>'350px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
				
	];

	$dataRt=GridView::widget([
		'id'=>'gv-rt-warga',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'filterRowOptions'=>['style'=>'background-color:rgba(0, 95, 218, 0.3); align:center'],
		'showPageSummary' => true,
		'columns' =>$clmRt,
		'pjax'=>true,
		'pjaxSettings'=>[
		'options'=>[
			'enablePushState'=>false,
			'id'=>'gv-rt-warga',
		   ],
		],
		/* 'toolbar'=> [
			['content'=>tmb_create()],
			//'{export}',
			//'{toggleData}',
		], */
		/* 'panel'=>[
				//'type'=>GridView::TYPE_INFO,
				'heading'=>"<span class='fa fa-shopping-cart fa-xs'><b> LIST PURCHASE ORDER</b></span>",
			], */
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
	$this->registerJs("
		 $.fn.modal.Constructor.prototype.enforceFocus = function(){};
		 $('#modal-create').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget)
			var modal = $(this)
			var title = button.data('title')
			var href = button.attr('href')
			//modal.find('.modal-title').html(title)
			modal.find('.modal-body').html('<i class=\"fa fa-spinner fa-spin\"></i>')
			$.post(href)
				.done(function( data ) {
					modal.find('.modal-body').html(data)
				});
			})
	",$this::POS_READY);
    Modal::begin([
        'id' => 'modal-create',
		'header' => '<div style="float:left;margin-right:10px" class="fa fa-2x fa-book"></div><div><h4 class="modal-title">Tambah Data Warga</h4></div>',
		'headerOptions'=>[
				'style'=> 'border-radius:5px; background-color: rgba(97, 211, 96, 0.3)',
		],
    ]);
    Modal::end();
?>