<?php
include_once 'committees_descriptions.php';
use yii\helpers\Html;
?>


<div class="container">
    <header>
        <h1 class="header-title">committees</h1>
        <p class="header-subtitle">Below you can see the information about<br/> the committees of UFRGSMUN 2016. </p>
        <?php
            foreach ($model as $value) {
                echo $value->id;
                echo $value->name;
                echo $value->description;
            }
        ?>
        <span class="arrow"></span>
    </header>
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-brown" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-asean-high" />
    <linearGradient id="gradient-asean-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#d09014" />
          <stop offset="100%" stop-color="#d99715" />
    </linearGradient>
</svg>



<section class="asean">
    <article class="container">
        <h2 class="article-title">ASEAN Defense<br/>Minister's Meeting Plus</h2>
        <p class="article-description article-committee">
            The Asean Defence Minister’s Meeting Plus, or simply ADMM+, is a regional forum focused on defence engagement among its members. Its main goal is to strengthen security and defence cooperation among the member-States in order to achieve sustainable and permanent peace, stability and development in the Asia-Pacific region.  The forum is compounded by the ten ASEAN countries and eight others, called “Dialogue Partners”, turning it into a more comprehensive platform to deal with the defence challenges of the region.<br/>
            The ADMM+ was established during Vietnam’s ASEAN Chairmanship in 2010 and since then there were held three ministerial meetings. Besides that, ADMM+ has remained extremely active, holding annual meetings of senior officials and showing substantial military cooperation developed by its Groups of Experts. The committee has six groups within which the Members debate about the following topics: Maritime Security, Counter-terrorism, Humanitarian Assistance and Disaster Management, Peacekeeping Operations, Humanitarian Mine Action and Military Medicine.<br/>
            Acknowledging that the Asia-Pacific region faces several challenges ahead, the ADMM+ makes a very important contribution to stability and prosperity by building trust and confidence among the regional defence forces. All the eighteen Member States participate in the meeting, all represented by their Defence Ministers, who are expected to achieve by consensus a joint statement.
        </p>

        <?php foreach ($asean as $button => $value) :?>
                <button class="button" type="button" data-toggle="modal" data-target="#<?php echo 'asean' . $button ?>"><?php echo $value['name'] ?></button>
                <div class="modal fade" id="<?php echo 'asean' . $button ?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-wrap">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modal-delimiter">
                                    <h2 class="topic-committee"><?php echo  'Asean - ' . $value['name']?></h2>
                                    <h3 class="topic-title"><?php echo $value['title']?></h3>
                                    <p class="topic-text"><?php echo $value['text']?></p>
                                    <p class="topic-references">References:<br/><?php echo $value['refs']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-asean-low" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-wb-high" />
    <linearGradient id="gradient-asean-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#eeb952" />
          <stop offset="100%" stop-color="#efbd5b" />
    </linearGradient>
    <linearGradient id="gradient-wb-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#0c5d51" />
          <stop offset="100%" stop-color="#0d6659" />
    </linearGradient>
</svg>

