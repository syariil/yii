<?php

namespace common\models\akreditasi;

use Yii;

/**
 * This is the model class for table "REF_AKREDITASI".
 *
 * @property int $ID
 * @property string|null $AKREDITASI
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_DATE
 * @property string|null $CREATE_IP
 * @property int|null $UPDATE_BY
 * @property string|null $UPDATE_DATE
 * @property string|null $UPDATE_IP
 */
class RefAkreditasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'REF_AKREDITASI';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['CREATE_DATE', 'UPDATE_DATE'], 'safe'],
            [['AKREDITASI'], 'string', 'max' => 50],
            [['CREATE_IP'], 'string', 'max' => 100],
            [['UPDATE_IP'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'AKREDITASI' => 'Akreditasi',
            'CREATE_BY' => 'Create By',
            'CREATE_DATE' => 'Create Date',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_BY' => 'Update By',
            'UPDATE_DATE' => 'Update Date',
            'UPDATE_IP' => 'Update Ip',
        ];
    }
}
