<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Iuran */

$this->title = 'Create Iuran';
$this->params['breadcrumbs'][] = ['label' => 'Iurans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iuran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
