<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/7/30
 * Time: 11:33
 */

namespace frontend\controllers\admin;



class HomeController extends BaseController
{
    public function actionIndex(){
        return $this->render('/admin/home/index');
    }
}