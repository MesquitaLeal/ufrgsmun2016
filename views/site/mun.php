<div class="container">
    <header>
        <h1 class="header-title mun-title"><?= Yii::t('app', 'the mun')?></h1>
        <p class="header-subtitle"><?= Yii::t('app', 'Do you want to know a little more about<br/>UFRGSMUN 2016? Then just continue scrolling.')?></p>
        <span class="arrow"></span>
    </header>
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-brown" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-location-high" style="fill: url(#gradient-location-high)" />
    <linearGradient id="gradient-location-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#60175e" />
          <stop offset="100%" stop-color="#681966" />
    </linearGradient>
</svg>

<section class="location">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Location')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'UFRGSMUN is going to to take place once again at Plaza São Rafael Hotel. It is one of the most famous hotels of Porto Alegre, due to its high quality services and room diversity for events, such as expositions, conferences and weddings. Because of that it offers an appropriate environment to host UFRGSMUN.')?>
        </p>
        <button class="button" type="button" data-toggle="modal" data-target="#modal-hotel">Hotel</button>
        <div class="modal fade" id="modal-hotel" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'Hotel')?></h2>
                            <h3 class="topic-title">Plaza São Rafael</h3>
                            <p class="modal-text"><?= Yii::t('app', 'Plaza São Rafael is well located in downtown Porto Alegre, being 15 minutes distant to the Salgado Filho International Airport and 5 to the Bus Station. It is near to commercial areas, shopping centres and restaurants, in a walking distance to the financial and administrative centers of both the city and the State, to the Federal University of Rio Grande do Sul (UFRGS) and to many of the most famous tourist spots of the city. The hotel’s localization will allow delegates to explore Porto Alegre and discover its best. Furthermore, being in the heart of the downtown area, Plaza São Rafael is also convenient for delegates who reside in Porto Alegre.')?></p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6908.650112077271!2d-51.221454!3d-30.027531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1f55e402f24baf71!2sPlaza+S%C3%A3o+Rafael+Hotel!5e0!3m2!1spt-BR!2sus!4v1465018592524" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="button" type="button" data-toggle="modal" data-target="#modal-city"><?= Yii::t('app', 'City')?></button>
        <div class="modal fade" id="modal-city" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'City')?></h2>
                            <h3 class="topic-title">Porto Alegre</h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Gathering the intense rhythm of a metropolis with the serene habits of a small town, Porto Alegre is a multicultural city that offers a wide range of cultural options, besides its well-known gastronomic and shopping routes.<br/>Some of Porto Alegre’s greatest attractions are the “Historical Downtown”, which houses the Metropolitan Cathedral, the Piratini Palace and the São Pedro Theatre; and the famous sunset by the Guaíba lake shore, the most romantic postcard of the capital. Furthermore, delegates at UFRGSMUN will be able to enjoy the moment of cultural turbulence brought by the traditional Book Fair of Porto Alegre, the largest open-air book fair in the American continent, the 60th edition of which is expected to bring over 2 million visitors to the city in November.<br/>For all that, Porto Alegre is a city to visit, to live in, to admire and to love. We hope you, UFRGSMUNers, feel very welcome in our city and enjoy the very best of it.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" style="fill: url(#gradient-location-low)" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="schedule-diagonal"/>
    <linearGradient id="gradient-location-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#7a267d" />
          <stop offset="100%" stop-color="#852885" />
    </linearGradient>
</svg>

<section class="schedule right-position">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'Schedules')?></h2>
        <p class="article-description">
            <?= Yii::t('app', 'We have planned a lot of activities, so you can enjoy every minute of UFRGSMUN 2016. Check out our tentative schedule!')?>
        </p>
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#modal-schedule"><?= Yii::t('app', 'Schedules')?></button>
        <div class="modal fade" id="modal-schedule" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'Schedules')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Wednesday (November 2nd)')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', '10:00 — 12:00 Cultural Tour <br/>10:30 — 14:00 Registration at Plaza São Rafael <br/>14:00 — 16:30 Revision of the Rules <br/>17:15 — 18:15 Opening Ceremony<br/>18:15 — 19:00 Opening Cocktail<br/>19:30 — 23:00 Happy Hour')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Thursday (November 3th)')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', '09:00 — 12:30 1st Session <br/>14:00 — 16:30 2nd Session <br/>16:30 — 17:00 Coffee Break <br/>17:00 — 19:00 3rd Session <br/>19:30 — 21:45 Committee Dinners <br/>22:00 — 00:30 Talent Show')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Friday (November 4th)')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', '08:30 — 09:30 Head Delegates Meeting<br/>09:30 — 12:30 4th Session <br/>14:00 — 16:30 5th Session<br/>16:30 — 17:00 Coffee Break <br/>17:00 — 19:30 6th Session <br/>22:30 — 04:00 UFRGSMUN’s Costume Party')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Saturday (November 5th)')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', '13:30 — 16:00 7th Session <br/>16:00 — 16:30 Coffee Break <br/>16:30 — 18:45 8th Session <br/>19:30 — 00:30 Barbecue and UFRGSMUN’s Soccer Cup')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Sunday (November 6th)')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', '09:30 — 10:30 Head Delegates Meeting<br/>10:30 — 12:30 9th Session <br/>14:00 — 16:00 10th Session<br/>17:30 — 19:00 Closing Ceremony<br/>20:00 — 01:30 Farewell Party')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L100,100 L0,0" class="schedule-diagonal" />
    <path d="M0,0 L0,100 L100,100 L0,0" style="fill: url(#gradient-policies-high)"/>
    <linearGradient id="gradient-policies-high" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#611331" />
          <stop offset="100%" stop-color="#911a38" />
    </linearGradient>
