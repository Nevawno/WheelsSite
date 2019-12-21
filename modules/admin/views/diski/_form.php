<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Diski */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diski-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'width_diska')->textInput() ?>

    <?= $form->field($model, 'diametr_diska')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pcd_diska')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dia_diska')->textInput() ?>

    <?= $form->field($model, 'et_diska')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'type_diska')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total_count')->textInput() ?>

    <?= $form->field($model, 'custom_text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