<section class="wb">
    <article class="container">
        <h2 class="article-title">BOARD OF EXECUTIVE<br/>DIRECTORS OF<br/>THE WORLD BANK</h2>
        <p class="article-description article-committee">
            The World Bank Group (WBG) is an independent specialized agency of the United Nations system which works to diminish poverty levels and support sustainable development strategies. It is an association of five development institutions that provide technical and financial assistance to member countries. Among these institutions, the two main ones are the International Bank for Reconstruction and Development (IBRD) and the International Development Association (IDA).<br/>
            Every country that takes part of one of the aforementioned institutions is represented in two main decision organs of the World Bank Group: the Board of Governors, and the Board of Executive Directors. The Board of Governors is the ultimate policy maker of the World Bank Group and is composed of all countries’ finance authorities, who meet once a year. The Executive Directors have specific duties delegated by the Board of Governors. Four of the five institutions that form the World Bank Group have a Board of Executive Directors - the exception is the International Centre for the Settlement of Investment Disputes (ICSID), which has an autonomous structure. The four Boards of Executive Directors decide on proposals to be implemented by their respective institutions. They meet regularly at the Bank’s headquarters in Washington, United States.<br/>
            The XIV UFRGSMUN is going to simulate the Board of Executive Directors of the International Bank for Reconstruction and Development (IBRD). The IBRD is the earliest institution of the World Bank Group, founded after the ratification of the Bretton Woods Agreement, in 1944. Post-war reconstruction of Europe was its original objective, but its focus has evolved into assisting middle-income and creditworthy low-income countries. To that end, the IBRD provides low-interest loans decided upon by its Board. Twenty five executive directors compose the Board and represent the 188 member countries of the IBRD. Each of the five largest shareholders in the World Bank Group - France, Germany, Japan, the United Kingdom, and the United States - appoints one executive director to the Board. China, the Russian Federation, and Saudi Arabia also indicate their own representatives. The remaining 17 executive directors are elected to represent each a determined group of countries.
        </p>
        <?php foreach ($wb as $button => $value) :?>
                <button class="button" type="button" data-toggle="modal" data-target="#<?php echo 'wb' . $button ?>"><?php echo $value['name'] ?></button>
                <div class="modal fade" id="<?php echo 'wb' . $button ?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-wrap">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modal-delimiter">
                                    <h2 class="topic-committee"><?php echo  'WB - ' . $value['name']?></h2>
                                    <h3 class="topic-title"><?php echo $value['title']?></h3>
                                    <p class="topic-text"><?php echo $value['text']?></p>
                                    <p class="topic-references">References:<br/><?php echo $value['refs']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-wb-low" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-disec-high" />
    <linearGradient id="gradient-wb-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#17ae98" />
          <stop offset="100%" stop-color="#18b7a0" />
    </linearGradient>
    <linearGradient id="gradient-disec-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#502f2e" />
          <stop offset="100%" stop-color="#573332" />
    </linearGradient>
</svg>

<section class="disec">
    <article class="container">
        <h2 class="article-title">DISARMAMENT AND<br/>INTERNATIONAL<br/>SECURITY COMMITTEE</h2>
        <p class="article-description article-committee">
            The Disarmament and International Security Committee (DISEC), also known as the First Committee, is one of the six main committees of the United Nations General Assembly. It addresses disarmament and international security matters in the light of the general principles of cooperation to the maintenance of international peace and security, in order to prevent the disruption of armed conflict and the heightening of tensions in the international system. Since the past decade, the committee has been focusing on issues of nuclear non-proliferation, small arms illicit traffic and regional militarization. As a subsidiary organ of the General Assembly, the DISEC is entitled to present its recommendations over the issues under its consideration to a plenary meeting of the Assembly, usually in the form of draft resolutions and decisions. Through this mechanism, the First Committee has been the primary origin of legal initiatives that led to important international treaties and conventions, such as the Treaty of Non-Proliferation of Nuclear Weapons of 1968 and the Comprehensive Nuclear Test Ban Treaty of 1996. Each Member State of the United Nations is represented by one delegate in this committee and decisions on draft resolutions and recommendations are approved on a simple majority basis, turning the DISEC into a broad and inclusive platform for the debate of pertinent issues concerning the maintenance of international peace and security.
        </p>
        <?php foreach ($disec as $button => $value) :?>
                <button class="button" type="button" data-toggle="modal" data-target="#<?php echo 'disec' . $button ?>"><?php echo $value['name'] ?></button>
                <div class="modal fade" id="<?php echo 'disec' . $button ?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-wrap">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modal-delimiter">
                                    <h2 class="topic-committee"><?php echo  'DISEC - ' . $value['name']?></h2>
                                    <h3 class="topic-title"><?php echo $value['title']?></h3>
                                    <p class="topic-text"><?php echo $value['text']?></p>
                                    <p class="topic-references">References:<br/><?php echo $value['refs']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-disec-low" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-icj-high" />
    <linearGradient id="gradient-disec-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#8b514f" />
          <stop offset="100%" stop-color="#915553" />
    </linearGradient>
    <linearGradient id="gradient-icj-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#770c19" />
          <stop offset="100%" stop-color="#800d1b" />
    </linearGradient>
</svg>

