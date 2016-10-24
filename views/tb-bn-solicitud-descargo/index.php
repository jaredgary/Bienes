<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;

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
        <?= Html::button('Crear Solicitud', ['value'=>\yii\helpers\Url::to('index.php?r=tb-bn-solicitud-descargo/create'),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

    <?php
        Modal::begin([
            'header'=>'<h4>Solicitudes</h4>',
            'id' => 'modal',
            'size' => 'modal-lg',
        ]);
        echo "<div id='modalContent'></div>";
        Modal::end();
    ?>

    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CodigoSolicitud',
            [
                'attribute' => 'FechaSolicitud',
                'value' => 'FechaSolicitud',
                'format' => 'raw',
                'filter' => \dosamigos\datepicker\DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'FechaSolicitud',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-m-d'
                    ]
                ]),
            ],
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
    <?php Pjax::end(); ?>
</div>
