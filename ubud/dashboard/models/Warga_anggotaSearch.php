<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Warga_anggota;

/**
 * Warga_anggotaSearch represents the model behind the search form about `ubud\dashboard\models\Warga_anggota`.
 */
class Warga_anggotaSearch extends Warga_anggota
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'NO_WARGA'], 'integer'],
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
        $query = Warga_anggota::find();

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
            'NO_WARGA' => $this->NO_WARGA,
        ]);

        return $dataProvider;
    }
}
