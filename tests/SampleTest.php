<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
	public function testSampleFunction()
	{
       $result=  preg_replace('/(http|https):\/\//', '', 'https://vuhavan.wordpress.com/');
       echo $result; die();
       $result = array_intersect_key(array('a' => 1, 'b' => 3, 'c' => ['x','y']),
            array_flip(array('a', 'c', 'd')));
       print_r($result);
	}
}