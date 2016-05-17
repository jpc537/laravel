<?php
require_once (__DIR__.'/../src/Sumados.php');
/**
 * Created by PhpStorm.
 * User: Tarik
 * Date: 17/05/2016
 * Time: 20:09
 */
class testSumados extends PHPUnit_Framework_TestCase
{
     /** @test */
    public function Probarsuma1(){

        $suma= new Sumados();

        $this ->assertEquals(5,$suma->Suma(2,3));

    }

}
