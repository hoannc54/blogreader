<?php
use PHPUnit\Framework\TestCase;

class BlogReaderTest extends TestCase
{
    public $url = 'http://ngocha89.blogspot.com/2014/05/huong-dan-cach-tao-blogspot-chuan-seo.html';

//	public function testFromUrl(){
//        $blog = \Dok123\BlogReader\BlogReader::fromUrl($this->url);
//        if (is_object($blog)){
//            $this->assertTrue( true);
//        }else{
//            $this->assertTrue(false);
//        }
//    }


    public function testReadFromBlogspot(){
	    $blogspot_url = 'http://ngocha89.blogspot.com/2014/05/huong-dan-cach-tao-blogspot-chuan-seo.html';
	    $blog = \Dok123\BlogReader\BlogReader::fromUrl($blogspot_url);
	    $this->assertInstanceOf(\Dok123\BlogReader\Adapters\Blogspot::class, $blog, 'Class không đúng');
    }

//    public function testReadFromWpApiV1(){
//        $wp_api_v1_url = 'https://vuhavan.wordpress.com';
//        $blog = \Dok123\BlogReader\BlogReader::fromUrl($wp_api_v1_url);
//        if ($blog instanceof \Dok123\BlogReader\Adapter\WpApiV1){
//            $this->assertTrue(true);
//        }else{
//            $this->assertTrue(false);
//        }
//    }
//
//    public function testReadFromWpApiV2(){
//        $wp_api_v2_url = 'https://vuhavan.wordpress.com';
//        $blog = \Dok123\BlogReader\BlogReader::fromUrl($wp_api_v2_url);
//        if ($blog instanceof \Dok123\BlogReader\Adapter\WpApiV2){
//            $this->assertTrue(true);
//        }else{
//            $this->assertTrue(false);
//        }
//    }
}