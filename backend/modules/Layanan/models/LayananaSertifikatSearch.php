<?php

namespace backend\modules\layanan\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\layanan\LayananSertifikat;

/**
 * LayananaSertifikatSearch represents the model behind the search form about `common\models\layanan\LayananSertifikat`.
 */
class LayananaSertifikatSearch extends LayananSertifikat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['SERTIFIKAT', 'INSTANSI', 'CREATE_AT', 'CREATE_IP', 'UPDATE_AT', 'UPDATE_IP'], 'safe'],
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
        $query = LayananSertifikat::find();

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
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_BY' => $this->UPDATE_BY,
            'UPDATE_AT' => $this->UPDATE_AT,
            'UPDATE_IP' => $this->UPDATE_IP,
        ]);

        $query->andFilterWhere(['like', 'SERTIFIKAT', $this->SERTIFIKAT])
            ->andFilterWhere(['like', 'INSTANSI', $this->INSTANSI])
            ->andFilterWhere(['like', 'CREATE_IP', $this->CREATE_IP]);

        return $dataProvider;
    }
}
