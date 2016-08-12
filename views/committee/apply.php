<?php
use yii\helpers\Url;

if (Yii::$app->language == 'en-US') {
    $quickGuide = 'assets_b/images/quick-guide-en.jpg';
}
else {
    $quickGuide = 'assets_b/images/quick-guide-en.jpg';
}

?>

<div class="container">
    <header>
        <h1 class="header-title apply-title"><?= Yii::t('app', 'apply')?></h1>
        <p class="header-subtitle"><?= Yii::t('app', 'Check out how to guarantee your vacancy<br>in UFRGSMUN 2016!')?></p>
        <!--<span class="arrow"></span>-->
    </header>
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-brown" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-register-high" style="fill: url(#gradient-register-high)" />
    <linearGradient id="gradient-register-high" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#DF4C4C" />
          <stop offset="100%" stop-color="#F26F52" />
    </linearGradient>
</svg>

<section class="register">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'How to register')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'Registering for UFRGSMUN is really easy. You just have to follow a few steps. Take a look!')?>
        </p>
        <button class="button button-smaller" type="button" data-toggle="modal" data-target="#step1"><?= Yii::t('app', '1')?></button>
        <div class="modal fade" id="step1" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'How to register')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Step 1 - Putting together a delegation and selecting a head delegate')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The first thing to do when putting together a delegation would be to find other people that wish to take part in the other committees. Next, you should select one or more countries from the Country/Committee Matrix that have representatives in all the committees that you and your friends want to participate in. Delegations may range from 1 (one) up to 20 (twenty) delegates. Then, you should select a head delegate among the members from your delegation. That person will be responsible for filling out registration forms, making payments, and staying in direct contact with UFRGSMUN staff.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'If you wish to represent a specific country, then you should invite enough people to complete the delegation of this country, settling amongst yourselves who will be in which committee. But remember that it is not certain that your first choice of country will be designated to you. The number of delegates and the countries that you wish to represent must be informed in Form A, which will be online from August 15th on.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'NOTE: if you do not take part in a delegation and wish to be fitted in an existing one, specific guidance will be provided to you in Form A.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="button button-smaller" type="button" data-toggle="modal" data-target="#step2"><?= Yii::t('app', '2')?></button>
        <div class="modal fade" id="step2" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'How to register')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Step 2 - Filling in Form A')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Once your delegations has decided which countries it would like to represent, the head delegate must proceed to filling in Form A. During such procedure, the head delegate will have to inform 12 (twelve) countries or combinations of countries that would please the delegation the most. This is to facilitate the staff’s work in allocating preferences. Throughout this process, it is important to remember that the number of delegates must be equivalent to the number of spots demanded upon registration.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Once your delegation—represented by the Head Delegate—has submitted this form, he or she will receive an e-mail from the staff indicating exact payment procedures.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="button button-smaller" type="button" data-toggle="modal" data-target="#step3"><?= Yii::t('app', '3')?></button>
        <div class="modal fade" id="step3" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'How to register')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Step 3 - Payment')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'A fee per person of R$ 140.00 in full amount or R$ 160.00 divided in two installments applies in order to participate in the conference. Head delegates will have the chance to choose in the registration form whether their delegations will pay their corresponding delegate fees in two installments or in full amount. The payment method chosen necessarily applies to all members of your delegation.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'When the full amount or the first installment of the payment is received by the Staff, the Head Delegate will receive a confirmation e-mail. Another confirmation e-mail will be sent once the second installment is paid.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'NOTE: delegations registering after the regular registration period will have to pay higher fees in order to participate in UFRGSMUN.')?>
                            </p>
                            <h4 class="topic-item"><?= Yii::t('app', 'Total fees per delegate for regular registration')?></h4>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Full amount: R$ 140.00<br>Payment deadline: 5 days after filling Form A<br><br>Two installments: R$ 160.00 (2 x R$ 80.00)<br>Payment deadlines: 5 days after filling Form A and October 09th')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="button button-smaller" type="button" data-toggle="modal" data-target="#step4"><?= Yii::t('app', '4')?></button>
        <div class="modal fade" id="step4" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'How to register')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Step 4 - Filling in Form B')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Until October 1st, Head Delegates will receive another e-mail indicating the country assigned to the delegation. Once your country has been designated, the Head Delegate will just have to wait for the Form B (available from October 3rd).')?>
                            </p>
                            <h4 class="topic-item"><?= Yii::t('app', 'ICJ and IP only')?></h4>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Delegates who want to participate in the International Court of Justice and the International Press have to fill a specific form for registering. Positions will be assigned on a first-come, first-served basis.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#quick"><?= Yii::t('app', 'Quick guide')?></button>
        <div class="modal fade" id="quick" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'How to register')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Quick guide')?></h3>
                            <img class="img-fluid" src="<?= $quickGuide; ?>" alt="<?= Yii::t('app', 'Quick guide')?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    -->
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-brown" style="fill: url(#gradient-register-low)" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-whatMun-high" style="fill: url(#gradient-handbook-high)" />
    <linearGradient id="gradient-register-low" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#DF4C4C" />
          <stop offset="100%" stop-color="#F26F52" />
    </linearGradient>
    <linearGradient id="gradient-handbook-high" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#911A38" />
        <stop offset="100%" stop-color="#B41F34" />
    </linearGradient>
</svg>

<!--
<section class="what-mun right-position">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Handbook')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'Here you will find the general rules of procedure of UFRGSMUN and the specific ones for each committee. Don’t miss it!')?>
        </p>
        <a class="button-link" href="http://www.ufrgs.br">
            <button class="button" type="button"><?= Yii::t('app', 'Read it')?></button>
        </a>
    </article>
</section>
-->

<section class="what-mun right-position">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Country report')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'Just as the known “Position Paper”, the Country Report fulfills the function to explain your country\'s position about the debated topic. Don’t forget to bring a printed copy to UFRGSMUN!')?>
        </p>
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#report"><?= Yii::t('app', 'Instructions')?></button>
        <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'Country report')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Instructions')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'You must answer the following questions in your Country Report:<br><br>1. How does the topic of discussion impact the country you are representing?<br>2. What actions have been taken domestically or by international organizations to handle this issue? Were they successful?<br>3. Has your country signed or ratified treaties or major conventions on the topic? What is your country\'s voting record on the topic?<br>4. What are the main allies of your country in this specific matter? In which political group does your country include itself when dealing with this issue?<br>5. Which possible solutions will you defend during the conference?')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<!--
