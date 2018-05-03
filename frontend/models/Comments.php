<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Comments extends Model
{
    const SCENARIO_LEAVE_COMMENT = 'leave_comment';

    public $name, $email, $comment;

    public function scenarios()
    {
        return [
            self::SCENARIO_LEAVE_COMMENT => ['name', 'email', 'comment'],
        ];
    }

    public function rules()
    {
        return [
            [['name', 'comment'], 'required'],
            [['email'], 'email'],
            [['name'], 'string', 'length' => [2, 50]],
            [['comment'], 'string', 'length' => [2, 255]],
        ];
    }

    public static function getComments($limit)
    {
        $limit = intval($limit);
        $sql = "select * from comments order by id desc limit $limit";

        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function saveComment()
    {
        $sql = "insert into comments (id, `name`, email, comment) values (null, '{$this->name}', '{$this->email}', '{$this->comment}');";

        return Yii::$app->db->createCommand($sql)->execute();
    }

}