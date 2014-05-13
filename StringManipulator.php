<?php
/**
 * Created by JetBrains PhpStorm.
 * User: USER
 * Date: 13.05.14
 * Time: 10:55
 * To change this template use File | Settings | File Templates.
 */

class StringManipulator {

    /**
     * @param $string sentence to cut short
     * @param $charLimit limit of chars
     * @param $delimiter added add the end of returned string eg. ...
     * @return string
     */
    public function wordCutter($string,$charLimit,$delimiter)
    {
        if(strlen($string)>$charLimit)
        {
            $words = explode(' ',$string);
            $name = '';
            $i = 0;
            do{
                if(isset($words[$i]))
                {
                    $name .= ' '.$words[$i];
                }

                $i++;

            }while(strlen($name) < 25 && isset($words[$i]));

            $name .= ' '.$delimiter;

            return $name;
        }
    }
}