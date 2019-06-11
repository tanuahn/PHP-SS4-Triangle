<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/06/19
 * Time: 11:33
 */
include_once "Shape.php";
include_once "Triangle.php";

$triangle = new Triangle(4.0, 5.0, 6.0);
echo $triangle->toString();