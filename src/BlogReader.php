<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 4/9/18
 * Time: 23:21
 */

namespace Dok123\BlogReader;


use Dok123\BlogReader\Adapter\WpApiV1;
use Dok123\BlogReader\Adapter\WpApiV2;
use Dok123\BlogReader\Entities\Blogspot;
use Dok123\BlogReader\Exception\BlogNotFoundException;
use GuzzleHttp\Client;

class BlogReader
{
    public static function fromUrl(string $url){
        $blogspot = new \Dok123\BlogReader\Adapters\Blogspot($url);
        $wpapi_v1 = new WpApiV1($url);
        $wpapi_v2 = new WpApiV2($url);
        if ($blogspot->check()){
            return $blogspot;
        }elseif ($wpapi_v1->check()){
            return $wpapi_v1;
        }elseif ($wpapi_v2->check()){
            return $wpapi_v2;
        }else{
            throw new BlogNotFoundException('Not found blog');
        }
    }
}