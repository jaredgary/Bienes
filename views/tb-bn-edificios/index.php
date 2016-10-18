<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnEdificiosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Edificios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-edificios-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tb Bn Edificios', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CodigoEdificio',
            'NombreEdificio',
            'DireccionEdificio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
