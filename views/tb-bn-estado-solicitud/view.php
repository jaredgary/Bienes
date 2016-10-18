<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEstadoSolicitud */

$this->title = $model->CodigoEstado;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Estado Solicituds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-estado-solicitud-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CodigoEstado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CodigoEstado], [
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
            'CodigoEstado',
            'Estado',
        ],
    ]) ?>

</div>
