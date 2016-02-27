<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan_child */

$this->title = 'Update Pembukuan Child: ' . ' ' . $model->CHILD_ID;
$this->params['breadcrumbs'][] = ['label' => 'Pembukuan Children', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CHILD_ID, 'url' => ['view', 'id' => $model->CHILD_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembukuan-child-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
