<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AvisoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aviso-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'avi_id') ?>

    <?= $form->field($model, 'avi_titulo') ?>

    <?= $form->field($model, 'avi_texto') ?>

    <?= $form->field($model, 'avi_imagen') ?>

    <?= $form->field($model, 'avi_creacion') ?>

    <?php // echo $form->field($model, 'avi_publicacion') ?>

    <?php // echo $form->field($model, 'avi_terminacion') ?>

    <?php // echo $form->field($model, 'avi_fkdivision') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
