<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model ubud\dashboard\models\Pembukuan_child */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembukuan-child-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TYPE_ID')->textInput() ?>

    <?= $form->field($model, 'CHILD_NM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SRC')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
