<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aviso */

$this->title = $model->avi_id;
$this->params['breadcrumbs'][] = ['label' => 'Avisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aviso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->avi_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->avi_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Desea eliminar este aviso?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'avi_id',
            'avi_titulo',
            'avi_texto:ntext',
            'avi_imagen',
            'avi_creacion',
            'avi_publicacion',
            'avi_terminacion',
            'avi_fkdivision',
        ],
    ]) ?>

</div>
