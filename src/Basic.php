<?php

namespace Morton\Youshu;

use Morton\Youshu\Utils\Rsa2;
use Exception;

class Basic
{
    /**
     * 网关地址
     * 
     * @var string
     */
    protected static $api = 'http://open-apitest.idfgm.com';
    /**
     * 路由地址
     * 
     * @var string
     */
    protected static $path = '';
    /**
     * 发送参数
     * 
     * @var array
     */
    protected static $params = array();
    /**
     * 必填项.
     * 
     * @var array
     */
    protected static $required = array('pageCurrent', 'pageSize');

    /**
     * 公共请求参数 必传
     */
    protected static $publicRequired = array(
        'merchId' => '商户id',
        'timestamp' => '时间戳',
        'nonceStr' => '随机字符串',
        'signId' => '签名密钥id'
    );

    /**
     * 公钥
     */
    protected static $publicKey = '';

    /**
     * 私钥
     */
    protected static $privateKey = '';
    
    /**
     * 生成签名
     * 
     * @throws Exception
     * @return string
     */
    public function getStrSign()
    {
        $rsa2 = new Rsa2(static::$publicKey, static::$privateKey);
        $data = static::$params;
        $data = json_encode($data);
        $strSign = $rsa2->createSign($data);
        $success = $rsa2->verifySign($data, $strSign);
        if (!$success) {
            throw new Exception("签名失败");
        }
        return $strSign;
    }
    /**
     * 检测参数值是否有效
     * 
     * @throws Exception
     */
    public function checkParams()
    {
        $required = array_merge(static::$required, static::$publicRequired);
        foreach ($required as $k => $paramName) {
            if (empty(static::$params[$k])) {
                throw new Exception(sprintf('"%s" is required', $k . $paramName));
            }
        }
    }
    /**
     * 发送请求
     * 
     * @throws Exception
     * @return array
     */
    public function request($data = [])
    {
        static::$params = array_merge(static::$params, $data);
        $this->checkParams();
        $Authorization = $this->getStrSign();
        $client = new \GuzzleHttp\Client();
        $url = static::$api . static::$path;
        $headers = ['Authorization' => $Authorization];
        $params = ['headers' => $headers, 'json' => static::$params];
        $response = $client->request('POST', $url, $params);
        $response = $response->getBody();
        return json_decode($response, true);
    }
    public function __get($name)
    {
        return isset(static::$params[$name]) ? static::$params[$name] : null;
    }
    public function __set($name, $value)
    {
        static::$params[$name] = $value;
        return $this;
    }
}
