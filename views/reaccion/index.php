<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReaccionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reacciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reaccion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear reacción', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rea_id',
            // 'rea_fkalumno',
            // 'rea_fkaviso',
            'alumnoNombre',
            'avisoTitulo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
