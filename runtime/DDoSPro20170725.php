<?php

namespace aliyun\sdk\services\DDoSPro20170725;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170725
 *
 * @package aliyun\sdk\services\DDoSPro20170725
 * @method DescribeIpTraffic DescribeIpTraffic()
 * @method DescribeWebReportDomainRequestList DescribeWebReportDomainRequestList()
 * @method DescribeIpProtectEvent DescribeIpProtectEvent()
 * @method UpdatePortRule UpdatePortRule()
 * @method DescribeBizReportDownloadUrl DescribeBizReportDownloadUrl()
 * @method DescribePortReportCountryRequest DescribePortReportCountryRequest()
 * @method DeleteDomainTransmitRule DeleteDomainTransmitRule()
 * @method DescribeWebReportStatusCodeCount DescribeWebReportStatusCodeCount()
 * @method DescribePortReportConnsGraph DescribePortReportConnsGraph()
 * @method DescribePortReportAttackEvents DescribePortReportAttackEvents()
 * @method DescribePortReportFlowGraph DescribePortReportFlowGraph()
 * @method UploadCertificate UploadCertificate()
 * @method DescribeWebReportStatusCodeList DescribeWebReportStatusCodeList()
 * @method ModifyCnameAutoStatus ModifyCnameAutoStatus()
 * @method ModifyDDoSProtectConfig ModifyDDoSProtectConfig()
 * @method DescribeUploadPreSign DescribeUploadPreSign()
 * @method UpdateSupportContact UpdateSupportContact()
 * @method ModifyRealServers ModifyRealServers()
 * @method DescribeWebLogDownloadFilePage DescribeWebLogDownloadFilePage()
 * @method DescribePortReportFlowCount DescribePortReportFlowCount()
 * @method CreateCcCustomedRule CreateCcCustomedRule()
 * @method CreateDomain CreateDomain()
 * @method MigrateDomainConfig MigrateDomainConfig()
 * @method DeleteDDoSFlowPackIp DeleteDDoSFlowPackIp()
 * @method DescribeDomainSecurityConfig DescribeDomainSecurityConfig()
 * @method ModifyCcTemplate ModifyCcTemplate()
 * @method DescribePortReportConnsCount DescribePortReportConnsCount()
 * @method DescribeCnameAutoStatus DescribeCnameAutoStatus()
 * @method ModifyTransmitLine ModifyTransmitLine()
 * @method ModifyElasticBandwidth ModifyElasticBandwidth()
 * @method DescribeOplog DescribeOplog()
 * @method DescribeDdosIpConfig DescribeDdosIpConfig()
 * @method DescribeBackSourceCidr DescribeBackSourceCidr()
 * @method ModifyHealthCheckConfig ModifyHealthCheckConfig()
 * @method DescribeSlsServiceStatus DescribeSlsServiceStatus()
 * @method ModifyDomainBlackWhiteList ModifyDomainBlackWhiteList()
 * @method DescribePortReportTopAttackIp DescribePortReportTopAttackIp()
 * @method CreateWebLogDownloadTask CreateWebLogDownloadTask()
 * @method DescribeCcMode DescribeCcMode()
 * @method DescribeWebReportIspCount DescribeWebReportIspCount()
 * @method DescribePortReportFlowGraphByPort DescribePortReportFlowGraphByPort()
 * @method DescribeHealthCheckConfig DescribeHealthCheckConfig()
 * @method DescribeWebReportTopIp DescribeWebReportTopIp()
 * @method CommitPortHealthFile CommitPortHealthFile()
 * @method DescribeSlsAuthStatus DescribeSlsAuthStatus()
 * @method DeleteBlockhole DeleteBlockhole()
 * @method CreatePortRule CreatePortRule()
 * @method DescribeSupportQRCodeByInstanceId DescribeSupportQRCodeByInstanceId()
 * @method ModifyCcStatus ModifyCcStatus()
 * @method DescribeWebReportAttackOverview DescribeWebReportAttackOverview()
 * @method DescribeWebLogPage DescribeWebLogPage()
 * @method DeletePortRule DeletePortRule()
 * @method DescribeInstanceList DescribeInstanceList()
 * @method DescribeWebReportProvinceRequest DescribeWebReportProvinceRequest()
 * @method DescribeUnBlackholeCount DescribeUnBlackholeCount()
 * @method DescribeWebReportCountryRequest DescribeWebReportCountryRequest()
 * @method DescribeDomainConfigPage DescribeDomainConfigPage()
 * @method DescribeDdosPeakFlow DescribeDdosPeakFlow()
 * @method DescribePortReportProvinceRequest DescribePortReportProvinceRequest()
 * @method CommitPortFile CommitPortFile()
 * @method DescribeIpAttackEvent DescribeIpAttackEvent()
 * @method ConfigDDoSFlowPack ConfigDDoSFlowPack()
 * @method ModifyDomainCnameStatus ModifyDomainCnameStatus()
 * @method DescribeWebReportRequestMax DescribeWebReportRequestMax()
 * @method ModifyDomainProxy ModifyDomainProxy()
 * @method DescribeDomainConfig DescribeDomainConfig()
 * @method DeleteCcCustomedRule DeleteCcCustomedRule()
 * @method DescribePortRulePage DescribePortRulePage()
 * @method DescribeDdosFlowProportionDiagram DescribeDdosFlowProportionDiagram()
 * @method CreateTransmitLine CreateTransmitLine()
 * @method DeleteTransmitLine DeleteTransmitLine()
 * @method DescribeDomainQps DescribeDomainQps()
 * @method DescribePortReportAttackEventsTopIp DescribePortReportAttackEventsTopIp()
 * @method CommitDomainFile CommitDomainFile()
 * @method DescribeUnBlockholeCount DescribeUnBlockholeCount()
 * @method CommitPortDdosFile CommitPortDdosFile()
 * @method ModifyPersistenceTimeOut ModifyPersistenceTimeOut()
 * @method ModifyIpCnameStatus ModifyIpCnameStatus()
 * @method DeleteBlackHole DeleteBlackHole()
 * @method ModifyCcMode ModifyCcMode()
 * @method ConfigSwitchPriority ConfigSwitchPriority()
 * @method DescribeDdosAttackEvents DescribeDdosAttackEvents()
 * @method DescribeCcEvents DescribeCcEvents()
 * @method UpdateCcCustomedRule UpdateCcCustomedRule()
 * @method DescribeDdosStatus DescribeDdosStatus()
 * @method ModifyCcCustomStatus ModifyCcCustomStatus()
 * @method DescribeWebReportTopDelayUrl DescribeWebReportTopDelayUrl()
 * @method ModifyDomainTransmitRule ModifyDomainTransmitRule()
 * @method ModifyDomainSlsStatus ModifyDomainSlsStatus()
 * @method DescribeInstancePage DescribeInstancePage()
 * @method DescribeDomainSlsStatus DescribeDomainSlsStatus()
 * @method DescribeDdosAttackEventSourceIps DescribeDdosAttackEventSourceIps()
 * @method DescribeFlowBlockholeStatus DescribeFlowBlockholeStatus()
 * @method DescribeDDoSFlowPackList DescribeDDoSFlowPackList()
 * @method ListCcCustomedRule ListCcCustomedRule()
 * @method DeleteDomain DeleteDomain()
 * @method DescribeDomainList DescribeDomainList()
 * @method DescribeWebReportTopUrl DescribeWebReportTopUrl()
 * @method DescribePortReportPortFlow DescribePortReportPortFlow()
 * @method DescribeBizFlow DescribeBizFlow()
 * @method DescribeWebReportUv DescribeWebReportUv()
 * @method ModifySwitchMode ModifySwitchMode()
 * @method DescribeWebReportBrowserCount DescribeWebReportBrowserCount()
 * @method DescribeDdosAttackTypeChart DescribeDdosAttackTypeChart()
 * @method DescribePortReportAttackOverview DescribePortReportAttackOverview()
 * @method DescribeWebReportRequestCount DescribeWebReportRequestCount()
 * @method ListDomainConfig ListDomainConfig()
 * @method DescribeDomainBlackWhiteList DescribeDomainBlackWhiteList()
 * @method DescribePortReportIpFlow DescribePortReportIpFlow()
 * @method CreateBlockhole CreateBlockhole()
 */
