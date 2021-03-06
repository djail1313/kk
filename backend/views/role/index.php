<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\UserGroup;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RoleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Role', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'group_id',
                'value'=>'userGroup.name',
                'filter'=>ArrayHelper::map(UserGroup::find()->asArray()->all(),'id','name')
            ],
            'app',
            'controller',
            'action',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
