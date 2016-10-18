<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEquipos */

$this->title = 'Update Tb Bn Equipos: ' . $model->CodigoEquipo;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Equipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoEquipo, 'url' => ['view', 'id' => $model->CodigoEquipo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-equipos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
