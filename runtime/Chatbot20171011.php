<?php

namespace aliyun\sdk\services\Chatbot20171011;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20171011
 *
 * @package aliyun\sdk\services\Chatbot20171011
 * @method DeleteMachineReadingArticle DeleteMachineReadingArticle()
 * @method DisableKnowledge DisableKnowledge()
 * @method UpdateCoreWord UpdateCoreWord()
 * @method QueryKnowledges QueryKnowledges()
 * @method MoveKnowledgeCategory MoveKnowledgeCategory()
 * @method UpdateCategory UpdateCategory()
 * @method DisableDialogFlow DisableDialogFlow()
 * @method PublishDialogFlow PublishDialogFlow()
 * @method UpdateMachineReadingArticle UpdateMachineReadingArticle()
 * @method QueryCategories QueryCategories()
 * @method TestDialogFlow TestDialogFlow()
 * @method UpdatePerspective UpdatePerspective()
 * @method QueryDialogs QueryDialogs()
 * @method UpdateIntent UpdateIntent()
 * @method DeleteEntity DeleteEntity()
 * @method CreateMachineReadingArticle CreateMachineReadingArticle()
 * @method CreateIntent CreateIntent()
 * @method DeleteDialog DeleteDialog()
 * @method UpdateKnowledge UpdateKnowledge()
 * @method QueryEntities QueryEntities()
 * @method DescribeDialog DescribeDialog()
 * @method DescribeKnowledge DescribeKnowledge()
 * @method CreateCordWord CreateCordWord()
 * @method DeleteBot DeleteBot()
 * @method CreateCategory CreateCategory()
 * @method DescribeMachineReadingArticle DescribeMachineReadingArticle()
 * @method DescribePerspective DescribePerspective()
 * @method CreateCoreWord CreateCoreWord()
 * @method UpdateBot UpdateBot()
 * @method DeleteCategory DeleteCategory()
 * @method CreateKnowledge CreateKnowledge()
 * @method LinkBotCategory LinkBotCategory()
 * @method CreateBot CreateBot()
 * @method DescribeCategory DescribeCategory()
 * @method DescribeCoreWord DescribeCoreWord()
 * @method PublishKnowledge PublishKnowledge()
 * @method QueryCoreWords QueryCoreWords()
 * @method QueryBots QueryBots()
 * @method QueryIntents QueryIntents()
 * @method ActivatePerspective ActivatePerspective()
 * @method UpdateEntity UpdateEntity()
 * @method CreateDialog CreateDialog()
 * @method DeleteIntent DeleteIntent()
 * @method DescribeIntent DescribeIntent()
 * @method UpdateDialogFlow UpdateDialogFlow()
 * @method DescribeBot DescribeBot()
 * @method AddSynonym AddSynonym()
 * @method DescribeEntities DescribeEntities()
 * @method DescribeDialogFlow DescribeDialogFlow()
 * @method QueryMachineReadingArticles QueryMachineReadingArticles()
 * @method QuerySystemEntities QuerySystemEntities()
 * @method CreateEntity CreateEntity()
 * @method UpdateDialog UpdateDialog()
 * @method RemoveEntityMember RemoveEntityMember()
 * @method AppendEntityMember AppendEntityMember()
 * @method Feedback Feedback()
 * @method CreatePerspective CreatePerspective()
 * @method DeleteKnowledge DeleteKnowledge()
 * @method Chat Chat()
 * @method RemoveSynonym RemoveSynonym()
 * @method SearchKnowledges SearchKnowledges()
 * @method UpdateAndPushDialogFlowToSandbox UpdateAndPushDialogFlowToSandbox()
 */
class V20171011
{
}

/**
 * @method $this setMachineReadingId($machineReadingId)
 * @method int getMachineReadingId()
 */
class DeleteMachineReadingArticle extends Request
{

}/**
 * @method $this setKnowledgeId($knowledgeId)
 * @method int getKnowledgeId()
 */
