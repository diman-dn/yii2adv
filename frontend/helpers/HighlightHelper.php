<?php

namespace frontend\helpers;


class HighlightHelper
{

    public static function process($keyword, $content)
    {
        $array_content = explode(' ', $content);
        foreach ($array_content as &$item) {
            if (strcasecmp($item, $keyword) == 0) {
                $item = '<b>'. $item . '</b>';
            }
        }
        return implode(' ', $array_content);
    }

}