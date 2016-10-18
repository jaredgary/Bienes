<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnArchivosUrlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Archivos Urls';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-archivos-url-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Archivos Url', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Codigo',
            'CodigoSolicitud',
            'codigoTipoSolicitud',
            'Ruta',
            'NombreDocumento',
            // 'Formato',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
