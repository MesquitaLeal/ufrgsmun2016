<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;

Modal::begin([]);
Modal::end();
?>

<nav>
    <a href="index.php">
        <img class="logo-home" src=<?=Url::to(['@web/images/logo_horizontal.png'])?> alt="Logo horizontal" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#navBar">
        <span>&#9776;</span>
    </button>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="svg-triangle" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M100,0 L25,0 L100,100 L100,0" class="triangle-upperEast" />
        <!--<image x="0" y="0" width="25" height="50"
           id="canto" xlink:href=<?=Url::to(['@web/images/mundo_canto.png'])?> />-->
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
                        <a href=<?= Url::to(['site/about'])?>><h1><?= Yii::t('app', 'about us')?></h1></a><br/>
                        <a href=<?= Url::to(['site/about'])?>><h1><?= Yii::t('app', 'the mun')?></h1></a><br/>
                        <a href=<?= Url::to(['committees/index']);?>><h1><?= Yii::t('app', 'committees')?></h1><br/></a>
                        <a href=<?= Url::to(['site/about'])?>><h1><?= Yii::t('app', 'apply')?></h1></a><br/>
                    </div>
                </div>
                <div class="modal-footer">
                    <h6>
                        <a href="https://www.facebook.com/ufrgsmun/">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCActGk4DnIw7WGO6RJ4wETg">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>
