<?php

namespace frontend\controllers;

use frontend\models\Employee;
use yii\web\Controller;
use Yii;

class EmployeeController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        if ($model->load(Yii::$app->request->post())) {

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

        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Your information has been updated!');
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

}