<?php

/**
 * Created by PhpStorm.
 * User: Tarik
 * Date: 02/07/2016
 * Time: 8:38
 */
require_once  'Money.php';
class Test extends PHPUnit_Framework_TestCase
{
    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }
}
