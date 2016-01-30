<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Iuran */

$this->title = 'Update Iuran: ' . ' ' . $model->id_iuran_kk;
$this->params['breadcrumbs'][] = ['label' => 'Iurans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_iuran_kk, 'url' => ['view', 'id' => $model->id_iuran_kk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="iuran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
