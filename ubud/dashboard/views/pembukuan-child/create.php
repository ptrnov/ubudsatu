<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan_child */

$this->title = 'Create Pembukuan Child';
$this->params['breadcrumbs'][] = ['label' => 'Pembukuan Children', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembukuan-child-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
