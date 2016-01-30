<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Kk_header */

$this->title = 'Update Kk Header: ' . ' ' . $model->id_kk;
$this->params['breadcrumbs'][] = ['label' => 'Kk Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kk, 'url' => ['view', 'id' => $model->id_kk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kk-header-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
