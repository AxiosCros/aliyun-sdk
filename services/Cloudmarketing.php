<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class CloudmarketingClient
 *
 * @package aliyun\sdk\services
 * @method \aliyun\sdk\services\Cloudmarketing20180910\V20180910 V20180910() static
 */
class Cloudmarketing extends ProductAbstract
{
    use ProductTrait;

    protected $product = "cloudmarketing";

    protected $service_code = "";

    protected $credential = "AccessKeyCredential";

    protected $endpoints = [
        "regions"  => [
            "cn-hangzhou",
        ],
        "public"   => [
            "cn-hangzhou"    => "cloudmarketing.cn-hangzhou.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}