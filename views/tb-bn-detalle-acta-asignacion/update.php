<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnDetalleActaAsignacion */

$this->title = 'Update Tb Bn Detalle Acta Asignacion: ' . $model->CodigoDetalleActaAsignacion;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Detalle Acta Asignacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoDetalleActaAsignacion, 'url' => ['view', 'id' => $model->CodigoDetalleActaAsignacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-detalle-acta-asignacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
