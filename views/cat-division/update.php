<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CatDivision */

$this->title = 'Actualizar división: ' . $model->div_id;
$this->params['breadcrumbs'][] = ['label' => 'Divisiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->div_id, 'url' => ['view', 'id' => $model->div_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cat-division-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
