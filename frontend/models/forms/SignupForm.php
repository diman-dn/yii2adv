<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\User;
use yii\db\ActiveRecord;
use Yii;
use frontend\models\events\UserRegisteredEvent;

class SignupForm extends Model
{

    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
            ['username', 'trim'], // Обрезка пробелов по краям
            ['username', 'required'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            [['username'], 'unique', 'targetClass' => User::className()], // Проверка username на уникальность

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            [['email'], 'unique', 'targetClass' => User::className()], // Проверка email на уникальность

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Save user
     * @return bool|User
     */
    public function save()
    {
        if ($this->validate()) {
            $time = time();
            $user = new User();
            $user->email = $this->email;
            $user->username = $this->username;
            $user->created_at = $time;
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);

            if ($user->save()) {
                $event = new UserRegisteredEvent();
                $event->user = $user;
                $event->subject = 'New user registered!';

                $user->trigger(User::USER_REGISTERED, $event);
                return $user;
            }
        }
        return false;
    }

}