<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnGestionesSolicitudesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Gestiones Solicitudes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-gestiones-solicitudes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Gestiones Solicitudes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CodigoGestion',
            'CodigoSolicitud',
            [
                'label' => 'Estado',
                'attribute' => 'CodigoEstado',
                'value' => 'codigoEstado.Estado',
            ],
            'Observaciones',
            'SistemaUsuario',
            // 'FechaSistema',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
