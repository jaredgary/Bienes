<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnTiposSolicitudesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Tipos Solicitudes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-tipos-solicitudes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Tipos Solicitudes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codigoTipoSolicitud',
            'TipoSolicitud',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
