<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnSolicitudDetalleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Solicitud Detalles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-solicitud-detalle-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Solicitud Detalle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CodigoDetalle',
            'CodigoSolicitud',
            'CodigoEquipo',
            'FechaSistema',
            'SistemaUsuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
