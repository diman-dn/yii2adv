<?php

namespace console\models;
use Yii;

class Sender
{

    public static function run($subscribers, $newsList)
    {
        foreach ($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/newslist', [
                'newsList' => $newsList,
            ])
                ->setFrom('dmitriy.mityashin@gmail.com')
                ->setTo($subscriber['email'])
                ->setSubject('Mail subject')
                ->send();

            var_dump($result);
        }
    }

}