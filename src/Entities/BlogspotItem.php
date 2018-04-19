<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 4/15/18
 * Time: 15:08
 */

namespace Dok123\Sample\Entities;


class BlogspotItem
{
    protected $kind;
    protected $blog;
    protected $url;
    protected $selfLink;
    protected $author = [];
    protected $replies; //comment
}