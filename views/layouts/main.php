<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            [
                'label' => 'Bienes',
                'items' => [
                    ['label' => 'Agregar Nuevo Bien', 'url' => ['/tb-bn-equipos/index']],
                    '<li class="divider"></li>',
                    ['label' => 'Mantenimiento de Categoria', 'url' => ['/tb-bn-categorias-bienes/index']],
                ],
            ],
            [
                'label' => 'Carga y Descarga',
                'items' => [
                    ['label' => 'Acta de Cargo', 'url' => ['/tb-bn-detalle-acta-asignacion/index']],
                    '<li class="divider"></li>',
                    ['label' => 'Acta Descargo', 'url' => ['/tb-bn-detalle-acta-descargo/index']],
                ],
            ],
            [
                'label' => 'Acta de Compromiso',
                'items' => [
                    ['label' => 'Acta de Cargo', 'url' => ['/tb-bn-detalle-acta-asignacion/index']],
                    '<li class="divider"></li>',
                    ['label' => 'Acta Descargo', 'url' => ['/tb-bn-detalle-acta-descargo/index']],
                ],
            ],
            [
                'label' => 'Registro de Actividades',
                'items' => [
                    ['label' => 'Acciones', 'url' => ['/tb-bn-acciones/index']],
                ],
            ],
            [
                'label' => 'Solicitud (Portal del Empleado)',
                'items' => [
                    ['label' => 'Solicitud de descargo', 'url' => ['/tb-bn-solicitud-descargo/index']],
                    ],
            ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
