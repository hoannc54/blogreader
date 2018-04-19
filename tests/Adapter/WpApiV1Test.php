<?php
use PHPUnit\Framework\TestCase;

class WpApiV1Test extends TestCase
{
    public $url = 'https://vuhavan.wordpress.com';

    public function testGetInfo(){
        $blog = new \Dok123\BlogReader\Adapter\WpApiV1($this->url);
        $data = $blog->getInfo();
        print_r($data);
    }
}