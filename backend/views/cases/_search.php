<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CasesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cases-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'case_date') ?>

    <?= $form->field($model, 'case_type_id') ?>

    <?= $form->field($model, 'agency_id') ?>

    <?php // echo $form->field($model, 'subject_id') ?>

    <?php // echo $form->field($model, 'chronology_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
