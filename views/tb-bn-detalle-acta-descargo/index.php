<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnDetalleActaDescargoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Detalle Acta Descargos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-detalle-acta-descargo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Detalle Acta Descargo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CodigoDetalleActaDescargo',
            'CodigoActaDescargo',
            'CodigoDetalleActaAsignacion',
            'CodigoEquipo',
            'CodigoActaAsignacion',
            // 'CodigoEstadoEquipo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
