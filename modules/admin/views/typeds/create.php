<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TypeDiska */

$this->title = 'Create Type Diska';
$this->params['breadcrumbs'][] = ['label' => 'Type Diskas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-diska-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
