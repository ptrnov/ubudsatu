<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Rw */

$this->title = 'Update Rw: ' . ' ' . $model->id_rw;
$this->params['breadcrumbs'][] = ['label' => 'Rws', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rw, 'url' => ['view', 'id' => $model->id_rw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rw-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
