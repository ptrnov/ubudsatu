<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Rw */

$this->title = $model->id_rw;
$this->params['breadcrumbs'][] = ['label' => 'Rws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rw-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_rw], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_rw], [
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
            'id_rw',
            'no_rw',
            'ket_rw',
            'id_ketua_rt',
        ],
    ]) ?>

</div>
