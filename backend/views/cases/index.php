<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CasesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cases-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cases', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'case_date',
            'case_type_id',
            'agency_id',
            // 'subject_id',
            // 'chronology_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
