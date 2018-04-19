<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 4/9/18
 * Time: 23:33
 */

namespace Dok123\BlogReader\Adapters;


use GuzzleHttp\Client;

abstract class ReaderAbstract implements ReaderInterface
{
    public $id;
    public $title;
//    public $
    public $url;
    public $client;

    function __construct(string $url)
    {
        $this->url = $url;
        $this->client = new Client();
    }
}