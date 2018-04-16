<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

class AliasController extends Controller
{

    public function actionExample()
    {
        echo Yii::getAlias('@app');
    }

}