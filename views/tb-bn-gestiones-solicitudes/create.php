<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnGestionesSolicitudes */

$this->title = 'Create Tb Bn Gestiones Solicitudes';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Gestiones Solicitudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-gestiones-solicitudes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