</svg>

<section class="policies">
    <article class="container">
        <h2 class="article-title"><?= Yii::t('app', 'General Policies')?></h2>
        <!--<p class="article-description">Do you want to know the number of representatives a delegation can have? Or how do you get the certificate of participation after the end of the event? Maybe you are in doubt about the dress code... Well, the answer to these questions and many others are in our general policies. Take a look!</p>-->
        <p class="article-description"><?= Yii::t('app', 'Every UFRGSMUN participant ought to read these policies in their entirety and abide to them during the conference. Delegates are also expected to abide by all local laws and venue-specific regulations while at UFRGSMUN 2016.')?></p>
        <button class="button" type="button" data-toggle="modal" data-target="#modal-before"><?= Yii::t('app', 'Before')?></button>
        <button class="button" type="button" data-toggle="modal" data-target="#modal-during"><?= Yii::t('app', 'During')?></button>
        <button class="button" type="button" data-toggle="modal" data-target="#modal-other"><?= Yii::t('app', 'Other')?></button>
        <div class="modal fade" id="modal-before" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'General Policies')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Delegations')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Delegations must be composed from 1 (one) up to 20 (twenty) delegates. The number of representatives in a delegation must be equivalent to the number of spots requested upon registration.<br/>NOTE: registrations for the International Court of Justice and International Press will be made separately. ICJ representatives present their personal position on the topics under discussion and the International Press requires a media vehicle to be chosen previously.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Head delegates')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Each delegation is required to have a head delegate, who is a student on the delegation (this does not apply to single or individual delegates, who act as head delegates automatically). The head delegate will be the primary liaison for UFRGSMUN updates and administrative emails from the Secretariat. Head delegates will also attend the Head Delegate Meetings during the conference where the Secretariat will provide updates about the event and discuss how is it going so far receiving comments, criticisms and suggestions.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Country Assignments')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Country assignments will take place after the closure of the first step for registration (Form A) on September 19th and will be made available by October 1st. The registration fee will not be refunded even if a delegation does not accept its country assignment. Delegations, especially the Head Delegate, should pay close attention to the Country/Committee Matrix which lists which countries and actors are represented in each committee. Delegates from different universities representing the same country on different committees do not have to confer when representing national policies, but are advised to do so.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The UFRGSMUN Secretariat reserves the right to remove spots from an already assigned country in the event that the delegation fails to fill all the assigned spots. Delegations are required to assign at least one delegate to all designated committees (i.e.: if a delegate cannot attend conference, another delegate from the same school in a double-delegate committee will be required to take up the open spot).')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The Secretariat also reserves the right to assign delegations to countries which were not previously listed on the Country/Committee Matrix in extraordinary cases.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'NOTE: Submitting a country preference is not a guarantee to receiving this country assignment, and all decisions of the UFRGSMUN Secretariat with regard to country assignments are final.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Delegate fee')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'A fee per person of R$ 140 in full amount or R$ 160 divided in two installments applies in order to participate in the conference. Head delegates will have the chance to choose in the registration form whether their delegations will pay their corresponding delegate fees in two installments or in full amount. The payment method chosen necessarily applies to all members of your delegation. Head delegates are responsible for gathering the money of their delegations and sending the payment to UFRGSMUN.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'UFRGSMUN grants exemption of registration fee for those who fit the established requirements. The head delegate must aware the Secretariat if there is anyone in the delegation that is beneficiary during the fill of Form B.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Official Accommodation')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Participants are responsible for their own accommodation arrangements. UFRGSMUN is not liable for any room booking or commitment made by participants with any hotels and hostels in Porto Alegre.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Spaces at the official hotel are limited and will be filled on a first-come, first-served basis. If participants do not manage to get a spot at our official hotels and/or hostels, it is their sole responsibility to look for another accommodation option on their own. Costs may be considerably higher. UFRGSMUN is neither liable for the additional costs incurred nor will it refund registration fees in case of conference withdrawal.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Furthermore, we also offer the opportunity of staying in the house of one of the staff members. This free accommodation is very limited and cannot be guaranteed to everyone, thus it is priority to those who had the delegate fee exempted, but we will do our best to allocate those interests.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Refunds')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Registration fees are non-refundable.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Special Circumstances')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'If meeting the requirements for payment is impossible for any reason, please contact UFRGSMUN staff as soon as it becomes evident that the requirements will not be fulfilled. The Secretariat is available to discuss any issue with the delegations.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-during" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'General Policies')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Dress code')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'As at every UN conference, in order to keep the integrity of the event, all delegates at UFRGSMUN are required to observe a western business attire, or national equivalent. It is not allowed item of clothing such as flip flops and bermuda. However, the participants outfit do not have to follow a male and female standard. We want you to express your identity without being restrained by the society stereotypes.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Transportation')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'UFRGSMUN’s official transportation has a tight schedule. Delegates are therefore expected to be punctual in order to make use of it. The drivers are not going to wait for late delegates and neither turning back to pick up someone who was late. In such cases, the delegates will have to go to the venues at their own expenses.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Suspension Policy')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'In order to maintain order at the conference as well as our relationship with our venue and social events hosts, our policy requires that any delegate violating the following rules will be subject to an immediate suspension from UFRGSMUN 2016.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Alcohol and Drug Policy: Only those delegates age 18 or older may consume alcohol in Brazil. Open containers of alcohol may not be carried in the conference venue. Furthermore, delegates found possessing or using illicit drugs, as defined by local federal law, besides being immediately suspended from UFRGSMUN 2016, may be held criminally liable.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Smoking Policy: Porto Alegre’s local regulations prohibit smoking indoors in public spaces. Delegates will not be permitted to smoke inside the conference centre or at social event venues.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Valuables')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'UFRGSMUN 2016, conference and social events venues are not responsible for belongings left in committee rooms, social events venues or buses. However, if there is any missing object, the UFRGSMUN staff will help in any way possible. Moreover, if a delegate needs assistance in keeping an object safe, he/she should contact the administrative staff, which will be happy to help.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Committee Session Policy')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Delegates are expected to be in their respective committee rooms during committee sessions. In order for delegates to leave their committee rooms for an extended period of time, both their Chair and their Head Delegate must be informed ahead of time. Otherwise, they will be considered missing the session.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Certificate of Participation')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The certificates of participation will be sent by e-mail to the head delegate few days after the end of the event. Delegates have to be present in at least 75% of all committee sessions in order to receive it.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-other" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee"><?= Yii::t('app', 'General Policies')?></h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Behavior Police')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The Secretariat reserves the right to immediately expel delegates from both the conference and the conference centre due to unacceptable behavior. Serious infractions on the part of even a single delegate may require the suspension without refund of the individual involved and his or her delegation from the conference. The Secretariat reserves the right to define appropriate conference behavior and is particularly sensitive to issues involving displays of disrespect and violence to other delegates, UFRGSMUN staff, conference centre staff and social events venues’ staff.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Exceptions')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The Secretary-General, Aline de Ávila Rocha and the Under-Secretary-General for Administrative Affairs, Amabilly Bonacina, are the only staff members empowered to grant exceptions to any conference policies or other general UFRGSMUN practices. Delegations will not be allowed to register at the conference until they have paid any outstanding debts to UFRGSMUN. If a delegate or delegation withdraws from the conference, the school is liable for all fees charged up to the date of withdrawal. Requests for exceptions must be submitted in writing to ufrgsmun@gmail.com.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'NOTE: UFRGSMUN is not liable for any erroneous statements made by other staff members regarding exceptions to fees or policies')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" style="fill: url(#gradient-policies-low)" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="schedule-diagonal"/>
    <linearGradient id="gradient-policies-low" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#611331" />
          <stop offset="100%" stop-color="#911a38" />
    </linearGradient>
