<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Kk_detail */

$this->title = 'Create Kk Detail';
$this->params['breadcrumbs'][] = ['label' => 'Kk Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kk-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
