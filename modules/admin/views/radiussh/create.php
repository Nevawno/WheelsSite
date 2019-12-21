<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Radius */

$this->title = 'Create Radius';
$this->params['breadcrumbs'][] = ['label' => 'Radii', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radius-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
