<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use Faker\Factory;

class TestController extends Controller
{
    /**
     * @return bool
     */
    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('mail@gmail.com')
            ->setTo('mail@gmail.com')
            ->setSubject('Mail subject')
            ->setTextBody('Message text')
            ->setHtmlBody('<b>Message text at the HTML format</b>')
            ->send();

        return $result;
    }

    public function actionGenerate()
    {
        /* @var $faker Faker/Generator */
        $faker = Factory::create();

        for ($j = 0; $j < 200; $j++) {
            $news = [];
            for ($i = 0; $i < 200; $i++) {
                $news[] = [$faker->text(30, 45), $faker->text(rand(2000, 3000)), rand(0, 1)];
            }
            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
            unset($news);
        }

        die('stop');
    }

}