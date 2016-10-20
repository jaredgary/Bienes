<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnEquiposSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Equipos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-equipos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Equipos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CodigoEquipo',
            'Fecha',
            'NumeroInventario',
            //'CodigoCategoria',
            'DescripcionEquipo',
            // 'Marca',
            // 'SerieEquipo',
            // 'Color',
            // 'CodigoDepartamento',
            // 'Telefono',
            // 'Piso',
            // 'CodigoEdificio',
            // 'CodigoTipoDoc',
            // 'NumeroDocumento',
            // 'FechaDocumento',
            // 'CostoUnitario',
            // 'id',
            // 'CodigoEstadoEquipo',
            // 'Observaciones',
            // 'SistemaFecha',
            // 'SistemaUsuario',
            [
                'label' => 'Estado de asignacion',
                'attribute' => 'CodigoEstadoAsignacion',
                'value' => 'codigoEstadoAsignacion.EstadoAsignacion',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
