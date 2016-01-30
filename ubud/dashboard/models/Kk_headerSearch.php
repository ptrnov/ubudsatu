<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Kk_header;

/**
 * Kk_headerSearch represents the model behind the search form about `ubud\dashboard\models\Kk_header`.
 */
class Kk_headerSearch extends Kk_header
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kk', 'jml_kk', 'id_rt'], 'integer'],
            [['nama_kk', 'alamat_kk', 'status_kk', 'ket_kk'], 'safe'],
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
        $query = Kk_header::find();

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
            'id_kk' => $this->id_kk,
            'jml_kk' => $this->jml_kk,
            'id_rt' => $this->id_rt,
        ]);

        $query->andFilterWhere(['like', 'nama_kk', $this->nama_kk])
            ->andFilterWhere(['like', 'alamat_kk', $this->alamat_kk])
            ->andFilterWhere(['like', 'status_kk', $this->status_kk])
            ->andFilterWhere(['like', 'ket_kk', $this->ket_kk]);

        return $dataProvider;
    }
}
