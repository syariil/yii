<?php

namespace common\models\referensi;

use Yii;
use yii\db\Expression;
/**
 * This is the model class for table "ref_kelamin".
 *
 * @property int $ID_KELAMIN
 * @property string|null $JENIS_KELAMIN
 * @property int|null $CREATE_BY
 * @property string|null $CREATE_DATE
 * @property string|null $CREATE_IP
 * @property int|null $UPDATE_BY
 * @property string|null $UPDATE_DATE
 * @property string|null $UPDATE_IP
 */
class RefKelamin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_kelamin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CREATE_BY', 'UPDATE_BY'], 'integer'],
            [['CREATE_DATE', 'UPDATE_DATE'], 'safe'],
            [['JENIS_KELAMIN'], 'string', 'max' => 50],
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
            'JENIS_KELAMIN' => 'Jenis Kelamin',
            'CREATE_BY' => 'Create By',
            'CREATE_DATE' => 'Create Date',
            'CREATE_IP' => 'Create Ip',
            'UPDATE_BY' => 'Update By',
            'UPDATE_DATE' => 'Update Date',
            'UPDATE_IP' => 'Update Ip',
        ];
    }

    public function beforeSave($insert)
    {        
        $userId = (Yii::$app && Yii::$app->user) ? Yii::$app->user->id : null;
        $userIP = (Yii::$app->request) ? Yii::$app->request->userIP : null;
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->setAttributes([                    
                    'CREATE_DATE' => new Expression('NOW()'),
                    'CREATE_BY' => $userId,                    
                    'CREATE_IP' => $userIP,
                ]);                
                return true;
            }
            $this->setAttributes([                
                'UPDATE_DATE' => new Expression('NOW()'),
                'UPDATE_BY' => $userId,                
                'UPDATE_IP' => $userIP,
            ]);
            return true;        
        }
        return false;
    }
}
