<?php
namespace aliyun\sdk\services\Live\request;

use aliyun\sdk\services\Live\LiveCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setCasterId($CasterId)
 * @method string getCasterId()
 */
final class DeleteCaster extends LiveCommon
{
    public $action = 'DeleteCaster';
}
