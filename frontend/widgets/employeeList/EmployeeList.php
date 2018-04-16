<?php

namespace frontend\widgets\employeeList;

use Yii;
use yii\base\Widget;
use frontend\models\Employee;

class EmployeeList extends Widget
{

    public $showLimit = null;

    public function run()
    {
        $count = 1;

        $max = Yii::$app->params['maxEmployeesList'];

        if ($this->showLimit) {
            $max = $this->showLimit;
        }

        $list = Employee::getEmployeesList($max);

        return $this->render('block', [
            'list' => $list,
            'count' => $count,
        ]);
    }

}