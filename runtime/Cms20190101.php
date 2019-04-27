<?php

namespace aliyun\sdk\services\Cms20190101;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20190101
 *
 * @package aliyun\sdk\services\Cms20190101
 * @method ModifyMonitorGroup ModifyMonitorGroup()
 * @method EnableActiveMetricRule EnableActiveMetricRule()
 * @method DescribeMonitorGroupCategories DescribeMonitorGroupCategories()
 * @method DescribeEventRuleList DescribeEventRuleList()
 * @method DescribeContactGroupList DescribeContactGroupList()
 * @method PutContact PutContact()
 * @method CreateSiteMonitor CreateSiteMonitor()
 * @method DescribeCustomMetricList DescribeCustomMetricList()
 * @method DisableSiteMonitors DisableSiteMonitors()
 * @method PutEventRule PutEventRule()
 * @method PutMonitoringConfig PutMonitoringConfig()
 * @method PutContactGroup PutContactGroup()
 * @method DeleteMetricRules DeleteMetricRules()
 * @method DescribeMonitorGroupInstances DescribeMonitorGroupInstances()
 * @method DescribeActiveMetricRuleList DescribeActiveMetricRuleList()
 * @method PutMonitorGroupDynamicRule PutMonitorGroupDynamicRule()
 * @method DisableActiveMetricRule DisableActiveMetricRule()
 * @method DeleteSiteMonitors DeleteSiteMonitors()
 * @method DescribeSiteMonitorList DescribeSiteMonitorList()
 * @method DescribeMonitoringAgentHosts DescribeMonitoringAgentHosts()
 * @method EnableEventRules EnableEventRules()
 * @method DeleteMonitoringAgentProcess DeleteMonitoringAgentProcess()
 * @method DisableMetricRules DisableMetricRules()
 * @method DeleteMonitorGroupDynamicRule DeleteMonitorGroupDynamicRule()
 * @method DeleteMonitorGroupInstances DeleteMonitorGroupInstances()
 * @method DescribeMetricLast DescribeMetricLast()
 * @method DescribeSiteMonitorAttribute DescribeSiteMonitorAttribute()
 * @method DeleteEventRules DeleteEventRules()
 * @method CreateMonitoringAgentProcess CreateMonitoringAgentProcess()
 * @method CreateMonitorGroupNotifyPolicy CreateMonitorGroupNotifyPolicy()
 * @method DescribeMetricRuleTemplateList DescribeMetricRuleTemplateList()
 * @method DescribeMetricData DescribeMetricData()
 * @method DescribeMetricTop DescribeMetricTop()
 * @method DescribeEventRuleTargetList DescribeEventRuleTargetList()
 * @method DeleteCustomMetric DeleteCustomMetric()
 * @method DescribeMetricMetaList DescribeMetricMetaList()
 * @method DisableEventRules DisableEventRules()
 * @method SendDryRunSystemEvent SendDryRunSystemEvent()
 * @method CreateMonitorGroupInstances CreateMonitorGroupInstances()
 * @method DeleteMetricRuleTemplate DeleteMetricRuleTemplate()
 * @method DeleteContact DeleteContact()
 * @method DescribeCustomEventHistogram DescribeCustomEventHistogram()
 * @method EnableSiteMonitors EnableSiteMonitors()
 * @method DescribeMetricList DescribeMetricList()
 * @method DeleteHostAvailability DeleteHostAvailability()
 * @method CreateGroupMetricRules CreateGroupMetricRules()
 * @method DescribeMetricRuleCount DescribeMetricRuleCount()
 * @method DescribeMonitorGroupDynamicRules DescribeMonitorGroupDynamicRules()
 * @method CreateMetricRuleTemplate CreateMetricRuleTemplate()
 * @method DescribeMetricRuleTemplateAttribute DescribeMetricRuleTemplateAttribute()
 * @method PutCustomMetric PutCustomMetric()
 * @method EnableMetricRules EnableMetricRules()
 * @method InstallMonitoringAgent InstallMonitoringAgent()
 * @method DescribeCustomEventAttribute DescribeCustomEventAttribute()
 * @method ApplyMetricRuleTemplate ApplyMetricRuleTemplate()
 * @method DescribeCustomEventCount DescribeCustomEventCount()
 * @method DescribeSiteMonitorStatistics DescribeSiteMonitorStatistics()
 * @method DescribeSystemEventCount DescribeSystemEventCount()
 * @method ModifyMetricRuleTemplate ModifyMetricRuleTemplate()
 * @method DescribeAlertingMetricRuleResources DescribeAlertingMetricRuleResources()
 * @method PutCustomEvent PutCustomEvent()
 * @method DescribeHostAvailabilityList DescribeHostAvailabilityList()
 * @method CreateHostAvailability CreateHostAvailability()
 * @method DescribeUnhealthyHostAvailability DescribeUnhealthyHostAvailability()
 * @method PutGroupMetricRule PutGroupMetricRule()
 * @method UninstallMonitoringAgent UninstallMonitoringAgent()
 * @method DeleteEventRuleTargets DeleteEventRuleTargets()
 * @method DescribeMetricRuleList DescribeMetricRuleList()
 * @method PutResourceMetricRule PutResourceMetricRule()
 * @method DescribeSiteMonitorISPCityList DescribeSiteMonitorISPCityList()
 * @method ModifyHostAvailability ModifyHostAvailability()
 * @method DescribeSystemEventHistogram DescribeSystemEventHistogram()
 * @method ModifySiteMonitor ModifySiteMonitor()
 * @method DisableHostAvailability DisableHostAvailability()
 * @method DeleteMonitorGroupNotifyPolicy DeleteMonitorGroupNotifyPolicy()
 * @method DescribeContactListByContactGroup DescribeContactListByContactGroup()
 * @method DescribeProjectMeta DescribeProjectMeta()
 * @method DescribeSystemEventAttribute DescribeSystemEventAttribute()
 * @method DescribeMonitorGroups DescribeMonitorGroups()
 * @method DescribeSiteMonitorData DescribeSiteMonitorData()
 * @method DescribeEventRuleAttribute DescribeEventRuleAttribute()
 * @method CreateMonitorGroup CreateMonitorGroup()
 * @method DeleteMonitorGroup DeleteMonitorGroup()
 * @method DescribeMonitoringAgentProcesses DescribeMonitoringAgentProcesses()
 * @method DescribeMonitorGroupNotifyPolicyList DescribeMonitorGroupNotifyPolicyList()
 * @method DescribeContactList DescribeContactList()
 * @method DescribeMonitorGroupInstanceAttribute DescribeMonitorGroupInstanceAttribute()
 * @method DeleteContactGroup DeleteContactGroup()
 * @method EnableHostAvailability EnableHostAvailability()
 * @method PutEventRuleTargets PutEventRuleTargets()
 */
