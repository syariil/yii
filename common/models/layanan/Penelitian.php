<?php

namespace common\models\layanan;

use Yii;

/**
 * This is the model class for table "PENELITIAN".
 *
 * @property int $ID
 * @property string|null $NAMA
 * @property string|null $INSTANSI
 * @property string|null $MULAI_PENELITIAN
 * @property string|null $AKHIR_PENELITIAN
 * @property string|null $CREATE_AT
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_IP
 * @property string|null $UPDATE_AT
 * @property int|null $UPDATE_BY
 * @property string|null $UPDATE_IP
 */
class Penelitian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'PENELITIAN';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MULAI_PENELITIAN', 'AKHIR_PENELITIAN', 'CREATE_AT', 'UPDATE_AT'], 'safe'],
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
            'MULAI_PENELITIAN' => 'Mulai Penelitian',
            'AKHIR_PENELITIAN' => 'Akhir Penelitian',
            'CREATE_AT' => 'Create At',
            'CREATE_BY' => 'Create By',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_AT' => 'Update At',
            'UPDATE_BY' => 'Update By',
            'UPDATE_IP' => 'Update Ip',
        ];
    }
}
