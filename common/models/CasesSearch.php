<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Cases;

/**
 * CasesSearch represents the model behind the search form about `common\models\Cases`.
 */
class CasesSearch extends Cases
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'case_date', 'case_type_id', 'agency_id', 'subject_id', 'chronology_id'], 'integer'],
            [['name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cases::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'case_date' => $this->case_date,
            'case_type_id' => $this->case_type_id,
            'agency_id' => $this->agency_id,
            'subject_id' => $this->subject_id,
            'chronology_id' => $this->chronology_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
