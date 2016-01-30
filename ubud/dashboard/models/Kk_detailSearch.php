<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Kk_detail;

/**
 * Kk_detailSearch represents the model behind the search form about `ubud\dashboard\models\Kk_detail`.
 */
class Kk_detailSearch extends Kk_detail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_rt'], 'integer'],
            [['id_kk', 'nama', 'status'], 'safe'],
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
        $query = Kk_detail::find();

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
            'id' => $this->id,
            'id_rt' => $this->id_rt,
        ]);

        $query->andFilterWhere(['like', 'id_kk', $this->id_kk])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
