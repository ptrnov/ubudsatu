<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Warga_data;

/**
 * Warga_dataSearch represents the model behind the search form about `ubud\dashboard\models\Warga_data`.
 */
class Warga_dataSearch extends Warga_data
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'RUMAH_NO', 'RUMAH_STT', 'JUMLAH_ANGOTA'], 'integer'],
            [['RT', 'KK_NM', 'RUMAH_BLOCK', 'TLP_RUMAH', 'TLP_KANTOR', 'TLP_HP'], 'safe'],
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
        $query = Warga_data::find();

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
            'RUMAH_NO' => $this->RUMAH_NO,
            'RUMAH_STT' => $this->RUMAH_STT,
            'JUMLAH_ANGOTA' => $this->JUMLAH_ANGOTA,
        ]);

        $query->andFilterWhere(['like', 'RT', $this->RT])
            ->andFilterWhere(['like', 'KK_NM', $this->KK_NM])
            ->andFilterWhere(['like', 'RUMAH_BLOCK', $this->RUMAH_BLOCK])
            ->andFilterWhere(['like', 'TLP_RUMAH', $this->TLP_RUMAH])
            ->andFilterWhere(['like', 'TLP_KANTOR', $this->TLP_KANTOR])
            ->andFilterWhere(['like', 'TLP_HP', $this->TLP_HP]);

        return $dataProvider;
    }
	
	public function searchGroup($params,$idRt)
    {
        $query = Warga_data::find()->where("RT='".$idRt."'");

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
            'RUMAH_NO' => $this->RUMAH_NO,
            'RUMAH_STT' => $this->RUMAH_STT,
            'JUMLAH_ANGOTA' => $this->JUMLAH_ANGOTA,
        ]);

        $query->andFilterWhere(['like', 'RT', $this->RT])
            ->andFilterWhere(['like', 'KK_NM', $this->KK_NM])
            ->andFilterWhere(['like', 'RUMAH_BLOCK', $this->RUMAH_BLOCK])
            ->andFilterWhere(['like', 'TLP_RUMAH', $this->TLP_RUMAH])
            ->andFilterWhere(['like', 'TLP_KANTOR', $this->TLP_KANTOR])
            ->andFilterWhere(['like', 'TLP_HP', $this->TLP_HP]);

        return $dataProvider;
    }
}
