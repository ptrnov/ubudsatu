<?php
use ubud\sistem\models\Userlogin;
/*
 * Login Dashboard user Permission
 * login user account berdasarkan POSITION_LOGIN
 * 1 = Salesman
 * 2 = SPG
 * 3 = Customer
 * 4 = Distributor
 * 5 = Factory/Pabrik
 * 6 = Outsorce
 * Logic if (POSITION_LOGIN==1){}
*/

/* $model = Userlogin::findOne(Yii::$app->user->identity->id); */
 $model=Yii::$app->getUserOptubud->Profile_user();
 //print_r($model);
if (count($model)<>0){
	//$Val_Corp='none'
	if($model->POSITION_LOGIN==0){
		include('_index_rw.php');		
	}elseif($model->POSITION_LOGIN==1){
		include('_index_rt1.php');
	}elseif($model->POSITION_LOGIN==2){
		include('_index_rt2.php');
	}elseif($model->POSITION_LOGIN==3){
		include('_index_rt3.php');
	}elseif($model->POSITION_LOGIN==4){
		include('_index_rt4.php');
	}
}

//include('_index_salespromo.php');
//include('_index_salesman.php');
//include('_index_customer.php');

?>