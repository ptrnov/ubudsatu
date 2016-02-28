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
use kartik\editable\Editable;

use ubud\dashboard\models\Pembukuan_type;
use ubud\dashboard\models\Pembukuan_child;
use ubud\dashboard\models\Pembukuan_golongan;
use ubud\dashboard\models\Rt;

$filterTypeNm = ArrayHelper::map(Pembukuan_type::find()->all(), 'TYPE_ID', 'TYPE_NM');
$filterChildNm = ArrayHelper::map(Pembukuan_child::find()->where(['SRC'=>'rw11'])->all(), 'CHILD_ID', 'CHILD_NM');
$dataRt = ArrayHelper::map(Rt::find()->all(), 'id_rt', 'ket_rt');

	$arySource= [
		  ['user_warga' => 'rw11', 'DESCRIP' => 'RW11'],		  
		  ['user_warga' => 1, 'DESCRIP' => 'RT01'],
		  ['user_warga' => 2, 'DESCRIP' => 'RT02'],
		  ['user_warga' => 3, 'DESCRIP' => 'RT03'],
		  ['user_warga' => 4, 'DESCRIP' => 'RT04'],
	];	
	$valSource = ArrayHelper::map($arySource, 'DESCRIP', 'DESCRIP'); 
	function sttPembukuan($model){
		if($model->STATUS==0){
			/*open*/
			return Html::a('<i class="glyphicon glyphicon-ok"></i> proses', '#',['class'=>'btn btn-success btn-xs','style'=>['width'=>'100px'], 'title'=>'process']);
		}elseif($model->STATUS==1){
			/*closing*/
			return Html::a('<i class="fa fa-remove fa-md"></i> Closing', '#',['class'=>'btn btn-danger btn-xs','style'=>['width'=>'25px'], 'title'=>'Closing']);
		};
	};