class V20190101
{
}

/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setContactGroups($contactGroups)
 * @method string getContactGroups()
 */
class ModifyMonitorGroup extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 */
class EnableActiveMetricRule extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class DescribeMonitorGroupCategories extends Request
{

}/**
 * @method $this setNamePrefix($namePrefix)
 * @method string getNamePrefix()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DescribeEventRuleList extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeContactGroupList extends Request
{

}/**
 * @method $this setContactName($contactName)
 * @method string getContactName()
 * @method $this setDescribe($describe)
 * @method string getDescribe()
 * @method $this setChannelsSMS($channelsSMS)
 * @method string getChannelsSMS()
 * @method $this setChannelsMail($channelsMail)
 * @method string getChannelsMail()
 * @method $this setChannelsAliIM($channelsAliIM)
 * @method string getChannelsAliIM()
 * @method $this setChannelsDingWebHook($channelsDingWebHook)
 * @method string getChannelsDingWebHook()
 */
class PutContact extends Request
{

}/**
 * @method $this setAddress($address)
 * @method string getAddress()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspCities($ispCities)
 * @method string getIspCities()
 * @method $this setOptionsJson($optionsJson)
 * @method string getOptionsJson()
 * @method $this setAlertIds($alertIds)
 * @method string getAlertIds()
 */
class CreateSiteMonitor extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setDimension($dimension)
 * @method string getDimension()
 * @method $this setMd5($md5)
 * @method string getMd5()
 * @method $this setPageNumber($pageNumber)
 * @method string getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 */
class DescribeCustomMetricList extends Request
{

}/**
 * @method $this setTaskIds($taskIds)
 * @method string getTaskIds()
 */
