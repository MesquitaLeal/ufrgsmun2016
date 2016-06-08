<?php
include_once 'nav.php';
?>

<div class="container">
    <header>
        <h1 class="header-title">the mun</h1>
        <p class="header-subtitle">Do you want to know a little more about<br/>UFRGSMUN 2016? Then just continue scrolling.</p>
        <span class="arrow"></span>
    </header>
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" class="diagonal-brown" />
    <path d="M100,0 L0,100 L100,100 L100,0" class="diagonal-location-high" style="fill: url(#gradient-location-high)" />
    <linearGradient id="gradient-location-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#5d1123" />
          <stop offset="100%" stop-color="#661227" />
    </linearGradient>
</svg>

<section class="location">
    <article class="container">
        <h2 class="article-title">Location</h2>
        <p class="article-description">
            UFRGSMUN is going to to take place once again at Plaza São Rafael Hotel. It is one of the most famous hotels of Porto Alegre, due to its high quality services and room diversity for events, such as expositions, conferences and weddings. Because of that it offers an appropriate environment to host UFRGSMUN.
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
                            <h3 class="modal-title">Plaza São Rafael</h3>
                            <p class="modal-text">Plaza São Rafael is well located in downtown Porto Alegre, being 15 minutes distant to the Salgado Filho International Airport and 5 to the Bus Station. It is near to commercial areas, shopping centres and restaurants, in a walking distance to the financial and administrative centers of both the city and the State, to the Federal University of Rio Grande do Sul (UFRGS) and to many of the most famous tourist spots of the city. The hotel’s localization will allow delegates to explore Porto Alegre and discover its best. Furthermore, being in the heart of the downtown area, Plaza São Rafael is also convenient for delegates who reside in Porto Alegre.</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6908.650112077271!2d-51.221454!3d-30.027531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1f55e402f24baf71!2sPlaza+S%C3%A3o+Rafael+Hotel!5e0!3m2!1spt-BR!2sus!4v1465018592524" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="button" type="button" data-toggle="modal" data-target="#modal-city">City</button>
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
                            <h3 class="modal-title">Porto Alegre</h3>
                            <p class="modal-text">
                                Gathering the intense rhythm of a metropolis with the serene habits of a small town, Porto Alegre is a multicultural city that offers a wide range of cultural options, besides its well-known gastronomic and shopping routes.
                                <br/>Some of Porto Alegre’s greatest attractions are the “Historical Downtown”, which houses the Metropolitan Cathedral, the Piratini Palace and the São Pedro Theatre; and the famous sunset by the Guaíba lake shore, the most romantic postcard of the capital. Furthermore, delegates at UFRGSMUN will be able to enjoy the moment of cultural turbulence brought by the traditional Book Fair of Porto Alegre, the largest open-air book fair in the American continent, the 60th edition of which is expected to bring over 2 million visitors to the city in November.
                                <br/>For all that, Porto Alegre is a city to visit, to live in, to admire and to love. We hope you, UFRGSMUNers, feel very welcome in our city and enjoy the very best of it.
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
    <path d="M100,0 L0,100 L100,100 L100,0" style="fill: url(#gradient-schedule-high)"/>
    <linearGradient id="gradient-location-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#881834" />
          <stop offset="100%" stop-color="#911a37" />
    </linearGradient>
    <linearGradient id="gradient-schedule-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#927260" />
          <stop offset="100%" stop-color="#987764" />
    </linearGradient>
</svg>

