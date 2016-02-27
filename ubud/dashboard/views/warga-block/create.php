<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_block */

$this->title = 'Create Warga Block';
$this->params['breadcrumbs'][] = ['label' => 'Warga Blocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warga-block-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