//$this->title = 'Pembukuans';
//$this->params['breadcrumbs'][] = $this->title;


	$clmPembukuan=[
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
			'attribute' =>'TGL',						
			'label'=>'Tanggal',
			'filterType' => GridView::FILTER_DATE,
            'filterWidgetOptions' => [
					'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',					 
                    'autoclose' => true,
                    'todayHighlight' => true,
					//'format' => 'dd-mm-yyyy hh:mm',
					'autoWidget' => false,
					//'todayBtn' => true,
                ]
            ],
			'value'=>function($model){
				/*
				 * max String Disply
				 * @author ptrnov <piter@lukison.com>
				*/
				return substr($model->TGL, 0, 10);
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
					'text-align'=>'left',
					'width'=>'80px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
		[  	//col-2
			//TYPE
			'attribute' =>'TYPE',					
			'label'=>'Type',
			'filter'=>$filterTypeNm,			
			'value'=>function($model){
				$nmType= Pembukuan_type::find()->where(['TYPE_ID'=>$model->TYPE])->one();
				return $nmType->TYPE_NM;
			},
			'noWrap'=>false,
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
        [  	//col-3
			//Kategori
			'attribute' =>'CHILD',					
			'label'=>'Kategori',
			'filter'=>$filterChildNm, 
			'noWrap'=>true,
			'value'=>function($model){
				$nmChild= Pembukuan_child::find()->where(['CHILD_ID'=>$model->CHILD])->one();
				return $nmChild->CHILD_NM;
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
					'text-align'=>'left',
					'width'=>'80px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],  
        [  	//col-4
			//Source Login Check -> report
			'attribute' =>'SRC',
			'noWrap'=>false,			
			'label'=>'State',
			'filter'=>$valSource,
			/* 'value'=>function($model){
				$nmRt= Rt::find()->where(['id_rt'=>$model->RT])->one();
				return $nmRt->ket_rt;
			}, */
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
        [  	//col-5
			//SRC_DSC_REF ->KODE UNIX
			'attribute' =>'SRC_DSC_REF',	
			'label'=>'Ref.Kode',
			'filter'=>true,			
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
			//SRC_DSC -> ASAL PEMASUKAN ATAU PENGELUARAN -> RW/RT1,2,3,4
			'attribute' =>'SRC_DSC',	
			'label'=>'Dari',
			'filter'=>$dataRt, 			
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
		[  	//col-7
			//SRC_DSC_QTY -> Jumlah PEMASUKAN/PENGELUARAN -> RW/RT1,2,3,4
			'attribute' =>'SRC_DSC_QTY',	
			'label'=>'Jumlah',
			//'filter'=>$false, 			
			'hAlign'=>'left',
			'vAlign'=>'middle',	
			'pageSummaryFunc'=>GridView::F_SUM,
			'pageSummary'=>true,
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
					'text-align'=>'right',
					'width'=>'80px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
			'pageSummaryOptions' => [
				'style'=>[
						'text-align'=>'right',
						'width'=>'100px',
						'font-family'=>'tahoma',
						'font-size'=>'8pt',
						//'text-decoration'=>'underline',
						//'font-weight'=>'bold',
						//'border-left-color'=>'transparant',
						'border-left'=>'0px',
				]
			],
		],
        [  	//col-8
			//SRC_DSC_PRICE -> Nominal Rupiah Per PCS PEMASUKAN/PENGELUARAN -> RW/RT1,2,3,4
			'attribute' =>'SRC_DSC_PRICE',	
			'label'=>'Harga',
			//'filter'=>$false, 			
			'hAlign'=>'left',
			'vAlign'=>'middle',	
			'format'=>['decimal',2],
			'pageSummaryFunc'=>GridView::F_SUM,
			'pageSummary'=>true,
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
					'text-align'=>'right',
					'width'=>'80px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
			'pageSummaryOptions' => [
				'style'=>[
						'text-align'=>'right',
						'width'=>'100px',
						'font-family'=>'tahoma',
						'font-size'=>'8pt',
						//'text-decoration'=>'underline',
						//'font-weight'=>'bold',
						//'border-left-color'=>'transparant',
						'border-left'=>'0px',
				]
			],
		],
		[	//COL-9
			'class'=>'kartik\grid\FormulaColumn',
			'header'=>'Sub.total',
			'mergeHeader'=>true,
			'vAlign'=>'middle',
			'hAlign'=>'right',
			//'width'=>'7%',
			'value'=>function ($model, $key, $index, $widget) {
				$p = compact('model', 'key', 'index');
				/*Formula Round Unit/harga pcs -ptr.nov-*/
				//return $widget->col(6, $p) != 0 ? $widget->col(6, $p) * round($model->UNIT_QTY  * $widget->col(8, $p),0,PHP_ROUND_HALF_UP): 0;
				return $widget->col(7, $p) != 0 ? round($widget->col(7, $p) * $widget->col(8, $p),0,PHP_ROUND_HALF_UP): 0;
				//return $widget->col(3, $p) != 0 ? $widget->col(5 ,$p) * 100 / $widget->col(3, $p) : 0;
			},
			'headerOptions'=>[
				//'class'=>'kartik-sheet-style'
				'style'=>[
					'text-align'=>'center',
					'width'=>'150px',
					'font-family'=>'tahoma',
					'font-size'=>'8pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
						'text-align'=>'right',
						'width'=>'150px',
						'font-family'=>'tahoma',
						'font-size'=>'8pt',
				]
			],
			'pageSummaryFunc'=>GridView::F_SUM,
			'pageSummary'=>true,
			'format'=>['decimal',2],			
			'pageSummaryOptions' => [
				'style'=>[
						'text-align'=>'right',
						'width'=>'100px',
						'font-family'=>'tahoma',
						'font-size'=>'8pt',
						//'text-decoration'=>'underline',
						//'font-weight'=>'bold',
						//'border-left-color'=>'transparant',
						'border-left'=>'0px',
				]
			],
			'footer'=>true,
		],
		[  	//col-10
			//SRC_DSC_DETAIL -> Keterangan Detail PEMASUKAN/PENGELUARAN -> RW/RT1,2,3,4
			'attribute' =>'SRC_DSC_DETAIL',	
			'label'=>'Ket.Detail',
			'filter'=>false, 	
			'noWrap'=>true,		
			'mergeHeader'=>true,				
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
					'text-align'=>'right',
					'width'=>'150px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
			
		],
		[  	//col-10
			//STATUS -> closing/open
			'attribute' =>'STATUS',	
			'label'=>'Status',
			'filter'=>false, 	
			'format' => 'html',
			'value'=>function ($model, $key, $index, $widget) {
						return sttPembukuan($model);
			},	
			'mergeHeader'=>true,
			'hAlign'=>'left',
			'vAlign'=>'middle',	
			'headerOptions'=>[
				'style'=>[
					'text-align'=>'center',
					'width'=>'100px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
					'background-color'=>'rgba(0, 95, 218, 0.3)',
				]
			],
			'contentOptions'=>[
				'style'=>[
					'text-align'=>'right',
					'width'=>'100px',
					'font-family'=>'tahoma, arial, sans-serif',
					'font-size'=>'9pt',
				]
			],
		],
		[
			'class'=>'kartik\grid\ActionColumn',
			'dropdown' => true,
			'template' => '{view}{edit}{delete}',
			'dropdownOptions'=>['class'=>'pull-right dropup'],
			'buttons' => [
					'view' =>function($url, $model, $key){
							return  '<li>' .Html::a('<span class="fa fa-eye fa-dm"></span>'.Yii::t('app', 'View'),
														['/dashboard/pembukuan-harian/view','id'=>$model->ID],[	
														'data-toggle'=>"modal",
														'data-target'=>"#modal-view",														
														'data-title'=> 'RT0'.$model->SRC_DSC_REF,
														]). '</li>' . PHP_EOL;
					},
					'edit' =>function($url, $model, $key){
							return  '<li>' . Html::a('<span class="fa fa-edit fa-dm"></span>'.Yii::t('app', 'Edit'),
														['/dashboard/pembukuan-harian/edit','id'=>$model->ID],[	
														'data-toggle'=>"modal",
														'data-target'=>"#modal-edit",														
														'data-title'=> 'RT0'.$model->SRC_DSC_REF,
														]). '</li>' . PHP_EOL;					
					},
					'delete' =>function($url, $model, $key){
						return  '<li>' .Html::a('<span class="fa fa-remove fa-dm"></span>'.Yii::t('app', 'delete'),
													['/dashboard/pembukuan-harian/delete','id'=>$model->ID],[
													'data-method'=>'post',
													//'data-toggle'=>"modal",
													//'data-target'=>"#modal-del",
													//'data-title'=>$model->KK_NM,
													'data-confirm'=>'Anda yakin ingin menghapus data warga '. $model->SRC_DSC_REF.' ?',
													]). '</li>' . PHP_EOL;
					},					
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
           
    ];


	$pembukuan=GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		'filterRowOptions'=>['style'=>'background-color:rgba(0, 95, 218, 0.3); align:center'],
		'beforeHeader'=>[
			[
				'columns'=>[
					['content'=>'Detail', 'options'=>['colspan'=>7, 'class'=>'text-center success']],
					['content'=>'Harga', 'options'=>['colspan'=>3, 'class'=>'text-center success']],
					['content'=>'Keterangan', 'options'=>['colspan'=>3, 'class'=>'text-center success']],
				],
				'options'=>['class'=>'skip-export'] // remove this row from export
			]
		],
		'showPageSummary' => true,
		'columns' =>$clmPembukuan,
		'pjax'=>true,
		'pjaxSettings'=>[
			'options'=>[
				'enablePushState'=>false,
				'id'=>'gv-data-warga',
			   ],
		],
		'panel' => [
					'heading'=>'<h3 class="panel-title">PEMBUKUAN HARIAN</h3>',
					//'type'=>'warning',
					'before'=> Html::a('<i class="glyphicon glyphicon-plus"></i> '.Yii::t('app', 'Tambah Data ',
							['modelClass' => 'Kategori',]),'/dashboard/pembukuan-harian/create',[
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
				echo $pembukuan;
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
      	'header' => '<div style="float:left;margin-right:10px" class="fa fa-2x fa-book"></div><div><h4 class="modal-title">Masukan Data</h4></div>',
		'headerOptions'=>[								
				'style'=> 'border-radius:5px; background-color: rgba(0, 95, 218, 0.3)',	
		],
    ]);
    Modal::end();
	
	
	$this->registerJs("
         $('#modal-view').on('show.bs.modal', function (event) {
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
        'id' => 'modal-view',
      	'header' => '<div style="float:left;margin-right:10px" class="fa fa-2x fa-book"></div><div><h4 class="modal-title">View Data Warga</h4></div>',
		'headerOptions'=>[								
				'style'=> 'border-radius:5px; background-color: rgba(0, 95, 218, 0.3)',	
		],
    ]);
    Modal::end();
	
	$this->registerJs("
         $('#modal-edit').on('show.bs.modal', function (event) {
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
        'id' => 'modal-edit',
      	'header' => '<div style="float:left;margin-right:10px" class="fa fa-2x fa-book"></div><div><h4 class="modal-title">Edit Data Warga</h4></div>',
		'headerOptions'=>[								
				'style'=> 'border-radius:5px; background-color: rgba(0, 95, 218, 0.3)',	
		],
    ]);
    Modal::end();

?>
