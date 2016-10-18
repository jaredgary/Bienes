<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnEstadoasignacion */

$this->title = 'Update Tb Bn Estadoasignacion: ' . $model->CodigoEstadoAsignacion;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Estadoasignacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoEstadoAsignacion, 'url' => ['view', 'id' => $model->CodigoEstadoAsignacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-estadoasignacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
