<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "width_shinu".
 *
 * @property int $id
 * @property int $shirina ширина в мм
 */
class WidthShinu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'width_shinu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shirina'], 'required'],
            [['shirina'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'shirina' => 'Shirina',
        ];
    }
}
