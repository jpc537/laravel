<?php
require_once (__DIR__.'/../src/Restados.php');
/**
 * Created by PhpStorm.
 * User: Tarik
 * Date: 19/05/2016
 * Time: 19:06
 */
class Test extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function ProbarResta(){

        $resta= new Restados();

        $this ->assertEquals(1,$resta->Resta(3,2));

    }
}
