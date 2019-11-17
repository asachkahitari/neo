<!DOCTYPE html>
<html lang="en" class="no-js">
    {{> head }}

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <nav class="s-header-v2__navbar">
                <div class="container g-display-table--lg">
                    <!-- Navbar Row -->
                    <div class="s-header-v2__navbar-row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="s-header-v2__navbar-col">
                            <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                <span class="s-header-v2__toggle-icon-bar"></span>
                            </button>
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                            <!-- Logo -->
                            <div class="s-header-v2__logo">
                                <a href="/" class="s-header-v2__logo-link">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="static/img/up.png" alt="Consortium" height="50">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="static/img/up.png" alt="StartUp Conclave" height="60">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <li class="s-header-v2__nav-item"><a href="/" class="s-header-v2__nav-link">Home</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/logout" class="s-header-v2__nav-link">Logout</a></li>
                                </ul>
                            </div>
                            <!-- End Nav Menu -->
                        </div>
                    </div>
                    <!-- End Navbar Row -->
                </div>
            </nav>
            <!-- End Navbar -->
        </header>
        <!--========== END HEADER ==========-->
        <!--========== PROMO BLOCK ==========-->




        <div style="background-color:#000;">

            <div id="front" style="background: #000; display: block;" class="g-padding-y-100--lg g-padding-y-60--sm g-padding-y-80--md  g-padding-y-40--xs">
                <div style="background: #bd2026ad;" class="g-padding-x-100--lg g-padding-x-60--md g-padding-x-40--sm g-padding-x-20--xs g-text-center--xs g-padding-y-40--xs">
                    <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Dashboard</h1>

                    <div id="round1" class="g-padding-x-100--md g-padding-x-120--lg g-padding-y-30--xs g-padding-x-40 g-padding-x-15--xs">
                      {{# if session.round3}}
                      <p class="g-font-size-30--xs g-font-size-30--md g-color--white g-margin-b-5--xs">Welcome To Round 3</p>
                          <h3 class="g-font-size-30--xs g-font-size-40--lg g-color--white g-margin-b-5--xs"><span class="g-font-size-20--xs g-font-size-20--lg">{{session.teamname}}: {{session.college}}</span></h3>
                      <p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">Round 3 is the pitching round wherein you have to pitch your startup in front of an investor panel.</p>


                      <p class=" g-font-size-22--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm"><b>{{session.confirm}}</b></p>

                      <br>
                      <span class="g-display-block--xs g-display-inline-block--sm">
                          <a id="ques_button"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs g-margin-r-10--xs g-margin-l-10--xs g-margin-b-10--xs">Your Questionnaire</button></a>
                          <a id="round3_button"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs g-margin-r-10--xs g-margin-l-10--xs g-margin-b-10--xs">Proceed to Round 3<span class="ti-arrow-right"></span></button></a>
                      </span>

                        <!-- <span class="g-display-block--xs g-display-inline-block--sm">
                            <a id="round3_button"><button class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs g-margin-r-10--xs g-margin-l-10--xs g-margin-b-10--xs">Your Accomodation details  <span class="ti-arrow-right"></span></button></a>
                        </span> -->
                          <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Welcome To Round 3</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>Round 3 is the pitching round wherein you have to pitch your startup in front of an investor panel.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>

                              </div>
                            </div>
                      {{ else if session.round2}}
                            <p class="g-font-size-30--xs g-font-size-30--md g-color--white g-margin-b-5--xs">Not Selected For Round 3</p>

                        <h3 class="g-font-size-30--xs g-font-size-40--lg g-color--white g-margin-b-5--xs"><span class="g-font-size-20--xs g-font-size-20--lg">{{session.teamname}}: {{session.college}}</span></h3>

                            <!--<p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">-->
                                <!--Mentor: <b>Your Team's Mentor Name will be display here.</b>-->
                            <!--</p>-->
                            <p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">Round 2 is our Business Plan Round. In this round, you will create a B-plan which will map the startup's future course of action. Also, upload a video of your elevator pitch which will be of maximum one minute duration.</p>

                        <br>
                        <span class="g-display-block--xs g-display-inline-block--sm">
                            <a id="ques_button"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs g-margin-r-10--xs g-margin-l-10--xs g-margin-b-10--xs">Your Questionnaire</button></a>
                            <!--<a id="round2_button"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs g-margin-r-10--xs g-margin-l-10--xs g-margin-b-10--xs">Proceed to Round 2  <span class="ti-arrow-right"></span></button></a>-->
                        </span>
                        {{else}}
                            <p class="g-font-size-30--xs g-font-size-30--md g-color--white g-margin-b-5--xs">Not Selected For Round 2 {{session.round2}}</p>
                            <h3 class="g-font-size-30--xs g-font-size-40--lg g-color--white g-margin-b-5--xs"><span class="g-font-size-20--xs g-font-size-20--lg">{{session.teamname}}: {{session.college}}</span></h3>

                            <!--<p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">-->
                                <!--This round commences with filling our questionnaire. Our experts will analyze your responses and will shortlist teams for second round. Be brief about your each and every response and make sure that the language is comprehensible.-->
                            <!--</p>-->
                            <p class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Learning resources are now available through the link below.</p>
                            <br>
                            <span class="g-display-block--xs g-display-inline-block--sm">
                                <a id="ques_button"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs g-margin-r-10--xs g-margin-l-10--xs g-margin-b-10--xs">Questionnaire</button></a>

                                <a href="https://drive.google.com/folderview?id=1ly0ad5bvcA4DKJlgApdRveILkyJyjTcZ" target="_blank"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs g-margin-b-10--xs">Learning Resources</button></a>
                            </span>

                        {{/if}}
                        <br>
                    </div>
                </div>
            </div>
            <div class="g-container--sm g-padding-y-80--xs g-padding-y-100--xs" id="round2" style="display: none; opacity: 0">
                <div id="rclose" style="text-align: center;cursor:pointer;"><i class="ti-close"></i></div>
                <div class="g-text-center--xs g-margin-b-20--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Round 2</h2>
                    <div style="padding-top:7em;padding-bottom:7em;">
                    <p class="g-font-size-30--xs g-font-size-30--md g-color--white g-margin-b-5--xs">Your Elevator Pitch</p><br/>
                    <p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">An elevator pitch is a short description of your idea, product or startup that will expain the entire concept in one minute.
                      <br/>You have to submit your Elevator Pitch till <b>22<sup>nd</sup> January 2019.</b>
                      <br/>Please submit your Elevator Pitch only in a <b>.mp4 format.</b>
                      <br/>The name of your video should be in this format: '<b>{{session.teamname}}_startupconclave.mp4</b>'.</p>
                    <span class="g-display-block--xs g-display-inline-block--sm">
                        <a href="https://www.dropbox.com/request/1kjVYSDi00oRYXoCIWWB" target="_blank"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs g-margin-b-10--xs">Submit Your Elevator Pitch</button></a>
                    </span>
                    </div>
                    <div>
                    <p class="g-font-size-30--xs g-font-size-30--md g-color--white g-margin-b-5--xs">Your B-Plan</p><br/>
                    <p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">A business plan is a document which maps the company's future course of action and projections.
                      <br/>You have to submit a Business Plan draft till <b>10<sup>th</sup> February 2019.</b>
                      <br/>You can take a reference from our <a href="https://docs.google.com/document/d/128cDrVhdIHAcJlp2txMLeu9xTnMDe7kWYBK1aowgBbU/edit?usp=sharing" target="_blank">Business Plan Template</a>.
                      <br/>Please submit your Business Plan document in <b>PDF format</b> only.
                      <br/>The name of your document should be '<b>{{session.teamname}}_startupconclave.pdf</b>'.</p>
                    <span class="g-display  -block--xs g-display-inline-block--sm">
                        <a href="https://www.dropbox.com/request/67JMUxhopLzI4qCMksSf" target="_blank"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs g-margin-b-10--xs">Submit Your Business Plan</button></a>
                    </span>
                    </div>
                </div>
            </div>

            <div class="g-container--md g-padding-y-80--xs g-padding-y-100--xs" id="round3" style="display: none; opacity: 0">
              <div id="r3close" style="text-align: center;cursor:pointer;"><i class="ti-close"></i></div>
              <div class="g-text-center--xs g-margin-b-10--xs">
                  <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Round 3</h2>

                  <p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">
                      <b>Congratulations on qualifying for the final round of StartUp Conclave. <br> You are now among the top 15 teams of 407 teams registered all over India!</b>
                  </p>

                  <iframe width="560" height="315" src="https://www.youtube.com/embed/1RMGk0R1dhg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  <div class="row">
                      <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm" style="padding-top:2em;padding-bottom:2em;">
                        <p class="g-font-size-30--xs g-font-size-30--md g-color--white g-margin-b-5--xs">General Details</p><br/>
                        <p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">
                            {{# if session.isNIT }}
                                Date: <b>9<sup>th</sup> March 2019</b><br>
                                Venue: <b>Auditorium, VNIT Nagpur</b><br>
                            {{else}}
                                Date: <b>10<sup>th</sup> March 2019</b><br>
                                Venue: <b>PAH, VNIT Nagpur</b><br>
                            {{/if}}
                            Time: <b>9:00 AM IST</b>

                        </p>
                      </div>
                      <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm" style="padding-top:2em;padding-bottom:2em;">
                        <p class="g-font-size-30--xs g-font-size-30--md g-color--white g-margin-b-5--xs">Your Pitch</p><br/>
                        <p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">Time allotted for your Pitch: <b> 7 minutes </b>
                            <br/>Q&A session with investors: <b>8 minutes </b><br>
                            You also have to prepare a presentation for your pitching session which you have to <b>submit 48 hrs prior to the start of the final round</b>. Changes according to your presentation will be suggested, before the start of the event.
                            <br>
                            Mail your ppt: <b>startupconclave@ecellvnit.org</b>
                        </p>

                      </div>
                      <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm" style="padding-top:2em;padding-bottom:2em;">
                        <p class="g-font-size-30--xs g-font-size-30--md g-color--white g-margin-b-5--xs">Accomodation</p><br/>
                        <p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">
                            The accommodation of <b>{{session.teamname}}</b> will be arranged by E-Cell VNIT at VNIT Nagpur from 8<sup>th</sup> March to 10<sup>th</sup> March 2019.<br>

                        </p>
                          {{# if session.isNIT }}
                          <a class="g-font-size-18--xs" target="_blank" href="https://drive.google.com/file/d/1AEr_1Ts2xn19-2f5civMlfAIg0AQYLUw/view?usp=sharing">Accommodation Policy</a>
                          {{else}}
                          <a class="g-font-size-18--xs" target="_blank" href="https://drive.google.com/file/d/1RlYFPNN18D4iuf8nKkoa7gZdtFM_3Fe3/view?usp=sharing">Accommodation Policy</a>
                          {{/if}}
                      </div>
                  </div>

                  <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Final Pitch Deck</h2>
                <p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">A pitch deck is a brief presentation, often created using PowerPoint, Keynote or Prezi, used to provide your audience with a quick overview of your business plan.<br/> You will use your pitch deck during face-to-face meetings with potential investors, customers, partners, and co-founders.<br>
                    Note: A workshop on '<b>How To Pitch</b>' will be conducted 5<sup>th</sup> March 2019 to refine your pitch decks.
                    <br>
                      <br/>You have to submit your Final Pitch Deck till <b>7<sup>th</sup> March 2019.</b>
                      <br/>Please submit your Elevator Pitch only in a <b>.pptx or .pdf format.</b>
                      <br/>The name of your video should be in this format: '<b>{{session.teamname}}_sc_final.pptx</b>'.</p>
                  </p>
                    <span class="g-display-block--xs g-display-inline-block--sm">
                        <a href="https://www.dropbox.com/request/wEgWvCaG23DBtJEVgF8z" target="_blank"><button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Final Submit</button></a>
                    </span>


                  <div class="g-margin-t-40--xs">


                <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Confirm Your Arrival</h2>
                  <p class=" g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">Last date to confirm your journey to VNIT Nagpur is <b>28th Feb 2019</b></p>
                      <style>
                          @media(min-width: 1024px) {
                                  form {
                                  width: 55rem !important;
                              }
                          }
                      </style>



              {{# if session.confirmed}}
                  <p class="g-font-size-18--xs g-color--white g-padding-y-20--lg g-padding-y-20--md g-padding-y-20--sm">You have already filled the details.</p>
              {{else}}
                <form class="center-block g-width-550--sm g-width-600--md " method="post" action="/confirm">
                    <div class="permanent-final">
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" disabled placeholder="* Team Name" value="{{session.teamname}}" name="teamname" id="team_name">
                            <style>
                                #team_name{
                                    background-color: transparent !important;
                                }
                            </style>
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* PNR Number (Train or Flight)" name="pnr" id="pnr">
                        </div>
                        <div class="g-margin-b-30--xs">
                            <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* No. of members" id="members-final">
                                <option value="" selected disabled hidden>Members arriving</option>
                                <option value="2" style="color:black">2</option>
                                <option value="3" style="color:black">3</option>
                                <option value="4" style="color:black">4</option>
                                <option value="5" style="color:black">5</option>
                            </select>
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Date of Arrival" name="arrival" id="arrival">
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Date of Departure" name="departure" id="departure">
                        </div>
                    </div>
                    <div class="temp"></div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Confirm</button>
                    </div>
                    <p class="error g-color-white"></p>
                </form>
                      {{/if}}
                  </div>
              </div>
            </div>

            <div class="g-container--sm g-padding-y-80--xs g-padding-y-100--xs" id="Questionnaire" style="display: none; opacity: 0">
                <div id="qclose" style="text-align: center;cursor:pointer;"><i class="ti-close"></i></div>
                <div class="g-text-center--xs g-margin-b-20--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Questionnaire</h2>
                </div>
                <p class="g-font-size-16--xs g-font-weight--700 g-text-center--xs g-color--white-opacity g-letter-spacing--2 g-margin-b-35--xs">
                    <b>Your responses have been auto submitted.<br>The results for this round will be declared on 16<sup>th</sup> January 2019.</b>
                </p>
                <br>
                <div class="row g-padding-x-20--xs">
                    <div class="cbp-l-grid-faq js__grid-faq">
                        <div class="cbp-item buying">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap point">
                                    <h4 class="s-faq-grid__title"><b>1. Description</b></h4>
                                    <br>
                                </div>
                                <div class="cbp-caption-activeWrap faq_con">
                                    <div class="g-color--white-opacity">
                                        <form id="description" class="center-block g-width-500--sm g-width-550--md" onsubmit="return false;">
                                            <p class="g-font-size-16--xs g-text-center--xs g-color--red g-margin-b-25--xs"></p>
                                            <div class="g-margin-b-30--xs">
                                                Idea Name:<input type="text" class="form-control s-form-v6__input q1" placeholder="" value="{{finallist.descriptionlist.q1}}">
                                            </div>
                                            <div class="g-margin-b-50--xs">
                                                Category:<input type="text" class="form-control s-form-v6__input q2" placeholder="" value="{{finallist.descriptionlist.q2}}">
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                Description of Idea<textarea class="form-control s-form-v6__input q3" rows="5" placeholder="">{{finallist.descriptionlist.q3}}</textarea>
                                            </div>
                                            <!-- <button type="submit" onclick="letAjax('description');" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs">Save Changes</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item community">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap point">
                                    <h4 class="s-faq-grid__title"><b>2. Problem</b></h4>
                                    <br>
                                </div>
                                <div class="cbp-caption-activeWrap faq_con">
                                    <div class="g-color--white-opacity">
                                        <form id="problem" class="center-block g-width-500--sm g-width-550--md" onsubmit="return false;">
                                            <p class="g-font-size-16--xs g-text-center--xs g-color--red g-margin-b-25--xs"></p>
                                            <div class="g-color--white-opacity">
                                                <div class="g-margin-b-80--xs">
                                                    Problem being solved? (What current problem is your venture targeting?)<textarea class="form-control s-form-v6__input q1" rows="5" placeholder="">{{finallist.problemlist.q1}}</textarea>
                                                </div>
                                                <div class="g-margin-b-80--xs">
                                                    Why do you believe it's a major problem?<textarea class="form-control s-form-v6__input q2" rows="5" placeholder="">{{finallist.problemlist.q2}}</textarea>
                                                </div>
                                            </div>
                                            <!-- <button type="submit" onclick="letAjax('problem');" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs">Save Changes</button> -->
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="cbp-item buying">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap point">
                                    <h4 class="s-faq-grid__title"><b>3. Solution</b></h4>
                                    <br>
                                </div>
                                <form id="solution" class="center-block g-width-500--sm g-width-550--md" onsubmit="return false;">
                                <div class="cbp-caption-activeWrap faq_con">
                                    <div class="g-color--white-opacity">
                                            <p class="g-font-size-16--xs g-text-center--xs g-color--red g-margin-b-25--xs"></p>
                                            <div class="g-margin-b-80--xs">
                                                 Your Solution? (How your product/service can help in resolving the above problem.)<textarea class="form-control s-form-v6__input q1" rows="5" placeholder="">{{finallist.solutionlist.q1}}</textarea>
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                Product or Service description:<textarea class="form-control s-form-v6__input q2" rows="5" placeholder="">{{finallist.solutionlist.q2}}</textarea>
                                            </div>
                                    </div>
                                </div>
                                            <!-- <button type="submit" onclick="letAjax('solution');" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs">Save Changes</button> -->
                                </form>
                            </div>
                        </div>

                        <div class="cbp-item author">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap point">
                                    <h4 class="s-faq-grid__title"><b>4. Status</b></h4>
                                    <br>
                                </div>
                                <div class="cbp-caption-activeWrap faq_con">
                                    <div class="g-color--white-opacity">
                                        <form id="status" class="center-block g-width-500--sm g-width-550--md" onsubmit="return false;">
                                            <p class="g-font-size-16--xs g-text-center--xs g-color--red g-margin-b-25--xs"></p>
                                            <div class="g-margin-b-80--xs">
                                                Current Status of your venture (like idea stage, prototype, etc.):<textarea class="form-control s-form-v6__input q1" rows="5" placeholder="">{{finallist.statuslist.q1}}</textarea>
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                Mention if you have secured funding, incubation or enrolled in any (if any) of the accelerator program.<textarea class="form-control s-form-v6__input q2" rows="5" placeholder="">{{finallist.statuslist.q2}}</textarea>
                                            </div>
                                            <!-- <button type="submit" onclick="letAjax('status');" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs">Save Changes</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item copyright">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap point">
                                    <h4 class="s-faq-grid__title"><b>5. Target Market</b></h4>
                                    <br>
                                </div>
                                <div class="cbp-caption-activeWrap faq_con">
                                    <div class="g-color--white-opacity">
                                        <form id="targetmarket" class="center-block g-width-500--sm g-width-550--md" onsubmit="return false;">
                                            <p class="g-font-size-16--xs g-text-center--xs g-color--red g-margin-b-25--xs"></p>
                                            <div class="g-margin-b-80--xs">
                                                What market will you target initially? (Be clear about who will utilize your product/services and how will they access it. This section should therefore give a sense about the size of the market and market research (e.g. In India, there are ___ number of car owners who will buy your service at Rs. ____ per year. This translates into a market potential of Rs. ____ per year).<textarea class="form-control s-form-v6__input q1" rows="5" placeholder="">{{finallist.targetmarketlist.q1}}</textarea>
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                 Who is your most important customer and why?<textarea class="form-control s-form-v6__input q2" rows="5" placeholder="">{{finallist.targetmarketlist.q2}}</textarea>
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                What is your vision regarding your addressable market? (Total market that you want to grab if all of them were to buy your product/ services (not that they will, but this is to give an indication of what size of the market is ))<textarea class="form-control s-form-v6__input q3" rows="5" placeholder="">{{finallist.targetmarketlist.q3}}</textarea>
                                            </div>
                                            <!-- <button type="submit" onclick="letAjax('targetmarket');" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs">Save Changes</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item author">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap point">
                                    <h4 class="s-faq-grid__title"><b>6. Competitors and Differentiation</b></h4>
                                    <br>
                                </div>
                                <div class="cbp-caption-activeWrap faq_con">
                                    <div class="g-color--white-opacity">
                                        <form id="competitors" class="center-block g-width-500--sm g-width-550--md" onsubmit="return false;">
                                            <p class="g-font-size-16--xs g-text-center--xs g-color--red g-margin-b-25--xs"></p>
                                            <div class="g-margin-b-80--xs">
                                                Who is your Direct Competitor?<textarea class="form-control s-form-v6__input q1" rows="5" placeholder="">{{finallist.competitorslist.q1}}</textarea>
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                Who is likely to be your Indirect Competitor and why?<textarea class="form-control s-form-v6__input q2" rows="5" placeholder="">{{finallist.competitorslist.q2}}</textarea>
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                Describe how you will differentiate your venture from your competitor in your market:<textarea class="form-control s-form-v6__input q3" rows="5" placeholder="">{{finallist.competitorslist.q3}}</textarea>
                                            </div>
                                            <!-- <button type="submit" onclick="letAjax('competitors');" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs">Save Changes</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item account">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap point">
                                    <h4 class="s-faq-grid__title"><b>7. Revenue Model</b></h4>
                                    <br>
                                </div>
                                <div class="cbp-caption-activeWrap faq_con">
                                    <div class="g-color--white-opacity">
                                        <form id="revenue" class="center-block g-width-500--sm g-width-550--md" onsubmit="return false;">
                                            <p class="g-font-size-16--xs g-text-center--xs g-color--red g-margin-b-25--xs"></p>
                                            <div class="g-margin-b-80--xs">
                                                What is your revenue model and how will you make money from this business opportunity?<textarea class="form-control s-form-v6__input q1" rows="5" placeholder="">{{finallist.revenuelist.q1}}</textarea>
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                What do you consider as the factors that may affect your revenue and cost?<textarea class="form-control s-form-v6__input q2" rows="5" placeholder="">{{finallist.revenuelist.q2}}</textarea>
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                What are the growth opportunities in your venture?<textarea class="form-control s-form-v6__input q3" rows="5" placeholder="">{{finallist.revenuelist.q3}}</textarea>
                                            </div>
                                            <!-- <button type="submit" onclick="letAjax('revenue');" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs">Save Changes</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="cbp-l-grid-faq js__grid-faq">
                        <div class="cbp-item account">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap point">
                                    <h4 class="s-faq-grid__title"><b>8. Social Touch</b></h4>
                                    <br>
                                </div>
                                <div class="cbp-caption-activeWrap faq_con">
                                    <div class="g-color--white-opacity">
                                        <form id="social" class="center-block g-width-500--sm g-width-550--md" onsubmit="return false;">
                                            <p class="g-font-size-16--xs g-text-center--xs g-color--red g-margin-b-25--xs"></p>
                                            <div class="g-margin-b-80--xs">
                                                Any substantial social and/or environmental benefits by your idea?<textarea class="form-control s-form-v6__input q1" rows="5" placeholder="">{{finallist.sociallist.q1}}</textarea>
                                            </div>
                                            <!-- <button type="submit" onclick="letAjax('social');" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs">Save Changes</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item author">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap point">
                                    <h4 class="s-faq-grid__title"><b>9. Marketing Technique</b></h4>
                                    <br>
                                </div>
                                <div class="cbp-caption-activeWrap faq_con">
                                    <div class="g-color--white-opacity">
                                        <form id="marketing" class="center-block g-width-500--sm g-width-550--md" onsubmit="return false;">
                                            <p class="g-font-size-16--xs g-text-center--xs g-color--red g-margin-b-25--xs"></p>
                                            <div class="g-margin-b-80--xs">
                                                What marketing techniques will you use to market your product?<textarea class="form-control s-form-v6__input q1" rows="5" placeholder="">{{finallist.marketinglist.q1}}</textarea>
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                Why do you believe this will work?<textarea class="form-control s-form-v6__input q2" rows="5" placeholder="">{{finallist.marketinglist.q2}}</textarea>
                                            </div>
                                            <!-- <button type="submit" onclick="letAjax('marketing');" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs">Save Changes</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cbp-item copyright">
                            <div class="cbp-caption">
                                <div class="cbp-caption-defaultWrap point">
                                    <h4 class="s-faq-grid__title"><b>10. Team</b></h4>
                                    <br>
                                </div>
                                <div class="cbp-caption-activeWrap faq_con">
                                    <div class="g-color--white-opacity">
                                        <form id="qteam" class="center-block g-width-500--sm g-width-550--md" onsubmit="return false;">
                                            <p class="g-font-size-16--xs g-text-center--xs g-color--red g-margin-b-25--xs"></p>
                                            <div class="g-margin-b-80--xs">
                                                Highlight what will each member of the team do in the venture and why he / she is best suited for that role:<textarea class="form-control s-form-v6__input q1" rows="5" placeholder="">{{finallist.teamlist.q1}}</textarea>
                                            </div>
                                            <div class="g-margin-b-80--xs">
                                                Highlight the work experience and education background of all the team members:<textarea class="form-control s-form-v6__input q2" rows="5" placeholder="">{{finallist.teamlist.q2}}</textarea>
                                            </div>
                                            <!-- <button type="submit" onclick="letAjax('qteam');" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-20--xs">Save Changes</button> -->

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--========== END PROMO BLOCK ==========-->

        {{> footer}}
        {{> scripts }}
        <script type="text/javascript">

          $("#ques_button").click(function(){
            $("#Questionnaire").css({"display":"block","color":"white"});
            $("#Questionnaire").animate({opacity: 1}, 1000);
            $("#front").animate({opacity: 0}, 100);
            $("#front").css({"display":"none"});
            var x = $("#Questionnaire").offset().top;
            $("html ,body").animate({ scrollTop: x},800);
          });

          $("#qclose").click(function(){
                $("#front").css({"display":"block"});
                $("#front").animate({opacity: 1}, 1000);

                $("#Questionnaire").animate({opacity: 0}, 1000);
                $("#Questionnaire").css({"display":"none"});

                var z = $("#login").offset().top;
                $("html ,body").animate({ scrollTop: z},200);

          });

          $("#round2_button").click(function(){

            $("#front").animate({opacity: 0}, 100);
            $("#front").css({"display":"none"});
            $("#round2").css({"display":"block"});
            $("#round2").animate({opacity: 1}, 100);
            var y = $("#round2").offset().top;
            $("html ,body").animate({ scrollTop: y},800);

          });


          $("#rclose").click(function(){
            $("#round2").css({"display":"none"});
            $("#round2").animate({opacity: 0}, 100);
            $("#front").css({"display":"block"});
            $("#front").animate({opacity: 1}, 1000);
            var q = $("#login").offset().top;
            $("html ,body").animate({ scrollTop: q},200);

          });


          $("#round3_button").click(function(){
            $("#front").animate({opacity: 0}, 1000);
            $("#front").css({"display":"none"});
            $("#round3").css({"display":"block"});
            $("#round3").animate({opacity: 1}, 1000);
            var a = $("#round3").offset().top;
            $("html ,body").animate({ scrollTop: a},800);


          });
          $("#r3close").click(function(){

            $("#front").css({"display":"block"});
            $("#front").animate({opacity: 1}, 1000);
            $("#round3").css({"display":"none"});
            $("#round3").animate({opacity: 0}, 100);

            var b = $("#login").offset().top;
            $("html ,body").animate({ scrollTop: b},200);

          });

        </script>

        <script>
            if(localStorage.getItem('popState') != 'shown'){

                localStorage.setItem('popState','shown');

                $(window).load(function(){
                   $('#myModal').modal('show');
                });

            }
        </script>

    </body>
    <!-- End Body -->
</html>