==================BEGINNING OF COUNTRY MATRIX===========================
<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L100,100 L0,0" style="fill: url(#gradient-handbook-low)"/>
    <path d="M0,0 L100,100 L0,100 L0,0" class="meet-us-diagonal" />
    <linearGradient id="gradient-handbook-low" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#911A38" />
        <stop offset="100%" stop-color="#B41F34" />
    </linearGradient>
</svg>

<section class="meet-us">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Country Matrix')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'Here you will find the general rules of procedure of UFRGSMUN and the specific ones for each committee. Don’t miss it!')?>
        </p>
        <a class="button-link" href=<?= Url::to(['committee/matrix'])?>>
            <button class="button" type="button"><?= Yii::t('app', 'Check out')?></button>
        </a>
        <br><br>
    </article>
</section>
==================ENDING OF COUNTRY MATRIX===========================
-->

<!--
<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L100,100 L0,0" style="fill: url(#gradient-handbook-low)"/>
    <path d="M0,0 L100,100 L0,100 L0,0" class="meet-us-diagonal" />
    <linearGradient id="gradient-handbook-low" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#911A38" />
        <stop offset="100%" stop-color="#B41F34" />
    </linearGradient>
</svg>


<section class="form-a">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Form A')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'Here is the link do apply to UFRGSMUN. Don’t forget to gather all information you need before fillling the form. We are waiting you and your delegation!')?>
        </p>
        <a class="button-link" href="https://docs.google.com/forms/d/e/1FAIpQLScKFhONNFsWx3cnuHK6-mmAUXJPnuzow7US_oa5eU3b8driog/viewform?c=0&w=1">
            <button class="button button-bigger" type="button"><?= Yii::t('app', 'Form A')?></button>
        </a>
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#formA"><?= Yii::t('app', 'Required')?></button>
        <div class="modal fade" id="formA" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'Form A')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Needed information')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Higher Education Institution, Major, Number of Delegates, Country Preferences, Personal Data of the Head Delegate, Accomodation at UFRGSMUN staff’s houses.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="meet-us-diagonal" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-whatMun-high" style="fill: url(#gradient-formb-high)" />
    <linearGradient id="gradient-formb-high" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#DF4C4C" />
        <stop offset="100%" stop-color="#F26F52" />
    </linearGradient>
</svg>

<section class="form-b right-position">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Form B')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'Have you received the e-mail with the representations assigned to yor delegation? So you are ready to fill form B!')?>
        </p>
        <a class="button-link" href="#">
            <button class="button button-bigger" type="button"><?= Yii::t('app', 'Soon')?></button>
        </a>
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#formB"><?= Yii::t('app', 'Required')?></button>
        <div class="modal fade" id="formB" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'Form B')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Needed information')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Full Name, Date of Birth, RG, E-mail, Higher Education Institution, Country and Committee.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L100,100 L0,0" style="fill: url(#gradient-formb-low)"/>
    <path d="M0,0 L100,100 L0,100 L0,0" style="fill: url(#gradient-formicj-high)" />
    <linearGradient id="gradient-formb-low" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#DF4C4C" />
        <stop offset="100%" stop-color="#F26F52" />
    </linearGradient>
    <linearGradient id="gradient-formicj-high" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#911A38" />
        <stop offset="100%" stop-color="#B41F34" />
    </linearGradient>
</svg>

<section class="form-icj">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'ICJ Form')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'This form is only for those who will simulate in International Court of Justice. The apply is individual and there is no need to register with other delegation.')?>
        </p>
        <a class="button-link" href="https://docs.google.com/forms/d/e/1FAIpQLSc48rZWPfPiWIvm32GEw6GArOzrYPYfw2K7uUgVOC2RLqyLpg/viewform?c=0&w=1">
            <button class="button button-bigger" type="button"><?= Yii::t('app', 'ICJ Form')?></button>
        </a>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-brown" style="fill: url(#gradient-formicj-low)" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="meet-us-diagonal" />
    <linearGradient id="gradient-formicj-low" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#911A38" />
        <stop offset="100%" stop-color="#B41F34" />
    </linearGradient>
</svg>

<section class="form-ip right-position">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'IP Form')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'This form is only for those who will simulate in International Press. The apply is individual and there is no need to register with other delegation.')?>
        </p>
        <a class="button-link" href="https://docs.google.com/forms/d/e/1FAIpQLScYYtK8T7x66HLZ6vpwvwQ8b5xzI9pSxTeflv-5qB4JLKB2UQ/viewform?c=0&w=1">
            <button class="button button-bigger" type="button"><?= Yii::t('app', 'IP Form')?></button>
        </a>
        <br><br>
    </article>
</section>
-->
