<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatDivisionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Divisiones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-division-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear división', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'div_id',
            'div_nombre',
            'div_imagen',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
