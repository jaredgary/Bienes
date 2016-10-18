<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnEstadoSolicitud */

$this->title = 'Create Tb Bn Estado Solicitud';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Estado Solicituds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-estado-solicitud-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
