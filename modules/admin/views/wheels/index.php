<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Шины';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wheels-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wheels', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'country',
            'max_speed',
            'size_shinu',
            'max_load',
            //'model',
            //'design_shinu',
            //'index_load',
            //'recovery',
            //'tire_shinu',
            //'run_flat',
            //'class_clutch',
            //'nal_shipu',
            //'season',
            //'type_shipov',
            //'width_shinu',
            //'total_count',
            //'brand',
            //'price',
            //'year_release',
            //'simmetria',
            //'image',
            //'profile_shinu',
            //'radius_shinu',
            //'name_wheel',
            //'link_wheel:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
