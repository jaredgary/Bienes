<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnDetalleActaDescargo */

$this->title = 'Create Tb Bn Detalle Acta Descargo';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Detalle Acta Descargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-detalle-acta-descargo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
