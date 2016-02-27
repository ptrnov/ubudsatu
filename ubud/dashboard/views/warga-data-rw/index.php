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
use yii\bootstrap\Modal;
use yii\helpers\Url;

use ubud\dashboard\models\Warga_status;
use ubud\dashboard\models\Rt;
$sttNm = ArrayHelper::map(Warga_status::find()->all(), 'ID', 'RUMAH_STATUS');
$dataRt = ArrayHelper::map(Rt::find()->all(), 'id_rt', 'ket_rt');
	/*
	 * COLUMN DATA Warga
	 * @author ptrnov  [piter@lukison.com]
	 * @since 1.2
	*/
	$clmWarga=[
		[	//COL-0
			// Attribute Serial No 
			'class'=>'kartik\grid\SerialColumn',
			'width'=>'10px',
			'header'=>'No.',
			'hAlign'=>'center',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'10px',
					'font-family'=>'tahoma',
					'font-size'=>'8pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'10px',
					'font-family'=>'tahoma',
					'font-size'=>'8pt',
				]
			],
			'pageSummaryOptions' => [
				'style'=>[
						'border-right'=>'0px',
				]
			]
		],
		[  	//col-1
			//Nomor RT
			'attribute' =>'RT',						
			'label'=>'Rukun Tetangga',
			'filter'=>$dataRt,
			'value'=>function($model){
				$nmRt= Rt::find()->where(['id_rt'=>$model->RT])->one();
				return $nmRt->ket_rt;
			},
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'80px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'80px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
		[  	//col-2
			//Nama Kepala Keluarga
			'attribute' => 'KK_NM',						
			'label'=>'Nama.KK',
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
		[  	//col-3
			//Block Rumah
			'attribute' => 'RUMAH_BLOCK',
			'label'=>'Block',
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'80px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'left',
					'width'=>'80px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
		[  	//col-4
			//No Rumah
			'attribute' => 'RUMAH_NO',
			'label'=>'No.Rumah',
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'20px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'20px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
		[  	//col-5
			//Status-Kepemilikan Rumah
			'attribute' =>  'RUMAH_STT',
			'label'=>'Status.Rumah',
			'value'=>function($model){
				$sttNm = Warga_status::find()->where(['ID'=>$model->RUMAH_STT])->one();
				return $sttNm->RUMAH_STATUS;
			},
			'filter'=>$sttNm,
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'80px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'left',
					'width'=>'80px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
		[  	//col-6
			//Jumlah Anggota Keluarga
			'attribute' =>  'JUMLAH_ANGOTA',
			'label'=>'Anggota Keluarga',
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'30px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'30px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],	
		[  	//col-7
			//TLP_RUMAH
			'attribute' => 'TLP_RUMAH',
			'label'=>'Tlp.Rumah',
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'60px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'left',
					'width'=>'60px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
		[  	//col-8
			//TLP_KANTOR
			'attribute' =>'TLP_KANTOR',
			'label'=>'Tlp.Kantor',
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'60px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'left',
					'width'=>'60px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
		[  	//col-8
			//TLP_HP
			'attribute' =>'TLP_HP',
			'label'=>'Handphone',
			'hAlign'=>'left',
			'vAlign'=>'middle',
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'60px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'left',
					'width'=>'60px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
	];

	$dataWarga=GridView::widget([
		'id'=>'gv-data-warga',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'filterRowOptions'=>['style'=>'background-color:rgba(0, 95, 218, 0.3); align:center'],
		'showPageSummary' => true,
		'columns' =>$clmWarga,
		'pjax'=>true,
		'pjaxSettings'=>[
		'options'=>[
			'enablePushState'=>false,
			'id'=>'gv-data-warga',
		   ],
		],
		'panel' => [
					'heading'=>'<h3 class="panel-title">DATA WARGA</h3>',
					//'type'=>'warning',
					'before'=> Html::a('<i class="glyphicon glyphicon-plus"></i> '.Yii::t('app', 'Tambah Warga ',
							['modelClass' => 'Kategori',]),'/dashboard/warga-data-rw/create',[
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
				echo $dataWarga;
            ?>
        </div>
    </div>
</div>
<?php
	$this->registerJs("
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
      	'header' => '<div style="float:left;margin-right:10px" class="fa fa-2x fa-book"></div><div><h4 class="modal-title">Masukan Data Warga</h4></div>',
		'headerOptions'=>[								
				'style'=> 'border-radius:5px; background-color: rgba(0, 95, 218, 0.3)',	
		],
    ]);
    Modal::end();

?>