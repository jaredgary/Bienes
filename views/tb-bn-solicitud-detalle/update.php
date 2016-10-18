<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnSolicitudDetalle */

$this->title = 'Update Tb Bn Solicitud Detalle: ' . $model->CodigoDetalle;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Solicitud Detalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoDetalle, 'url' => ['view', 'id' => $model->CodigoDetalle]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-solicitud-detalle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
