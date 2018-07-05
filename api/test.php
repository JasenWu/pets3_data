<?php
/**
 * Created by PhpStorm.
 * User: Jason.wu
 * Date: 2018/7/5
 * Time: 上午11:16
 */

class test
{
    public $age = 45000;
    public function getAge(){

        return $this->age;
    }
}



$ins = new test();

print_r($ins->getAge());
