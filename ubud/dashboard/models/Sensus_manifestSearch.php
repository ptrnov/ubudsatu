<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Sensus_manifest;

/**
 * Sensus_manifestSearch represents the model behind the search form about `ubud\dashboard\models\Sensus_manifest`.
 */
class Sensus_manifestSearch extends Sensus_manifest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'STATUS_APPROVED'], 'integer'],
            [['TGL', 'SRC', 'KK_ID', 'CREATED_BY', 'UPDATED_BY', 'CREATED_AT', 'UPDATED_TIME'], 'safe'],
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
        $query = Sensus_manifest::find();

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
            'ID' => $this->ID,
            'TGL' => $this->TGL,
            'STATUS_APPROVED' => $this->STATUS_APPROVED,
            'CREATED_AT' => $this->CREATED_AT,
            'UPDATED_TIME' => $this->UPDATED_TIME,
        ]);

        $query->andFilterWhere(['like', 'SRC', $this->SRC])
            ->andFilterWhere(['like', 'KK_ID', $this->KK_ID])
            ->andFilterWhere(['like', 'CREATED_BY', $this->CREATED_BY])
            ->andFilterWhere(['like', 'UPDATED_BY', $this->UPDATED_BY]);

        return $dataProvider;
    }
}
