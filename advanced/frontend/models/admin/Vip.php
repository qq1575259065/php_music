<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/8/1
 * Time: 14:17
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class Vip extends ActiveRecord
{
    public static function tableName(){
        return 'vip';
    }
    public static function getVipList(){
        $list = Vip::find()->asArray()->all();
        return $list;
    }
}