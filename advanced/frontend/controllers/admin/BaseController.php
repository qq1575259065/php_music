<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/7/29
 * Time: 19:01
 */

namespace frontend\controllers\admin;



use yii\web\Controller;

class BaseController extends Controller
{
    public $layout = 'base';
    //过滤csrf
    /*public function init(){
        $this->enableCsrfValidation=false;
    }*/
    public function beforeAction($action){
        $userInfo = self::getUserInfo();
        if(empty($userInfo)){
            return $this->redirect(['admin/login/index']);
        }
        return true;
    }

    public static function getUserInfo(){
        $userInfo = \Yii::$app->session->get('user_info');
        if(!empty($userInfo)){
            $userInfo = json_decode($userInfo,true);
        }
        return $userInfo;
    }

    //上传文件
    public function uploadFile($file){
        $load = 'uploads/';
        //判断文件路径是否存在不存在直接创建
        if(!file_exists($load)){
            mkdir($load,0777,true);
        }
        $extends = strchr($file['name'],'.');
        $filename = date('YmdHis',time().rand(0,1000000)).$extends;
        move_uploaded_file($file['tmp_name'],$load.$filename);
        return $load.$filename;
    }
}