class V20170725
{
}

/**
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setStartDateMillis($startDateMillis)
 * @method int getStartDateMillis()
 * @method $this setEndDateMillis($endDateMillis)
 * @method int getEndDateMillis()
 */
class DescribeIpTraffic extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportDomainRequestList extends Request
{

}/**
 * @method $this setAliUid($aliUid)
 * @method int getAliUid()
 * @method $this setStartDateMillis($startDateMillis)
 * @method int getStartDateMillis()
 * @method $this setEndDateMillis($endDateMillis)
 * @method int getEndDateMillis()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStart($start)
 * @method int getStart()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeIpProtectEvent extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setRealServerList($realServerList)
 * @method string getRealServerList()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class UpdatePortRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 */
class DescribeBizReportDownloadUrl extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class DescribePortReportCountryRequest extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DeleteDomainTransmitRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportStatusCodeCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setPort($port)
 * @method string getPort()
 */
class DescribePortReportConnsGraph extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribePortReportAttackEvents extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribePortReportFlowGraph extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setCert($cert)
 * @method string getCert()
 * @method $this setCertName($certName)
 * @method string getCertName()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setCertId($certId)
 * @method int getCertId()
 */
class UploadCertificate extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 */
class DescribeWebReportStatusCodeList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEnable($enable)
 * @method bool getEnable()
 */
class ModifyCnameAutoStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setConfigJson($configJson)
 * @method string getConfigJson()
 * @method $this setLbId($lbId)
 * @method string getLbId()
 */
class ModifyDDoSProtectConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUploadType($uploadType)
 * @method string getUploadType()
 */
class DescribeUploadPreSign extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setMobile($mobile)
 * @method string getMobile()
 */
class UpdateSupportContact extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setRealServers($realServers)
 * @method array getRealServers()
 */
class ModifyRealServers extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setTaskId($taskId)
 * @method int getTaskId()
 */
class DescribeWebLogDownloadFilePage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribePortReportFlowCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setMatchingRule($matchingRule)
 * @method string getMatchingRule()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setVisitCount($visitCount)
 * @method int getVisitCount()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setBlockingType($blockingType)
 * @method string getBlockingType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setBlockingTime($blockingTime)
 * @method int getBlockingTime()
 * @method $this setUri($uri)
 * @method string getUri()
 */
class CreateCcCustomedRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setCcEnable($ccEnable)
 * @method bool getCcEnable()
 * @method $this setRealServer($realServer)
 * @method array getRealServer()
 * @method $this setProxyType($proxyType)
 * @method array getProxyType()
 * @method $this setIps($ips)
 * @method array getIps()
 */
class CreateDomain extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setDomains($domains)
 * @method array getDomains()
 */
class MigrateDomainConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setId($id)
 * @method int getId()
 */
class DeleteDDoSFlowPackIp extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainSecurityConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setMode($mode)
 * @method int getMode()
 */
class ModifyCcTemplate extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribePortReportConnsCount extends Request
{

}/**
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeCnameAutoStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setIps($ips)
 * @method array getIps()
 */
class ModifyTransmitLine extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setElasticBandwidth($elasticBandwidth)
 * @method int getElasticBandwidth()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class ModifyElasticBandwidth extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setResourceId($resourceId)
 * @method string getResourceId()
 * @method $this setResult($result)
 * @method int getResult()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeOplog extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIps($ips)
 * @method array getIps()
 * @method $this setIndex($index)
 * @method int getIndex()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDdosIpConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setRegion($region)
 * @method string getRegion()
 */
class DescribeBackSourceCidr extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setConfigJson($configJson)
 * @method string getConfigJson()
 * @method $this setLbId($lbId)
 * @method string getLbId()
 */
class ModifyHealthCheckConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSlsServiceStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setBlack($black)
 * @method array getBlack()
 * @method $this setWhite($white)
 * @method array getWhite()
 */
class ModifyDomainBlackWhiteList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setTop($top)
 * @method int getTop()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribePortReportTopAttackIp extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class CreateWebLogDownloadTask extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setVips($vips)
 * @method array getVips()
 */
class DescribeCcMode extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportIspCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setPort($port)
 * @method string getPort()
 */
class DescribePortReportFlowGraphByPort extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeHealthCheckConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setTop($top)
 * @method int getTop()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportTopIp extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUploadFileName($uploadFileName)
 * @method string getUploadFileName()
 */
class CommitPortHealthFile extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeSlsAuthStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setVip($vip)
 * @method string getVip()
 */
class DeleteBlockhole extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setBackPort($backPort)
 * @method int getBackPort()
 * @method $this setProxyType($proxyType)
 * @method string getProxyType()
 * @method $this setRealServerList($realServerList)
 * @method string getRealServerList()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class CreatePortRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeSupportQRCodeByInstanceId extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEnable($enable)
 * @method bool getEnable()
 */
class ModifyCcStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportAttackOverview extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeWebLogPage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DeletePortRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setInstanceIdList($instanceIdList)
 * @method array getInstanceIdList()
 * @method $this setIpList($ipList)
 * @method array getIpList()
 */
class DescribeInstanceList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportProvinceRequest extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeUnBlackholeCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportCountryRequest extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class DescribeDomainConfigPage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeDdosPeakFlow extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class DescribePortReportProvinceRequest extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUploadFileName($uploadFileName)
 * @method string getUploadFileName()
 */
class CommitPortFile extends Request
{

}/**
 * @method $this setStartDateMillis($startDateMillis)
 * @method int getStartDateMillis()
 * @method $this setEndDateMillis($endDateMillis)
 * @method int getEndDateMillis()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStart($start)
 * @method int getStart()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeIpAttackEvent extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class ConfigDDoSFlowPack extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEnable($enable)
 * @method bool getEnable()
 */
class ModifyDomainCnameStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportRequestMax extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setProxyType($proxyType)
 * @method array getProxyType()
 */
class ModifyDomainProxy extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setName($name)
 * @method string getName()
 */
class DeleteCcCustomedRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribePortRulePage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeDdosFlowProportionDiagram extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setIps($ips)
 * @method array getIps()
 * @method $this setRealServers($realServers)
 * @method array getRealServers()
 */
class CreateTransmitLine extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DeleteTransmitLine extends Request
{

}/**
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartDateMillis($startDateMillis)
 * @method int getStartDateMillis()
 * @method $this setEndDateMillis($endDateMillis)
 * @method int getEndDateMillis()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeDomainQps extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setTop($top)
 * @method int getTop()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 */
class DescribePortReportAttackEventsTopIp extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUploadFileName($uploadFileName)
 * @method string getUploadFileName()
 */
class CommitDomainFile extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeUnBlockholeCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setUploadFileName($uploadFileName)
 * @method string getUploadFileName()
 */
class CommitPortDdosFile extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setFrontPort($frontPort)
 * @method int getFrontPort()
 * @method $this setConfigJson($configJson)
 * @method string getConfigJson()
 * @method $this setLbId($lbId)
 * @method string getLbId()
 */
class ModifyPersistenceTimeOut extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setEnable($enable)
 * @method bool getEnable()
 */
class ModifyIpCnameStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setVip($vip)
 * @method string getVip()
 */
class DeleteBlackHole extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setVip($vip)
 * @method string getVip()
 * @method $this setCcMode($ccMode)
 * @method string getCcMode()
 */
class ModifyCcMode extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setConfig($config)
 * @method array getConfig()
 */
class ConfigSwitchPriority extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeDdosAttackEvents extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNo($pageNo)
 * @method int getPageNo()
 */
class DescribeCcEvents extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setMatchingRule($matchingRule)
 * @method string getMatchingRule()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setVisitCount($visitCount)
 * @method int getVisitCount()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setBlockingType($blockingType)
 * @method string getBlockingType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setBlockingTime($blockingTime)
 * @method int getBlockingTime()
 * @method $this setUri($uri)
 * @method string getUri()
 */
class UpdateCcCustomedRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setVips($vips)
 * @method array getVips()
 */
class DescribeDdosStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setEnable($enable)
 * @method bool getEnable()
 */
class ModifyCcCustomStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setTop($top)
 * @method int getTop()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportTopDelayUrl extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setRealServer($realServer)
 * @method array getRealServer()
 */
class ModifyDomainTransmitRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setSwitchStatus($switchStatus)
 * @method bool getSwitchStatus()
 */
class ModifyDomainSlsStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setLine($line)
 * @method string getLine()
 * @method $this setInstanceIdList($instanceIdList)
 * @method array getInstanceIdList()
 * @method $this setIpList($ipList)
 * @method array getIpList()
 */
class DescribeInstancePage extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainSlsStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class DescribeDdosAttackEventSourceIps extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setVips($vips)
 * @method array getVips()
 */
class DescribeFlowBlockholeStatus extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setStatus($status)
 * @method int getStatus()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeDDoSFlowPackList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class ListCcCustomedRule extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DeleteDomain extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 */
class DescribeDomainList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 * @method $this setTop($top)
 * @method int getTop()
 */
class DescribeWebReportTopUrl extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribePortReportPortFlow extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeBizFlow extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportUv extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setMode($mode)
 * @method string getMode()
 */
class ModifySwitchMode extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setQueryType($queryType)
 * @method string getQueryType()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportBrowserCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setIp($ip)
 * @method string getIp()
 */
class DescribeDdosAttackTypeChart extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribePortReportAttackOverview extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribeWebReportRequestCount extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDomain($domain)
 * @method string getDomain()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCurrentPage($currentPage)
 * @method int getCurrentPage()
 */
class ListDomainConfig extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setDomain($domain)
 * @method string getDomain()
 */
class DescribeDomainBlackWhiteList extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setIp($ip)
 * @method string getIp()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setInterval($interval)
 * @method int getInterval()
 */
class DescribePortReportIpFlow extends Request
{

}/**
 * @method $this setSourceIp($sourceIp)
 * @method string getSourceIp()
 * @method $this setLang($lang)
 * @method string getLang()
 * @method $this setVip($vip)
 * @method string getVip()
 * @method $this setBlockZone($blockZone)
 * @method string getBlockZone()
 * @method $this setBlockTime($blockTime)
 * @method int getBlockTime()
 */
class CreateBlockhole extends Request
{

}