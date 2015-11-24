<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property integer $id
 * @property string $name
 * @property integer $agenda_date
 * @property string $place
 * @property string $result
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'agenda_date', 'place', 'result'], 'required'],
            [['agenda_date'], 'integer'],
            [['result'], 'string'],
            [['name', 'place'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'agenda_date' => 'Agenda Date',
            'place' => 'Place',
            'result' => 'Result',
        ];
    }
}
