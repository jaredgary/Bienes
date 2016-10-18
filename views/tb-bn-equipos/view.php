<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEquipos */

$this->title = $model->CodigoEquipo;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Equipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-equipos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CodigoEquipo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CodigoEquipo], [
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
            'CodigoEquipo',
            'Fecha',
            'NumeroInventario',
            'CodigoCategoria',
            'DescripcionEquipo',
            'Marca',
            'SerieEquipo',
            'Color',
            'CodigoDepartamento',
            'Telefono',
            'Piso',
            'CodigoEdificio',
            'CodigoTipoDoc',
            'NumeroDocumento',
            'FechaDocumento',
            'CostoUnitario',
            'id',
            'CodigoEstadoEquipo',
            'Observaciones',
            'SistemaFecha',
            'SistemaUsuario',
            'CodigoEstadoAsignacion',
        ],
    ]) ?>

</div>
