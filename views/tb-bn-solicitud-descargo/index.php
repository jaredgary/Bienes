<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnSolicitudDescargoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Solicitud Descargos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-solicitud-descargo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Solicitud Descargo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CodigoSolicitud',
            'FechaSolicitud',
            [
                'label' => 'Empleado',
                'attribute' => 'id',
                'value' => 'id0.username',
            ],
            'MotivoSolicitud',
            'Estado',
            // 'SistemaFecha',
            // 'SistemaUsuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
