<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Rw */

$this->title = 'Create Rw';
$this->params['breadcrumbs'][] = ['label' => 'Rws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rw-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
