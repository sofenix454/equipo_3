<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComentarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'com_id') ?>

    <?= $form->field($model, 'com_fecha') ?>

    <?= $form->field($model, 'com_texto') ?>

    <?= $form->field($model, 'com_imagen') ?>

    <?= $form->field($model, 'com_fkusuario') ?>

    <?php // echo $form->field($model, 'com_fkaviso') ?>

    <?php // echo $form->field($model, 'com_fkcomentario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
