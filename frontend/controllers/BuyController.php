<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Buy;
use yii\web\Controller;

class BuyController extends Controller
{

    public function actionWindow()
    {
        $model = new Buy();
        $model->scenario = Buy::SCENARIO_BUY_WINDOW;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            $formData['windowSill'] = $formData['windowSill'] ?? 'no';

            $model->attributes = $formData;

            if ($model->validate() && $model->sendOrder()){
                Yii::$app->session->setFlash('success', 'Your order is successfully sent! Our manager will contact you shortly.');
            }
        }

        return $this->render('window', [
            'model' => $model,
        ]);
    }

}