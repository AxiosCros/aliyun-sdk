<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class BssOpenApiClient
 *
 * @package aliyun\sdk\services
 * @method BssOpenApi20171214\V20171214 V20171214() static
 */
class BssOpenApi extends ProductAbstract
{
    use ProductTrait;

    protected $product = "BssOpenApi";

    protected $service_code = "";

    protected $credential = "RpcCredential";

    protected $endpoints = [
        "regions"  => [
            "ap-northeast-1",
            "ap-south-1",
            "ap-southeast-1",
            "ap-southeast-2",
            "ap-southeast-3",
            "ap-southeast-5",
            "cn-beijing",
            "cn-chengdu",
            "cn-hangzhou",
            "cn-hongkong",
            "cn-huhehaote",
            "cn-qingdao",
            "cn-shanghai",
            "cn-shenzhen",
            "cn-zhangjiakou",
            "eu-central-1",
            "eu-west-1",
            "me-east-1",
            "us-east-1",
            "us-west-1",
        ],
        "public"   => [
            "ap-northeast-1" => "business.aliyuncs.com",
            "ap-south-1"     => "business.aliyuncs.com",
            "ap-southeast-1" => "business.aliyuncs.com",
            "ap-southeast-2" => "business.aliyuncs.com",
            "ap-southeast-3" => "business.aliyuncs.com",
            "ap-southeast-5" => "business.aliyuncs.com",
            "cn-beijing"     => "business.aliyuncs.com",
            "cn-chengdu"     => "business.aliyuncs.com",
            "cn-hangzhou"    => "business.aliyuncs.com",
            "cn-hongkong"    => "business.aliyuncs.com",
            "cn-huhehaote"   => "business.aliyuncs.com",
            "cn-qingdao"     => "business.aliyuncs.com",
            "cn-shanghai"    => "business.aliyuncs.com",
            "cn-shenzhen"    => "business.aliyuncs.com",
            "cn-zhangjiakou" => "business.aliyuncs.com",
            "eu-central-1"   => "business.aliyuncs.com",
            "eu-west-1"      => "business.aliyuncs.com",
            "me-east-1"      => "business.aliyuncs.com",
            "us-east-1"      => "business.aliyuncs.com",
            "us-west-1"      => "business.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
