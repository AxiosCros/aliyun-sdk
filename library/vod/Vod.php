<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/7 16:59
 */

namespace aliyun\sdk\vod;

use aliyun\sdk\vod\request\Category\GetCategories;
use aliyun\sdk\vod\request\Video\GetPlayInfo;
use aliyun\sdk\vod\request\VideoUpload\CreateUploadVideo;
use aliyun\sdk\vod\request\VideoUpload\CreateUploadImage;
use aliyun\sdk\vod\request\VideoUpload\RefreshUploadVideo;

class Vod
{
    /********************************** VideoUpload **************************************************/

    /**
     * 获取视频上传地址和凭证
     * API Document : https://help.aliyun.com/document_detail/55407.html
     * @param $title
     * @param $file_name
     * @return CreateUploadVideo
     */
    public static function CreateUploadVideo($title, $file_name){
        $request = new CreateUploadVideo();
        return $request->setTitle($title)->setFileName($file_name);
    }

    /**
     * 刷新视频上传凭证
     * API Document : https://help.aliyun.com/document_detail/55408.html
     * @param $video_id
     * @return RefreshUploadVideo
     */
    public static function RefreshUploadVideo($video_id){
        $request = new RefreshUploadVideo();
        return $request->setVideoId($video_id);
    }

    /**
     * 获取图片上传地址和凭证
     * API Document : https://help.aliyun.com/document_detail/55619.html
     * @param $image_type
     * @return CreateUploadImage
     */
    public static function CreateUploadImage($image_type){
        $request = new CreateUploadImage();
        return $request->setImageType($image_type);
    }

    /********************************** Play **************************************************/

    /**
     * 获取视频播放地址
     * API Document : https://help.aliyun.com/document_detail/56124.html
     * @param $video_id
     * @return GetPlayInfo
     */
    public static function GetPlayInfo($video_id){
        $request = new GetPlayInfo();
        return $request->setVideoId($video_id);
    }

    public static function GetVideoPlayAuth($video_id){

    }

    /********************************** Category **************************************************/

    public static function GetCategories(){
        $GetCategories = new GetCategories();
        return $GetCategories;
    }
}