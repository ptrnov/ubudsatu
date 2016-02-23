<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\Warga_dataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Warga Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warga-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Warga Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'RT',
            'KK_NM',
            'RUMAH_BLOCK',
            'RUMAH_NO',
            // 'RUMAH_STT',
            // 'JUMLAH_ANGOTA',
            // 'TLP_RUMAH',
            // 'TLP_KANTOR',
            // 'TLP_HP',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
