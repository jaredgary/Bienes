<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnCategoriasBienesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Categorias Bienes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-categorias-bienes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Categorias Bienes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CodigoCategoria',
            'Categoria',
            'FechaSistema',
            'SistemaUsuario',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
