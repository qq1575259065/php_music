<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/8/1
 * Time: 14:30
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class Base extends ActiveRecord
{
    public static function getCommon(){
        return [
            'area'=>Area::getAreaList(),
            'album'=>Album::getAlbumList(),
            'mv'=>Mv::getMvList(),
            'singer'=>Singer::getSingerList(),
            'singerType'=>SingerType::getSingerTypeList(),
            'user'=>User::getUserList(),
            'vip'=>Vip::getVipList(),
            'songs'=>Songs::getSongsList(),
            'songsList'=>SongsList::getSongsDataList(),
        ];
    }
}