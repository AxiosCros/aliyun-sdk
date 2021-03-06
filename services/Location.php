<?php

namespace aliyun\sdk\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

/**
 * Class LocationClient
 *
 * @package aliyun\sdk\services
 * @method Location20150612\V20150612 V20150612() static
 */
class Location extends ProductAbstract
{
    use ProductTrait;

    protected $product = "Location";

    protected $service_code = "location";

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
            "ap-northeast-1" => "location.aliyuncs.com",
            "ap-south-1"     => "location.aliyuncs.com",
            "ap-southeast-1" => "location-center.ap-southeast-1.aliyuncs.com",
            "ap-southeast-2" => "location.aliyuncs.com",
            "ap-southeast-3" => "location.aliyuncs.com",
            "ap-southeast-5" => "location.aliyuncs.com",
            "cn-beijing"     => "location.aliyuncs.com",
            "cn-chengdu"     => "location.aliyuncs.com",
            "cn-hangzhou"    => "location.aliyuncs.com",
            "cn-hongkong"    => "location.aliyuncs.com",
            "cn-huhehaote"   => "location.aliyuncs.com",
            "cn-qingdao"     => "location.aliyuncs.com",
            "cn-shanghai"    => "location.aliyuncs.com",
            "cn-shenzhen"    => "location.aliyuncs.com",
            "cn-zhangjiakou" => "location.aliyuncs.com",
            "eu-central-1"   => "location.aliyuncs.com",
            "eu-west-1"      => "location.aliyuncs.com",
            "me-east-1"      => "location.aliyuncs.com",
            "us-east-1"      => "location.aliyuncs.com",
            "us-west-1"      => "location.aliyuncs.com",
        ],
        "internal" => [
        ]
    ];
}
