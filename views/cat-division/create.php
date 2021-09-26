<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CatDivision */

$this->title = 'Crear división';
$this->params['breadcrumbs'][] = ['label' => 'Divisiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-division-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
