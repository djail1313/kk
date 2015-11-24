<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $name
 * @property string $position
 * @property double $nominal
 * @property integer $shortfall_penalty
 * @property double $penalty
 * @property string $disenfranchisement
 * @property integer $progress_id
 * @property integer $agenda_id
 * @property integer $status_id
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'position', 'nominal', 'shortfall_penalty', 'penalty', 'disenfranchisement', 'progress_id', 'agenda_id', 'status_id'], 'required'],
            [['nominal', 'penalty'], 'number'],
            [['shortfall_penalty', 'progress_id', 'agenda_id', 'status_id'], 'integer'],
            [['disenfranchisement'], 'string'],
            [['name', 'position'], 'string', 'max' => 255]
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
            'position' => 'Position',
            'nominal' => 'Nominal',
            'shortfall_penalty' => 'Shortfall Penalty',
            'penalty' => 'Penalty',
            'disenfranchisement' => 'Disenfranchisement',
            'progress_id' => 'Progress ID',
            'agenda_id' => 'Agenda ID',
            'status_id' => 'Status ID',
        ];
    }
}
