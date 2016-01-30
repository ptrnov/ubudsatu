<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\RwSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rws';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rw-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rw', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_rw',
            'no_rw',
            'ket_rw',
            'id_ketua_rt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
