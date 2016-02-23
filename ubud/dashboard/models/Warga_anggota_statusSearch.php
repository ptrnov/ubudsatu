<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Warga_anggota_status;

/**
 * Warga_anggota_statusSearch represents the model behind the search form about `ubud\dashboard\models\Warga_anggota_status`.
 */
class Warga_anggota_statusSearch extends Warga_anggota_status
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['ANGGOTA_STATUS'], 'safe'],
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
        $query = Warga_anggota_status::find();

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
        ]);

        $query->andFilterWhere(['like', 'ANGGOTA_STATUS', $this->ANGGOTA_STATUS]);

        return $dataProvider;
    }
}
