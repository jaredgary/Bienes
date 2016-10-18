<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnAccionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Acciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-acciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Acciones', ['create'], ['class' => 'btn btn-success'], ['visible' => Yii::$app->user->can('createRegister')]) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codigoAC',
            'DescripcionAC',
            'EstadoAC',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
