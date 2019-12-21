<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\DiametrDiska */

$this->title = 'Create Diametr Diska';
$this->params['breadcrumbs'][] = ['label' => 'Diametr Diskas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diametr-diska-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
