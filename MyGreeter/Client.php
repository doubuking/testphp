<?php
/**
 * Created by PhpStorm.
 * User: doubleking
 * Date: 2019/10/31
 * Time: 8:54 PM
 */
namespace MyGreeter;
ini_set('date.timezone','Asia/Shanghai');
class Client
{
    public function getGreeting():string
    {
        $time = date("H");
        if ($time >= 0 && $time < 12){
            return "Good morning";
        }elseif ($time >= 12 && $time < 18){
            return "Good afternoon";
        }else{
            return "Good evening";
        }
    }
}
