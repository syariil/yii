<?php

namespace backend\modules\bimtekmagang\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\bimtekmagang\Bimtek;

/**
 * BimtekSearch represents the model behind the search form about `common\models\bimtekmagang\Bimtek`.
 */
class BimtekSearch extends Bimtek
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['MATERI', 'KOTA_PELAKSANAAN', 'DURASI', 'CREATE_DATE', 'CREATE_IP', 'UPDATE_DATE', 'UPDATE_IP'], 'safe'],
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
        $query = Bimtek::find();

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
            'CREATE_BY' => $this->CREATE_BY,
            'CREATE_DATE' => $this->CREATE_DATE,
            'UPDATE_BY' => $this->UPDATE_BY,
            'UPDATE_DATE' => $this->UPDATE_DATE,
        ]);

        $query->andFilterWhere(['like', 'MATERI', $this->MATERI])
            ->andFilterWhere(['like', 'KOTA_PELAKSANAAN', $this->KOTA_PELAKSANAAN])
            ->andFilterWhere(['like', 'DURASI', $this->DURASI])
            ->andFilterWhere(['like', 'CREATE_IP', $this->CREATE_IP])
            ->andFilterWhere(['like', 'UPDATE_IP', $this->UPDATE_IP]);

        return $dataProvider;
    }
}
