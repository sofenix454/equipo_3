<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComentarioPublicacion */

$this->title = 'Actualizar Comentario de Publicacion: ' . $model->compub_id;
$this->params['breadcrumbs'][] = ['label' => 'Comentario Publicacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->compub_id, 'url' => ['view', 'id' => $model->compub_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comentario-publicacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
