<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnSolicitudDescargo */

$this->title = 'Create Tb Bn Solicitud Descargo';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Solicitud Descargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-solicitud-descargo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
