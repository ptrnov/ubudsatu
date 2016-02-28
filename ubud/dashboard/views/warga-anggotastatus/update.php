<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_anggota_status */

$this->title = 'Update Warga Anggota Status: ' . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Warga Anggota Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warga-anggota-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
