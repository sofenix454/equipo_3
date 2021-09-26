<?php

use app\models\Aviso;
use yii\helpers\Html;
use app\models\Alumno;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reaccion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reaccion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php /* $form->field($model, 'rea_fkalumno')->textInput()*/ ?>

    <?php /*$form->field($model, 'rea_fkaviso')->textInput()*/ ?>

    <?= $form->field($model, 'rea_fkalumno')->widget(Select2::classname(), [ //ir al modelo Alumno
        'data' => Alumno::map(),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione el usuario ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'rea_fkaviso')->widget(Select2::classname(), [ //ir al modelo Aviso
        'data' => Aviso::mapTitulos(),
        'language' => 'es',
        'options' => ['placeholder' => 'Seleccione el titulo del aviso ...'],
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
