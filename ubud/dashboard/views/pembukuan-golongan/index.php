<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\Pembukuan_golonganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembukuan Golongans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembukuan-golongan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pembukuan Golongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'GOL_ID',
            'GOL_NM',
            'GOL_KET:ntext',
            'PRICE',
            'SRC',
            // 'STATUS',
            // 'CREATED_BY',
            // 'UPDATED_BY',
            // 'CREATED_AT',
            // 'UPDATED_TIME',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
