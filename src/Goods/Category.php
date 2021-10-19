<?php

namespace Morton\Youshu\Goods;

use Morton\Youshu\Basic;

class Category extends Basic
{
    /**
     * 必填项.
     * 
     * @var array
     */
    protected static $required = array();

    /**
     * 选填项.
     * 
     * @var array
     */
    protected static $optional = array();

    /**
     * @var array
     */
    protected static $params = array();

    /**
     * @var string
     */
    protected static $path = '/openapi/goods/category/get';

    public function __construct($publicKey, $privateKey)
    {
        static::$publicKey = $publicKey;
        static::$privateKey = $privateKey;
    }
}
