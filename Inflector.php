<?php

namespace denis909\yii;

class Inflector extends \yii\helpers\Inflector
{

    public static function lcfirst(string $string, string $enc = 'UTF-8')
    {
        return mb_strtolower(mb_substr($string, 0, 1, $enc), $enc) . mb_substr($string, 1, mb_strlen($string, $enc), $enc);
    }    

    public static function attribute2camel(string $attribute)
    {
        $attribute = str_replace('_', '-', $attribute);

        $return = static::id2camel($attribute);

        $return = static::lcfirst($return);

        return $return;
    }

}