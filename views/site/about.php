<?php
if (Yii::$app->language == 'en-US') {
    include_once 'about_history_en.php';
    include_once 'about_projects_en.php';
}
else {
    include_once 'about_history_pt.php';
    include_once 'about_projects_pt.php';
}

$sponsors = array (
    'audiplo.png',
    'cafe.png',
    'ceri.jpg',
    'fce.png',
    'lemonde.jpg',
    'dacolonia.png',
    'gang.jpg',
    'salbrasa.jpg',
    'grafica.png',
    'prorext.png',
);

$muns = array (
    'amun.png',
    'famun.jpg',
    'temas.png',
    'pampasul.png',
);

?>

<div class="container">
    <header>
        <h1 class="header-title about-title"><?= Yii::t('app', 'about us')?></h1>
        <p class="header-subtitle"><?= Yii::t('app', 'Do you want to know a little more about<br/>UFRGSMUN 2016? Then just continue scrolling.')?></p>
        <span class="arrow"></span>
    </header>
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-brown" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-whatMun-high" style="fill: url(#gradient-whatMun-high)" />
    <linearGradient id="gradient-whatMun-high" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#911A38" />
          <stop offset="100%" stop-color="#B41F34" />
    </linearGradient>
</svg>

<section class="what-mun">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'What is a mun?')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'Model United Nations is an event which gives the opportunity for students to debate relevant issues of the international agenda through an authentic simulation of the discussions taking place at the UN. They simulate, in a very realistic manner, the proceedings and debates of different UN organs, such as the Security Council, the General Assembly, and the Economic and Social Council. During the simulations, the students act as "delegates" representing one specific country. By acting as ambassadors of that Member State, participants support their positions and uphold their interests during the discussions. People also have the opportunity to participate as judges in the juridic committees and as journalists from the international media covering the debates.')?>
        </p>
        <img class="img-responsive mun-logo" src="assets_b/images/mun_logo.png" alt="" />
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-whatMun-low" style="fill: url(#gradient-whatMun-low)"/>
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-whatMun-high" style="fill: url(#gradient-whatUfrgsmun-high)" />
    <linearGradient id="gradient-whatMun-low" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#911A38" />
          <stop offset="100%" stop-color="#B41F34" />
    </linearGradient>
    <linearGradient id="gradient-whatUfrgsmun-high" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#DF4C4C" />
          <stop offset="100%" stop-color="#F26F52" />
    </linearGradient>
</svg>

<section class="what-ufrgsmun right-position">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'And what is UFRGSMUN?')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'UFRGSMUN is the first model to emerge in the south of Brazil. Created in 2003, the project has grown and is consolidated today as one of the most renowned and traditional MUN of Brazil, being known as an event which joins academic and administrative excellence. Every year, UFRGSMUN attempts to make its participants to think beyond the simulation, proposing to simulate topics of local and global importance - embracing not only the UN committees but giving space to the regional forums to address attention of local debates. Besides, being an extension project of Federal University of Rio Grande do Sul, UFRGSMUN wants to mean more than a simulation of UN: it wants to empower its participants, promote equality among them and contribute to their formation.')?>
        </p>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L100,100 L0,0" style="fill: url(#gradient-whatUfrgsmun-low)"/>
    <path d="M0,0 L100,100 L0,100 L0,0" class="meet-us-diagonal" />
    <linearGradient id="gradient-whatUfrgsmun-low" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#DF4C4C" />
          <stop offset="100%" stop-color="#F26F52" />
    </linearGradient>
</svg>

<section class="meet-us">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Meet us')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'Do you want to know who is behind this year edition? Then click in the buttons bellow and discover it!')?>
        </p>
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#secretariat"><?= Yii::t('app', 'Secretariat')?></button>
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#administrative"><?= Yii::t('app', 'Administrative')?></button>
        <div class="modal fade" id="secretariat" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'Secretariat')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'MEET THE STAFF')?></h3>
                            <?php foreach($dataProvider->models as $pessoa) :?>
                                <?php if($pessoa->staff_id <= 3 && !$pessoa->staff_id == NULL) :?>
                                    <?php if (!$pessoa->image == NULL) :?>
                                        <img class="person-picture" src='assets_b/images/staff/secretariado/<?= $pessoa->image;?>.png' alt="Personal picture" />
                                    <?php endif?>
                                    <div class="person-nameBox">
                                        <h2 class="person-name">
                                            <?= $pessoa->name ?>
                                            <span><?= Yii::t('app', $pessoa->staff->role) ?></span>
                                        </h2>
                                    </div>
                                    <p class="person-description"><?= Yii::t('app', $pessoa->description)?></p>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="administrative" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'Administrative')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'MEET THE STAFF')?></h3>
                            <?php foreach($dataProvider->models as $pessoa) :?>
                                    <?php if($pessoa->staff_id >= 4 && !$pessoa->staff_id == NULL) :?>
                                    <?php if (!$pessoa->image == NULL) :?>
                                        <img class="person-picture" src='assets_b/images/staff/administrativo/<?= $pessoa->image;?>.png' alt="Personal picture" />
                                    <?php endif?>
                                    <div class="person-nameBox">
                                        <h2 class="person-name">
                                            <?= Yii::t('app', $pessoa->name)?>
                                            <span><?= Yii::t('app', $pessoa->staff->role) ?></span>
                                        </h2>
                                    </div>
                                    <p class="person-description"><?= Yii::t('app', $pessoa->description)?></p>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="meet-us-diagonal" />
    <path d="M0,100 L100,100 L100,0 L0,100" class="history-diagonal" />
