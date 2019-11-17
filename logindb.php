<!DOCTYPE html>
<html lang="en" class="no-js">
    {{> head }}
    <!-- End Head -->

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
        <div id="login" class="s-promo-block-v1 g-bg-color--primary-ltr">
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-20--sm">
                    <div class="col-lg-4 col-sm-4 g-hor-centered-row__col">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <p class="g-text-center--xs text-uppercase g-font-size-14--xs g-font-weight--700 g-color--red g-letter-spacing--2 g-margin-b-25--xs">{{error}}</p>
                            <form submit="" method="post" class="center-block g-width-300--xs g-width-350--md g-bg-color--white-opacity-lightest g-box-shadow__blueviolet-v1 g-padding-x-40--xs g-padding-y-40--xs g-radius--4">
                                <div class="g-text-center--xs g-margin-b-40--xs">
                                    <h2 class="g-font-size-30--xs g-color--white">Admin Login</h2>
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <select type="email" name="type" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Type">
                                        <option value="0">Team</option>
                                        <option value="1">Member</option>
                                        <option value="2">Reference</option>
                                        <option value="3">Questionnaire</option>
                                    </select>
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <input type="email" name="email" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Email">
                                </div>
                                <div class="g-margin-b-30--xs">
                                    <input type="password" name="pass" style="text-transform: none;" class="form-control s-form-v3__input" placeholder="* Password">
                                </div>
                                <div class="g-text-center--xs">
                                    <button type="submit" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <!--========== END PROMO BLOCK ==========-->

        <!--========== FOOTER ==========-->
        {{> footer}}
        {{> scripts }}
    </body>
    <!-- End Body -->
</html>
