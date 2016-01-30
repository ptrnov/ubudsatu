<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\RtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_rt',
            'id_rw',
            'no_rt',
            'ket_rt',
            'id_ketua_rt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
