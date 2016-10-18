<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnCategoriasBienes */

$this->title = 'Create Tb Bn Categorias Bienes';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Categorias Bienes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-categorias-bienes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
