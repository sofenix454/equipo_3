<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Seguimiento */

$this->title = 'Actualizar Seguimiento: ' . $model->seg_id;
$this->params['breadcrumbs'][] = ['label' => 'Seguimientos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->seg_id, 'url' => ['view', 'id' => $model->seg_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="seguimiento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
