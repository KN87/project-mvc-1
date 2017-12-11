<?php
/**
 * Created by PhpStorm.
 * User: keka
 * Date: 12/10/2017
 * Time: 8:02 PM
 */

class errorsController extends http\controller
{
    public static function nullToDo()
    {
        self::getTemplate('errors');
    }
}