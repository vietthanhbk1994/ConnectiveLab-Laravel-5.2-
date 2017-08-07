<script>
    jQuery(document).ready(function ($) {
        $('#style-selection').animate({'opacity': 1}, 700);
    });

</script>
<script>
    jQuery(document).ready(function ($) {
        $('#style-selection').animate({'opacity': 1}, 700);
    });

</script>
<header class="banner navbar navbar-default navbar-static-top" role="banner" data-transparent-header="true">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div id="logo">
                <a href="{{ route('home') }}">
                    <img class="logo-trans logo-reg" src='images/logo_white.png'  alt="Pursuit Theme &#8211; One Page Parallax" />
                    <img class="logo-main logo-reg" src='images/logo.png'    alt="Pursuit Theme &#8211; One Page Parallax" />                    
                </a>
            </div>
        </div>

        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul id="menu-primary-navigation" class="nav navbar-nav"><li class="th-anchor th-anchor-top active menu-home"><a href="#home">Home</a></li>
                <li class="th-anchor menu-services"><a href="#services">Services</a></li>
                <li class="th-anchor menu-techonologies"><a href="#techonologies">Technologies</a></li>
                <li class="th-anchor"><a href="#feedbacks">Feedbacks</a></li>
                <li class="th-anchor"><a href="#members">Members</a></li>
                <li class="th-anchor menu-contact-us"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>