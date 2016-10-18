<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbBnCategoriasBienes */

$this->title = 'Update Tb Bn Categorias Bienes: ' . $model->CodigoCategoria;
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Categorias Bienes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CodigoCategoria, 'url' => ['view', 'id' => $model->CodigoCategoria]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-bn-categorias-bienes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
