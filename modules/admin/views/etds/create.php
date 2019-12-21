<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\EtDiska */

$this->title = 'Create Et Diska';
$this->params['breadcrumbs'][] = ['label' => 'Et Diskas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="et-diska-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