class DisableSiteMonitors extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setState($state)
 * @method string getState()
 * @method $this setEventPattern($eventPattern)
 * @method array getEventPattern()
 */
class PutEventRule extends Request
{

}/**
 * @method $this setAutoInstall($autoInstall)
 * @method bool getAutoInstall()
 * @method $this setEnableInstallAgentNewECS($enableInstallAgentNewECS)
 * @method bool getEnableInstallAgentNewECS()
 */
class PutMonitoringConfig extends Request
{

}/**
 * @method $this setContactGroupName($contactGroupName)
 * @method string getContactGroupName()
 * @method $this setDescribe($describe)
 * @method string getDescribe()
 * @method $this setContactNames($contactNames)
 * @method array getContactNames()
 */
class PutContactGroup extends Request
{

}/**
 * @method $this setId($id)
 * @method array getId()
 */
class DeleteMetricRules extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class DescribeMonitorGroupInstances extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 */
class DescribeActiveMetricRuleList extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setGroupRules($groupRules)
 * @method array getGroupRules()
 */
class PutMonitorGroupDynamicRule extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 */
class DisableActiveMetricRule extends Request
{

}/**
 * @method $this setTaskIds($taskIds)
 * @method string getTaskIds()
 * @method $this setIsDeleteAlarms($isDeleteAlarms)
 * @method bool getIsDeleteAlarms()
 */
class DeleteSiteMonitors extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setPage($page)
 * @method int getPage()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeSiteMonitorList extends Request
{

}/**
 * @method $this setKeyWord($keyWord)
 * @method string getKeyWord()
 * @method $this setHostName($hostName)
 * @method string getHostName()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 * @method $this setSerialNumbers($serialNumbers)
 * @method string getSerialNumbers()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setInstanceRegionId($instanceRegionId)
 * @method string getInstanceRegionId()
 */
class DescribeMonitoringAgentHosts extends Request
{

}/**
 * @method $this setRuleNames($ruleNames)
 * @method array getRuleNames()
 */
class EnableEventRules extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProcessName($processName)
 * @method string getProcessName()
 * @method $this setProcessId($processId)
 * @method string getProcessId()
 */
class DeleteMonitoringAgentProcess extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method array getRuleId()
 */
class DisableMetricRules extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setCategory($category)
 * @method string getCategory()
 */
class DeleteMonitorGroupDynamicRule extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setInstanceIdList($instanceIdList)
 * @method string getInstanceIdList()
 * @method $this setCategory($category)
 * @method string getCategory()
 */
class DeleteMonitorGroupInstances extends Request
{

}/**
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExpress($express)
 * @method string getExpress()
 */
class DescribeMetricLast extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setIncludeAlert($includeAlert)
 * @method bool getIncludeAlert()
 */
class DescribeSiteMonitorAttribute extends Request
{

}/**
 * @method $this setRuleNames($ruleNames)
 * @method array getRuleNames()
 */
class DeleteEventRules extends Request
{

}/**
 * @method $this setProcessName($processName)
 * @method string getProcessName()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setProcessUser($processUser)
 * @method string getProcessUser()
 */
class CreateMonitoringAgentProcess extends Request
{

}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class CreateMonitorGroupNotifyPolicy extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setHistory($history)
 * @method bool getHistory()
 */
class DescribeMetricRuleTemplateList extends Request
{

}/**
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setExpress($express)
 * @method string getExpress()
 * @method $this setLength($length)
 * @method string getLength()
 */
class DescribeMetricData extends Request
{

}/**
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setOrderby($orderby)
 * @method string getOrderby()
 * @method $this setOrderDesc($orderDesc)
 * @method string getOrderDesc()
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExpress($express)
 * @method string getExpress()
 */
class DescribeMetricTop extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 */
class DescribeEventRuleTargetList extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setMd5($md5)
 * @method string getMd5()
 * @method $this setUUID($uUID)
 * @method string getUUID()
 */
class DeleteCustomMetric extends Request
{

}/**
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setLabels($labels)
 * @method string getLabels()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeMetricMetaList extends Request
{

}/**
 * @method $this setRuleNames($ruleNames)
 * @method array getRuleNames()
 */
