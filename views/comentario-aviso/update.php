<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComentarioAviso */

$this->title = 'Actualizar Comentario de Aviso: ' . $model->comavi_id;
$this->params['breadcrumbs'][] = ['label' => 'Comentario Avisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->comavi_id, 'url' => ['view', 'id' => $model->comavi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comentario-aviso-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