<section class="schedule">
    <article class="container">
        <h2 class="article-title">Schedules</h2>
        <p class="article-description">
            We have planned a lot of activities, so you can enjoy every minute of UFRGSMUN 2016. Check out our tentative schedule!
        </p>
        <button class="button" type="button" data-toggle="modal" data-target="#modal-schedule">Schedule</button>
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
                            <h3 class="modal-title">Schedule</h3>
                            <h4 class="modal-subtitle">Wednesday (November 2nd) </h4>
                            <p class="modal-text">
                                10:00 — 12:00 Cultural Tour 
                                <br/>10:30 — 14:00 Registration at Plaza São Rafael 
                                <br/>14:00 — 16:30 Revision of the Rules 
                                <br/>17:15 — 18:15 Opening Ceremony
                                <br/>18:15 — 19:00 Opening Cocktail
                                <br/>19:30 — 23:00 Happy Hour
                            </p>
                            <h4 class="modal-subtitle">Thursday (November 3th) </h4>
                            <p class="modal-text">
                                09:00 — 12:30 1st Session 
                                <br/>14:00 — 16:30 2nd Session 
                                <br/>16:30 — 17:00 Coffee Break 
                                <br/>17:00 — 19:00 3rd Session 
                                <br/>19:30 — 21:45 Committee Dinners 
                                <br/>22:00 — 00:30 Talent Show
                            </p>
                            <h4 class="modal-subtitle">Friday (November 4th)</h4>
                            <p class="modal-text">
                                08:30 — 09:30 Head Delegates Meeting
                                <br/>09:30 — 12:30 4th Session 
                                <br/>14:00 — 16:30 5th Session
                                <br/>16:30 — 17:00 Coffee Break 
                                <br/>17:00 — 19:30 6th Session 
                                <br/>22:30 — 04:00 UFRGSMUN’s Costume Party
                            </p>
                            <h4 class="modal-subtitle">Saturday (November 5th) </h4>
                            <p class="modal-text">
                                13:30 — 16:00 7th Session 
                                <br/>16:00 — 16:30 Coffee Break 
                                <br/>16:30 — 18:45 8th Session 
                                <br/>19:30 — 00:30 Barbecue and UFRGSMUN’s Soccer Cup
                            </p>
                            <h4 class="modal-subtitle">Sunday (November 6th)</h4>
                            <p class="modal-text">
                                09:30 — 10:30 Head Delegates Meeting
                                <br/>10:30 — 12:30 9th Session 
                                <br/>14:00 — 16:00 10th Session
                                <br/>17:30 — 19:00 Closing Ceremony
                                <br/>20:00 — 01:30 Farewell Party
                            </p>
                        </div>
                    </div>
                <br/></div>
            </div>
        </div>
    </article>
</section>

<svg xmlns="http://www.w3.org/2000/svg" class="diagonal-section" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path d="M0,0 L100,0 L0,100 L0,0" style="fill: url(#gradient-schedule-low)" />
    <path d="M100,0 L0,100 L100,100 L100,0" style="fill: url(#gradient-policies-high)"/>
    <linearGradient id="gradient-schedule-low" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#a98d7c" />
          <stop offset="100%" stop-color="#ad9282" />
    </linearGradient>
    <linearGradient id="gradient-policies-high" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#561956" />
          <stop offset="100%" stop-color="#5e1b5e" />
    </linearGradient>
</svg>

