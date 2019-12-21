<?php


namespace app\models;

use yii\db\ActiveRecord;

class Radius extends ActiveRecord {

    public static function tableName()
    {
        return "radius";
    }

}