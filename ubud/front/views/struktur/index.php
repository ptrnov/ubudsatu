<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
/* @var $this yii\web\View */

$this->title = 'lukisongroup';
?>


<div class="content">				
	<div class="row">
		<div class="col-md-12">						
			<h4 class="page-head-line">Struktur Organisasi</h4>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-top:10px">
		<?php
		$strukturPengurus=$this->render('_strukturePengurus');
		$adart=$this->render('_adart');
		$items=[
			[
				'label'=>'<i class="glyphicon glyphicon-home"></i> STRUKTURE ORGANISASI','content'=>$strukturPengurus,
				//'active'=>true,

			],
			[
				'label'=>'<i class="glyphicon glyphicon-home"></i> ADART RT/RW','content'=>$adart,
			]       
		];

	echo TabsX::widget([
		'items'=>$items,
		'position'=>TabsX::POS_ABOVE,
		//'height'=>'tab-height-xs',
		//'bordered'=>true,
		'encodeLabels'=>false,
		//'align'=>TabsX::ALIGN_LEFT,

	]);
		?>
	</div>			
	
</div>
