<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/8/1
 * Time: 14:13
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class SongsList extends ActiveRecord
{
    public static function tableName(){
        return 'songs_list';
    }
    public static function getSongsDataList(){
        $list = SongsList::find()->asArray()->all();
        return $list;
    }
}