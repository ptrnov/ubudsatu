<?php
namespace common\components;
use yii\base\Component;
use yii\helpers\Html;
use kartik\grid\GridView;
use Yii;

use ubud\dashboard\models\Pembukuan;

class esmcode extends Component	{
	
	/* ----------------- Kode Barang ESM */
	public function kode_ref()
    {
		if (!Yii::$app->user->isGuest){
			$thn = date('Y');
			$bln = date('m');
			$state=Yii::$app->user->identity->warga;//=='rw11'? Yii::$app->user->identity->warga:'RT'.Yii::$app->user->identity->warga;
			$model = new Pembukuan();
			$ck = Pembukuan::find()->select('SRC_DSC_REF')->where('SRC="'.$state.'"')->orderBy(['ID'=>SORT_DESC])->one();
			if(count($ck) == 0){ $nkd = 1; } else { $kd = explode('.',$ck->SRC_DSC_REF); $nkd = $kd[3]+1; }
			$kd = $state.".".$thn.".".$bln.".".str_pad( $nkd, "4", "0", STR_PAD_LEFT );			
			return $kd;
		}
		
	}	
}
