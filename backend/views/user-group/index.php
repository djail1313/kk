<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-group-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Group', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute'=>'status',
                'value'=>function($row){
                    return $row->status===10?'Active':'Non Active';
                },
                'filter'=>ArrayHelper::map(
                    [
                        ['id'=>10,'name'=>'Active'],
                        ['id'=>0,'name'=>'Non Active']
                    ],
                    'id','name'),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
