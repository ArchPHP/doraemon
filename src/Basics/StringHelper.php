<?php
/**
 * the ArchPHP Doraemon project
 *
 * @author      Yumin Gui <guiyumin@gmail.com>
 * @copyright   (c) Yumin Gui
 * @link        https://github.com/archphp/doraemon
 * @license     MIT
 */

namespace ArchPHP\Doraemon\Basics;

class StringHelper
{
       
    public static function stringFilter(string $str):array
    {
        $result = [];
        $tmpStr = "";
        for($i = 0; $i < strlen($str); $i++){
            $char = $str[$i];
            if ( ($char >= 'a' && $char <= 'z' ) || ( $char >='A' && $char <= 'Z')){
                $tmpStr .= $char;
                if( $i === strlen($str) - 1){
                    $result[] = $tmpStr;
                }
            }
            else{
                if ($tmpStr){
                  $result[] = $tmpStr;
                  $tmpStr= "";  
                }
            }
        }
        return $result;
    }
  

    public static function camelCase(string $str)
    {
        $filtedStringArray = self::stringFilter($str);

        if (!count($filtedStringArray)){
          return "";
        }

        $result = "";
        foreach($filtedStringArray as $key=>$word)
        {
          if (!$key) {
            $result .= strtolower($word);
          }
          else{
            $result .= ucfirst(strtolower($word));
          }
        }
        return $result;
    }

    public static function pascalCase(string $str)
    {
        $filtedStringArray = self::stringFilter($str);

        if (!count($filtedStringArray)){
          return "";
        }

        $result = "";
        foreach($filtedStringArray as $word)
        {
            $result .= ucfirst(strtolower($word));
        }
        return $result;
    }

    public static function kebabCase(string $str)
    {
        $filtedStringArray = self::stringFilter($str);

        if (!count($filtedStringArray)){
          return "";
        }

        $result = implode("-",$filtedStringArray);

        return strtolower($result);
    }

    public static function snakeCase(string $str)
    {
        $filtedStringArray = self::stringFilter($str);

        if (!count($filtedStringArray)){
          return "";
        }

        $result = implode("_",$filtedStringArray);

        return strtolower($result);
    }
    
  


  


      
}