<?php

namespace frontend\helpers;


class HighlightHelper
{

    public static function process($keyword, $content)
    {
        $keyword = preg_quote($keyword);
        $words = explode(' ', trim($keyword));
        return preg_replace('/' . implode('|', $words) . '/i', '<b>$0</b>', $content);

//        $array_content = explode(' ', $content);
//        foreach ($array_content as &$item) {
//            if (strcasecmp($item, $keyword) == 0) {
//                $item = '<b>'. $item . '</b>';
//            }
//        }
//        return implode(' ', $array_content);
    }

}