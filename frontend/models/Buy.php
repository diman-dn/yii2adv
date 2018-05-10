<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Buy extends Model
{
    const SCENARIO_BUY_WINDOW = 'buy_window';

    public $width;
    public $height;
    public $section;
    public $flaps;
    public $swivelFlaps;
    public $color;
    public $windowSill;
    public $email;
    public $name;

    public function scenarios()
    {
        return [
            self::SCENARIO_BUY_WINDOW => ['width', 'height', 'section', 'flaps', 'swivelFlaps', 'color', 'windowSill', 'email', 'name'],
        ];
    }

    public function rules()
    {
        return [
            [['width', 'height', 'section', 'flaps', 'swivelFlaps', 'color', 'windowSill', 'email', 'name'], 'required'],
            [['width'], 'integer', 'min' => 70, 'max' => 210],
            [['height'], 'integer', 'min' => 100, 'max' => 200],
            [['section'], 'in', 'range' => [1, 2, 3]],
            [['flaps'], 'integer', 'min' => 1],
            [['swivelFlaps'], 'integer'],
            [['swivelFlaps'], 'compare', 'compareAttribute' => 'flaps', 'operator' => '<='],
            [['color'], 'string', 'length' => [2, 20]],
            [['windowSill'], 'string', 'length' => [2, 3]],
            [['email'], 'email'],
            [['name'], 'string', 'length' => [2, 50]],
        ];
    }

    public function sendOrder()
    {
        $result = Yii::$app->mailer->compose('/buy/order', [
            'width' => $this->width,
            'height' => $this->height,
            'section' => $this->section,
            'flaps' => $this->flaps,
            'swivelFlaps' => $this->swivelFlaps,
            'color' => $this->color,
            'windowSill' => $this->windowSill,
            'email' => $this->email,
            'name' => $this->name,
        ])
            ->setFrom('yii2frontend.com')
            ->setTo(Yii::$app->params['adminEmail'])
            ->setSubject('New order!')
            ->send();
        return $result;
    }

}