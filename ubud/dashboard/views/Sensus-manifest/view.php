<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Sensus_manifest */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Sensus Manifests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sensus-manifest-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'TGL',
            'SRC',
            'KK_ID',
            'STATUS_APPROVED',
            'CREATED_BY',
            'UPDATED_BY',
            'CREATED_AT',
            'UPDATED_TIME',
        ],
    ]) ?>

</div>