class DisableKnowledge extends Request
{

}/**
 * @method $this setCoreWordName($coreWordName)
 * @method string getCoreWordName()
 * @method $this setCoreWordCode($coreWordCode)
 * @method string getCoreWordCode()
 */
class UpdateCoreWord extends Request
{

}/**
 * @method $this setKnowledgeTitle($knowledgeTitle)
 * @method string getKnowledgeTitle()
 * @method $this setCoreWordName($coreWordName)
 * @method string getCoreWordName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 */
class QueryKnowledges extends Request
{

}/**
 * @method $this setKnowledgeId($knowledgeId)
 * @method int getKnowledgeId()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 */
class MoveKnowledgeCategory extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 */
class UpdateCategory extends Request
{

}/**
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 */
class DisableDialogFlow extends Request
{

}/**
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 */
class PublishDialogFlow extends Request
{

}/**
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setCoreWord($coreWord)
 * @method string getCoreWord()
 * @method $this setPerspectiveIds($perspectiveIds)
 * @method string getPerspectiveIds()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setMachineReadingId($machineReadingId)
 * @method int getMachineReadingId()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setBizDataRanges($bizDataRanges)
 * @method string getBizDataRanges()
 */
class UpdateMachineReadingArticle extends Request
{

}/**
 * @method $this setParentCategoryId($parentCategoryId)
 * @method int getParentCategoryId()
 * @method $this setShowChildrens($showChildrens)
 * @method bool getShowChildrens()
 */
class QueryCategories extends Request
{

}/**
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 */
class TestDialogFlow extends Request
{

}/**
 * @method $this setPerspectiveId($perspectiveId)
 * @method string getPerspectiveId()
 * @method $this setName($name)
 * @method string getName()
 */
class UpdatePerspective extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDialogName($dialogName)
 * @method string getDialogName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryDialogs extends Request
{

}/**
 * @method $this setIntentDefinition($intentDefinition)
 * @method string getIntentDefinition()
 * @method $this setIntentId($intentId)
 * @method int getIntentId()
 */
class UpdateIntent extends Request
{

}/**
 * @method $this setEntityId($entityId)
 * @method int getEntityId()
 */
class DeleteEntity extends Request
{

}/**
 * @method $this setTitle($title)
 * @method string getTitle()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setCoreWord($coreWord)
 * @method string getCoreWord()
 * @method $this setContent($content)
 * @method string getContent()
 * @method $this setCode($code)
 * @method string getCode()
 * @method $this setPerspectiveIds($perspectiveIds)
 * @method string getPerspectiveIds()
 * @method $this setBizDataRanges($bizDataRanges)
 * @method string getBizDataRanges()
 */
class CreateMachineReadingArticle extends Request
{

}/**
 * @method $this setIntentDefinition($intentDefinition)
 * @method string getIntentDefinition()
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 */
class CreateIntent extends Request
{

}/**
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 */
class DeleteDialog extends Request
{

}/**
 * @method $this setKnowledge($knowledge)
 * @method string getKnowledge()
 */
class UpdateKnowledge extends Request
{

}/**
 * @method $this setEntityName($entityName)
 * @method string getEntityName()
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryEntities extends Request
{

}/**
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 */
class DescribeDialog extends Request
{

}/**
 * @method $this setKnowledgeId($knowledgeId)
 * @method int getKnowledgeId()
 */
class DescribeKnowledge extends Request
{

}/**
 * @method $this setCoreWordName($coreWordName)
 * @method string getCoreWordName()
 */
class CreateCordWord extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DeleteBot extends Request
{

}/**
 * @method $this setParentCategoryId($parentCategoryId)
 * @method int getParentCategoryId()
 * @method $this setName($name)
 * @method string getName()
 */
class CreateCategory extends Request
{

}/**
 * @method $this setMachineReadingId($machineReadingId)
 * @method int getMachineReadingId()
 */
class DescribeMachineReadingArticle extends Request
{

}/**
 * @method $this setPerspectiveId($perspectiveId)
 * @method string getPerspectiveId()
 */
