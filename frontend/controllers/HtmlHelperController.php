<?php

namespace frontend\controllers;

use yii\web\Controller;

class HtmlHelperController extends Controller
{

    public function actionDemo()
    {
        return $this->render('demo');
    }

    public function actionEscapeOutput()
    {
        return $this->render('escape-output');
    }

}