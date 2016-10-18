<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnActaAsignacion */

$this->title = 'Update Tb Bn Acta Asignacion: ' . $model->CodigoActaAsignacion;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Acta Asignacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoActaAsignacion, 'url' => ['view', 'id' => $model->CodigoActaAsignacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-acta-asignacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
