<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aviso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aviso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'avi_titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avi_texto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'avi_imagen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avi_creacion')->textInput() ?>

    <?= $form->field($model, 'avi_publicacion')->textInput() ?>

    <?= $form->field($model, 'avi_terminacion')->textInput() ?>

    <?= $form->field($model, 'avi_fkdivision')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
