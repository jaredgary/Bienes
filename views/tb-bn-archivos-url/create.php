<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbBnArchivosUrl */

$this->title = 'Create Tb Bn Archivos Url';
$this->params['breadcrumbs'][] = ['label' => 'Tb Bn Archivos Urls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-bn-archivos-url-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
