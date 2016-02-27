<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\PembukuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembukuans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembukuan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pembukuan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'TGL',
            'TYPE',
            'CHILD',
            'SRC',
            // 'SRC_DSC_REF',
            // 'SRC_DSC',
            // 'SRC_DSC_QTY',
            // 'SRC_DSC_PRICE',
            // 'SRC_DSC_DETAIL:ntext',
            // 'KETERANGAN:ntext',
            // 'STATUS',
            // 'CREATED_BY',
            // 'UPDATED_BY',
            // 'CREATED_AT',
            // 'UPDATED_TIME',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