<section class="icj">
    <article class="container">
        <h2 class="article-title">INTERNATIONAL COURT<br/>OF JUSTICE</h2>
        <p class="article-description article-committee">
            The International Court of Justice (ICJ) is the oldest and main judicial organ of the United Nations. It was created through the UN Charter, in 1945, as part of the system of peaceful settlement of disputes. Its work as a replacer of the Permanent Court of International Justice (PCIJ) began in 1945, and its Statute is very much alike its predecessor’s at the League of Nations. The first case of the ICJ Docket was the Corfu Channel (United Kingdom v. Albania), submitted on 22 May 1947, and, since then, almost 150 cases were received by the Court. The number of cases brought before the Court is increasing rapidly since the 1980’s.<br/>
            This judicial body’s functions are (1) to settle international disputes of a legal content brought by States (Contentious Jurisdiction of the Court) and (2) to give opinions on juridical matters raised by UN organs and specialized agencies (Jurisdiction to provide Advisory Opinions). The proceeding adopted by the Court includes a written and an oral stage, both public, and, once the latter is completed, the judges deliberate in closed chambers. ICJ’s decisions are final and cannot be appealed.<br/>
            There are fifteen standing judges elected in a Charter-based process for nine-year terms. Judges are elected on the basis of their notorious knowledge of the law, not their nationality, and, unlike diplomats, they shall not represent their governments. The voting procedure for their election is strict, and demands a majority of votes both in the United Nations General Assembly and in the Security Council. The aforementioned elections occur every three years for one third of the seats (five judges), and re-elections are allowed. There cannot be more than one judge elected of each nationality. When a Contentious Case is brought before the Court, if there are no standing judges of the parties’ nationality, they may request an ad hoc judge of their choice.
        </p>
        <?php foreach ($icj as $button => $value) :?>
                <button class="button" type="button" data-toggle="modal" data-target="#<?php echo 'icj' . $button ?>"><?php echo $value['name'] ?></button>
                <div class="modal fade" id="<?php echo 'icj' . $button ?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-wrap">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modal-delimiter">
                                    <h2 class="topic-committee"><?php echo  'ICJ - ' . $value['name']?></h2>
                                    <h3 class="topic-title"><?php echo $value['title']?></h3>
                                    <p class="topic-text"><?php echo $value['text']?></p>
                                    <p class="topic-references">References:<br/><?php echo $value['refs']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-icj-low" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-ip-high" />
    <linearGradient id="gradient-icj-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#ca152b" />
          <stop offset="100%" stop-color="#d3162d" />
    </linearGradient>
    <linearGradient id="gradient-ip-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#a3440d" />
          <stop offset="100%" stop-color="#ad470e" />
    </linearGradient>
</svg>

<section class="ip">
    <article class="container">
        <h2 class="article-title">INTERNATIONAL PRESS</h2>
        <p class="article-description article-committee">
            The press, at a simulation like UFRGSMUN, is made to understand and apply the theories which say the media has an important role when any part is seeking an agreement. The importance of media in International Relations decisions are, most times, underrated. It is known that vehicles follow an editorial guideline and do not broadcast the news in an impartial manner in most events. The journalists that report the stories are subjected to writing according to their beliefs, political views, agency policies and country position – which is why there are many different impressions about one situation. <br/>
            Working in a different proceeding than the other committees, we invite aspiring journalists to join our International Press. The journalists will be responsible for collecting and sharing information about what is being discussed in the committees, remaining faithful to the perceptions of international media –  from the gigantic westerns like BBC and The New York Times, to the local media of all five continents. This experience challenges not only journalists to deal with UN proceedings, but intends to show participants how important the media is to international affairs, bringing students to participate in a media-government relationship: its problems, clashes maneuvers and partnerships.
        </p>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-ip-low" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-oea-high" />
    <linearGradient id="gradient-ip-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#ed6a1f" />
          <stop offset="100%" stop-color="#ee7028" />
    </linearGradient>
    <linearGradient id="gradient-oea-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#622b5a" />
          <stop offset="100%" stop-color="#692e60" />
    </linearGradient>
</svg>

