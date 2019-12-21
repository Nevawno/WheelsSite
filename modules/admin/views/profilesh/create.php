<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProfileShinu */

$this->title = 'Create Profile Shinu';
$this->params['breadcrumbs'][] = ['label' => 'Profile Shinus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-shinu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
