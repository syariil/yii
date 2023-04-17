<?php

namespace common\models\layanan;

use Yii;

/**
 * This is the model class for table "SERTIFIKASI".
 *
 * @property int $ID
 * @property string|null $SERTIFIKAT
 * @property string|null $INSTANSI
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_AT
 * @property string|null $CREATE_IP
 * @property int|null $UPDATE_BY
 * @property string|null $UPDATE_AT
 * @property string|null $UPDATE_IP
 */
class LayananSertifikat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SERTIFIKASI';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['CREATE_AT', 'UPDATE_AT', 'UPDATE_IP'], 'safe'],
            [['SERTIFIKAT'], 'string', 'max' => 120],
            [['INSTANSI'], 'string', 'max' => 150],
            [['CREATE_IP'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'SERTIFIKAT' => 'Sertifikat',
            'INSTANSI' => 'Instansi',
            'CREATE_BY' => 'Create By',
            'CREATE_AT' => 'Create At',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_BY' => 'Update By',
            'UPDATE_AT' => 'Update At',
            'UPDATE_IP' => 'Update Ip',
        ];
    }
}
