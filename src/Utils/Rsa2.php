<?php

namespace Morton\Youshu\Utils;

class Rsa2
{
    private static $privateKey = '';
    private static $publicKey  = '';
    public function __construct($privateKey = '', $publicKey = '')
    {
        self::$privateKey = $privateKey;
        self::$publicKey = $publicKey;
    }
    /**
     * 获取私钥
     * @return bool|resource
     */
    private static function getPrivateKey()
    {
        $privKey = self::$privateKey;
        return openssl_pkey_get_private($privKey);
    }
    /**
     * 获取公钥
     * @return bool|resource
     */
    private static function getPublicKey()
    {

        $publicKey = self::$publicKey;
        return openssl_pkey_get_public($publicKey);
    }
    /**
     * 数组转为字符串
     */
    public function toString($data = [])
    {
        return json_encode($data);
    }
    /**
     * 创建签名
     * @param string $data 数据
     * @return null|string
     */
    public function createSign($data = '')
    {
        if (!is_string($data)) {
            $data = $this->toString($data);
        }
        return openssl_sign($data, $sign, self::getPrivateKey(), OPENSSL_ALGO_SHA256) ? base64_encode($sign) : null;
    }
    /**
     * 验证签名
     * @param string $data 数据
     * @param string $sign 签名
     * @return bool
     */
    public function verifySign($data = '', $sign = '')
    {
        if (!is_string($sign) || !is_string($sign)) {
            return false;
        }
        if (is_array($data)) {
            $data = $this->toString($data);
        }
        return (bool)openssl_verify(
            $data,
            base64_decode($sign),
            self::getPublicKey(),
            OPENSSL_ALGO_SHA256
        );
    }
}
