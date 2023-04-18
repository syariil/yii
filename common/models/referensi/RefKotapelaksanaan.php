<?php

namespace common\models\referensi;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "REF_KOTA_PELAKSANAAN".
 *
 * @property int $ID
 * @property string|null $KOTA_PELAKSANAAN
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_DATE
 * @property string|null $CREATE_IP
 * @property int|null $UPDATE_BY
 * @property string|null $UPDATE_DATE
 * @property string|null $UPDATE_IP
 */
class RefKotapelaksanaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'REF_KOTA_PELAKSANAAN';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['CREATE_DATE', 'UPDATE_DATE'], 'safe'],
            [['KOTA_PELAKSANAAN'], 'string', 'max' => 50],
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
            'KOTA_PELAKSANAAN' => 'Kota Pelaksanaan',
            'CREATE_BY' => 'Create By',
            'CREATE_DATE' => 'Create Date',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_BY' => 'Update By',
            'UPDATE_DATE' => 'Update Date',
            'UPDATE_IP' => 'Update Ip',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave($insert)
    {        
        $userId = (Yii::$app && Yii::$app->user) ? Yii::$app->user->id : null;
        $userIP = (Yii::$app->request) ? Yii::$app->request->userIP : null;
        if (parent::beforeSave($insert)) {            
            if ($this->isNewRecord) {
                $this->setAttributes([                    
                    'CREATE_BY' => $userId,    
                    'CREATE_DATE' => new Expression('NOW()'),                
                    'CREATE_IP' => $userIP,
                ]);                
                return true;
            }
            $this->setAttributes([                
                'UPDATE_BY' => $userId,      
                'UPDATE_DATE' => new Expression('NOW()'),          
                'UPDATE_IP' => $userIP,
            ]);
            return true;        
        }
        return false;
    }
}
