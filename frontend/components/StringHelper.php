<?php

namespace frontend\components;
use Yii;

class StringHelper
{
    private $limit;

    public function __construct()
    {
        $this->limit = Yii::$app->params['shortTextLimit'];
    }

    /**
     * Returns short string by symbols
     * @param string $str
     * @param int $limit
     * @return bool|string
     */
    public function getShort($str, $limit = null)
    {
        $str = strip_tags($str);
        if ($limit === null) {
            $limit = $this->limit;
        }

        if (mb_strlen($str, 'utf-8') < $limit)
            return $str;

        $pos = mb_strpos($str, ' ', $limit, 'utf-8');
        return rtrim(mb_substr($str, 0, $pos, 'utf-8'), '!,.-') . '...';
    }

    public function getShortByWord($str, $limit = null)
    {
        $str = strip_tags($str);
        $limit === null ? $limit = $this->limit : false;

        $words = explode(' ', $str);

        if (count($words) < $limit)
            return $str;

        if ( count($words) > $limit )
            $text = join(' ', array_slice($words, 0, $limit));

        return rtrim($text, '!,.-') . '...';
    }

}