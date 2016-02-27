<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan_childSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembukuan-child-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CHILD_ID') ?>

    <?= $form->field($model, 'TYPE_ID') ?>

    <?= $form->field($model, 'CHILD_NM') ?>

    <?= $form->field($model, 'SRC') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
