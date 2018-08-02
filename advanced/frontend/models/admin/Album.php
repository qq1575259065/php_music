<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/8/1
 * Time: 14:15
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class Album extends ActiveRecord
{
    public static function tableName(){
        return 'album';
    }
    public static function getAlbumList(){
        $list = Album::find()->asArray()->all();
        return $list;
    }
}