<section class="oea">
    <article class="container">
        <h2 class="article-title">Organization of the<br/>American States<br/>General Assembly</h2>
        <p class="article-description article-committee">
            Founded in 1948, the Organization of American States (OAS) is one of the most important and oldest international organisms in the world. Composed by 35 independent States from the Americas, today the OAS constitutes a main governmental forum on political, legal and social issues in the hemisphere as the only regional organization that puts together all the countries in the American continent. Created to provide to all member states “an order of peace and justice, promoting its solidarity, intensifying its collaboration and defend its sovereignty, its territorial integrity and its independency” (OAS, 1967), the Organization is based on four main values: democracy, human rights, security and development. Aiming to discuss points that concern the region, the Organization is divided in many committees. The General Assembly represents its main debate arena and, therefore, the body which will be brought by XIV UFRGSMUN. Getting together in annual meetings, the Assembly is responsible for determining OAS’ methods, policies, actions and mandate of the Organization within the State members and the rest of the world.
        </p>
        <?php foreach ($oea as $button => $value) :?>
                <button class="button" type="button" data-toggle="modal" data-target="#<?php echo 'oea' . $button ?>"><?php echo $value['name'] ?></button>
                <div class="modal fade" id="<?php echo 'oea' . $button ?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-wrap">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modal-delimiter">
                                    <h2 class="topic-committee"><?php echo  'OEA - ' . $value['name']?></h2>
                                    <h3 class="topic-title"><?php echo $value['title']?></h3>
                                    <p class="topic-text"><?php echo $value['text']?></p>
                                    <p class="topic-references">References:<br/><?php echo $value['refs']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-oea-low"  />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-au-high" />
    <linearGradient id="gradient-oea-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#a24794" />
          <stop offset="100%" stop-color="#a94a9b" />
    </linearGradient>
    <linearGradient id="gradient-au-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#27692b" />
          <stop offset="100%" stop-color="#29712e" />
    </linearGradient>
</svg>

<section class="au">
    <article class="container">
        <h2 class="article-title">Peace and Security Council<br/>of the African Union</h2>
        <p class="article-description article-committee">
            The African Union (AU), established in 2002, originates from the Organization of African Unity, a regional body that emerged at the end of European domination period on the continent in an attempt to provide political stability to the new countries that were part then the International system. The weakness of the institution, however, made it necessary to create a new organism. Thus arose the African Union, which aims to promote cooperation on security issues for achieving African development in the social, political, economic and cultural. Bringing a new mindset on the part of members, the AU is working on trying to decrease increasingly, foreign interventions in the internal affairs to the mainland.<br/>
            The Peace and Security Council (PSC) was established in December 26, 2003, after being ratified by the required majority of the organisation’s Member States. The agency has fifteen members, all rotating and elected by the African Union General Assembly, but with different mandates. Five of these members compete for a three-years term, while the other ten, interchangeably, are elected for two-year terms. Although be reflected in United Nations Security Council, in the PSC none of the board members have veto power, making the body more democratic than the one who inspired African Union.<br/>
            As its name suggests, the Council for Peace and Security was created in order to maintain the stability of the continent. In this sense, this is the body responsible for analyzing the need and particular case, to approve the deployment of peacekeeping missions or rapid interventions in member countries that are experiencing civil conflict, as they are confirmed cases of genocide, war crimes or crimes against humanity. These peacekeeping missions spearheaded by the African Union, together with UN troops, have secured a strong role of front organization to regional problems, so that goes in the right direction for the gradual elimination of external influence on the continent.
        </p>
        <?php foreach ($au as $button => $value) :?>
                <button class="button" type="button" data-toggle="modal" data-target="#<?php echo 'au' . $button ?>"><?php echo $value['name'] ?></button>
                <div class="modal fade" id="<?php echo 'au' . $button ?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-wrap">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modal-delimiter">
                                    <h2 class="topic-committee"><?php echo  'AU - ' . $value['name']?></h2>
                                    <h3 class="topic-title"><?php echo $value['title']?></h3>
                                    <p class="topic-text"><?php echo $value['text']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-au-low" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-unea-high" />
    <linearGradient id="gradient-au-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#3fad46" />
          <stop offset="100%" stop-color="#42b449" />
    </linearGradient>
    <linearGradient id="gradient-unea-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#6b7423" />
          <stop offset="100%" stop-color="#737c25" />
    </linearGradient>
</svg>

