<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEstadoasignacion */

$this->title = $model->CodigoEstadoAsignacion;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Estadoasignacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-estadoasignacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CodigoEstadoAsignacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CodigoEstadoAsignacion], [
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
            'CodigoEstadoAsignacion',
            'EstadoAsignacion',
        ],
    ]) ?>

</div>
