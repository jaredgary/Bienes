<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnTiposDocumentos */

$this->title = 'Create Tb Bn Tipos Documentos';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Tipos Documentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-tipos-documentos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
