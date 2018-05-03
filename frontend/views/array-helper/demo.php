<?php
/* @var $employees array */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$emails = ArrayHelper::getColumn($employees, 'email');

echo implode(' | ', $emails);
echo "<hr>";

// Array helpers with HTML lists:

$array = [
    '1' => 'New York',
    '2' => 'Boston',
    '3' => 'Washington',
    '4' => 'Los Angels',
    '5' => 'San Francisco',
];

$listData = ArrayHelper::map($employees, 'id', 'email');

echo Html::dropDownList('emails', [], $listData);