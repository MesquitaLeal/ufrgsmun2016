<?php
use yii\helpers\Url;
$this->title = 'UFRGSMUN 2016';
?>

<section class='home'>
    <?= $this->render('@app/views/layouts/nav_index') ?>

    <img class="globo-home img-responsive" src="assets_b/images/globo-cortado.png" alt="" />
    <div class="home-box">
        <img class="logo-cinza" src="assets_b/images/logo-horizontal-cinza.png" alt="" />
        <h2 class="home-date">02 - 06 novembro</h2>
    </div>

    <h1 class="moto"><?= Yii::t('app', 'Empowering people,<br/>overcoming challenges.')?></h1>

    <svg xmlns="http://www.w3.org/2000/svg" class="home-gradiente" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0,0 L100,0 L100,100 L0,100" class="diagonal-location-high" style="fill: url(#gradient-location-high)" />
        <linearGradient id="gradient-location-high" x1="0%" y1="0%" x2="0%" y2="100%">
              <stop offset="0%" stop-color="#f26f51" stop-opacity="0" />
              <stop offset="100%" stop-color="#df4b4b" stop-opacity=".5" />
        </linearGradient>
    </svg>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section diagonal-index" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M100,0 L0,100 L100,100 L100,0" class="history-diagonal" />
</svg>

<section class="home-menu">
    <article class="container card-box">
        <div class="menu-card">
            <h1><?= Yii::t('app', 'about us')?></h1>
            <p>
                We have planned a lot of activities, so you can enjoy every minute of UFRGSMUN 2016. Check out our tentative schedule!
            </p>
            <a href=<?= Url::to(['site/about'])?>>
                <button class="button more-button" type="button" name="button"><?= Yii::t('app', 'More')?></button>
            </a>
        </div>
        <div class="menu-card">
            <h1><?= Yii::t('app', 'the mun')?></h1>
            <p>
                We have planned a lot of activities, so you can enjoy every minute of UFRGSMUN 2016. Check out our tentative schedule!
            </p>
            <a href=<?= Url::to(['site/mun'])?>>
                <button class="button more-button" type="button" name="button"><?= Yii::t('app', 'More')?></button>
            </a>
        </div>
        <div class="menu-card">
            <h1><?= Yii::t('app', 'committees')?></h1>
            <p>
                We have planned a lot of activities, so you can enjoy every minute of UFRGSMUN 2016. Check out our tentative schedule!
            </p>
            <a href=<?= Url::to(['committee/index'])?>>
                <button class="button more-button" type="button" name="button"><?= Yii::t('app', 'More')?></button>
            </a>
        </div>
        <div class="menu-card">
            <h1><?= Yii::t('app', 'apply')?></h1>
            <p>
                We have planned a lot of activities, so you can enjoy every minute of UFRGSMUN 2016. Check out our tentative schedule!
            </p>
            <a href=<?= Url::to(['site/apply'])?>>
                <button class="button more-button" type="button" name="button"><?= Yii::t('app', 'More')?></button>
            </a>
        </div>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L100,100 L0,0" class="history-diagonal" />
    <path d="M0,0 L100,100 L0,100 L0,0" style="fill: url(#gradient-whatUfrgsmun-low)" />
    <linearGradient id="gradient-whatUfrgsmun-low" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#911a38" />
          <stop offset="100%" stop-color="#852885" />
    </linearGradient>
</svg>

<section class="home-end">
    <article class="container">
        <h2 class="article-title">UFRGSMUN 2016</h2>
        <p class="article-description"><?= Yii::t('app', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum')?></p>
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#teasers">Teasers</button>
        <div class="modal fade" id="teasers" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee">UFRGSMUN 2016</h2>
                            <h3 class="topic-title">SEE OUR TEASERS</h3>
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/10kcAKffHt0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
