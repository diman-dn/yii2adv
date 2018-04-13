<?php

namespace frontend\controllers;

use frontend\models\Employee;
use yii\web\Controller;
use Yii;

class EmployeeController extends Controller
{

    public function actionIndex()
    {
        echo "Index page is in progress!";
    }

    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;

            if ($model->validate() && $model->save($model)) {
                Yii::$app->session->setFlash('success', 'You are registered!');

            }
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Your information has been updated!');
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

}