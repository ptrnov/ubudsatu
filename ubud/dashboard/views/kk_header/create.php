<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Kk_header */

$this->title = 'Create Kk Header';
$this->params['breadcrumbs'][] = ['label' => 'Kk Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kk-header-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
