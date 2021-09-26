<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ComentarioAviso */

$this->title = $model->comavi_id;
$this->params['breadcrumbs'][] = ['label' => 'Comentario Avisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="comentario-aviso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->comavi_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->comavi_id], [
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
            'comavi_id',
            'comavi_fkcomentario',
            'comavi_fkaviso',
        ],
    ]) ?>

</div>
