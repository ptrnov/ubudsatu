<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan_type */

$this->title = 'Update Pembukuan Type: ' . ' ' . $model->TYPE_ID;
$this->params['breadcrumbs'][] = ['label' => 'Pembukuan Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->TYPE_ID, 'url' => ['view', 'id' => $model->TYPE_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pembukuan-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
