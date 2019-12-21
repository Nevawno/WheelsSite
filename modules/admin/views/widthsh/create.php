<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\WidthShinu */

$this->title = 'Создать новую выборку ширины шины';
$this->params['breadcrumbs'][] = ['label' => 'Width Shinus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="width-shinu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
