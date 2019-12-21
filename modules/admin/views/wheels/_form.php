<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Wheels */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wheels-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'max_speed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size_shinu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'max_load')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'design_shinu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'index_load')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recovery')->textInput() ?>

    <?= $form->field($model, 'tire_shinu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'run_flat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_clutch')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nal_shipu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'season')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_shipov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'width_shinu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_count')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year_release')->textInput() ?>

    <?= $form->field($model, 'simmetria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gallery[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'profile_shinu')->textInput() ?>

    <?= $form->field($model, 'radius_shinu')->textInput() ?>

    <?= $form->field($model, 'name_wheel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_wheel')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'custom_text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
