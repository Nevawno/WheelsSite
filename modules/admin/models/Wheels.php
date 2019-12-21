<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "wheels".
 *
 * @property int $id
 * @property string|null $country Страна
 * @property string|null $max_speed Макс скорость км в час
 * @property string|null $size_shinu размер шины
 * @property string|null $max_load максимальная нагрузка
 * @property string|null $model модель
 * @property string|null $design_shinu конструкция шины
 * @property string|null $index_load индекс нагрузки
 * @property int $recovery Допускается воставновление:
 * @property int|null $tire_shinu Внешний шум шин [дБ(A)]:
 * @property string|null $run_flat RunFlat/SSR/XL
 * @property string|null $class_clutch Класс сцепления шины с мокрым дорожным покрытием:
 * @property string|null $nal_shipu Наличие шипов
 * @property string|null $season Сезонность
 * @property string|null $type_shipov Тип шины
 * @property int|null $width_shinu Ширина шины, мм:	
 * @property int $total_count количество колес
 * @property string $brand фирма
 * @property int|null $price цена грн
 * @property int|null $year_release год выпуска
 * @property string|null $simmetria рисунок протектора (симетрия)
 * @property string|null $image картинка
 * @property int $profile_shinu профиль шины 
 * @property int $radius_shinu радиус шины
 * @property string|null $name_wheel
 * @property string $link_wheel
 */
class Wheels extends \yii\db\ActiveRecord
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
        return 'wheels';
    }

   
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['recovery', 'brand', 'profile_shinu', 'radius_shinu', 'link_wheel'], 'required'],
            [['recovery', 'tire_shinu', 'width_shinu', 'total_count', 'price', 'year_release', 'profile_shinu', 'radius_shinu'], 'integer'],
            [['link_wheel', 'custom_text'], 'string'],
            [['country', 'max_speed', 'size_shinu', 'max_load', 'model', 'design_shinu', 'index_load', 'run_flat', 'nal_shipu', 'season', 'type_shipov', 'brand', 'simmetria', 'image', 'name_wheel'], 'string', 'max' => 255],
            [['class_clutch'], 'string', 'max' => 10],
            // [['img'], 'file', 'extensions' => 'jpg, png'],
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
            'country' => 'Страна',
            'max_speed' => 'Максимальная скорость',
            'size_shinu' => 'Размер шины',
            'max_load' => 'Максимальная нагрузка',
            'model' => 'Модель',
            'design_shinu' => 'Конструкция шины',
            'index_load' => 'Индекс нагрузки',
            'recovery' => 'Допускается восстановление',
            'tire_shinu' => 'Внешний шум шин',
            'run_flat' => 'RunFlat/SSR/XL',
            'class_clutch' => 'Мокр д. покрытие',
            'nal_shipu' => 'Наличие шипов',
            'season' => 'Сезонность',
            'type_shipov' => 'Тип шипов',
            'width_shinu' => 'Ширина шины',
            'total_count' => 'Количесьво',
            'brand' => 'Фирма',
            'price' => 'Цена',
            'year_release' => 'Год выпуска',
            'simmetria' => 'Симетрия',
            // 'img' => 'Картинка',
            'gallery' => 'Галерея',
            'profile_shinu' => 'Профиль шины',
            'radius_shinu' => 'Радиус шины',
            'name_wheel' => 'Название',
            'link_wheel' => 'Ссылка на OLX',
            'custom_text' => 'Текст к товару'
        ];
    }

    // public function upload() {
    //     if ($this->validate()) {
    //         $path = 'images/store/' . $this->img->baseName . '.' . $this->img->extension;
    //         $this->img->saveAs($path);
    //         $this->attachImage($path, true);
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
