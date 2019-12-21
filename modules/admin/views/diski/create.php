<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Diski */

$this->title = 'Добавить новый товар (диск)';
$this->params['breadcrumbs'][] = ['label' => 'Diskis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diski-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
