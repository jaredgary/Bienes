<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnTiposSolicitudes */

$this->title = 'Update Tb Bn Tipos Solicitudes: ' . $model->codigoTipoSolicitud;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Tipos Solicitudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigoTipoSolicitud, 'url' => ['view', 'id' => $model->codigoTipoSolicitud]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-tipos-solicitudes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
