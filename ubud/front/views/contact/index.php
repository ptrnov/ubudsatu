<?php
/* @var $this yii\web\View */
use kartik\helpers\Html;
$this->title = 'contact-ubudsatu.com';
?>


<div class="content">
			<div class="content">					
				
				 <div class="row">
					<div class="col-md-12">
						<h4 class="page-head-line">CONTACT</h4>			
						<?php
							 echo Html::well(Html::address(
							'DUTA BINTARO, Cluster Ubud Satu',
							 ['Kelurahan Kunciran, Kecamatan Pinang','Tangerang.'],
							 ['Tel ' => '(021) '],
							 ['Fax ' => '(021) '],
							 ['Website : ' => 'www.ubudsatu.com', 'Email' => 'ubudsatu@gmail.com']
							), Html::SIZE_TINY); 
						?>		
				</div>
				 	
			</div>				
		</div>
</div>
