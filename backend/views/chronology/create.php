<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Chronology */

$this->title = 'Create Chronology';
$this->params['breadcrumbs'][] = ['label' => 'Chronologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chronology-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
