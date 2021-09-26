<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComentarioAviso */

$this->title = 'Crear Comentario de Aviso';
$this->params['breadcrumbs'][] = ['label' => 'Comentario Avisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comentario-aviso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
