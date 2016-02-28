<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan */

$this->title = 'Create Pembukuan';
$this->params['breadcrumbs'][] = ['label' => 'Pembukuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembukuan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
