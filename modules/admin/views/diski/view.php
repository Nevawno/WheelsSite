<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Diski */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Diskis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="diski-view">

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
            'width_diska',
            'diametr_diska',
            'pcd_diska',
            'dia_diska',
            'et_diska',
            'price',
            'type_diska',
            'brand',
            [
                'attribute' => 'img',
                'value' => "<img src='{$img->getUrl()}'>",
                'format' => 'html'
            ],
            'name',
            'link:ntext',
            'total_count',
            'custom_text'
        ],
    ]) ?>

</div>
