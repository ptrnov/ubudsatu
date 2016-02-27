<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan_type */

$this->title = 'Create Pembukuan Type';
$this->params['breadcrumbs'][] = ['label' => 'Pembukuan Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembukuan-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
