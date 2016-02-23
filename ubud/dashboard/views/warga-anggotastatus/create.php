<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Warga_anggota_status */

$this->title = 'Create Warga Anggota Status';
$this->params['breadcrumbs'][] = ['label' => 'Warga Anggota Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warga-anggota-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
