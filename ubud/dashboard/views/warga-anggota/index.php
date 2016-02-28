<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\Warga_anggotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Warga Anggotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warga-anggota-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Warga Anggota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'NO_WARGA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
