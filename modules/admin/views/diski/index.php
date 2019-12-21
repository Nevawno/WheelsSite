<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Диски';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diski-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Diski', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'width_diska',
            'diametr_diska',
            'pcd_diska',
            'dia_diska',
            //'et_diska',
            //'price',
            //'type_diska',
            //'brand',
            //'image',
            //'name',
            //'link:ntext',
            //'total_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