class DisableEventRules extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setEventName($eventName)
 * @method string getEventName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setEventContent($eventContent)
 * @method string getEventContent()
 */
class SendDryRunSystemEvent extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setInstances($instances)
 * @method array getInstances()
 */
class CreateMonitorGroupInstances extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DeleteMetricRuleTemplate extends Request
{

}/**
 * @method $this setContactName($contactName)
 * @method string getContactName()
 */
class DeleteContact extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setEventId($eventId)
 * @method string getEventId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setSearchKeywords($searchKeywords)
 * @method string getSearchKeywords()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeCustomEventHistogram extends Request
{

}/**
 * @method $this setTaskIds($taskIds)
 * @method string getTaskIds()
 */
class EnableSiteMonitors extends Request
{

}/**
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 * @method $this setLength($length)
 * @method string getLength()
 * @method $this setExpress($express)
 * @method string getExpress()
 */
class DescribeMetricList extends Request
{

}/**
 * @method $this setId($id)
 * @method array getId()
 */
class DeleteHostAvailability extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setGroupMetricRules($groupMetricRules)
 * @method array getGroupMetricRules()
 */
class CreateGroupMetricRules extends Request
{

}/**
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class DescribeMetricRuleCount extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class DescribeMonitorGroupDynamicRules extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setAlertTemplates($alertTemplates)
 * @method array getAlertTemplates()
 */
class CreateMetricRuleTemplate extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setTemplateId($templateId)
 * @method string getTemplateId()
 */
class DescribeMetricRuleTemplateAttribute extends Request
{

}/**
 * @method $this setMetricList($metricList)
 * @method array getMetricList()
 */
class PutCustomMetric extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method array getRuleId()
 */
class EnableMetricRules extends Request
{

}/**
 * @method $this setForce($force)
 * @method bool getForce()
 * @method $this setInstanceIds($instanceIds)
 * @method array getInstanceIds()
 */
class InstallMonitoringAgent extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setEventId($eventId)
 * @method string getEventId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setSearchKeywords($searchKeywords)
 * @method string getSearchKeywords()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeCustomEventAttribute extends Request
{

}/**
 * @method $this setSilenceTime($silenceTime)
 * @method int getSilenceTime()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setTemplateIds($templateIds)
 * @method string getTemplateIds()
 * @method $this setEnableStartTime($enableStartTime)
 * @method int getEnableStartTime()
 * @method $this setEnableEndTime($enableEndTime)
 * @method int getEnableEndTime()
 * @method $this setNotifyLevel($notifyLevel)
 * @method int getNotifyLevel()
 * @method $this setApplyMode($applyMode)
 * @method string getApplyMode()
 * @method $this setWebhook($webhook)
 * @method string getWebhook()
 */
class ApplyMetricRuleTemplate extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setEventId($eventId)
 * @method string getEventId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setSearchKeywords($searchKeywords)
 * @method string getSearchKeywords()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeCustomEventCount extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setTimeRange($timeRange)
 * @method string getTimeRange()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 */
class DescribeSiteMonitorStatistics extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setSearchKeywords($searchKeywords)
 * @method string getSearchKeywords()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeSystemEventCount extends Request
{

}/**
 * @method $this setTemplateId($templateId)
 * @method int getTemplateId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setRestVersion($restVersion)
 * @method int getRestVersion()
 * @method $this setAlertTemplates($alertTemplates)
 * @method array getAlertTemplates()
 */
class ModifyMetricRuleTemplate extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DescribeAlertingMetricRuleResources extends Request
{

}/**
 * @method $this setEventInfo($eventInfo)
 * @method array getEventInfo()
 */
