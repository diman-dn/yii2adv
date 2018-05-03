<?php

namespace frontend\models;

use yii\db\ActiveRecord;
use Yii;

class Book extends ActiveRecord
{

    /**
     * @return string
     */
    public static function tableName()
    {
        return '{{book}}';
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['name', 'publisher_id'], 'required'],
            [['date_published'], 'date', 'format' => 'php:Y-m-d'],
        ];
    }

    /**
     * @return string
     */
    public function getDatePublished()
    {
        return ($this->date_published) ? Yii::$app->formatter->asDate($this->date_published) : "Дата не задана";
    }

    /**
     * @return array|null|ActiveRecord
     */
    public function getPublisher()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id'])->one();
    }

    /**
     * @return mixed|string
     */
    public function getPublisherName()
    {
        if ($publisher = $this->getPublisher()) {
            return $publisher->name;
        }
        return "Не указан";
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookToAuthorRelations()
    {
        return $this->hasMany(BookToAuthor::className(), ['book_id' => 'id']);
    }

    /**
     * @return array|ActiveRecord[]
     */
    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id' => 'author_id'])->via('bookToAuthorRelations')->all();
    }

}