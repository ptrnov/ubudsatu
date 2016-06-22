<?php
/* @var $this yii\web\View */

$this->title = 'lukisongroup';

$idData=$id=='11'? 'RW.'.$id: 'RT'.'.0'.$id;

?>


<div class="content">			
	 <div class="row">
		<div class="col-md-12">						
			<h4 class="page-head-line">Summary Report </h4>
			<p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="box direct-chat direct-chat">
			 <!-- box-header -->
				<div class="box-header" style="background-color:rgba(218, 229, 252, 0.6);font-family:tahoma, arial, sans-serif;font-size:9pt">
					<!--<div class="box-title" style="color:blue;font-family:tahoma, arial, sans-serif;font-size:9pt"><b> DATA KK <?=$idData?></b></div>!-->
					<div style="font-family:tahoma, arial, sans-serif;font-size:9pt"><span class="fa fa-group"></span><b> DATA KK <?=$idData?></b></div>
					<div class="box-tools pull-left">
						<!--<span data-toggle="tooltip" title="3 New Messages" class="badge bg-green">3</span>-->
						<button data-toggle="tooltip" title="show/hide" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button data-toggle="tooltip" title="Summary" data-widget="chat-pane-toggle"><i class="fa fa-info"></i></button>
						<!-- <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
					</div>
				</div><!-- /.box-header -->
				<div class="box-body">
					<!-- Conversations are loaded here -->
					<div class="direct-chat-messages" style="height:800px;font-family:tahoma, arial, sans-serif;font-size:9pt">
						<!-- Message. Default to the left -->
							 <!--<div class="raw" style="min-height:70px;max-height:auto">!-->
							 <div class="raw" style="min-height:70px;max-height:auto">
								<?php
									//print_r($dpDataProvider);
									$rptDatawarga=$this->render('_rptDatawarga',[
										'idData'=>$idData,
										'model'=>$model,
										'dpDataProvider'=>$dpDataProvider
									]);
								?>
								<?=$rptDatawarga?>	
							</div>
						<!-- Message to the right -->
					</div><!--/.direct-chat-messages-->
					<!-- Contacts are loaded here -->
					<div class="direct-chat-contacts" style="height:800px;color:black;background-color:white;font-family:tahoma, arial, sans-serif;font-size:9pt">
						<ul class="contacts-list">
							<li>
								<div class="raw">
									<?php
										$infoDatawarga=$this->render('_infoDatawarga',[
											'idData'=>$idData,
											'id'=>$id,
											'model'=>$model,
										]);
									?>
									<?=$infoDatawarga?>										
								</div>
							</li><!-- End Contact Item -->
						</ul><!-- /.contatcts-list -->
					</div><!-- /.direct-chat-pane -->
				</div><!-- /.box-body -->
			</div><!--/.direct-chat -->
		</div>	
		
		<!-- SUMARRY DATA KEUANGAN !-->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="box direct-chat direct-chat">
			 <!-- box-header -->
				<div class="box-header" style="background-color:rgba(218, 229, 252, 0.6);font-family:tahoma, arial, sans-serif;font-size:9pt">
					<div class="box-title" style="color:blue;font-family:tahoma, arial, sans-serif;font-size:9pt"><b> DATA KEUANGAN <?=$idData?></b></div>
					<div class="box-tools pull-left">
						<button data-toggle="tooltip" title="show/hide" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button data-toggle="tooltip" title="Calendar" data-widget="chat-pane-toggle"><i class="fa fa-calendar"></i></button>
						</div>
				</div><!-- /.box-header -->
				<div class="box-body">
					<!-- Conversations are loaded here -->
					<div class="direct-chat-messages" style="height:100%;font-family:tahoma, arial, sans-serif;font-size:9pt">
						<!-- Message. Default to the left -->
							 <div class="raw">
								ON PROGRESS NEXT
							</div>
						<!-- Message to the right -->
					</div><!--/.direct-chat-messages-->
					<!-- Contacts are loaded here -->
					<div class="direct-chat-contacts" style="height:100%; color:black;background-color:rgba(90, 130, 162, 0.7);font-family:tahoma, arial, sans-serif;font-size:9pt">
						<ul class="contacts-list">
							<li>
								<div class="raw">
									<!-- INSIDE ANALIZE !-->
								</div>
							</li><!-- End Contact Item -->
						</ul><!-- /.contatcts-list -->
					</div><!-- /.direct-chat-pane -->
				</div><!-- /.box-body -->
			</div><!--/.direct-chat -->
		</div>		
	</div>
</div>
