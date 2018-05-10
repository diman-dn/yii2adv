<?php

namespace frontend\controllers;

use yii\db\Command;
use yii\db\Connection;
use yii\web\Controller;
use Yii;

class DaoController extends Controller
{

    public function actionIndex()
    {
        $db = new Connection([
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'yii2user',
            'password' => '111111',
            'charset' => 'utf8',
        ]);

        $sql = 'select * from city';
        $command = new Command([
            'db' => $db,
            'sql' => $sql,
        ]);

        $arrayWithResults = $command->queryAll();

        ////////////////

        $result2 = Yii::$app->db->createCommand($sql)->queryAll();

        var_dump($arrayWithResults);
        echo "<hr>";
        var_dump($result2);

        return $this->render('index');
    }

    public function actionTwoBases()
    {
        // Путь к экшену /dao/two-bases
        // #1 Работа с первой БД
        $sql1 = 'select * from city';
        $result1 = Yii::$app->db->createCommand($sql1)->queryAll();

        echo "<pre>";
        print_r($result1);
        echo "</pre>";
        echo "<hr>";

        // #2 Работа со второй БД
        $sql2 = 'select * from test';
        $result2 = Yii::$app->db2->createCommand($sql2)->queryAll();

        echo "<pre>";
        print_r($result2);
        echo "</pre>";
        echo "<hr>";

        return $this->render('two-bases');

    }

}