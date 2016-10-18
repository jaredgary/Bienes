<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnSolicitudDescargo */

$this->title = $model->CodigoSolicitud;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Solicitud Descargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-solicitud-descargo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CodigoSolicitud], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CodigoSolicitud], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CodigoSolicitud',
            'FechaSolicitud',
            'id',
            'MotivoSolicitud',
            'Estado',
            'SistemaFecha',
            'SistemaUsuario',
        ],
    ]) ?>

</div>
