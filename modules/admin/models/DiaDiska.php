<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "dia_diska".
 *
 * @property int $id
 * @property int|null $name
 */
class DiaDiska extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dia_diska';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
}
