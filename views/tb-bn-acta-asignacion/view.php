<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnActaAsignacion */

$this->title = $model->CodigoActaAsignacion;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Acta Asignacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-acta-asignacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CodigoActaAsignacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CodigoActaAsignacion], [
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
            'CodigoActaAsignacion',
            'id',
            'SistemaUsuario',
            'FechaSistema',
            'CodigoInspector',
        ],
    ]) ?>

</div>