</svg>

<section class="un4mun right-position">
    <article class="container">
        <h2 class="article-title">UN4MUN</h2>
        <p class="article-description">
            <?= Yii::t('app', 'We bring something new to the simulation this year: the application of UN4MUN rules together with other models in Brazil. Do you know what is UN4MUN and what will change this year?')?>
        </p>
        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#un4mun-what"><?= Yii::t('app', 'What is it?')?></button>
        <div class="modal fade" id="un4mun-what" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee">UN4MUN</h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'What is it?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'UN4MUN is a platform developed by the United Nations Department for Public Information (UNDPI) to provide a more accurate simulation of the United Nations organs, as well as a further understanding of its decision making process—as it follows the authentic procedure of UN General Assembly and UN Security Council. The project managed 3 global MUN conferences, in 2009, 2010 and 2011. Since then, the UNDPI began to spread this knowledge through a workshop for students and people involved in MUNs—participating or organizing—in general. The aim of these events is to “examine how Model UN simulations can more accurately capture the negotiation process as it commonly occurs at the UN” (UN4MUN 2015, online), turning traditional MUNs around the globe closer to the negotiations that happen in reality. In order to achieve this, the workshops promote “a basic understanding of the Rules of Procedure used by the General Assembly and Security Council, how decisions are made in these two Organs of the UN, what you need to know when drafting resolutions, the duties and responsibilities of the UN Secretariat, General Assembly and Security Council officials, the negotiation process that takes place during informal meetings, how consensus is achieved, how to chair meetings, the differences between UN4MUN and other MUN programmes and more”.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The last edition of the workshop occured in New York from 6 to 9 November, 2015. Even more MUNers took part in this edition—including Brazilian MUN organizers. Representing UFRGSMUN was Júlia Rosa, Secretary General of UFRGSMUN 2015, which transferred the knowledge she gained to the Secretariat of this year’s edition. In February, representatives of 8 MUNs of Brazil gathered at FACAMP (Faculdades de Campinas) to discuss the adoption of the new procedures learned in UN4MUN workshop. It was proposed the gradual adoption of the same general rules and new practices (more specifically in 3 years), which was called the “Campinas Agreement”.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#un4mun-consensus"><?= Yii::t('app', 'Consensus')?></button>
        <div class="modal fade" id="un4mun-consensus" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee">UN4MUN</h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Consensus')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'One of the most important aspects of the procedures in real negotiations is the consensus. According to Ronald Walker in its Manual for UN Delegates (2011), consensus is the most widely-used and universally-preferred mode of decision-making. Reaching a consensus means that the final decision was taken with no need of a voting process, because the negotiators agree on a certain proposal. Originally, in the UN, all decisions were made by voting. Since this practice caused dissatisfaction among developing countries (which had a lesser influence in the votings), this context changed and nowadays there is a strong preference inside the UN system for taking decisions by consensus. Even political bodies outside the UN system also adopt this preference.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'This does not mean, nevertheless, that consensus is mandatory. It may happen that there is an inability to reach consensus in a negotiation where positions are too far apart, or even when delegates do not manage to develop proposals on which consensus would be possible. This is one of the main reasons why conferences sometimes proceed to voting. However, as previously stated, consensus is a preferred mode of reaching a final decision, and building a consensus culture is one of the challenges the traditional MUNs have to face in order to get closer to reality, enhancing cooperation to reach solutions instead of inflexible discussions; a culture that certainly will also have impacts outside the simulation world as well.')?>
                            </p>
                            <h4 class="topic-item"><?= Yii::t('app', 'Why is seeking consensus important?')?></h4>
                            <p class="modal-text">
                                <?= Yii::t('app', 'When the goal is to find a solution that can count with the support of all parts involved, there is a bigger effort in reaching a common ground. This fact leads to more group work and less individual positions, which foments cooperation between the ones taking part in the decision-making and makes the solutions adopted more effective. In the UN, consensus is not agreeing with which and every word of the document of the final decision; it is rather the collective decision of approving something in group that does not go against the foreign policy of the countries represented. Moreover, reaching consensus is of utmost importance in the case of committees that do not have a mandatory character (e.g. UN General Assembly). In this cases, if all the delegations reach a consensus, the chances of putting the recommendations into practice at national levels are greater.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="button button-bigger" type="button" data-toggle="modal" data-target="#un4mun-rules"><?= Yii::t('app', 'Rules')?></button>
        <div class="modal fade" id="un4mun-rules" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee">UN4MUN</h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'Rules of procedure')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'As previously stated, some of the procedures generally adopted by many MUNs in Brazil will change according to what was learned in the last workshop promoted by UN4MUN. But why is this change important? The main reasons are: to get simulations closer to UN procedures (bearing in mind that this does not mean making MUNs look exactly like real negotiations—there are some crucial and obvious differences between them); to further understand the process of decision-making, granting a knowledge that can be better used in the future and; to easen the flow of the debate, since real discussions in the UN do not have all the motions, points and interruptions the traditional Models UN are used to adopt. In sum, the logic towards the adoption of UN4MUN procedures is to grant a better experience in terms of acquisition of knowledge about the real processes of negotiation in international organizations (especially the UN) and to foster the development of negotiation skills that can be more useful in a future career. Last but not least, the enhancement of the culture of consensus helps stimulating cooperation instead of competition among the delegates who take part in MUNs.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Let’s see some of the general UN4MUN procedures that will be adopted by UFRGSMUN this year:')?>
                            </p>
                            <h4 class="topic-item"><?= Yii::t('app', 'Uncomplicating the debate')?></h4>
                            <p class="modal-text">
                                <?= Yii::t('app', '“Are there any points or motions on the floor?” To more experienced MUNers: could you believe this sentence is not proferred in real negotiations? They are a lot more simple in comparison with the traditional MUN debates. For example: motions such as Tour de Table, Adjournment of the Session; Opening/Closing of the Speakers List; Closing of the Debate; Introduction of Draft Resolution and Introduction of Amendment simply does not exist in real UN negotiations. By their part, all points (Personal Priviledge, Order and Inquiry) will be from now on called Point of Order. These are all measures that aim at simplifying the debate.')?>
                            </p>
                            <h4 class="topic-item"><?= Yii::t('app', 'Position Paper vs. Country Report')?></h4>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The traditional Position Paper, which is written by the delegates before the simulation in order to clarify their position, will be substituted by the Country Report. This new procedure consists of answering to five given questions, as follows: 1) How does the theme of the agenda impacts your country?; 2) What actions were taken at national level or by organizations other than UN bodies to deal with the subject? Did they succeed?; 3) Did the country sign or ratify the main treaties or conventions on the subject?; 4) What are the main allies and rivals of the country in this subject?; 5) What possible solutions will your country defend during the simulation? The change of the procedure is useful for the following reasons: it makes all documents of positioning uniform; directs the delegates to give more direct and substantial information on the subject that will be discussed and; it contributes to the previous study of the foreign policy of the country that will be represented by the delegate.')?>
                            </p>
                            <h4 class="topic-item"><?= Yii::t('app', 'Forms of debate')?></h4>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Formal-formal: it is the debate conducted by the General Speakers List. Very used in the traditional MUNs, with the adoption of the new procedures it will only be used during the first day of discussions (2nd day of UFRGSMUN). A closed speakers list will be adopted: the delegates shall announce its will of being added to the list in the 1st day of the event.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Formal-informal: it is the debate widely known in MUNs as Moderated Caucus. In this method, delegates shall raise their plackards to show their will to speak. The Chair, thus, gives the floor to one of the delegations, which will have its time of speech controlled also by the Chair. All sessions of UFRGSMUN (except for the first, as already stated) will be based on this form of debate.')?>
                            </p>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Informal-informal: it is the debate widely known in the MUNs as the Unmoderated Caucus. The delegates are free to speak without necessity of moderation by the Chair. Even though this is the main form of debate of UN negotiations, in UFRGSMUN it will be only adopted when requested by the delegates, in order to render more fluidity to the discussions.')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="schedule-diagonal"  />
    <path d="M100,0 L0,100 L100,100 L100,0" style="fill: url(#gradient-faq-high)"/>
    <linearGradient id="gradient-faq-high" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#611331" />
          <stop offset="100%" stop-color="#911a38" />
    </linearGradient>
