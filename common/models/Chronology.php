<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chronology".
 *
 * @property integer $id
 * @property integer $chronology_date
 * @property string $place
 * @property string $description
 */
class Chronology extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chronology';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chronology_date', 'place', 'description'], 'required'],
            [['chronology_date'], 'integer'],
            [['description'], 'string'],
            [['place'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'chronology_date' => 'Chronology Date',
            'place' => 'Place',
            'description' => 'Description',
        ];
    }
}
