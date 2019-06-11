<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/06/19
 * Time: 11:19
 */

class Triangle extends Shape
{
    private $side1 = 1.0;
    private $side2 = 1.0;
    private $side3 = 1.0;

    public function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    /**
     * @return float
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @param float $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @return float
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @param float $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @return float
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param float $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
        return $this->side1 + $this->side2 +$this->side3;
    }

    public function getHeight()
    {
        return 2 * sqrt((($this->getPerimeter()/2) * (($this->getPerimeter()/2) - $this->side1) * (($this->getPerimeter()/2) - $this->side2) * (($this->getPerimeter()/2) - $this->side3)) / 2);
    }

    public function getArea()
    {
        // TODO: Implement getArea() method.
        return 1 / 2 * $this->side1 * $this->getHeight();
    }

    public function toString()
    {
        return "a: " . $this->getSide1() . "</br> b: " . $this->getSide2() . "</br> c: " . $this->getSide3() . "</br> h: " . $this->getHeight() . "</br> Area: " .
            $this->getArea() . "</br> Perimeteter: " . $this->getPerimeter();
    }
}