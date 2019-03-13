<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSQLCollectorStatus($SQLCollectorStatus)
 * @method string getSQLCollectorStatus()
 * @method $this setStoragePeriod($StoragePeriod)
 * @method integer getStoragePeriod()
 */
final class ModifySQLCollectorPolicy extends RdsCommon
{
    public $action = 'ModifySQLCollectorPolicy';
}