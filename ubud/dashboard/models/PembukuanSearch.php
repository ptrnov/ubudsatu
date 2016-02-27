<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Pembukuan;

/**
 * PembukuanSearch represents the model behind the search form about `ubud\dashboard\models\Pembukuan`.
 */
class PembukuanSearch extends Pembukuan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'TYPE', 'CHILD', 'SRC_DSC_QTY', 'STATUS'], 'integer'],
            [['TGL', 'SRC', 'SRC_DSC_REF', 'SRC_DSC', 'SRC_DSC_DETAIL', 'KETERANGAN', 'CREATED_BY', 'UPDATED_BY', 'CREATED_AT', 'UPDATED_TIME'], 'safe'],
            [['SRC_DSC_PRICE'], 'number'],
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
        $query = Pembukuan::find();

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
            'TYPE' => $this->TYPE,
            'CHILD' => $this->CHILD,
            'SRC_DSC_QTY' => $this->SRC_DSC_QTY,
            'SRC_DSC_PRICE' => $this->SRC_DSC_PRICE,
            'STATUS' => $this->STATUS,
            'CREATED_AT' => $this->CREATED_AT,
            'UPDATED_TIME' => $this->UPDATED_TIME,
        ]);

        $query->andFilterWhere(['like', 'SRC', $this->SRC])
            ->andFilterWhere(['like', 'SRC_DSC_REF', $this->SRC_DSC_REF])
            ->andFilterWhere(['like', 'SRC_DSC', $this->SRC_DSC])
            ->andFilterWhere(['like', 'SRC_DSC_DETAIL', $this->SRC_DSC_DETAIL])
            ->andFilterWhere(['like', 'KETERANGAN', $this->KETERANGAN])
            ->andFilterWhere(['like', 'CREATED_BY', $this->CREATED_BY])
            ->andFilterWhere(['like', 'UPDATED_BY', $this->UPDATED_BY]);

        return $dataProvider;
    }
}
