<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Pembukuan_golongan;

/**
 * Pembukuan_golonganSearch represents the model behind the search form about `ubud\dashboard\models\Pembukuan_golongan`.
 */
class Pembukuan_golonganSearch extends Pembukuan_golongan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GOL_ID', 'STATUS'], 'integer'],
            [['GOL_NM', 'GOL_KET', 'SRC', 'CREATED_BY', 'UPDATED_BY', 'CREATED_AT', 'UPDATED_TIME'], 'safe'],
            [['PRICE'], 'number'],
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
        $query = Pembukuan_golongan::find();

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
            'GOL_ID' => $this->GOL_ID,
            'PRICE' => $this->PRICE,
            'STATUS' => $this->STATUS,
            'CREATED_AT' => $this->CREATED_AT,
            'UPDATED_TIME' => $this->UPDATED_TIME,
        ]);

        $query->andFilterWhere(['like', 'GOL_NM', $this->GOL_NM])
            ->andFilterWhere(['like', 'GOL_KET', $this->GOL_KET])
            ->andFilterWhere(['like', 'SRC', $this->SRC])
            ->andFilterWhere(['like', 'CREATED_BY', $this->CREATED_BY])
            ->andFilterWhere(['like', 'UPDATED_BY', $this->UPDATED_BY]);

        return $dataProvider;
    }
}
