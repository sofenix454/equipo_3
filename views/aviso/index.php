<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AvisoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avisos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aviso-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Aviso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'avi_id',
            'avi_titulo',
            'avi_texto:ntext',
            'avi_imagen',
            'avi_creacion',
            //'avi_publicacion',
            //'avi_terminacion',
            //'avi_fkdivision',
            'divisionNombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
