<?php

namespace console\controllers;

use yii\console\Controller;
use Yii;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;
use yii\helpers\Console;

class MailerController extends Controller
{
    /**
     * Sending newsletter
     */
    public function actionSend()
    {
        $newsList = News::getList();
        $subscribers = Subscriber::getList();

        $count = Sender::run($subscribers, $newsList);

        Console::output("\nEmails sent: {$count}");
    }


}