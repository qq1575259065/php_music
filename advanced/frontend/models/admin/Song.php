<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/8/1
 * Time: 14:39
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class Song extends ActiveRecord
{
    public static function tableName(){
        return 'song';
    }
    public static function getSongList(){
        $list = Song::find()->asArray()->all();
        return $list;
    }
}