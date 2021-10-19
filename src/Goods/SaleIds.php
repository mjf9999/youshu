<?php

namespace Morton\Youshu\Goods;

use Morton\Youshu\Basic;

class SaleIds extends Basic
{
    /**
     * 必填项.
     * 
     * @var array
     */
    protected static $required = array(
        'pageCurrent' => '⻚码',
        'pageSize' => '数量'
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
    protected static $path = '/openapi/goods/onSaleIds/get';

    public function __construct($publicKey, $privateKey)
    {
        static::$publicKey = $publicKey;
        static::$privateKey = $privateKey;
    }
}
