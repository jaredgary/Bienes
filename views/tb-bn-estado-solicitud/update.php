<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEstadoSolicitud */

$this->title = 'Update Tb Bn Estado Solicitud: ' . $model->CodigoEstado;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Estado Solicituds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoEstado, 'url' => ['view', 'id' => $model->CodigoEstado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-estado-solicitud-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
