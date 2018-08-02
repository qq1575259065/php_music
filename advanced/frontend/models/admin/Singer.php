<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/8/1
 * Time: 14:18
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class Singer extends ActiveRecord
{
    public static function tableName(){
        return 'singer';
    }
    public static function getSingerList(){
        $list = Singer::find()->asArray()->all();
        return $list;
    }
}