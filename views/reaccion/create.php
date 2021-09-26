<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reaccion */

$this->title = 'Crear una reacción';
$this->params['breadcrumbs'][] = ['label' => 'Reacciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reaccion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
