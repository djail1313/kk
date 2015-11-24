<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Subject;

/**
 * SubjectSearch represents the model behind the search form about `common\models\Subject`.
 */
class SubjectSearch extends Subject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'shortfall_penalty', 'progress_id', 'agenda_id', 'status_id'], 'integer'],
            [['name', 'position', 'disenfranchisement'], 'safe'],
            [['nominal', 'penalty'], 'number'],
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
        $query = Subject::find();

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
            'nominal' => $this->nominal,
            'shortfall_penalty' => $this->shortfall_penalty,
            'penalty' => $this->penalty,
            'progress_id' => $this->progress_id,
            'agenda_id' => $this->agenda_id,
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'disenfranchisement', $this->disenfranchisement]);

        return $dataProvider;
    }
}
