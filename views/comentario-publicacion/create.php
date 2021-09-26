<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComentarioPublicacion */

$this->title = 'Crear Comentario de Publicacion';
$this->params['breadcrumbs'][] = ['label' => 'Comentario Publicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comentario-publicacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
