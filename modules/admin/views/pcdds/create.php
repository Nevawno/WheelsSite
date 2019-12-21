<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PcdDiska */

$this->title = 'Create Pcd Diska';
$this->params['breadcrumbs'][] = ['label' => 'Pcd Diskas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pcd-diska-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
