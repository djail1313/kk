<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cases".
 *
 * @property integer $id
 * @property string $name
 * @property integer $case_date
 * @property integer $case_type_id
 * @property integer $agency_id
 * @property integer $subject_id
 * @property integer $chronology_id
 */
class Cases extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cases';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'case_date', 'case_type_id', 'agency_id', 'subject_id', 'chronology_id'], 'required'],
            [['case_date', 'case_type_id', 'agency_id', 'subject_id', 'chronology_id'], 'integer'],
            [['name'], 'string', 'max' => 255]
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
            'case_date' => 'Case Date',
            'case_type_id' => 'Case Type ID',
            'agency_id' => 'Agency ID',
            'subject_id' => 'Subject ID',
            'chronology_id' => 'Chronology ID',
        ];
    }
}
