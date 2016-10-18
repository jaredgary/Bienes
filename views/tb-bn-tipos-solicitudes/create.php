<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnTiposSolicitudes */

$this->title = 'Create Tb Bn Tipos Solicitudes';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Tipos Solicitudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-tipos-solicitudes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
