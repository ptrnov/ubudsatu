<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_data */

$this->title = 'Update Warga Data: ' . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Warga Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warga-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
