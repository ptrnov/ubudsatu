<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan */

//$this->title = 'Update Pembukuan: ' . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Pembukuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembukuan-update">

   
    <?= $this->render('_form_edit', [
        'model' => $model,
    ]) ?>

</div>
