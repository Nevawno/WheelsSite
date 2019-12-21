<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Wheels */

$this->title = $model->name_wheel;
$this->params['breadcrumbs'][] = ['label' => 'Wheels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wheels-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $img = $model->getImage();?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'country',
            'max_speed',
            'size_shinu',
            'max_load',
            'model',
            'design_shinu',
            'index_load',
            'recovery',
            'tire_shinu',
            'run_flat',
            'class_clutch',
            'nal_shipu',
            'season',
            'type_shipov',
            'width_shinu',
            'total_count',
            'brand',
            'price',
            'year_release',
            'simmetria',
            [
                'attribute' => 'img',
                'value' => "<img src='{$img->getUrl()}'>",
                'format' => 'html'
            ],
            'profile_shinu',
            'radius_shinu',
            'name_wheel',
            'link_wheel:ntext',
            'custom_text'
        ],
    ]) ?>

</div>
