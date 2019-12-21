<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\WidthShinu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="width-shinu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shirina')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
