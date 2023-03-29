<?php

namespace common\models\referensi;

use Yii;

/**
 * This is the model class for table "ref_provinsi".
 *
 * @property int $ID_PROVINSI
 * @property string|null $PROVINSI
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_DATE
 * @property string|null $CREATE_IP
 * @property int|null $UPDATE_BY
 * @property string|null $UPDATE_DATE
 * @property string|null $UPDATE_IP
 */
class RefProvinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_provinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['CREATE_DATE', 'UPDATE_DATE'], 'safe'],
            [['PROVINSI'], 'string', 'max' => 50],
            [['CREATE_IP', 'UPDATE_IP'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_PROVINSI' => 'Id Provinsi',
            'PROVINSI' => 'Provinsi',
            'CREATE_BY' => 'Create By',
            'CREATE_DATE' => 'Create Date',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_BY' => 'Update By',
            'UPDATE_DATE' => 'Update Date',
            'UPDATE_IP' => 'Update Ip',
        ];
    }
}
