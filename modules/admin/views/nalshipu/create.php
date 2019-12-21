<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Nalshipu */

$this->title = 'Create Nalshipu';
$this->params['breadcrumbs'][] = ['label' => 'Nalshipus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nalshipu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
