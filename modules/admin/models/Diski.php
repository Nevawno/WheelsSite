<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "diski".
 *
 * @property int $id
 * @property int|null $width_diska ширина диска
 * @property string|null $diametr_diska диаметр диска
 * @property string|null $pcd_diska псд
 * @property int|null $dia_diska dia
 * @property int|null $et_diska et
 * @property int $price цена
 * @property string $type_diska тип диска
 * @property string $brand фирма
 * @property string|null $image
 * @property string|null $name
 * @property string|null $link
 * @property int|null $total_count
 */
class Diski extends \yii\db\ActiveRecord
{

    // public $img;
    public $gallery;

    public function behaviors()
    {
        return [
            'img' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diski';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['width_diska', 'dia_diska', 'et_diska', 'price', 'total_count'], 'integer'],
            [['price', 'type_diska', 'brand'], 'required'],
            [['link', 'custom_text'], 'string'],
            [['diametr_diska', 'pcd_diska', 'type_diska', 'brand', 'image', 'name'], 'string', 'max' => 255],
            //[['img'], 'file', 'extensions' => 'jpg, png'],
            [['gallery'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID товара',
            'width_diska' => 'Ширина диска',
            'diametr_diska' => 'Диаметр диска',
            'pcd_diska' => 'PCD диска',
            'dia_diska' => 'DIA диска',
            'et_diska' => 'ET диска',
            'price' => 'Цена',
            'type_diska' => 'Тип диска',
            'brand' => 'Фирма',
            //'img' => 'Картинка',
            'gallery' => 'Галерея',
            'name' => 'Название',
            'link' => 'Ссылка на OLX',
            'total_count' => 'Количество',
            'custom_text' => 'Текст к товару'
        ];
    }

    // public function upload() {
    //     if ($this->validate()) {
    //         $path = 'images/store/' . $this->img->baseName . '.' . $this->img->extension;
    //         $this->img->saveAs($path);
    //         $this->attachImage($path);
    //         @unlink($path);
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function uploadGallery() {
        if ($this->validate()) {
            foreach ($this->gallery as $file) {
                $path = 'images/store/' . $file->baseName . '.' . $file->extension;
                $file->saveAs($path);
                $this->attachImage($path);
                @unlink($path);
            }
            return true;
        } else {
            return false;
        }
    }
}
