<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aviso */

$this->title = 'Actualizar Aviso: ' . $model->avi_id;
$this->params['breadcrumbs'][] = ['label' => 'Avisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->avi_id, 'url' => ['view', 'id' => $model->avi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aviso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
