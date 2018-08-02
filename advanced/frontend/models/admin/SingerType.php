<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/8/1
 * Time: 11:54
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class SingerType extends ActiveRecord
{
    public static function tableName(){
        return 'singer_type';
    }
    public static function getSingerTypeList(){
        $list = SingerType::find()->asArray()->all();
        return $list;
    }
    
}