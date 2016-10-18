<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbBnLogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Bn Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-log-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codigoLog',
            [
                'label' => 'Acciones',
                'attribute' => 'codigoAC',
                'value' => 'codigoAC0.DescripcionAC',
            ],
            'id',
            'descripcion',
            'SistemaUsuario',
            // 'fecha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
