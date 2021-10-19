<?php

namespace Morton\Youshu\Es;

use Morton\Youshu\Basic;

class SearchGoods extends Basic
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
    protected static $optional = array(
        'bid' => '品牌ID',
        'categoryId' => '分类ID',
        'keyword' => '关键字搜索',
        'maxPrice' => '最⼤价格',
        'minPrice' => '最⼩价格',
        'minimumShouldMatch' => '匹配精确度',
        'pageCurrent' => '当前⻚',
        'pageSize' => '条数',
        'sortField' => '排序字段',
        'sortType' => '排序类型',
        'supplyMerchantId' => '要排除的供应商ID',
    );

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
