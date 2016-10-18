<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnAcciones */

$this->title = $model->codigoAC;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Acciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-acciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->codigoAC], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->codigoAC], [
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
            'codigoAC',
            'DescripcionAC',
            'EstadoAC',
        ],
    ]) ?>

</div>
