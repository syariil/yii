<?php

namespace common\models\referensi;

use Yii;

/**
 * This is the model class for table "ref_goldarah".
 *
 * @property int $ID
 * @property string|null $GOL_DARAH
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_DATE
 * @property string|null $CREATE_IP
 * @property int|null $UPDATE_BY
 * @property string|null $UPDATE_DATE
 * @property string|null $UPDATE_IP
 */
class RefGoldarah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_goldarah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'required'],
            [['ID', 'CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['CREATE_DATE', 'UPDATE_DATE'], 'safe'],
            [['GOL_DARAH'], 'string', 'max' => 50],
            [['CREATE_IP', 'UPDATE_IP'], 'string', 'max' => 100],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'GOL_DARAH' => 'Gol Darah',
            'CREATE_BY' => 'Create By',
            'CREATE_DATE' => 'Create Date',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_BY' => 'Update By',
            'UPDATE_DATE' => 'Update Date',
            'UPDATE_IP' => 'Update Ip',
        ];
    }
}
