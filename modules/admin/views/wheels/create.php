<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Wheels */

$this->title = 'Добавить новый товар (шина)';
$this->params['breadcrumbs'][] = ['label' => 'Wheels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wheels-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
