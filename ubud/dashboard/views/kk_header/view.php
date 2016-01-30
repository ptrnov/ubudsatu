<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Kk_header */

$this->title = $model->id_kk;
$this->params['breadcrumbs'][] = ['label' => 'Kk Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kk-header-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kk], [
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
            'id_kk',
            'nama_kk',
            'alamat_kk',
            'status_kk',
            'jml_kk',
            'ket_kk',
            'id_rt',
        ],
    ]) ?>

</div>
