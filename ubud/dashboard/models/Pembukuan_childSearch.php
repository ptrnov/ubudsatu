<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Pembukuan_child;

/**
 * Pembukuan_childSearch represents the model behind the search form about `ubud\dashboard\models\Pembukuan_child`.
 */
class Pembukuan_childSearch extends Pembukuan_child
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CHILD_ID', 'TYPE_ID'], 'integer'],
            [['CHILD_NM', 'SRC'], 'safe'],
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
        $query = Pembukuan_child::find();

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
            'CHILD_ID' => $this->CHILD_ID,
            'TYPE_ID' => $this->TYPE_ID,
        ]);

        $query->andFilterWhere(['like', 'CHILD_NM', $this->CHILD_NM])
            ->andFilterWhere(['like', 'SRC', $this->SRC]);

        return $dataProvider;
    }
}
