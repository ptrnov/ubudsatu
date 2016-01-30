<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Rt */

$this->title = $model->id_rt;
$this->params['breadcrumbs'][] = ['label' => 'Rts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_rt], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_rt], [
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
            'id_rt',
            'id_rw',
            'no_rt',
            'ket_rt',
            'id_ketua_rt',
        ],
    ]) ?>

</div>
