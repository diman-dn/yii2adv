<?php

namespace frontend\models;

//use yii\base\Model;
use Yii;
use yii\helpers\ArrayHelper;

class NewsSearch
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

    public function advancedSearch($keyword)
    {
        $placeholders = [
            ':keyword' => $keyword,
        ];
        // Название (idx_news_content) индекса из конфигурации сфинкса
        $sql = "SELECT * FROM idx_news_content WHERE MATCH (:keyword) OPTION ranker=WORDCOUNT";
        $data = Yii::$app->sphinx->createCommand($sql)->bindValues($placeholders)->queryAll();

        $ids = ArrayHelper::map($data, 'id', 'id');
        $data = News::find()->where(['id' => $ids])->asArray()->all();
        $data = ArrayHelper::index($data, 'id');

        $result = [];
        foreach ($ids as $id) {
            $result[] = [
                'id' => $id,
                'title' => $data[$id]['title'],
                'content' => $data[$id]['content'],
            ];
        }

        return $result;
    }
}