<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/7/29
 * Time: 18:56
 */

namespace frontend\controllers\admin;


use frontend\models\admin\User;
use yii\web\Controller;

class LoginController extends Controller
{
    //模板化
    public $layout = 'login';

    //判断如果登陆跳入首页
    public function actionIndex(){
        $user = \Yii::$app->session->get('user_info');
        if(!empty($user)){
            return $this->redirect(['admin/home/index']);
        }
        return $this->render('index');
    }

    //登录功能
    public  function actionLogin(){

        if(!\Yii::$app->request->isPost){
            return $this->redirect(['admin/login/index']);
        }
        $params = \Yii::$app->request->post();
        $user = User::find()->where(['username'=>$params['username'],'is_admin'=>1])->asArray()->one();
        if(empty($user)){
            return $this->redirect(['admin/login/index','message'=>'用户不存在']);
        }else{
            $password = md5($params['password']);
            $userpwd = $user['password'];
            if($password!=$userpwd){
                return $this->redirect(['admin/login/index','message'=>'密码错误']);
            }
            \Yii::$app->session->set('user_info',json_encode($user));
            return $this->redirect(['admin/home/index']);
        }
    }
    public function actionLogout(){
        \Yii::$app->session->remove('user_info');
        return $this->redirect(['admin/home/index']);
    }
}