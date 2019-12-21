<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\BrandDiska */

$this->title = 'Create Brand Diska';
$this->params['breadcrumbs'][] = ['label' => 'Brand Diskas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand-diska-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
