<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/8/1
 * Time: 11:50
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class Mv extends ActiveRecord
{
    public static function tableName(){
        return 'mv';
    }
    public static function getMvList(){
        $list = Mv::find()->asArray()->all();
        return $list;
    }
}