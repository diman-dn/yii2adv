<?php

namespace frontend\models;

use yii\base\Model;

class Employee extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

    public $firstName;
    public $lastName;
    public $middleName;
    public $salary;
    public $email;
    public $birthDate;
    public $startDate;
    public $city;
    public $position;
    public $idCode;

    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'email', 'birthDate', 'startDate', 'city', 'position', 'idCode'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName', 'birthDate', 'city', 'position'],
        ];
    }

    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'position'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
            [['birthDate', 'startDate'], 'date', 'format' => 'php:Y-m-d'],
            [['startDate', 'idCode'], 'required', 'on' => self::SCENARIO_EMPLOYEE_REGISTER],
            [['city'], 'integer'],
            [['idCode'], 'match', 'pattern' => '/^\d{10}$/'],

        ];
    }

    public function save()
    {
        $sql = "insert into employee (id, first_name, last_name, middle_name, email, birth_date, start_date, city, `position`, id_code) values (null, '{$this->firstName}', '{$this->lastName}', '{$this->middleName}', '{$this->email}', '{$this->birthDate}', '{$this->startDate}', {$this->city}, '{$this->position}', {$this->idCode})";

        return \Yii::$app->db->createCommand($sql)->execute();
    }

    public static function getEmployeesList($max)
    {
        $max = intval($max);
        $sql = "select first_name, last_name, `position`, start_date from employee order by salary desc limit $max";

        return \Yii::$app->db->createCommand($sql)->queryAll();
    }

}