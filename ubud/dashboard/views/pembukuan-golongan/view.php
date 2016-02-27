<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan_golongan */

$this->title = $model->GOL_ID;
$this->params['breadcrumbs'][] = ['label' => 'Pembukuan Golongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembukuan-golongan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->GOL_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->GOL_ID], [
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
            'GOL_ID',
            'GOL_NM',
            'GOL_KET:ntext',
            'PRICE',
            'SRC',
            'STATUS',
            'CREATED_BY',
            'UPDATED_BY',
            'CREATED_AT',
            'UPDATED_TIME',
        ],
    ]) ?>

</div>
