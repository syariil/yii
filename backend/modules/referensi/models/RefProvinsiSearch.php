<?php

namespace backend\modules\referensi\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\referensi\RefProvinsi;

/**
 * RefProvinsiSearch represents the model behind the search form about `common\models\referensi\RefProvinsi`.
 */
class RefProvinsiSearch extends RefProvinsi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PROVINSI', 'CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['PROVINSI', 'CREATE_DATE', 'CREATE_IP', 'UPDATE_DATE', 'UPDATE_IP'], 'safe'],
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
        $query = RefProvinsi::find();

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
            'ID_PROVINSI' => $this->ID_PROVINSI,
            'CREATE_BY' => $this->CREATE_BY,
            'CREATE_DATE' => $this->CREATE_DATE,
            'UPDATE_BY' => $this->UPDATE_BY,
            'UPDATE_DATE' => $this->UPDATE_DATE,
        ]);

        $query->andFilterWhere(['like', 'PROVINSI', $this->PROVINSI])
            ->andFilterWhere(['like', 'CREATE_IP', $this->CREATE_IP])
            ->andFilterWhere(['like', 'UPDATE_IP', $this->UPDATE_IP]);

        return $dataProvider;
    }
}
