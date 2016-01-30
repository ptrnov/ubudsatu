<?php
/* @var $this yii\web\View */
use kartik\helpers\Html;
use yii\bootstrap\Carousel;

$this->title = 'ubud-satu.com';
?>
<div class="content" style="margin-bottom:5px">
	      <div class="container">
			<div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">RW 011, UBUD-SATU</h4>
                </div>
            </div>		
			<div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        Tetangga adalah orang yang paling dekat dengan kita, bisa jadi bagian dari keluarga kita. Di saat kita sakit atau terkena musibah, merekalah orang terdekat yang bisa menolong. Oleh karena itu, jalinlah hubungan harmonis dengan tetangga, hindari pertikaian, apalagi tidak ingin saling mengenal.
                    </div>
                </div>
            </div>			
			<div class="row">
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="dashboard-div-icon" >RT01</i>
                        <div class="progress progress-striped active">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							</div>
                           
						</div>
                         <h5>RT SATU</h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two" >
                        <i  class="dashboard-div-icon" >RT02</i>
                        <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
						  </div>												   
						</div>
                         <h5>RT DUA</h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="dashboard-div-icon" >RT03</i>
                        <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						  </div>
												   
						</div>
                         <h5>RT TIGA</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="dashboard-div-icon" >RT04</i>
                        <div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
						  </div>
												   
						</div>
                         <h5>RT EMPAT</h5>
                    </div>
                </div>

            </div>
	</div>
</div>
<?php
	$carouselEvent=Carousel::widget([
			  'items' => [						
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/event/event_1.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				  ],	
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/event/event_2.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				  ],
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/event/event_3.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				  ],				  
			  ],
			  //'options' =>[ 'style' =>'width: 100% ; height:1px;'],
	]);
	$carouselInformasi=Carousel::widget([
			  'items' => [						
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/informasi/narkoba_1.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				  ],	
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/informasi/narkoba_2.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				  ],
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/informasi/narkoba_3.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				  ],					  
			  ],
	]);
	
	$carouselArtikel=Carousel::widget([
			  'items' => [						
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/artikel/artikel_1.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				  ],	
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/artikel/artikel_2.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				  ],
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/artikel/artikel_3.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				  ],
			  ],
	]);
	
	$carouselKalenderRw=Carousel::widget([
			  'items' => [						
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/kalender_rw/ubudsatu.png', ['width'=>'150px','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 300px;'],
				  ],					
			  ],
			   //'options' =>[ 'style' =>'width: 100%!important; height: 200px;'],
	]);
	$carouselKalenderRt=Carousel::widget([
			  'items' => [						
				  [
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/kalender_rt/ubudsatu.png', ['width'=>'150px','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 300px;'],
				  ],					
			  ],
			   //'options' =>[ 'style' =>'width: 100%!important; height: 200px;'],
	]);
	$carouselKalenderOlahraga=Carousel::widget([
			  'items' => [	
				[
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/olahraga/olahraga_1.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				],
				[
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/olahraga/olahraga_2.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				],
				[
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/olahraga/olahraga_3.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				],
				[
					'content' => Html::img(Yii::$app->urlManager->baseUrl.'/upload/olahraga/olahraga_4.jpg', ['width'=>'100%','height'=>'100%']),
					//'options' =>[ 'style' =>'width: 100% ; height: 150px;'],
				],
				
			  ],
	]);
?>
<div class="row">
	<div class="col-md-12">
		<h4 class="page-head-line"></h4>
		<!-- Carausel !-->
		<div class="row" style="padding-left:5px;padding-right:5px">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<?php				
					echo Html::panel(
						['heading' => 'Event ', 'body' =>$carouselEvent],
						Html::TYPE_INFO
					);					
				?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<?php				
					echo Html::panel(
						['heading' => 'Informasi', 'body' =>$carouselInformasi],
						Html::TYPE_DANGER
					);					
				?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<?php				
					echo Html::panel(
						['heading' => 'Artikel', 'body' =>$carouselArtikel],
						Html::TYPE_WARNING
					);					
				?>
			</div>
		</div>	
	</div>
	
	
	<div class="col-md-12">
		<h4 class="page-head-line"></h4>
	</div>
	<div class="col-md-12">
		<div class="row" style="padding-left:5px;padding-right:5px">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<?php				
					echo Html::panel(
						['heading' => 'Olahraga', 'body' =>$carouselKalenderOlahraga],
						Html::TYPE_INFO
					);					
				?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" >
				<?php				
					echo Html::panel(
						['heading' => 'Kalender RW ', 'body' =>$carouselKalenderRw],
						Html::TYPE_DANGER
					);					
				?>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<?php				
					echo Html::panel(
						['heading' => 'Kalender RT', 'body' =>$carouselKalenderRw],
						Html::TYPE_WARNING
					);					
				?>
			</div>
			
		</div>
	</div>
</div>