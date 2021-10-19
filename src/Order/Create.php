<?php

namespace Morton\Youshu\Order;

use Morton\Youshu\Basic;

class Create extends Basic
{
    /**
     * 必填项.
     * 
     * @var array
     */
    protected static $required = array(
        'buyer' => '买家信息',
        'delivery' => '物流信息',
        'specList' => '商品列表',
        'notifyUrl' => '回调地址',
        'outOrderId' => '商家订单号',
        'payType' => '⽀付⽅式',
        'remark' => '⽤户备注',
        'timeExpire' => '交易结束时间',
        'timestamp' => '时间戳'
    );

    /**
     * 选填项.
     * 
     * @var array
     */
    protected static $optional = array(
        'authCode' => '验证码',
        'clientIp' => '客户段IP',
        'ext' => '商户扩展字段',
    );

    /**
     * @var array
     */
    protected static $params = array();

    /**
     * @var string
     */
    protected static $path = '/openapi/order/create';

    public function __construct($publicKey, $privateKey)
    {
        static::$publicKey = $publicKey;
        static::$privateKey = $privateKey;
    }
}
