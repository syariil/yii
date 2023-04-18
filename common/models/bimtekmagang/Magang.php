<?php

namespace common\models\bimtekmagang;

use Yii;

/**
 * This is the model class for table "MAGANG".
 *
 * @property int $ID
 * @property string|null $NIM
 * @property string|null $NAMA
 * @property string|null $UNIVERSITAS
 * @property string|null $FAKULTAS
 * @property string|null $PRODI
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_DATE
 * @property string|null $CREATE_IP
 * @property int|null $UPDATE_BY
 * @property string|null $UPDATE_DATE
 * @property string|null $UPDATE_IP
 */
class Magang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'MAGANG';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['CREATE_DATE', 'UPDATE_DATE'], 'safe'],
            [['NIM', 'NAMA', 'UNIVERSITAS', 'FAKULTAS', 'PRODI'], 'string', 'max' => 50],
            [['CREATE_IP', 'UPDATE_IP'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NIM' => 'Nim',
            'NAMA' => 'Nama',
            'UNIVERSITAS' => 'Universitas',
            'FAKULTAS' => 'Fakultas',
            'PRODI' => 'Prodi',
            'CREATE_BY' => 'Create By',
            'CREATE_DATE' => 'Create Date',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_BY' => 'Update By',
            'UPDATE_DATE' => 'Update Date',
            'UPDATE_IP' => 'Update Ip',
        ];
    }
}
