<?php
include_once 'about_history.php';
?>

<div class="container">
    <header>
        <h1 class="header-title">about us</h1>
        <p class="header-subtitle">Do you want to know a little more about<br/>UFRGSMUN 2016? Then just continue scrolling.</p>
        <span class="arrow"></span>
    </header>
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-brown" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-whatMun-high" style="fill: url(#gradient-whatMun-high)" />
    <linearGradient id="gradient-whatMun-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#c92424" />
          <stop offset="100%" stop-color="#d22525" />
    </linearGradient>
</svg>

<section class="what-mun">
    <article class="container">
        <h2 class="article-title">What is a mun?</h2>
        <p class="article-description">
            Model United Nations is an event which gives the opportunity for students to debate relevant issues of the international agenda through an authentic simulation of the discussions taking place at the UN. They simulate, in a very realistic manner, the proceedings and debates of different UN organs, such as the Security Council, the General Assembly, and the Economic and Social Council. During the simulations, the students act as "delegates" representing one specific country. By acting as ambassadors of that Member State, participants support their positions and uphold their interests during the discussions. People also have the opportunity to participate as judges in the juridic committees and as journalists from the international media covering the debates.
        </p>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-whatMun-low" style="fill: url(#gradient-whatMun-low)"/>
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-whatMun-high" style="fill: url(#gradient-whatUfrgsmun-high)" />
    <linearGradient id="gradient-whatMun-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#dd4242" />
          <stop offset="100%" stop-color="#df4b4b" />
    </linearGradient>
    <linearGradient id="gradient-whatUfrgsmun-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#ee4018" />
          <stop offset="100%" stop-color="#ee4822" />
    </linearGradient>
</svg>

<section class="what-ufrgsmun right-position">
    <article class="container">
        <h2 class="article-title">And what is UFRGSMUN?</h2>
        <p class="article-description">
            UFRGSMUN is the first model to emerge in the south of Brazil. Created in 2003, the project has grown and is consolidated today as one of the most renowned and traditional MUN of Brazil, being known as an event which joins academic and administrative excellence. Every year, UFRGSMUN attempts to make its participants to think beyond the simulation, proposing to simulate topics of local and global importance - embracing not only the UN committees but giving space to the regional forums to address attention of local debates. Besides, being an extension project of Federal University of Rio Grande do Sul, UFRGSMUN wants to mean more than a simulation of UN: it wants to empower its participants, promote equality among them and contribute to their formation.
        </p>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L100,100 L0,0" class="diagonal-whatUfrgsmun-low" style="fill: url(#gradient-whatUfrgsmun-low)"/>
    <path d="M0,0 L100,100 L0,100 L0,0" class="diagonal-history-high" style="fill: url(#gradient-history-high)"/>
    <linearGradient id="gradient-whatUfrgsmun-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#f16748" />
          <stop offset="100%" stop-color="#f26f51" />
    </linearGradient>
    <linearGradient id="gradient-history-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#927260" />
          <stop offset="100%" stop-color="#987764" />
    </linearGradient>
</svg>

<section class="history">
    <article class="container">
        <h2 class="article-title">Our history</h2>
        <p class="article-description">
                 Every new edition, UFRGS Model United Nations comes with different themes, committees, staff and surprises, all dedicated to achieve the best quality possible. Check out our previous editions' websites.
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
                                <h3 class="modal-title"><?php echo $year['year'] . ' - ' . $year['edition']?></h3>
                                <h4 class="modal-subtitle"><?php echo $year['name']?></h4>
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