class PutCustomEvent extends Request
{

}/**
 * @method $this setId($id)
 * @method int getId()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class DescribeHostAvailabilityList extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setTaskScope($taskScope)
 * @method string getTaskScope()
 * @method $this setTaskType($taskType)
 * @method string getTaskType()
 * @method $this setTaskOptionHttpURI($taskOptionHttpURI)
 * @method string getTaskOptionHttpURI()
 * @method $this setTaskOptionTelnetOrPingHost($taskOptionTelnetOrPingHost)
 * @method string getTaskOptionTelnetOrPingHost()
 * @method $this setTaskOptionHttpResponseCharset($taskOptionHttpResponseCharset)
 * @method string getTaskOptionHttpResponseCharset()
 * @method $this setTaskOptionHttpResponseMatchContent($taskOptionHttpResponseMatchContent)
 * @method string getTaskOptionHttpResponseMatchContent()
 * @method $this setTaskOptionHttpMethod($taskOptionHttpMethod)
 * @method string getTaskOptionHttpMethod()
 * @method $this setTaskOptionHttpNegative($taskOptionHttpNegative)
 * @method bool getTaskOptionHttpNegative()
 * @method $this setAlertConfigNotifyType($alertConfigNotifyType)
 * @method int getAlertConfigNotifyType()
 * @method $this setAlertConfigStartTime($alertConfigStartTime)
 * @method int getAlertConfigStartTime()
 * @method $this setAlertConfigEndTime($alertConfigEndTime)
 * @method int getAlertConfigEndTime()
 * @method $this setAlertConfigSilenceTime($alertConfigSilenceTime)
 * @method int getAlertConfigSilenceTime()
 * @method $this setAlertConfigWebHook($alertConfigWebHook)
 * @method string getAlertConfigWebHook()
 * @method $this setAlertConfigEscalationList($alertConfigEscalationList)
 * @method array getAlertConfigEscalationList()
 * @method $this setInstanceList($instanceList)
 * @method array getInstanceList()
 */
class CreateHostAvailability extends Request
{

}/**
 * @method $this setId($id)
 * @method array getId()
 */
class DescribeUnhealthyHostAvailability extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setEffectiveInterval($effectiveInterval)
 * @method string getEffectiveInterval()
 * @method $this setNoEffectiveInterval($noEffectiveInterval)
 * @method string getNoEffectiveInterval()
 * @method $this setSilenceTime($silenceTime)
 * @method int getSilenceTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setWebhook($webhook)
 * @method string getWebhook()
 * @method $this setEmailSubject($emailSubject)
 * @method string getEmailSubject()
 * @method $this setEscalationsCriticalStatistics($escalationsCriticalStatistics)
 * @method string getEscalationsCriticalStatistics()
 * @method $this setEscalationsCriticalComparisonOperator($escalationsCriticalComparisonOperator)
 * @method string getEscalationsCriticalComparisonOperator()
 * @method $this setEscalationsCriticalThreshold($escalationsCriticalThreshold)
 * @method string getEscalationsCriticalThreshold()
 * @method $this setEscalationsCriticalTimes($escalationsCriticalTimes)
 * @method int getEscalationsCriticalTimes()
 * @method $this setEscalationsWarnStatistics($escalationsWarnStatistics)
 * @method string getEscalationsWarnStatistics()
 * @method $this setEscalationsWarnComparisonOperator($escalationsWarnComparisonOperator)
 * @method string getEscalationsWarnComparisonOperator()
 * @method $this setEscalationsWarnThreshold($escalationsWarnThreshold)
 * @method string getEscalationsWarnThreshold()
 * @method $this setEscalationsWarnTimes($escalationsWarnTimes)
 * @method int getEscalationsWarnTimes()
 * @method $this setEscalationsInfoStatistics($escalationsInfoStatistics)
 * @method string getEscalationsInfoStatistics()
 * @method $this setEscalationsInfoComparisonOperator($escalationsInfoComparisonOperator)
 * @method string getEscalationsInfoComparisonOperator()
 * @method $this setEscalationsInfoThreshold($escalationsInfoThreshold)
 * @method string getEscalationsInfoThreshold()
 * @method $this setEscalationsInfoTimes($escalationsInfoTimes)
 * @method int getEscalationsInfoTimes()
 */
class PutGroupMetricRule extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class UninstallMonitoringAgent extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setIds($ids)
 * @method array getIds()
 */
class DeleteEventRuleTargets extends Request
{

}/**
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setEnableState($enableState)
 * @method bool getEnableState()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setPage($page)
 * @method string getPage()
 * @method $this setPageSize($pageSize)
 * @method string getPageSize()
 * @method $this setAlertState($alertState)
 * @method string getAlertState()
 * @method $this setDimensions($dimensions)
 * @method string getDimensions()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setRuleIds($ruleIds)
 * @method string getRuleIds()
 */
