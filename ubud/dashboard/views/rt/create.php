<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Rt */

$this->title = 'Create Rt';
$this->params['breadcrumbs'][] = ['label' => 'Rts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
