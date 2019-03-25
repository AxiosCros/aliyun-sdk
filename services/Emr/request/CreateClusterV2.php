<?php
namespace aliyun\sdk\services\Emr\request;

use aliyun\sdk\services\Emr\EmrCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setLogPath($LogPath)
 * @method string getLogPath()
 * @method $this setSecurityGroupId($SecurityGroupId)
 * @method string getSecurityGroupId()
 * @method $this setIsOpenPublicIp($IsOpenPublicIp)
 * @method boolean getIsOpenPublicIp()
 * @method $this setSecurityGroupName($SecurityGroupName)
 * @method string getSecurityGroupName()
 * @method $this setChargeType($ChargeType)
 * @method string getChargeType()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setAutoRenew($AutoRenew)
 * @method boolean getAutoRenew()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setNetType($NetType)
 * @method string getNetType()
 * @method $this setUserDefinedEmrEcsRole($UserDefinedEmrEcsRole)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this setEmrVer($EmrVer)
 * @method string getEmrVer()
 * @method $this setOptionSoftWareList($OptionSoftWareList)
 * @method array getOptionSoftWareList()
 * @method $this setClusterType($ClusterType)
 * @method string getClusterType()
 * @method $this setHighAvailabilityEnable($HighAvailabilityEnable)
 * @method boolean getHighAvailabilityEnable()
 * @method $this setUseLocalMetaDb($UseLocalMetaDb)
 * @method boolean getUseLocalMetaDb()
 * @method $this setIoOptimized($IoOptimized)
 * @method boolean getIoOptimized()
 * @method $this setSshEnable($SshEnable)
 * @method boolean getSshEnable()
 * @method $this setInstanceGeneration($InstanceGeneration)
 * @method string getInstanceGeneration()
 * @method $this setMasterPwd($MasterPwd)
 * @method string getMasterPwd()
 * @method $this setKeyPairName($KeyPairName)
 * @method string getKeyPairName()
 * @method $this setUserInfo($UserInfo)
 * @method array getUserInfo()
 * @method $this setHostComponentInfo($HostComponentInfo)
 * @method array getHostComponentInfo()
 * @method $this setDepositType($DepositType)
 * @method string getDepositType()
 * @method $this setMachineType($MachineType)
 * @method string getMachineType()
 * @method $this setHostGroup($HostGroup)
 * @method array getHostGroup()
 * @method $this setBootstrapAction($BootstrapAction)
 * @method array getBootstrapAction()
 * @method $this setUseCustomHiveMetaDB($UseCustomHiveMetaDB)
 * @method boolean getUseCustomHiveMetaDB()
 * @method $this setInitCustomHiveMetaDB($InitCustomHiveMetaDB)
 * @method boolean getInitCustomHiveMetaDB()
 * @method $this setConfig($Config)
 * @method array getConfig()
 * @method $this setConfigurations($Configurations)
 * @method string getConfigurations()
 * @method $this setEasEnable($EasEnable)
 * @method boolean getEasEnable()
 * @method $this setRelatedClusterId($RelatedClusterId)
 * @method string getRelatedClusterId()
 * @method $this setWhiteListType($WhiteListType)
 * @method string getWhiteListType()
 * @method $this setAuthorizeContent($AuthorizeContent)
 * @method string getAuthorizeContent()
 */
final class CreateClusterV2 extends EmrCommon
{
    public $action = 'CreateClusterV2';
}