<section class="unea">
    <article class="container">
        <h2 class="article-title">UNITED NATIONS<br/>ENVIRONMENT ASSEMBLY</h2>
        <p class="article-description article-committee">
            Created in 2013, the United Nations Environment Assembly (UNEA) is symbol of the growing importance which is given environment related issues in the United Nations’ scope. In March 2013, in its 67th General Assembly, the United Nations (UN) changed the name of the General Council of the United Nations Environment Programme (UNEP) to UNEA. The change, away from being symbolic, reflects the elevation of the status of UNEP, which now has universal membership in its deliberations, taking place at UNEA, in opposition to the antique General Council’s 58 members. In other words, the advent of UNEA represents the creation of a high level ministerial forum to the governance of environmental issues in the UN system.<br/>
            Biennial, UNEA is the platform which defines environmental policies of global reach. Its first session, realized between June 23rd and 27th of 2014, at UNEP’s headquarters in Nairobi, UNEA adopted sixteen decision and one resolution. Despite they are not binding, the documents adopted by UNEA – which can be decision or resolutions – represent the political consensus among the members of the United Nations and guide the debate and the technical initiatives adopted by the UN in environmental issues, especially the ones arranged by UNEP. In 2016, UNEA will gather for the second time.
        </p>
        <?php foreach ($unea as $button => $value) :?>
                <button class="button" type="button" data-toggle="modal" data-target="#<?php echo 'unea' . $button ?>"><?php echo $value['name'] ?></button>
                <div class="modal fade" id="<?php echo 'unea' . $button ?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-wrap">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modal-delimiter">
                                    <h2 class="topic-committee"><?php echo  'UNEA - ' . $value['name']?></h2>
                                    <h3 class="topic-title"><?php echo $value['title']?></h3>
                                    <p class="topic-text"><?php echo $value['text']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </article>
</section>


<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L100,100 L0,0" class="diagonal-unea-low" />
    <path d="M0,0 L100,100 L0,100 L0,0" class="diagonal-unsc-high" />
    <linearGradient id="gradient-unea-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#adbb38" />
          <stop offset="100%" stop-color="#b4c33a" />
    </linearGradient>
    <linearGradient id="gradient-unsc-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#2b4d6c" />
          <stop offset="100%" stop-color="#2e5273" />
    </linearGradient>
</svg>

<section class="unsc">
    <article class="container">
        <h2 class="article-title">UNITED NATIONS<br/>SECURITY COUNCIL</h2>
        <p class="article-description article-committee">
            The UN Security Council is the primary body of the United Nations for maintaining international peace and security. One of the main characteristics of the UNSC is that it is the only committee whose resolutions are binding upon all member states, whether members of the UNSC or not. Moreover, it is also in the Council’s mandate the right to authorize the use of force through peacekeeping operations or military coalitions and, also, to impose economic and military sanctions - but always as a last resort. Therefore, the UNSC’s first actions regarding a threat to international peace and security is always to recommend the parties to try and reach a peaceful solution. It may also help ceasing of the dispute by investigating or mediating the conflict, through special envoys and the installment of political missions. This committee is, then, essential for maintaining international peace and bears the responsibility of saving succeeding generations from the scourge of war—the main goal of the United Nations. Its relevance goes way beyond security and geopolitics, because its decision have effects on the populations directly involved in the conflicts it strives to solve.<br/>
            The UNSC is formed by fifteen members, of which five are permanent and ten are selected by the General Assembly for two year terms. The five permanent members of the Security Council are China, France, Russian Federation, United Kingdom and United States, and they hold what is commonly known as “veto power” - if any of them opposes a resolution, it will automatically fail. Current temporary members of the UNSC are Angola, Egypt, Japan, Malaysia, New Zealand, Senegal, Spain, Ukraine, Uruguay and Venezuela.
        </p>
        <?php foreach ($unsc as $button => $value) :?>
                <button class="button" type="button" data-toggle="modal" data-target="#<?php echo 'unsc' . $button ?>"><?php echo $value['name'] ?></button>
                <div class="modal fade" id="<?php echo 'unsc' . $button ?>" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-wrap">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body modal-delimiter">
                                    <h2 class="topic-committee"><?php echo  'UNSC - ' . $value['name']?></h2>
                                    <h3 class="topic-title"><?php echo $value['title']?></h3>
                                    <p class="topic-text"><?php echo $value['text']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>
    </article>
</section>
