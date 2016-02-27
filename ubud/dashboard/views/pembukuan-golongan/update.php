<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan_golongan */

$this->title = 'Update Pembukuan Golongan: ' . ' ' . $model->GOL_ID;
$this->params['breadcrumbs'][] = ['label' => 'Pembukuan Golongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GOL_ID, 'url' => ['view', 'id' => $model->GOL_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembukuan-golongan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