class DescribeMetricRuleList extends Request
{

}/**
 * @method $this setRuleId($ruleId)
 * @method string getRuleId()
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setNamespace($namespace)
 * @method string getNamespace()
 * @method $this setMetricName($metricName)
 * @method string getMetricName()
 * @method $this setResources($resources)
 * @method string getResources()
 * @method $this setContactGroups($contactGroups)
 * @method string getContactGroups()
 * @method $this setWebhook($webhook)
 * @method string getWebhook()
 * @method $this setEffectiveInterval($effectiveInterval)
 * @method string getEffectiveInterval()
 * @method $this setNoEffectiveInterval($noEffectiveInterval)
 * @method string getNoEffectiveInterval()
 * @method $this setSilenceTime($silenceTime)
 * @method int getSilenceTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setEmailSubject($emailSubject)
 * @method string getEmailSubject()
 * @method $this setEscalationsCriticalStatistics($escalationsCriticalStatistics)
 * @method string getEscalationsCriticalStatistics()
 * @method $this setEscalationsCriticalComparisonOperator($escalationsCriticalComparisonOperator)
 * @method string getEscalationsCriticalComparisonOperator()
 * @method $this setEscalationsCriticalThreshold($escalationsCriticalThreshold)
 * @method string getEscalationsCriticalThreshold()
 * @method $this setEscalationsCriticalTimes($escalationsCriticalTimes)
 * @method int getEscalationsCriticalTimes()
 * @method $this setEscalationsWarnStatistics($escalationsWarnStatistics)
 * @method string getEscalationsWarnStatistics()
 * @method $this setEscalationsWarnComparisonOperator($escalationsWarnComparisonOperator)
 * @method string getEscalationsWarnComparisonOperator()
 * @method $this setEscalationsWarnThreshold($escalationsWarnThreshold)
 * @method string getEscalationsWarnThreshold()
 * @method $this setEscalationsWarnTimes($escalationsWarnTimes)
 * @method int getEscalationsWarnTimes()
 * @method $this setEscalationsInfoStatistics($escalationsInfoStatistics)
 * @method string getEscalationsInfoStatistics()
 * @method $this setEscalationsInfoComparisonOperator($escalationsInfoComparisonOperator)
 * @method string getEscalationsInfoComparisonOperator()
 * @method $this setEscalationsInfoThreshold($escalationsInfoThreshold)
 * @method string getEscalationsInfoThreshold()
 * @method $this setEscalationsInfoTimes($escalationsInfoTimes)
 * @method int getEscalationsInfoTimes()
 */
class PutResourceMetricRule extends Request
{

}/**
 * @method $this setIsp($isp)
 * @method string getIsp()
 * @method $this setCity($city)
 * @method string getCity()
 */
class DescribeSiteMonitorISPCityList extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setId($id)
 * @method int getId()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setTaskScope($taskScope)
 * @method string getTaskScope()
 * @method $this setTaskOptionHttpURI($taskOptionHttpURI)
 * @method string getTaskOptionHttpURI()
 * @method $this setTaskOptionTelnetOrPingHost($taskOptionTelnetOrPingHost)
 * @method string getTaskOptionTelnetOrPingHost()
 * @method $this setTaskOptionHttpResponseCharset($taskOptionHttpResponseCharset)
 * @method string getTaskOptionHttpResponseCharset()
 * @method $this setTaskOptionHttpResponseMatchContent($taskOptionHttpResponseMatchContent)
 * @method string getTaskOptionHttpResponseMatchContent()
 * @method $this setTaskOptionHttpMethod($taskOptionHttpMethod)
 * @method string getTaskOptionHttpMethod()
 * @method $this setTaskOptionHttpNegative($taskOptionHttpNegative)
 * @method bool getTaskOptionHttpNegative()
 * @method $this setAlertConfigNotifyType($alertConfigNotifyType)
 * @method int getAlertConfigNotifyType()
 * @method $this setAlertConfigStartTime($alertConfigStartTime)
 * @method int getAlertConfigStartTime()
 * @method $this setAlertConfigEndTime($alertConfigEndTime)
 * @method int getAlertConfigEndTime()
 * @method $this setAlertConfigSilenceTime($alertConfigSilenceTime)
 * @method int getAlertConfigSilenceTime()
 * @method $this setAlertConfigWebHook($alertConfigWebHook)
 * @method string getAlertConfigWebHook()
 * @method $this setAlertConfigEscalationList($alertConfigEscalationList)
 * @method array getAlertConfigEscalationList()
 * @method $this setInstanceList($instanceList)
 * @method array getInstanceList()
 */
