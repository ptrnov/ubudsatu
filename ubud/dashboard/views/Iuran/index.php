<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\IuranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Iurans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iuran-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Iuran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_iuran_kk',
            'id_kk',
            'tgl_iuran_kk',
            'nilai_iuran_kk',
            'ket_iuran_kk',
            // 'status_iuran_kk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
