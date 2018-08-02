<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/7/29
 * Time: 19:13
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName(){
        return 'user';
    }
    public static function getUserList(){
//        $list = User::find()->asArray()->all();
        //创建一个Db对象
        $quer = User::find();
        //记录总数
        $count = $quer->count();
        //创建一个分页对象
        $pang = new Pagination(['totalCount'=>$count,'defaultPageSize'=>5]);

        $list = $quer->offset($pang->offset)
            ->limit($pang->limit)
            ->asArray()
            ->all();
        //格式化数据
        $list = self::forList($list);
        return ['list'=>$list,'pagination'=>$pang];
    }

    public static function forList($data){
        if(empty($data)){
            return [];
        }
        $forList = [];
        $common = Base::getCommon();
        foreach ($data as $k=>$user){
            $forList[$k]=$user;
            //地区
            foreach($common['area'] as $area){
                if($area['id']==$user['area_id']){
                    $forList[$k]['area_id']=$area['area_name'];
                }
            }
            //会员
            $l = '等级';
            foreach($common['vip'] as $vip){
                if($vip['id']==$user['vip_id']){
                    $forList[$k]['vip_id']=$l.$vip['leavel'].$vip['name'];
                }
            }

            //消息
            foreach ($common['message'] as $message){
                if($message['id']==$user['message_id']){
                    $forList[$k]['message_id']=$message['message'];
                }
            }
        }
        return $forList;
    }
}