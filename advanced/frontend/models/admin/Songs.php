<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/8/1
 * Time: 11:53
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class Songs extends ActiveRecord
{
    public static function tableName(){
        return 'songs';
    }
    public static function getSongsList(){
        $list = Songs::find()->asArray()->all();
        return $list;
    }
}