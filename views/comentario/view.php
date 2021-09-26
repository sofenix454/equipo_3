<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Comentario */

$this->title = $model->com_id;
$this->params['breadcrumbs'][] = ['label' => 'Comentarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="comentario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->com_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->com_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estas seguro de eliminar este comentario?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'com_id',
            'com_fecha',
            'com_texto:ntext',
            'com_imagen',
            'com_fkusuario',
            'com_fkcomentario',
        ],
    ]) ?>

</div>
