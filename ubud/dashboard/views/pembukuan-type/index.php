<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\Pembukuan_typeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembukuan Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembukuan-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pembukuan Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TYPE_ID',
            'TYPE_NM',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
