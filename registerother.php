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
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="static/img/up.png" alt="StartUp Conclave" height="70">
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
                                    <li class="s-header-v2__nav-item"><a href="/login" class="s-header-v2__nav-link">Login</a></li>
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


        <!--========== PAGE CONTENT ==========-->

        <!-- Register -->
        <div id="register">
            <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Sign Up</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Registerations Closed</h2>
                    {{# if message}}
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs">{{message}}</p>
                    {{/if}}
                    <p id="message" class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs"></p>

                </div>
                <form class="center-block g-width-550--sm g-width-650--md g-width-700--lg" method="post" action="" onsubmit="return validateData();">
                    <div class="permanent">
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Team Name" name="teamname" id="team_name">
                        </div>
                        <div class="g-margin-b-30--xs">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Ogranization" name="organisation" id="college">
                        </div>
                        <div class="row g-margin-b-50--xs">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <input type="email" class="form-control s-form-v3__input" placeholder="* TEAM EMAIL" name="teamemail" style="text-transform: none" id="team_email">
                            </div>

                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <select type="number" pattern="[0-9]{11}" class="form-control s-form-v3__input" name="number" placeholder="* No. of members" id="members">
                                    <option value="" selected disabled hidden>Number of members</option>
                                    <option value="2" style="color:black">2</option>
                                    <option value="3" style="color:black">3</option>
                                    <option value="4" style="color:black">4</option>
                                    <option value="5" style="color:black">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--<div class="temp"></sdiv>-->
                    <div class="g-margin-b-30--xs">
                            <input type="password" class="form-control s-form-v3__input" placeholder="* Password" name="password" id="password">
                    </div>

                    <div class="g-text-center--xs">
                        <button type="submit" disabled class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Contact -->
        <!--========== END PAGE CONTENT ==========-->

        {{> footer}}
        {{> scripts }}
        <script type="text/javascript" src="static/js/client.js"></script>

    </body>
    <!-- End Body -->
</html>
