<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "diametr_diska".
 *
 * @property int $id
 * @property string|null $name
 */
class DiametrDiska extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diametr_diska';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
