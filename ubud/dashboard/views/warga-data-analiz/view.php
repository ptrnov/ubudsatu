<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_data */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Warga Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warga-data-view">

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
            'RT',
            'KK_NM',
            'RUMAH_BLOCK',
            'RUMAH_NO',
            'RUMAH_STT',
            'JUMLAH_ANGOTA',
            'TLP_RUMAH',
            'TLP_KANTOR',
            'TLP_HP',
        ],
    ]) ?>

</div>
