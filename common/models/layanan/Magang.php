<?php

namespace common\models\layanan;

use Yii;

/**
 * This is the model class for table "MAGANG".
 *
 * @property int $ID
 * @property string|null $NAMA
 * @property string|null $INSTANSI
 * @property string|null $MULAI_MAGANG
 * @property string|null $AKHIR_MAGANG
 * @property string|null $CREATE_AT
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_IP
 * @property string|null $UPDATE_AT
 * @property int|null $UPDATE_BY
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
            [['MULAI_MAGANG', 'AKHIR_MAGANG', 'CREATE_AT', 'UPDATE_AT'], 'safe'],
            [['CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['NAMA', 'INSTANSI'], 'string', 'max' => 150],
            [['CREATE_IP', 'UPDATE_IP'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'NAMA' => 'Nama',
            'INSTANSI' => 'Instansi',
            'MULAI_MAGANG' => 'Mulai Magang',
            'AKHIR_MAGANG' => 'Akhir Magang',
            'CREATE_AT' => 'Create At',
            'CREATE_BY' => 'Create By',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_AT' => 'Update At',
            'UPDATE_BY' => 'Update By',
            'UPDATE_IP' => 'Update Ip',
        ];
    }
}
