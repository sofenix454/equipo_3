<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reaccion */

$this->title = 'Actualizar reaccion: ' . $model->rea_id;
$this->params['breadcrumbs'][] = ['label' => 'Reacciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rea_id, 'url' => ['view', 'id' => $model->rea_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reaccion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
