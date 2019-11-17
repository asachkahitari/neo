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
        <div id="login" class="s-promo-block-v1 g-fullheight--xs g-bg-color--primary-ltr">
            <div class="container g-ver-center--md g-padding-y-100--xs">
                <div class="row g-hor-centered-row--md g-margin-t-30--xs g-margin-t-20--sm">
                    <div class="col-lg-6 col-sm-6 g-hor-centered-row__col">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="g-text-center--xs g-margin-b-40--xs">
                                <h2 class="g-font-size-30--lg g-font-size-50--md g-color--white">{{msg}}</h2>

                                {{# if success }}
                                    <p class="g-font-size-20--xs g-color--white">{{head}}</p>
                                    <p class="g-font-size-18--xs g-color--white">Payment transaction ID: {{txnid}}</p>
                                    <p class="g-font-size-18--xs g-color--white">Team Email: {{email}}</p>
                                    <p class="g-font-size-18--xs g-color--white">Amount: {{amount}}</p>
                                    <a type="submit" href="/login" class="text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs">Dashboard</a>
                                {{else}}
                                    <p class="g-font-size-20--xs g-color--white">Transaction incomplete or cancelled!!<br>{{head}}</p>
                                    <div class='pm-button text-uppercase btn-block s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-50--xs g-margin-b-20--xs'><a href='https://www.payumoney.com/paybypayumoney/#/1083C7F5FB65CCFAB64D802254E45804'>Pay Now</a></div>
                                {{/if}}

                            </div>
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
