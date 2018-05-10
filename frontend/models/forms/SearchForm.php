<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\NewsSearch;

class SearchForm extends Model
{

    public $keyword;

    public function rules()
    {
        return [
            ['keyword', 'required'],
            ['keyword', 'trim'],
            ['keyword', 'string', 'min' => 3],
        ];
    }

    public function search()
    {
        if ($this->validate()) {
            $model = new NewsSearch();
            return $model->fulltextSearch($this->keyword);
        }
        return false;
    }

    public function searchAdvanced()
    {
        if ($this->validate()) {
            $model = new NewsSearch();
            return $model->advancedSearch($this->keyword);
        }
        return false;
    }

}