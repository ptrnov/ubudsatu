<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel ubud\dashboard\models\Pembukuan_childSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembukuan Children';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembukuan-child-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pembukuan Child', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CHILD_ID',
            'TYPE_ID',
            'CHILD_NM',
            'SRC',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
