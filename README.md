# youshuAPI

## Introduction

对接优述供应链平台接口

## Install

```
$ composer require morton/youshu
```

## Demo

```php
<?php
include_once './vendor/autoload.php';
use Morton\Youshu\Goods\SaleIds;
$data = [
    'merchId'=>'229832127808536577',
    'timestamp'=>date('Y-m-d H:i:s'),
    'nonceStr'=>uniqid(),
    'signId'=>'1449693080587509761',
    'pageCurrent'=>1,
    'pageSize'=>10
];
$privateKey = <<<EOD
-----BEGIN RSA PRIVATE KEY-----

-----END RSA PRIVATE KEY-----
EOD;
$publicKey = <<<EOD
-----BEGIN PUBLIC KEY-----

-----END PUBLIC KEY-----
EOD;
$objcet = new SaleIds($privateKey,$publicKey);
$reslut = $objcet->request($data);
```