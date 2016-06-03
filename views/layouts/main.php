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
    <nav>
        <a href=<?= Yii::$app->homeUrl?>>
            <?= Html::img('@web/images/logo_horizontal.png', ['alt'=>'logo vertical', 'class'=>'logo-home']) ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#navBar">
            <span>&#9776;</span>
        </button>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle" viewBox="0 0 100 100">
            <!--<polygon points="0,0 1900,0 1900,200"/>-->
            <path d="M0,0 L70,0 L0,15 L0,0" style="stroke:none; fill:#fef8f4;"/>
            <image x="5" y="-0.7" width="20" height="20"
               id="canto" xlink:href="/images/mundo_canto.png" />
        </svg>
    </nav>

    <div class="modal fade" id="navBar" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-wrap">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-menu">
                            <?php //Yii::$app->language = 'pt-BR'; ?>
                            <a href="about"><h1><?= Yii::t('app', 'about us')?></h1></a><br/>
                            <a href="say"><h1>the mun</h1></a><br/>
                            <h1>committees</h1><br/>
                            <h1>apply</h1><br/>
                            <h1>preparation</h1><br/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <h6>Facebook | Youtube | Língua</h6>
                        <!--<select>
                            <option>PT</option>
                            <option>EN</option>
                        </select>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    NavBar::begin([

    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
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
