<?php

namespace ubud\front\controllers;

use yii\web\Controller;

class GaleriController extends Controller
{
    public function actionIndex()
    {
		/* if($id=='lg'){
			$corp="PT. Lukison Group";
		}elseif ($id=='sss'){
			$corp="PT. Sarana Sinar Surya";
		}elseif ($id=='esm'){
			$corp="PT. Effembi Sukses Makmur";
		}elseif ($id=='alg'){
			$corp="PT. Artha Lipat Ganda";
		}*/		
        return $this->render('index'); 
    }
}
