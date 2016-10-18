<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnActaDescargoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Acta Descargos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-acta-descargo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Acta Descargo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CodigoActaDescargo',
            'id',
            'Inspector',
            'Observaciones',
            'SistemaUsuario',
            // 'FechaSistema',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
