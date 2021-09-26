<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comentario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'com_fecha')->textInput() ?>

    <?= $form->field($model, 'com_texto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'com_imagen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'com_fkusuario')->textInput() ?>


    <?= $form->field($model, 'com_fkcomentario')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
