<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Seguimiento */

$this->title = 'Crear Seguimiento';
$this->params['breadcrumbs'][] = ['label' => 'Seguimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seguimiento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
