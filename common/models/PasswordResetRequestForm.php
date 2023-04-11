<?php

namespace common\models;

use yii\base\Model;
use Yii;


    class PasswordResetRequestForm extends Model
    {
        public $email;
    
        public function rules()
        {
            return [
                ['email', 'required'],
                ['email', 'email'],
                ['email', 'exist',
                    'targetClass' => '\common\models\User',
                    'filter' => ['status' => User::STATUS_ACTIVE],
                    'message' => 'There is no user with this email address.'
                ],
            ];
        }

        public function attributeLabels()
        {
            return [
                'email' => 'Email',
            ];
        }
    
        public function sendEmail()
        {
            // Generate password reset token and save it in the user model
            $user = User::findOne(['email' => $this->email, 'status' => User::STATUS_ACTIVE]);
            if (!$user) {
                return false;
            }
    
            $user->generatePasswordResetToken();
            if (!$user->save()) {
                return false;
            }
    
            // Send email with password reset link
            return Yii::$app->mailer->compose('passwordResetToken', ['user' => $user])
                ->setFrom([Yii::$app->params['adminEmail'] => Yii::$app->name . ' robot'])
                ->setTo($this->email)
                ->setSubject('Password reset for ' . Yii::$app->name)
                ->send();
        }
    }
?>

