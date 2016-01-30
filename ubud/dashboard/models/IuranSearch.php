<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Iuran;

/**
 * IuranSearch represents the model behind the search form about `ubud\dashboard\models\Iuran`.
 */
class IuranSearch extends Iuran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_iuran_kk', 'id_kk', 'nilai_iuran_kk'], 'integer'],
            [['tgl_iuran_kk', 'ket_iuran_kk', 'status_iuran_kk'], 'safe'],
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
        $query = Iuran::find();

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
            'id_iuran_kk' => $this->id_iuran_kk,
            'id_kk' => $this->id_kk,
            'tgl_iuran_kk' => $this->tgl_iuran_kk,
            'nilai_iuran_kk' => $this->nilai_iuran_kk,
        ]);

        $query->andFilterWhere(['like', 'ket_iuran_kk', $this->ket_iuran_kk])
            ->andFilterWhere(['like', 'status_iuran_kk', $this->status_iuran_kk]);

        return $dataProvider;
    }
}