<section class="policies">
    <br/><article class="container">
        <h2 class="article-title">General Policies</h2>
        <!--<p class="article-description">Do you want to know the number of representatives a delegation can have? Or how do you get the certificate of participation after the end of the event? Maybe you are in doubt about the dress code... Well, the answer to these questions and many others are in our general policies. Take a look!</p>-->
        <p class="article-description">Every UFRGSMUN participant ought to read these policies in their entirety and abide to them during the conference. Delegates are also expected to abide by all local laws and venue-specific regulations while at UFRGSMUN 2015.</p>
        <button class="button" type="button" data-toggle="modal" data-target="#modal-policies">Policies</button>
        <div class="modal fade" id="modal-policies" tabindex="-1" role="dialog" aria-labelledby="Menu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-wrap"<br/>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <br/><span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body modal-delimiter">
                            <h3 class="modal-title">General Policies</h3>
                            <h4 class="modal-subtitle">Dress code</h4>
                            <p class="modal-text">
                                <br/>As at every UN conference, in order to keep the integrity of the event, all delegates at UFRGSMUN are required to observe a western business attire, or national equivalent. It is not allowed item of clothing such as flip flops and bermuda. However, the participants outfit do not have to follow a male and female standard. We want you to express your identity without being restrained by the society stereotypes.
                            </p>
                            <h4 class="modal-subtitle">Delegations</h4>
                            <p class="modal-text">
                                Delegations must be composed from 1 (one) up to 20 (twenty) delegates. The number of representatives in a delegation must be equivalent to the number of spots requested upon registration.
                                <br/>NOTE: registrations for the International Court of Justice and International Press will be made separately. ICJ representatives present their personal position on the topics under discussion and the International Press requires a media vehicle to be chosen previously.
                            </p>
                            <h4 class="modal-subtitle">Head delegates</h4>
                            <p class="modal-text">
                                Each delegation is required to have a head delegate, who is a student on the delegation (this does not apply to single or individual delegates, who act as head delegates automatically). The head delegate will be the primary liaison for UFRGSMUN updates and administrative emails from the Secretariat. Head delegates will also attend the Head Delegate Meetings during the conference where the Secretariat will provide updates about the event and discuss how is it going so far receiving comments, criticisms and suggestions.
                            </p>
                            <h4 class="modal-subtitle">Country Assignments</h4>
                            <p class="modal-text">
                                Country assignments will take place after the closure of the first step for registration (Form A) on September 17th and will be made available by September 25th. The registration fee will not be refunded even if a delegation does not accept its country assignment. Delegations, especially the Head Delegate, should pay close attention to the Country/Committee Matrix which lists which countries and actors are represented in each committee. Delegates from different universities representing the same country on different committees do not have to confer when representing national policies, but are advised to do so.
                                <br/>The UFRGSMUN Secretariat reserves the right to remove spots from an already assigned country in the event that the delegation fails to fill all the assigned spots. Delegations are required to assign at least one delegate to all designated committees (i.e.: if a delegate cannot attend conference, another delegate from the same school in a double-delegate committee will be required to take up the open spot).
                                <br/>The Secretariat also reserves the right to assign delegations to countries which were not previously listed on the Country/Committee Matrix in extraordinary cases.
                                <br/>NOTE: Submitting a country preference is not a guarantee to receiving this country assignment, and all decisions of the UFRGSMUN Secretariat with regard to country assignments are final.
                            </p>
                            <h4 class="modal-subtitle">Delegate fee</h4>
                            <p class="modal-text">
                                A fee per person of R$ 130 in full amount or R$ 140 divided in two installments applies in order to participate in the conference. Head delegates will have the chance to choose in the registration form whether their delegations will pay their corresponding delegate fees in two installments or in full amount. The payment method chosen necessarily applies to all members of your delegation.
                                <br/>Head delegates are responsible for gathering the money of their delegations and sending the payment to UFRGSMUN.
                                <br/>UFRGSMUN grants exemption of registration fee for those who fit the established requirements. The head delegate must aware the Secretariat if there is anyone in the delegation that is beneficiary during the fill of Form B.
                            </p>
                            <h4 class="modal-subtitle">Special Circumstances</h4>
                            <p class="modal-text">
                                If meeting the requirements for payment is impossible for any reason, please contact UFRGSMUN staff as soon as it becomes evident that the requirements will not be fulfilled. The Secretariat is available to discuss any issue with the delegations.
                            </p>
                            <h4 class="modal-subtitle">Refunds</h4>
                            <p class="modal-text">
                                Registration fees are non-refundable.
                            </p>
                            <h4 class="modal-subtitle">Suspension Policy</h4>
                            <p class="modal-text">
                                In order to maintain order at the conference as well as our relationship with our venue and social events hosts, our policy requires that any delegate violating the following rules will be subject to an immediate suspension from UFRGSMUN 2016.
                                <br/>Alcohol and Drug Policy: Only those delegates age 18 or older may consume alcohol in Brazil. Open containers of alcohol may not be carried in the conference venue. Furthermore, delegates found possessing or using illicit drugs, as defined by local federal law, besides being immediately suspended from UFRGSMUN 2016, may be held criminally liable.
                                <br/>Smoking Policy: Porto Alegre’s local regulations prohibit smoking indoors in public spaces. Delegates will not be permitted to smoke inside the conference centre or at social event venues.
                            </p>
                            <h4 class="modal-subtitle">Valuables</h4>
                            <p class="modal-text">
                                UFRGSMUN 2016, conference and social events venues are not responsible for belongings left in committee rooms, social events venues or buses. However, if there is any missing object, the UFRGSMUN staff will help in any way possible. Moreover, if a delegate needs assistance in keeping an object safe, he/she should contact the administrative staff, which will be happy to help.
                            </p>
                            <h4 class="modal-subtitle">Committee Session Policy</h4>
                            <p class="modal-text">
                                Delegates are expected to be in their respective committee rooms during committee sessions. In order for delegates to leave their committee rooms for an extended period of time, both their Chair and their Head Delegate must be informed ahead of time. Otherwise, they will be considered missing the session.
                            </p>
                            <h4 class="modal-subtitle">Certificate of Participation</h4>
                            <p class="modal-text">
                                The certificates of participation will be sent by e-mail to the head delegate few days after the end of the event. Delegates have to be present in at least 75% of all committee sessions in order to receive it.
                            </p>
                            <h4 class="modal-subtitle">Transportation</h4>
                            <p class="modal-text">
                                UFRGSMUN’s official transportation has a tight schedule. Delegates are therefore expected to be punctual in order to make use of it. The drivers are not going to wait for late delegates and neither turning back to pick up someone who was late. In such cases, the delegates will have to go to the venues at their own expenses.
                            </p>
                            <h4 class="modal-subtitle">Official Accommodation</h4>
                            <p class="modal-text">
                                Participants are responsible for their own accommodation arrangements. UFRGSMUN is not liable for any room booking or commitment made by participants with any hotels and hostels in Porto Alegre.
                                <br/>Spaces at the official hotel are limited and will be filled on a first-come, first-served basis. If participants do not manage to get a spot at our official hotels and/or hostels, it is their sole responsibility to look for another accommodation option on their own. Costs may be considerably higher. UFRGSMUN is neither liable for the additional costs incurred nor will it refund registration fees in case of conference withdrawal.
                                <br/>Furthermore, we also offer the opportunity of staying in the house of one of the staff members. This free accommodation is very limited and cannot be guaranteed to everyone, thus it is priority to those who had the delegate fee exempted, but we will do our best to allocate those interests.
                            </p>
                            <h4 class="modal-subtitle">Other Rules</h4>
                            <p class="modal-text">
                                The Secretariat reserves the right to immediately expel delegates from both the conference and the conference centre due to unacceptable behavior. Serious infractions on the part of even a single delegate may require the suspension without refund of the individual involved and his or her delegation from the conference. The Secretariat reserves the right to define appropriate conference behavior and is particularly sensitive to issues involving displays of disrespect and violence to other delegates, UFRGSMUN staff, conference centre staff and social events venues’ staff.
                            </p>
                            <h4 class="modal-subtitle">Exceptions</h4>
                            <p class="modal-text">
                                The Secretary-General, Aline de Ávila Rocha and the Under-Secretary-General for Administrative Affairs, Amabilly Bonacina, are the only staff members empowered to grant exceptions to any conference policies or other general UFRGSMUN practices. Delegations will not be allowed to register at the conference until they have paid any outstanding debts to UFRGSMUN. If a delegate or delegation withdraws from the conference, the school is liable for all fees charged up to the date of withdrawal. Requests for exceptions must be submitted in writing to ufrgsmun@gmail.com.
                                <br/>NOTE: UFRGSMUN is not liable for any erroneous statements made by other staff members regarding exceptions to fees or policies
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
