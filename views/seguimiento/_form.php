<?php

use yii\helpers\Html;
use app\models\Alumno;
use app\models\CatDivision;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Seguimiento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seguimiento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php /*$form->field($model, 'seg_fkdivision')->textInput() */?>

    <?= $form->field($model, 'seg_fkdivision')->widget(Select2::classname(), [ //ir al modelo Alumno
        'data' => CatDivision::mapNombres(),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione la división ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?php /*$form->field($model, 'seg_fkalumno')->textInput() */?>

    <?= $form->field($model, 'seg_fkalumno')->widget(Select2::classname(), [ //ir al modelo Alumno
        'data' => Alumno::map(),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione el usuario ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