class DescribePerspective extends Request
{

}/**
 * @method $this setCoreWordName($coreWordName)
 * @method string getCoreWordName()
 */
class CreateCoreWord extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setIntroduction($introduction)
 * @method string getIntroduction()
 * @method $this setAvatar($avatar)
 * @method string getAvatar()
 */
class UpdateBot extends Request
{

}/**
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 */
class DeleteCategory extends Request
{

}/**
 * @method $this setKnowledge($knowledge)
 * @method string getKnowledge()
 */
class CreateKnowledge extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setCategoryIds($categoryIds)
 * @method string getCategoryIds()
 */
class LinkBotCategory extends Request
{

}/**
 * @method $this setLanguageCode($languageCode)
 * @method string getLanguageCode()
 * @method $this setTimeZone($timeZone)
 * @method string getTimeZone()
 * @method $this setName($name)
 * @method string getName()
 * @method $this setAvatar($avatar)
 * @method string getAvatar()
 * @method $this setIntroduction($introduction)
 * @method string getIntroduction()
 */
class CreateBot extends Request
{

}/**
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 */
class DescribeCategory extends Request
{

}/**
 * @method $this setCoreWordName($coreWordName)
 * @method string getCoreWordName()
 */
class DescribeCoreWord extends Request
{

}/**
 * @method $this setKnowledgeId($knowledgeId)
 * @method int getKnowledgeId()
 */
class PublishKnowledge extends Request
{

}/**
 * @method $this setCoreWordName($coreWordName)
 * @method string getCoreWordName()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setSynonym($synonym)
 * @method string getSynonym()
 */
class QueryCoreWords extends Request
{

}/**
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryBots extends Request
{

}/**
 * @method $this setIntentName($intentName)
 * @method string getIntentName()
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class QueryIntents extends Request
{

}/**
 * @method $this setPerspectiveId($perspectiveId)
 * @method string getPerspectiveId()
 */
class ActivatePerspective extends Request
{

}/**
 * @method $this setEntityId($entityId)
 * @method int getEntityId()
 * @method $this setEntityName($entityName)
 * @method string getEntityName()
 * @method $this setEntityType($entityType)
 * @method string getEntityType()
 * @method $this setRegex($regex)
 * @method string getRegex()
 * @method $this setMembers($members)
 * @method string getMembers()
 */
class UpdateEntity extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setDialogName($dialogName)
 * @method string getDialogName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class CreateDialog extends Request
{

}/**
 * @method $this setIntentId($intentId)
 * @method int getIntentId()
 */
class DeleteIntent extends Request
{

}/**
 * @method $this setIntentId($intentId)
 * @method int getIntentId()
 */
class DescribeIntent extends Request
{

}/**
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 * @method $this setModuleDefinition($moduleDefinition)
 * @method string getModuleDefinition()
 */
class UpdateDialogFlow extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 */
class DescribeBot extends Request
{

}/**
 * @method $this setCoreWordName($coreWordName)
 * @method string getCoreWordName()
 * @method $this setSynonym($synonym)
 * @method string getSynonym()
 */
class AddSynonym extends Request
{

}/**
 * @method $this setEntityId($entityId)
 * @method int getEntityId()
 */
class DescribeEntities extends Request
{

}/**
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 */
class DescribeDialogFlow extends Request
{

}/**
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setTitle($title)
 * @method string getTitle()
 */
class QueryMachineReadingArticles extends Request
{

}/**
 * @method $this setEntityName($entityName)
 * @method string getEntityName()
 */
class QuerySystemEntities extends Request
{

}/**
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 * @method $this setEntityName($entityName)
 * @method string getEntityName()
 * @method $this setEntityType($entityType)
 * @method string getEntityType()
 * @method $this setRegex($regex)
 * @method string getRegex()
 * @method $this setMembers($members)
 * @method string getMembers()
 */
