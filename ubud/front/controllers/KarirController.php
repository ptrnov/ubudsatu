<?php

namespace ubud\front\controllers;

use yii\web\Controller;

class KarirController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
