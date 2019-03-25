<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setForwardTableId($ForwardTableId)
 * @method string getForwardTableId()
 * @method $this setForwardEntryId($ForwardEntryId)
 * @method string getForwardEntryId()
 * @method $this setExternalIp($ExternalIp)
 * @method string getExternalIp()
 * @method $this setExternalPort($ExternalPort)
 * @method string getExternalPort()
 * @method $this setInternalIp($InternalIp)
 * @method string getInternalIp()
 * @method $this setInternalPort($InternalPort)
 * @method string getInternalPort()
 * @method $this setIpProtocol($IpProtocol)
 * @method string getIpProtocol()
 * @method $this setForwardEntryName($ForwardEntryName)
 * @method string getForwardEntryName()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class ModifyForwardEntry extends VpcCommon
{
    public $action = 'ModifyForwardEntry';
}