class CreateEntity extends Request
{

}/**
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 * @method $this setDialogName($dialogName)
 * @method string getDialogName()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class UpdateDialog extends Request
{

}/**
 * @method $this setEntityId($entityId)
 * @method int getEntityId()
 * @method $this setRemoveType($removeType)
 * @method string getRemoveType()
 * @method $this setMember($member)
 * @method string getMember()
 */
class RemoveEntityMember extends Request
{

}/**
 * @method $this setEntityId($entityId)
 * @method int getEntityId()
 * @method $this setApplyType($applyType)
 * @method string getApplyType()
 * @method $this setMember($member)
 * @method string getMember()
 */
class AppendEntityMember extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 * @method $this setMessageId($messageId)
 * @method string getMessageId()
 * @method $this setFeedback($feedback)
 * @method string getFeedback()
 */
class Feedback extends Request
{

}/**
 * @method $this setName($name)
 * @method string getName()
 */
class CreatePerspective extends Request
{

}/**
 * @method $this setKnowledgeId($knowledgeId)
 * @method int getKnowledgeId()
 */
class DeleteKnowledge extends Request
{

}/**
 * @method $this setInstanceId($instanceId)
 * @method string getInstanceId()
 * @method $this setSessionId($sessionId)
 * @method string getSessionId()
 * @method $this setKnowledgeId($knowledgeId)
 * @method string getKnowledgeId()
 * @method $this setSenderId($senderId)
 * @method string getSenderId()
 * @method $this setSenderNick($senderNick)
 * @method string getSenderNick()
 * @method $this setTag($tag)
 * @method string getTag()
 * @method $this setUtterance($utterance)
 * @method string getUtterance()
 * @method $this setPerspective($perspective)
 * @method array getPerspective()
 * @method $this setRecommend($recommend)
 * @method bool getRecommend()
 */
class Chat extends Request
{

}/**
 * @method $this setCoreWordName($coreWordName)
 * @method string getCoreWordName()
 * @method $this setSynonym($synonym)
 * @method string getSynonym()
 */
class RemoveSynonym extends Request
{

}/**
 * @method $this setUserQuery($userQuery)
 * @method string getUserQuery()
 * @method $this setCategoryId($categoryId)
 * @method int getCategoryId()
 * @method $this setKnowledgeId($knowledgeId)
 * @method int getKnowledgeId()
 * @method $this setKnowledgeStatus($knowledgeStatus)
 * @method int getKnowledgeStatus()
 * @method $this setKnowledgeType($knowledgeType)
 * @method int getKnowledgeType()
 * @method $this setCreateUserName($createUserName)
 * @method string getCreateUserName()
 * @method $this setModifyUserName($modifyUserName)
 * @method string getModifyUserName()
 * @method $this setCreateTimeBegin($createTimeBegin)
 * @method string getCreateTimeBegin()
 * @method $this setCreateTimeEnd($createTimeEnd)
 * @method string getCreateTimeEnd()
 * @method $this setModifyTimeBegin($modifyTimeBegin)
 * @method string getModifyTimeBegin()
 * @method $this setModifyTimeEnd($modifyTimeEnd)
 * @method string getModifyTimeEnd()
 * @method $this setStartTimeBegin($startTimeBegin)
 * @method string getStartTimeBegin()
 * @method $this setStartTimeEnd($startTimeEnd)
 * @method string getStartTimeEnd()
 * @method $this setEndTimeBegin($endTimeBegin)
 * @method string getEndTimeBegin()
 * @method $this setEndTimeEnd($endTimeEnd)
 * @method string getEndTimeEnd()
 * @method $this setDataType($dataType)
 * @method string getDataType()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 */
class SearchKnowledges extends Request
{

}/**
 * @method $this setDialogId($dialogId)
 * @method int getDialogId()
 * @method $this setModulePassDTO($modulePassDTO)
 * @method string getModulePassDTO()
 */
class UpdateAndPushDialogFlowToSandbox extends Request
{

}