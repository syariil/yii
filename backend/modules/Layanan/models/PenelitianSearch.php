<?php

namespace backend\modules\layanan\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\layanan\Penelitian;

/**
 * PenelitianSearch represents the model behind the search form about `common\models\layanan\Penelitian`.
 */
class PenelitianSearch extends Penelitian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['NAMA', 'INSTANSI', 'MULAI_PENELITIAN', 'AKHIR_PENELITIAN', 'CREATE_AT', 'CREATE_IP', 'UPDATE_AT', 'UPDATE_IP'], 'safe'],
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
        $query = Penelitian::find();

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
            'MULAI_PENELITIAN' => $this->MULAI_PENELITIAN,
            'AKHIR_PENELITIAN' => $this->AKHIR_PENELITIAN,
            'CREATE_AT' => $this->CREATE_AT,
            'CREATE_BY' => $this->CREATE_BY,
            'UPDATE_AT' => $this->UPDATE_AT,
            'UPDATE_BY' => $this->UPDATE_BY,
        ]);

        $query->andFilterWhere(['like', 'NAMA', $this->NAMA])
            ->andFilterWhere(['like', 'INSTANSI', $this->INSTANSI])
            ->andFilterWhere(['like', 'CREATE_IP', $this->CREATE_IP])
            ->andFilterWhere(['like', 'UPDATE_IP', $this->UPDATE_IP]);

        return $dataProvider;
    }
}