class ModifyHostAvailability extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setSearchKeywords($searchKeywords)
 * @method string getSearchKeywords()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeSystemEventHistogram extends Request
{

}/**
 * @method $this setAddress($address)
 * @method string getAddress()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setTaskName($taskName)
 * @method string getTaskName()
 * @method $this setInterval($interval)
 * @method string getInterval()
 * @method $this setIspCities($ispCities)
 * @method string getIspCities()
 * @method $this setOptionsJson($optionsJson)
 * @method string getOptionsJson()
 * @method $this setAlertIds($alertIds)
 * @method string getAlertIds()
 */
class ModifySiteMonitor extends Request
{

}/**
 * @method $this setId($id)
 * @method array getId()
 */
class DisableHostAvailability extends Request
{

}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DeleteMonitorGroupNotifyPolicy extends Request
{

}/**
 * @method $this setContactGroupName($contactGroupName)
 * @method string getContactGroupName()
 */
class DescribeContactListByContactGroup extends Request
{

}/**
 * @method $this setLabels($labels)
 * @method string getLabels()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeProjectMeta extends Request
{

}/**
 * @method $this setProduct($product)
 * @method string getProduct()
 * @method $this setEventType($eventType)
 * @method string getEventType()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setLevel($level)
 * @method string getLevel()
 * @method $this setStatus($status)
 * @method string getStatus()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 * @method $this setSearchKeywords($searchKeywords)
 * @method string getSearchKeywords()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class DescribeSystemEventAttribute extends Request
{

}/**
 * @method $this setType($type)
 * @method string getType()
 * @method $this setSelectContactGroups($selectContactGroups)
 * @method bool getSelectContactGroups()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setBindUrls($bindUrls)
 * @method string getBindUrls()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class DescribeMonitorGroups extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setmetricName($metricName)
 * @method string getmetricName()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 * @method $this setLength($length)
 * @method int getLength()
 */
class DescribeSiteMonitorData extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 */
class DescribeEventRuleAttribute extends Request
{

}/**
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setContactGroups($contactGroups)
 * @method string getContactGroups()
 */
class CreateMonitorGroup extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 */
class DeleteMonitorGroup extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeMonitoringAgentProcesses extends Request
{

}/**
 * @method $this setPolicyType($policyType)
 * @method string getPolicyType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setGroupId($groupId)
 * @method string getGroupId()
 */
class DescribeMonitorGroupNotifyPolicyList extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setContactName($contactName)
 * @method string getContactName()
 */
class DescribeContactList extends Request
{

}/**
 * @method $this setGroupId($groupId)
 * @method int getGroupId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setTotal($total)
 * @method bool getTotal()
 * @method $this setCategory($category)
 * @method string getCategory()
 * @method $this setKeyword($keyword)
 * @method string getKeyword()
 * @method $this setInstanceIds($instanceIds)
 * @method string getInstanceIds()
 */
class DescribeMonitorGroupInstanceAttribute extends Request
{

}/**
 * @method $this setContactGroupName($contactGroupName)
 * @method string getContactGroupName()
 */
class DeleteContactGroup extends Request
{

}/**
 * @method $this setId($id)
 * @method array getId()
 */
class EnableHostAvailability extends Request
{

}/**
 * @method $this setRuleName($ruleName)
 * @method string getRuleName()
 * @method $this setFcParameters($fcParameters)
 * @method array getFcParameters()
 * @method $this setContactParameters($contactParameters)
 * @method array getContactParameters()
 * @method $this setMnsParameters($mnsParameters)
 * @method array getMnsParameters()
 * @method $this setWebhookParameters($webhookParameters)
 * @method array getWebhookParameters()
 * @method $this setSlsParameters($slsParameters)
 * @method array getSlsParameters()
 */
class PutEventRuleTargets extends Request
{

}