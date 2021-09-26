<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ComentarioPublicacion */

$this->title = $model->compub_id;
$this->params['breadcrumbs'][] = ['label' => 'Comentario de Publicaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="comentario-publicacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->compub_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->compub_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas seguro de eliminar este comentario del aviso?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'compub_id',
            'compub_fkcomentario',
            'compub_fkpublicacion',
        ],
    ]) ?>

</div>
