<?php

namespace console\controllers;

use yii\console\Controller;
use Yii;

class MailerController extends Controller
{

    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('dmitriy.mityashin@gmail.com')
            ->setTo('dmitriy.mityashin@gmail.com')
            ->setSubject('Mail subject')
            ->setTextBody('Message text')
            ->setHtmlBody('<b>Message text at the HTML format</b>')
            ->send();

        var_dump($result);
        die();
    }


}