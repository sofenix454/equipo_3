<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CatDivision */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cat-division-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'div_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'div_imagen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
