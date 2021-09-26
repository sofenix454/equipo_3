<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComentarioAvisoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comentarios de Avisos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comentario-aviso-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Comentario de Aviso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'comavi_id',
            'comavi_fkcomentario',
            'comentarioTexto',
            'alumnoComentario',
            //'comavi_fkaviso',
            'avisoTitulo',
            'avisoDivision',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
