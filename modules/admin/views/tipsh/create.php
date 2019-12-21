<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\TipShipov */

$this->title = 'Create Tip Shipov';
$this->params['breadcrumbs'][] = ['label' => 'Tip Shipovs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tip-shipov-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
