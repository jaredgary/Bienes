<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEstadoEquipo */

$this->title = 'Update Tb Bn Estado Equipo: ' . $model->CodigoEstadoEquipo;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Estado Equipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoEstadoEquipo, 'url' => ['view', 'id' => $model->CodigoEstadoEquipo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-estado-equipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
