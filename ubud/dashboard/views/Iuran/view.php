<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Iuran */

$this->title = $model->id_iuran_kk;
$this->params['breadcrumbs'][] = ['label' => 'Iurans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iuran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_iuran_kk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_iuran_kk], [
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
            'id_iuran_kk',
            'id_kk',
            'tgl_iuran_kk',
            'nilai_iuran_kk',
            'ket_iuran_kk',
            'status_iuran_kk',
        ],
    ]) ?>

</div>