</svg>

<section class="history">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Our history')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'Every new edition, UFRGS Model United Nations comes with different themes, committees, staff and surprises, all dedicated to achieve the best quality possible. Check out our previous editions\' websites.')?>
        </p>
        <?php foreach($history as $key=>$year) :?>
            <button class="button button-history" type="button" data-toggle="modal" data-target="#<?php echo $year['year']?>"><?php echo $year['year']?></button>
            <div class="modal fade" id="<?php echo $year['year']?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-wrap">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal-delimiter">
                                <h2 class="topic-committee"><?php echo $year['year'] . ' - ' . $year['edition']?></h2>
                                <h3 class="topic-title"><?= $year['name'] ?></h3>
                                <p class="modal-text"><?php echo $year['info'] ?></p>
                                <?php if(!$year['website'] == NULL): ?>
                                    <p class="modal-text">Website: <a href="<?php echo $year['website'] ?>"><i class="fa fa-external-link" aria-hidden="true"></i></a></p>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="history-diagonal" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-whatMun-high" style="fill: url(#gradient-whatMun-high)" />
    <linearGradient id="gradient-whatMun-high" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#911A38" />
          <stop offset="100%" stop-color="#B41F34" />
    </linearGradient>
</svg>

<section class="what-mun">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Partner Projects')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'UFRGSMUN is a partner of other fantastic projects that seek to democratize education by sharing knowledge of the classroom with society. Learn more about them!')?>
        </p>
        <?php foreach ($projects as $key => $value) :?>
            <button class="button button-bigger" type="button" data-toggle="modal" data-target="#<?= $key?>"><?= $key?></button>
            <div class="modal fade" id="<?= $key?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-wrap">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body modal-delimiter">
                                <h2 class="topic-committee"><?= Yii::t('app', 'Partner Projects')?></h2>
                                <h3 class="topic-title"><?= $value['name'] ?></h3>
                                 <div class='square'>
                                    <img class="sponsor-img" src="assets_b/images/projects/<?= $value['image']?>">
                                </div>
                                <p class="modal-text"><?= $value['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-whatMun-low" style="fill: url(#gradient-whatMun-low)"/>
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-whatMun-high" style="fill: url(#gradient-whatUfrgsmun-high)" />
    <linearGradient id="gradient-whatMun-low" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#911A38" />
          <stop offset="100%" stop-color="#B41F34" />
    </linearGradient>
    <linearGradient id="gradient-whatUfrgsmun-high" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#DF4C4C" />
          <stop offset="100%" stop-color="#F26F52" />
    </linearGradient>
</svg>

<section class="what-ufrgsmun">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Sponsors and MUNs Partners')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'UFRGSMUN does not happen without the support of those who believe in the transforming role of the project. Check here who are our sponsors, supporters and partners models!')?>
        </p>
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#sponsors"><?= Yii::t('app', 'Sponsors')?></button>
        <div class="modal fade" id="sponsors" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'Sponsors and MUNs Partners')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Sponsors')?></h3>
                            <?php foreach($sponsors as $sponsor) :?>
                                <div class='square'>
                                    <img class="sponsor-img" src="assets_b/images/sponsors/<?= $sponsor?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#muns"><?= Yii::t('app', 'MUNs Partners')?></button>
        <div class="modal fade" id="muns" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'Sponsors and MUNs Partners')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'MUNs Partners')?></h3>
                            <?php foreach($muns as $mun) :?>
                                <div class='square'>
                                    <img class="sponsor-img" src="assets_b/images/muns/<?= $mun?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
