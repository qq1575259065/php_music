<?php
/**
 * Created by PhpStorm.
 * User: 绅士君
 * Date: 2018/8/1
 * Time: 11:41
 */

namespace frontend\models\admin;


use yii\db\ActiveRecord;

class Area extends ActiveRecord
{
    public static function tableName(){
        return 'area';
    }
    public static function getAreaList(){
        $list = Area::find()->asArray()->all();
        return $list;
    }
}