<?php

namespace ubud\dashboard\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
		 if (\Yii::$app->user->isGuest) {
            //return $this->render('../../../views/site/index_nologin'
			return $this->render('index');
        }
        //return $this->render('index');
    }
}
