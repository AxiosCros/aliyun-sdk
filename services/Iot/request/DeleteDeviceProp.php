<?php
namespace aliyun\sdk\services\Iot\request;

use aliyun\sdk\services\Iot\IotCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setIotInstanceId($IotInstanceId)
 * @method string getIotInstanceId()
 * @method $this setIotId($IotId)
 * @method string getIotId()
 * @method $this setDeviceName($DeviceName)
 * @method string getDeviceName()
 * @method $this setProductKey($ProductKey)
 * @method string getProductKey()
 * @method $this setPropKey($PropKey)
 * @method string getPropKey()
 */
final class DeleteDeviceProp extends IotCommon
{
    public $action = 'DeleteDeviceProp';
}