</svg>

<section class="policies">
    <article class="container">
        <h2 class="article-title">FAQ</h2>
        <p class="article-description">
            <?= Yii::t('app', 'Do you have any question about UFRGSMUN? Check here all you need to know to participate in this year\'s edition!')?>
        </p>
        <button class="button" type="button" data-toggle="modal" data-target="#faq"><?= Yii::t('app', 'FAQ')?></button>
        <div class="modal fade" id="faq" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h2 class="topic-committee">FAQ</h2>
                            <h3 class="topic-title"><?= Yii::t('app', 'What is UFRGSMUN?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Created in 2003, UFRGSMUN is a Model United Nations that has grown and is consolidated today as one of the most renowned and traditional MUNs of Brazil, being known as an event which joins academic and administrative excellence.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Who can apply?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'UFRGSMUN is an event for undergraduated and graduated students of any course and University of Brazil and the world.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'How can I apply?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'First of all, you need to create a delegation, that is a group with 1 up to 20 people that wants to participates. If you do not have a delegation, you can apply anyway choosing a country with only one vacancy or ask to be allocated to some delegation.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'How do my delegation choose the committee? And the representation?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'In the registration form, the delegation must send the preferences of committees and countries. The Secretariat will establish a deadline for the allocation of countries and sending representations to the delegation until one month before the UFRGSMUN.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'For whom the exemption of registration is valid?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'UFRGSMUN grants 10 (ten) exemptions from registration for students with low income. Registration for this modality will be released August 7th. Those who fit the requirements, in addition to the exemption from registration, have preference in solidary accommodation and pay half the value of the social package.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'What should I wear?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'All participants at UFRGSMUN are required to observe a western business attire, or national equivalent. However, the participants outfit do not have to follow a male and female standard. We want you to express your identity without being restrained by the society stereotypes.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'When will UFRGSMUN happen?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'From November 2nd to November 6th of 2016.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Where UFRGSMUN will happen?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The venue is the Hotel Plaza São Rafael, located in Porto Alegre, Rio Grande do Sul.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'How much cost the event?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The registrations costs R$140,00. If paid in two installments it costs R$160,00. The social events package costs R$75,00.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Is there any refund?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'The registration fees and the parties entrances are non-refundable.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Do I get a certificate?')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'UFRGSMUN provides a 60 hour certificate only for those who have 75% of presence.')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'Is there a official accomodation? ')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'UFRGSMUN close partnerships with hotels located near the event venue. Besides, we also can allocate few participants in our solidary accomodation. Such information will come soon!')?>
                            </p>
                            <h3 class="topic-title"><?= Yii::t('app', 'I still have doubts. How can I get further information? ')?></h3>
                            <p class="modal-text">
                                <?= Yii::t('app', 'Contact us by our Facebook page (facebook.com/ufrgsmun) or send us an e-mail to ufrgsmun@ufrgs.br or ufrgsmun@gmail.com')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </article>
</section>
