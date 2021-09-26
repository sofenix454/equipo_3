<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComentarioPublicacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comentarios de Publicaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comentario-publicacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Comentario Publicacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'compub_id',
            'compub_fkcomentario',
            'comentarioTexto',
            'alumnoComentario',
            'compub_fkpublicacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
