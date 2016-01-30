<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Rt */

$this->title = 'Update Rt: ' . ' ' . $model->id_rt;
$this->params['breadcrumbs'][] = ['label' => 'Rts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rt, 'url' => ['view', 'id' => $model->id_rt]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
