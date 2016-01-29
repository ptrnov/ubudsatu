<?php
use kartik\icons\Icon;
use kartik\nav\NavX;
use kartik\sidenav\SideNav;
use yii\bootstrap\NavBar;
use kartik\helpers\Html;
use yii\bootstrap\Carousel;
use yii\bootstrap\Modal;
use ubud\assets\AppAsset_front;
AppAsset_front::register($this);
?>

<?php $this->beginBody('class="home"'); ?>  
		
			<div class="container">
				
				<?php
					// echo  \yii\helpers\Json::encode($menuItems);
					if (Yii::$app->user->isGuest) {
						//$menuItemsNoLogin[] = ['label' => '<a data-toggle="modal" data-target="#modal" style="cursor: pointer">Click me gently!</a>' , 'url'=> ['/site/login5']];
						$menuItemsNoLogin[] = ['label' =>'', 'url' => ['#']];						
						$menuItemsNoLogin[] = ['label' =>'Home', 'url' => ['/site/index']];						
						$menuItemsNoLogin[] = ['label' => 'Struktur', 'url' => ['/front/struktur/index']];
						$menuItemsNoLogin[] = ['label' => 'Galery', 'url' => ['/front/galeri/index']];
						$menuItemsNoLogin[] = ['label' => 'Contact Us', 'url' => ['/front/contact/index']];
						$menuItemsNoLogin[] = ['label' => '<div class="btn">LOGIN</div>', 'url' => ['/site/login'],];
						?>
						<div class="navbar navbar-inverse navbar-fixed-top headroom" ></div>
						<?php
						NavBar::begin([
							//'brandLabel' => '<img src="http://ubud.com/logo.png" class="navbar-fixed-top" style="width:120px; height:90px; margin-left:80px; margin-top:10px"/>'.'<div class=" navbar-fixed-top pull-right" style="margin-left:20%; margin-top:10px; color:black"><h5>Under Maintenance !!</h5> </div>',//.'<div class=" navbar-fixed-top pull-right" style="margin-left:20%; margin-top:10px; color:black"><h5>info@lukison.com / Support: 021888888</h5> </div>',
							'brandLabel' => '<img src="http://ubudsatu.com/upload/logo/ubudsatu.png" class="navbar-fixed-top" style="width:115px; height:115px; margin-left:50px; margin-top:10px;"/>',//.'<div class=" navbar-fixed-top pull-right" style="margin-left:20%; margin-top:10px; color:black"><h5>CRM Under Maintenance !!</h5> </div>',//.'<div class=" navbar-fixed-top pull-right" style="margin-left:20%; margin-top:10px; color:black"><h5>info@lukison.com / Support: 021888888</h5> </div>',
								
							//'<div style="margin-left:50px"><img src="http://ubud.com/favicon.ico"/>LukisonGroup</div>',
							//'brandUrl' => Yii::$app->homeUrl,
							'options' => [
								   'class' =>  'navbar navbar-inverse navbar-fixed-top headroom',
							],
						]);
						
						echo NavX::widget([
							'options' => ['class' => 'nav navbar-nav pull-right active'],
							'items' => $menuItemsNoLogin,
							'activateParents' => true,
							'encodeLabels' => false,
						]);
						NavBar::end();
					};
				?>
								
			</div>
			<!-- MENU SECTION END-->
			<div style="margin-top:100px">
			<?php echo $content; ?>		
			<div>
		
		
	
<?php $this->endBody() ?>