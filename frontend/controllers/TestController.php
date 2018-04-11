<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use Yii;

class TestController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $max = Yii::$app->params['maxNewsInList'];

        $list = Test::getNewsList($max);

        return $this->render('index', [
            'list' => $list,
        ]);
    }

    /**
     * @param integer $id
     * @return string
     */
    public function actionView($id)
    {
        $item = Test::getItem($id);

        return $this->render('view', [
            'item' => $item,
        ]);
    }

    public function actionMail()
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