<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;

Modal::begin([]);
Modal::end();
?>

<nav class="index-nav">
    <button class="navbar-toggler toogler-index" type="button" data-toggle="modal" data-target="#navBar">
        <span>&#9776;</span>
    </button>
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
                        <a class="menu-link" href=<?= Url::to(['site/about'])?>><h1><?= Yii::t('app', 'about us')?></h1></a><br/>
                        <a class="menu-link" href=<?= Url::to(['site/mun'])?>><h1><?= Yii::t('app', 'the mun')?></h1></a><br/>
                        <a class="menu-link" href=<?= Url::to(['committee/index']);?>><h1><?= Yii::t('app', 'committees')?></h1><br/></a>
                        <a class="menu-link" href=<?= Url::to(['committee/apply'])?>><h1><?= Yii::t('app', 'apply')?></h1></a><br/>
                    </div>
                </div>
                <div class="modal-footer">
                    <h6>
                        <a href="https://www.facebook.com/ufrgsmun/">
                            <img class="icon-modal" src="assets_b/images/facebook.png" />
                        </a>
                        <a href="https://www.youtube.com/channel/UCActGk4DnIw7WGO6RJ4wETg">
                            <img class="icon-modal" src="assets_b/images/youtube.png" />
                        </a>
                        <a href=<?= Url::to(['site/us'])?>>
                            <img class="icon-modal icon-globe" src="assets_b/images/globo_en.png" />
                        </a>
                        <a href=<?= Url::to(['site/pt'])?>>
                            <img class="icon-modal icon-globe" src="assets_b/images/globo_pt.png" />
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>
