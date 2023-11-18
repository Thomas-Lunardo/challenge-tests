<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiplication(): void
    {
        // Arrange
        $firstValue = 6;
        $secondValue = 7;
        $expectedResult = 42;

        // Act
        $calculator = new Calculator();
        $multiplication = $calculator->multiplication($firstValue, $secondValue);

        // Assert
        $this->assertSame($expectedResult, $multiplication,
            "La methode multiplication() ne fonctionne plus ;-)"
        );
    }

    public function testIsEven(): void
    {
        // Arrange
        $value = 6;
        $expectedResult = true;

        // Act
        $calculator = new Calculator();
        $isEven = $calculator->isEven($value);

        // Assert
        $this->assertTrue($expectedResult, $isEven,
        );
    }
}