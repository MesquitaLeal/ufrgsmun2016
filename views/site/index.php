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
            <h1><?= Yii::t('app', 'about')?></h1>
            <p>
                <?= Yii::t('app', 'Do you want to know more about UFRGSMUN, the edition of this year and the previous ones? Find here also the staff, project partners and supporters!')?>
            </p>
            <a href=<?= Url::to(['site/about'])?>>
                <button class="button more-button" type="button" name="button"><?= Yii::t('app', 'More')?></button>
            </a>
        </div>
        <div class="menu-card">
            <h1><?= Yii::t('app', 'the mun')?></h1>
            <p>
                <?= Yii::t('app', 'Discover everything you need to know about UFRGSMUN 2016 taking a look at the schedule, event policies and more!')?>
            </p>
            <a href=<?= Url::to(['site/mun'])?>>
                <button class="button more-button" type="button" name="button"><?= Yii::t('app', 'More')?></button>
            </a>
        </div>
        <div class="menu-card">
            <h1><?= Yii::t('app', 'committees')?></h1>
            <p>
                <?= Yii::t('app', 'Check here committees, topics, representations and staff of this year!')?>
            </p>
            <a href=<?= Url::to(['committee/index'])?>>
                <button class="button more-button" type="button" name="button"><?= Yii::t('app', 'More')?></button>
            </a>
        </div>
        <div class="menu-card">
            <h1><?= Yii::t('app', 'apply')?></h1>
            <p>
                <?= Yii::t('app', 'Click here to guarantee your vacancy in UFRGSMUN 2016!')?>
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
        <p class="article-description">
            <?= Yii::t('app', 'This year’s edition seeks to draw our participants to join the process of building a new world that is necessary and possible. A new world through institutions that represent all realities, relationships that respect everyone and, in this sense, that turn the place we live in into an environment more inclusive for different needs and choices. These challenges are only possible to overcome when people hear and are heard by others, making each of us protagonists of the construction of new patterns and structures. This is the invitation that the XIV UFRGSMUN makes to everyone: we will discuss and think together on solutions to overcome the challenges of today\'s world and build a new place where different realities have a voice.')?>
        </p>
        <button class="button" type="button" data-toggle="modal" data-target="#teasers">Teasers</button>
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
                            <br><br>
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Fq45O5LPrpg" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
