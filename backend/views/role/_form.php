<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\UserGroup;

/* @var $this yii\web\View */
/* @var $model common\models\Role */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="role-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $userGroups = ArrayHelper::map(UserGroup::find()->where(['status'=>10])->asArray()->all(),'id','name');?>
    <?= $form->field($model, 'group_id')->dropDownList($userGroups, ['prompt'=>'-Pilih User Group-']) ?>

    <?= $form->field($model, 'app')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'controller')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'action')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
