<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Rt;

/**
 * RtSearch represents the model behind the search form about `ubud\dashboard\models\Rt`.
 */
class RtSearch extends Rt
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_rt', 'id_rw', 'id_ketua_rt'], 'integer'],
            [['no_rt', 'ket_rt'], 'safe'],
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
        $query = Rt::find();

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
            'id_rt' => $this->id_rt,
            'id_rw' => $this->id_rw,
            'id_ketua_rt' => $this->id_ketua_rt,
        ]);

        $query->andFilterWhere(['like', 'no_rt', $this->no_rt])
            ->andFilterWhere(['like', 'ket_rt', $this->ket_rt]);

        return $dataProvider;
    }
}
