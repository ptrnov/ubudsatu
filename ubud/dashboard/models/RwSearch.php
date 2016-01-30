<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Rw;

/**
 * RwSearch represents the model behind the search form about `ubud\dashboard\models\Rw`.
 */
class RwSearch extends Rw
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_rw', 'id_ketua_rt'], 'integer'],
            [['no_rw', 'ket_rw'], 'safe'],
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
        $query = Rw::find();

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
            'id_rw' => $this->id_rw,
            'id_ketua_rt' => $this->id_ketua_rt,
        ]);

        $query->andFilterWhere(['like', 'no_rw', $this->no_rw])
            ->andFilterWhere(['like', 'ket_rw', $this->ket_rw]);

        return $dataProvider;
    }
}
