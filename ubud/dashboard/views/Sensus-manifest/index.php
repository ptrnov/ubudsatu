<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\Sensus_manifestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sensus Manifests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sensus-manifest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sensus Manifest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'TGL',
            'SRC',
            'KK_ID',
            'STATUS_APPROVED',
            // 'CREATED_BY',
            // 'UPDATED_BY',
            // 'CREATED_AT',
            // 'UPDATED_TIME',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
