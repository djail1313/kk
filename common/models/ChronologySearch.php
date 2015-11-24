<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Chronology;

/**
 * ChronologySearch represents the model behind the search form about `common\models\Chronology`.
 */
class ChronologySearch extends Chronology
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'chronology_date'], 'integer'],
            [['place', 'description'], 'safe'],
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
        $query = Chronology::find();

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
            'chronology_date' => $this->chronology_date,
        ]);

        $query->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
