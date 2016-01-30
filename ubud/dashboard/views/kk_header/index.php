<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\Kk_headerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kk Headers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kk-header-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kk Header', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kk',
            'nama_kk',
            'alamat_kk',
            'status_kk',
            'jml_kk',
            // 'ket_kk',
            // 'id_rt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
