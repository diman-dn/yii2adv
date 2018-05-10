<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class NewsSearch extends Model
{

    public function simpleSearch($keyword)
    {
        $sql = "select * from news where content like concat('%', :keyword, '%') limit 20";
        return Yii::$app->db->createCommand($sql, ['keyword' => $keyword])->queryAll();
    }

    public function fulltextSearch($keyword)
    {
        $sql = "select * from news where match (content) against (:keyword) limit 20";
        return Yii::$app->db->createCommand($sql, ['keyword' => $keyword])->queryAll();
    }

}