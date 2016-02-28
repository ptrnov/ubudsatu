<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\PembukuanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembukuan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'TGL') ?>

    <?= $form->field($model, 'TYPE') ?>

    <?= $form->field($model, 'CHILD') ?>

    <?= $form->field($model, 'SRC') ?>

    <?php // echo $form->field($model, 'SRC_DSC_REF') ?>

    <?php // echo $form->field($model, 'SRC_DSC') ?>

    <?php // echo $form->field($model, 'SRC_DSC_QTY') ?>

    <?php // echo $form->field($model, 'SRC_DSC_PRICE') ?>

    <?php // echo $form->field($model, 'SRC_DSC_DETAIL') ?>

    <?php // echo $form->field($model, 'KETERANGAN') ?>

    <?php // echo $form->field($model, 'STATUS') ?>

    <?php // echo $form->field($model, 'CREATED_BY') ?>

    <?php // echo $form->field($model, 'UPDATED_BY') ?>

    <?php // echo $form->field($model, 'CREATED_AT') ?>

    <?php // echo $form->field($model, 'UPDATED_TIME') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
