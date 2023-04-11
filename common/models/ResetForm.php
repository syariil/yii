<?php

namespace common\models;

use yii\base\Model;

class ResetForm extends Model
{
    public $password;
    public $passwordConfirm;

    public function rules()
    {
        return [
            [['password', 'passwordConfirm'], 'required'],
            ['password', 'string', 'min' => 6],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password', 'skipOnEmpty' => false, 'message' => 'Passwords do not match.'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'password' => 'New Password',
            'passwordConfirm' => 'Confirm New Password',
        ];
    }
}
