<?php

namespace Morton\Youshu\Goods;

use Morton\Youshu\Basic;

class Info extends Basic
{
    /**
     * 必填项.
     * 
     * @var array
     */
    protected static $required = array(
        'goodsIds'=>'商品编号'
    );

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
    protected static $path = '/openapi/goods/get';

    public function __construct($publicKey, $privateKey)
    {
        static::$publicKey = $publicKey;
        static::$privateKey = $privateKey;
    }
}
