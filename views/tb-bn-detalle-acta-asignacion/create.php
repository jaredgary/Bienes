<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnDetalleActaAsignacion */

$this->title = 'Create Tb Bn Detalle Acta Asignacion';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Detalle Acta Asignacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-detalle-acta-asignacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
