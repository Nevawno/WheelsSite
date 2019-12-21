<?php


namespace app\models;

use yii\db\ActiveRecord;

class Seasons extends ActiveRecord {

    public static function tableName()
    {
        return "seasons";
    }

}