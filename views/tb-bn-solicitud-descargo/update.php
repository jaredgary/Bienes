<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnSolicitudDescargo */

$this->title = 'Update Tb Bn Solicitud Descargo: ' . $model->CodigoSolicitud;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Solicitud Descargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoSolicitud, 'url' => ['view', 'id' => $model->CodigoSolicitud]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-solicitud-descargo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
