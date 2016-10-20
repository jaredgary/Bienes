<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnActaAsignacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Acta de Asignaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-acta-asignacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Acta Asignacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CodigoActaAsignacion',
            [
                'label' => 'Empleado',
                'attribute' => 'id',
                'value' => 'id0.username',
            ],
            'SistemaUsuario',
            'FechaSistema',
            'CodigoInspector',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
