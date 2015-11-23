<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property integer $id
 * @property string $app
 * @property string $controller
 * @property string $action
 * @property integer $group_id
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['app', 'controller', 'action', 'group_id'], 'required'],
            [['group_id'], 'integer'],
            [['app', 'controller', 'action'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'app' => 'App',
            'controller' => 'Controller',
            'action' => 'Action',
            'group_id' => 'Group ID',
        ];
    }
}
