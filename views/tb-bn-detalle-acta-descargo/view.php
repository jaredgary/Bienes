<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnDetalleActaDescargo */

$this->title = $model->CodigoDetalleActaDescargo;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Detalle Acta Descargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-detalle-acta-descargo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CodigoDetalleActaDescargo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CodigoDetalleActaDescargo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CodigoDetalleActaDescargo',
            'CodigoActaDescargo',
            'CodigoDetalleActaAsignacion',
            'CodigoEquipo',
            'CodigoActaAsignacion',
            'CodigoEstadoEquipo',
        ],
    ]) ?>

</div>
