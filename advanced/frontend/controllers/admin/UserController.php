<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/7/29
 * Time: 19:26
 */

namespace frontend\controllers\admin;


use frontend\models\admin\User;

class UserController extends BaseController
{
    //查看
    public function actionIndex(){
        $model = new User();
        return $this->render('/admin/user/index',[
            'data'=>$model::find()->asArray()->all()
        ]);
    }

    //跳转到添加页面
    public function actionAdd(){
        return $this->render('/admin/user/add');
    }
    public function actionAddSave(){
        //判断数据是不是以post上传的
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['admin/user/add']);
        }
        //获取表单传入的数据
        $params = \Yii::$app->request->post();
        //判断表中是否存在字段'_csrf'如果存在删除
        if(isset($params['_csrf'])){
            unset($params['_csrf']);
        }
        //文件上传
        $file = $_FILES['user_photo'];
        $params['user_photo']=$this->uploadFile($file);
        $params['password']=md5($params['password']);
        //实例化用户表单
        $user = new User();
        //将表单的数据便利到数据库
        foreach($params as $k=>$v){
            $user->$k = $v;
        }
        //判断是否添加成功
        if($user->save()){
            return $this->redirect(['admin/user/index']);
        }else{
            return $this->goBack();
        }
    }

    //修改用户数据
    public function actionEdit(){
        //查出要修改数据的id
        $id = \Yii::$app->request->get('id');
        //查出要修改的该条数据
        $data = User::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('edit',$data);
    }

    //保存修改的数据
    public function actionEditSave(){
        //判断是否是post上传
        if(\Yii::$app->request->isPost){
            return $this->redirect(['admin/user/edit']);
        }
        //获取从表内传入的数据
        $params = \Yii::$app->request->post();
        //检测是否存在_csrf
        if(isset($params['_csrf'])){
            unset($params['_csrf']);
        }
        //md5加密密码
        $params['password'] = md5($params['password']);
        //文件上传
        $file = $_FILES['user_photo'];
        if(!empty($file['name'])){
            $params['user_photo']=$this->uploadFile($file);
        }

        //查看数据库中的数据
        $user = User::findOne($params['id']);
        foreach ($params as $k=>$v){
            $user->$k=$v;
        }
        if($user->save()){
            return $this->redirect(['admin/user/index']);
        }else{
            return $this->goBack();
        }
    }

    public function actionDelete(){
        $id = \Yii::$app->request->get('id');
        return User::findOne($id)->delete();
    }
}