<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComentarioPublicacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentario-publicacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'compub_fkcomentario')->textInput() ?>

    <?= $form->field($model, 'compub_fkpublicacion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
