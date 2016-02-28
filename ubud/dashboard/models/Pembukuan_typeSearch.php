<?php

namespace ubud\dashboard\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use ubud\dashboard\models\Pembukuan_type;

/**
 * Pembukuan_typeSearch represents the model behind the search form about `ubud\dashboard\models\Pembukuan_type`.
 */
class Pembukuan_typeSearch extends Pembukuan_type
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TYPE_ID'], 'integer'],
            [['TYPE_NM'], 'safe'],
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
        $query = Pembukuan_type::find();

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
            'TYPE_ID' => $this->TYPE_ID,
        ]);

        $query->andFilterWhere(['like', 'TYPE_NM', $this->TYPE_NM]);

        return $dataProvider;
    }
}
