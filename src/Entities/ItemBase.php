<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 4/15/18
 * Time: 15:07
 */

namespace Dok123\BlogReader\Entities;


class ItemBase
{
    protected $id;
    protected $title;
    protected $content;
    protected $created;
    protected $published;
    protected $updated;
    protected $labels = [];
}