<?php
use yii\helpers\Html;

echo Html::tag('div', 'Some text');

$array = [
    '1' => 'New York',
    '2' => 'Boston',
    '3' => 'Washington',
    '4' => 'Los Angels',
    '5' => 'San Francisco',
];

echo Html::dropDownList('city_id', [], $array);

echo Html::radioList('city_id', [], $array);

echo Html::checkboxList('city_id', [], $array);