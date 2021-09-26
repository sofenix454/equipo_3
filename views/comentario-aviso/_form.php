<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComentarioAviso */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentario-aviso-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'comavi_fkcomentario')->textInput() ?>

    <?= $form->field($model, 'comavi_fkaviso')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
