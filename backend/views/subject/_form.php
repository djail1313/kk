<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Subject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nominal')->textInput() ?>

    <?= $form->field($model, 'shortfall_penalty')->textInput() ?>

    <?= $form->field($model, 'penalty')->textInput() ?>

    <?= $form->field($model, 'disenfranchisement')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'progress_id')->textInput() ?>

    <?= $form->field($model, 'agenda_id')->textInput() ?>

    <?= $form->field($model, 'status_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
