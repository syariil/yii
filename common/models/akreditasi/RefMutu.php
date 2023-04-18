<?php

namespace common\models\akreditasi;

use Yii;

/**
 * This is the model class for table "REF_MUTU".
 *
 * @property int $ID
 * @property string|null $MUTU
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_DATE
 * @property string|null $CREATE_IP
 * @property int|null $UPDATE_BY
 * @property string|null $UPDATE_DATE
 * @property string|null $UPDATE_IP
 */
class RefMutu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'REF_MUTU';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['CREATE_DATE', 'UPDATE_DATE'], 'safe'],
            [['MUTU'], 'string', 'max' => 50],
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
            'MUTU' => 'Mutu',
            'CREATE_BY' => 'Create By',
            'CREATE_DATE' => 'Create Date',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_BY' => 'Update By',
            'UPDATE_DATE' => 'Update Date',
            'UPDATE_IP' => 'Update Ip',
        ];
    }
}
