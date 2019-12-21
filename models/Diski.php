<?php


namespace app\models;

use yii\db\ActiveRecord;

class Diski extends ActiveRecord {

    public function behaviors()
    {
        return [
            'img' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName()
    {
        return "diski";
    }

}