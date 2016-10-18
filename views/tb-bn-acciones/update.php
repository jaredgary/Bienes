<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnAcciones */

$this->title = 'Update Tb Bn Acciones: ' . $model->codigoAC;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Acciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigoAC, 'url' => ['view', 'id' => $model->codigoAC]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-acciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
