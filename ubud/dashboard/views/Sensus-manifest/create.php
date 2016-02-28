<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Sensus_manifest */

$this->title = 'Create Sensus Manifest';
$this->params['breadcrumbs'][] = ['label' => 'Sensus Manifests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sensus-manifest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
